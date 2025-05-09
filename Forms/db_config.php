<?php
// --- Load .env file variables ---
$envPath = __DIR__ . '/../.env'; // Assumes .env is in the parent directory of Forms/
if (file_exists($envPath)) {
    // Attempt to parse the .env file
    // Ensure your .env does not have unquoted special characters that parse_ini_file can't handle
    // For complex .env files, a dedicated library like vlucas/phpdotenv is better
    $envValues = parse_ini_file($envPath);
    if ($envValues === false) {
        // Log error and die if .env parsing fails
        error_log('.env file parsing error at: ' . $envPath . ' - PHP error: ' . print_r(error_get_last(), true), 0);
        die('Error: Could not parse .env file. Please check its syntax. Details logged.');
    }
    foreach ($envValues as $key => $value) {
        // Set environment variables for getenv() and $_ENV
        putenv("$key=$value"); 
        $_ENV[$key] = $value;
        $_SERVER[$key] = $value; // Some setups check $_SERVER
    }
} else {
    // Log error and die if .env file is not found
    error_log('.env file not found at: ' . $envPath, 0);
    die('Error: .env file not found. Please ensure it exists in the project root and is readable.');
}
// --- End of .env loading ---

// Database configuration - now from .env
$host = getenv('DB_HOST') ?: 'localhost'; // Fallback if not set, though die() above should prevent this
$username = getenv('DB_USER') ?: '';
$password = getenv('DB_PASS') ?: '';
$database = getenv('DB_DATABASE') ?: '';

// API Key for additional security - now from .env
$api_key = getenv('API_KEY') ?: '';

// Create database connection with error handling
try {
    // Set charset to ensure proper encoding
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // Enable exception throwing
    $conn = new mysqli($host, $username, $password, $database);
    $conn->set_charset('utf8mb4');
} catch (Exception $e) {
    // Log the error to a file instead of showing it directly (for security)
    error_log('Database Connection Error: ' . $e->getMessage(), 0);
    // Show a friendly error during debugging
    // Ensure APP_DEBUG is set in your .env file (e.g., APP_DEBUG="true")
    $appDebug = strtolower(getenv('APP_DEBUG') ?: 'false') === 'true';
    if ($appDebug) {
        die('Database connection error. Details: ' . $e->getMessage() . ' (Host: ' . $host . ', User: ' . $username . ', DB: ' . $database . '. Check .env values and server reachability)');
    } else {
        die('Database connection error. Please check your configuration. Details have been logged.');
    }
}

// Email where form submissions will be sent
$admin_email = "team@omnipotency.ai"; // Email where form submissions will be sent
?>
