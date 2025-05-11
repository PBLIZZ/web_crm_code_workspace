<?php
// public/api/lead.php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Load environment variables
$loadEnvPath = __DIR__ . '/load_env.php';
if (file_exists($loadEnvPath)) {
    require_once $loadEnvPath;
} else {
    http_response_code(500);
    error_log("FATAL ERROR: load_env.php script not found. Cannot load configuration.");
    echo json_encode(['success' => false, 'message' => 'Server configuration error (loader missing).']);
    exit;
}

header('Content-Type: application/json');

// --- DENY NON-POST REQUESTS ---
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method Not Allowed']);
    exit;
}

// --- SIMPLE API KEY CHECK ---
$apiKeySent = $_SERVER['HTTP_X_API_KEY'] ?? '';
$expectedApiKey = $_ENV['API_KEY'] ?? null; // Get from .env

if (empty($expectedApiKey)) {
    http_response_code(500);
    error_log("FATAL ERROR: API_KEY is not defined in the environment configuration (.env file).");
    echo json_encode(['success' => false, 'message' => 'Server configuration error (API Key missing).']);
    exit;
}

if ($apiKeySent !== $expectedApiKey) {
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Invalid API key.']);
    exit;
}

// --- PROCESS FORM DATA ---
$email = $_POST['email'] ?? null;
$name = $_POST['name'] ?? null; 
$meta_data = [];
foreach ($_POST as $key => $value) {
    if ($key !== 'email' && $key !== 'name') {
        $meta_data[$key] = $value; 
    }
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'A valid email address is required.']);
    exit;
}

// --- DATABASE CONNECTION ---
// Get ALL DB credentials from .env
$db_host = $_ENV['DB_HOST'] ?? null;
$db_name = $_ENV['DB_DATABASE'] ?? null; // CORRECTED: Matches your .env
$db_user = $_ENV['DB_USERNAME'] ?? null; // CORRECTED: Matches your .env
$db_pass = $_ENV['DB_PASSWORD'] ?? null; // CORRECTED: Matches your .env
// $db_port = $_ENV['DB_PORT'] ?? '3306'; // Optional, if needed
// $db_socket = $_ENV['DB_SOCKET'] ?? null; // Optional, if needed for MAMP

// Check if all necessary DB credentials are loaded
// Updated check to match new variable names from .env
if (empty($db_host) || empty($db_name) || empty($db_user) || !isset($db_pass)) { 
    http_response_code(500);
    error_log("FATAL ERROR: Database credentials (DB_HOST, DB_DATABASE, DB_USERNAME, DB_PASSWORD) are not fully defined in .env or not loaded into \$_ENV.");
    echo json_encode(['success' => false, 'message' => 'Server configuration error (DB creds missing).']);
    exit;
}

// For MAMP, if a socket is defined and preferred:
// $mysqli = $db_socket 
//             ? new mysqli(null, $db_user, $db_pass, $db_name, null, $db_socket) 
//             : new mysqli($db_host, $db_user, $db_pass, $db_name, (int)$db_port);

// Simpler connection for typical MAMP (often doesn't need port/socket explicitly if defaults are used)
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);


if ($mysqli->connect_error) {
    http_response_code(500);
    // Log detailed MAMP connection error for debugging on your local machine
    error_log("MAMP DB Connection Failed: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error . 
              " | Host: $db_host, User: $db_user, DB: $db_name, PassSet: " . (isset($db_pass) ? 'Yes' : 'No'));
    echo json_encode(['success' => false, 'message' => 'Database connection error.']);
    exit;
}
$mysqli->set_charset("utf8mb4");

// --- INSERT INTO DATABASE ---
$safe_email = $mysqli->real_escape_string($email);
$safe_name = $name ? $mysqli->real_escape_string($name) : null;
$safe_meta = !empty($meta_data) ? $mysqli->real_escape_string(json_encode($meta_data, JSON_UNESCAPED_UNICODE)) : null;

$sql = "INSERT INTO leads (email, name, meta, created_at) VALUES (?, ?, ?, NOW())";
$stmt = $mysqli->prepare($sql);

if ($stmt === false) {
    http_response_code(500);
    error_log("DB Prepare Failed: (" . $mysqli->errno . ") " . $mysqli->error);
    echo json_encode(['success' => false, 'message' => 'Could not prepare data.']);
    exit;
}

$stmt->bind_param("sss", $safe_email, $safe_name, $safe_meta);

if ($stmt->execute()) {
    http_response_code(200);
    echo json_encode(['success' => true, 'message' => '🎉 Thanks! We\'ll keep you in the loop.']);

    // Optional: Send notification email
    $notify_email = $_ENV['ADMIN_EMAIL_NOTIFICATIONS'] ?? null;
    if ($notify_email) {
        $subject = "New Waitlist Signup: " . $email;
        $body = "A new user signed up for the waitlist:\n\n";
        $body .= "Email: " . $email . "\n";
        if ($name) {
            $body .= "Name: " . $name . "\n";
        }
        if (!empty($meta_data)) {
            $body .= "Other Info: " . json_encode($meta_data, JSON_PRETTY_PRINT) . "\n";
        }
        $from_address = $_ENV['MAIL_FROM_ADDRESS'] ?? 'noreply@omnipotency.ai';
        $from_name = $_ENV['MAIL_FROM_NAME'] ?? 'Omnipotency AI';
        $headers = "From: " . $from_name . " <" . $from_address . ">\r\n";
        $headers .= "Reply-To: " . $from_address . "\r\n"; // Or the user's email if you want to reply to them
        $headers .= "Content-Type: text/plain; charset=utf-8\r\n";
        
        // mail($notify_email, $subject, $body, $headers); // PHP's mail()
        // If using a mailer utility:
        // if (function_exists('sendEmail')) { // Assuming mailer.php defines sendEmail()
        //     sendEmail($notify_email, $subject, $body);
        // }
    }

} else {
    http_response_code(500);
    error_log("DB Execute Failed: (" . $stmt->errno . ") " . $stmt->error);
    echo json_encode(['success' => false, 'message' => 'Could not save your information.']);
}

$stmt->close();
$mysqli->close();
?>