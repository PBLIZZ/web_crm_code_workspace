<?php
// public/api/beta_lead.php
// Handles beta program submission forms

header('Content-Type: application/json');

// Load environment variables
require_once __DIR__ . '/load_env.php';
require_once dirname(__DIR__, 2) . '/config/database.php';

// Initialize DB connection
$db = null;
$error = '';

try {
    // Create a database connection using the config/database.php file
    $db = get_db_connection();

    if (!$db) {
        throw new Exception('Database connection failed');
    }
} catch (Exception $e) {
    error_log('Database connection error in beta_lead.php: ' . $e->getMessage());
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Server error: Database connection failed']);
    exit;
}

// Handle CORS for API requests
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST, OPTIONS');
    header('Access-Control-Allow-Headers: Content-Type, X-API-KEY');
    exit;
}

// Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed. Please use POST.']);
    exit;
}

// Validate API Key for security (optional, but good practice)
$api_key_header = isset($_SERVER['HTTP_X_API_KEY']) ? $_SERVER['HTTP_X_API_KEY'] : '';
$expected_api_key = $_ENV['API_KEY'] ?? '';

if ($expected_api_key && $api_key_header !== $expected_api_key) {
    error_log('Invalid API Key in beta_lead.php');
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Unauthorized: Invalid API Key']);
    exit;
}

// Get form data
$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$practiceType = isset($_POST['practice_type']) ? trim($_POST['practice_type']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

// Basic validation
if (empty($email)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Email is required']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please enter a valid email address']);
    exit;
}

try {
    // Prepare SQL statement to insert the data
    $stmt = $db->prepare("INSERT INTO beta_testers (name, email, practice_type, message, created_at) VALUES (?, ?, ?, ?, NOW())");
    
    // Check if the prepare statement was successful
    if (!$stmt) {
        throw new Exception('Failed to prepare statement: ' . $db->error);
    }
    
    // Bind parameters
    $stmt->bind_param('ssss', $name, $email, $practiceType, $message);
    
    // Execute the statement
    if (!$stmt->execute()) {
        // Check if this is a duplicate email error
        if ($stmt->errno === 1062) { // MySQL duplicate entry error code
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => 'This email is already registered for the beta program']);
            exit;
        }
        
        throw new Exception('Failed to execute statement: ' . $stmt->error);
    }
    
    // Success response
    http_response_code(200);
    echo json_encode(['success' => true, 'message' => 'Thank you for joining our Beta Shapers Program! We\'ll be in touch soon.']);
    
    // Close statement
    $stmt->close();
    
} catch (Exception $e) {
    error_log('Error in beta_lead.php: ' . $e->getMessage());
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Server error: Failed to save your information. Please try again later.']);
} finally {
    // Close database connection
    if ($db) {
        $db->close();
    }
}
