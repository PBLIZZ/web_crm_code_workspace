<?php
// config/database.php

// --- Direct .env parsing START ---
$envValues = [];
$envFilePath = __DIR__ . '/../.env';

if (file_exists($envFilePath) && is_readable($envFilePath)) {
    $lines = file($envFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        // Skip comments
        if (strpos(trim($line), '#') === 0) {
            continue;
        }

        // Split by the first '=' character
        if (strpos($line, '=') !== false) {
            list($key, $value) = explode('=', $line, 2);
            $key = trim($key);
            $value = trim($value);

            // Remove surrounding quotes (single or double) from the value
            if (strlen($value) > 1) {
                if ((substr($value, 0, 1) == '"' && substr($value, -1) == '"') ||
                    (substr($value, 0, 1) == "'" && substr($value, -1) == "'")) {
                    $value = substr($value, 1, -1);
                }
            }
            $envValues[$key] = $value;
        }
    }
} else {
    die('.env file not found or not readable at: ' . htmlspecialchars($envFilePath));
}

// Helper function to get env values with a default
if (!function_exists('get_env_value')) {
    function get_env_value($key, $default = null) {
        global $envValues;
        return isset($envValues[$key]) ? $envValues[$key] : $default;
    }
}
// --- Direct .env parsing END ---


$db_host = get_env_value('DB_HOST');
$db_port = get_env_value('DB_PORT');
$db_name = get_env_value('DB_DATABASE');
$db_user = get_env_value('DB_USERNAME');
$db_pass = get_env_value('DB_PASSWORD');
$db_connection = get_env_value('DB_CONNECTION');

// For debugging the parsed values:
// echo "<pre>Parsed .env values:\n";
// var_dump([
//     'DB_HOST' => $db_host,
//     'DB_PORT' => $db_port,
//     'DB_DATABASE' => $db_name,
//     'DB_USERNAME' => $db_user,
//     'DB_PASSWORD' => $db_pass, // Be careful not to expose password in production output
//     'DB_CONNECTION' => $db_connection
// ]);
// echo "</pre>";
// die(); // Uncomment to see only the parsed values and stop further execution

if (!$db_name || !$db_user || !$db_host || !$db_port || !$db_connection) {
    die('One or more required database configuration values (DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_CONNECTION) are missing after parsing .env. Please check your .env file and its parsing in config/database.php. Parsed values: ' . htmlspecialchars(json_encode($envValues)));
}

$dsn = "{$db_connection}:host={$db_host};port={$db_port};dbname={$db_name};charset=utf8mb4";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $db_user, $db_pass, $options);
} catch (\PDOException $e) {
    error_log("Database Connection Error (direct .env parse): " . $e->getMessage());
    die("Could not connect to the database (direct .env parse). Please check your .env configuration and ensure MAMP's MySQL server is running. Error: " . htmlspecialchars($e->getMessage()));
}

return $pdo; 
?>
