<?php // public/api/load_env.php

// Path to .env file, assuming .env is in the project root (web_omnipotency_ai/.env)
// __DIR__ is /public/api/, so ../.. goes to project root (web_omnipotency_ai/)
$envPath = dirname(__DIR__, 2) . '/.env'; // More robust way to go two levels up

if (file_exists($envPath)) {
    $lines = file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if ($lines === false) {
        error_log("Critical Error: Could not read .env file at " . $envPath . " from load_env.php");
        // In a real app, you might throw an exception or exit if .env is absolutely critical
        return; 
    }
    foreach ($lines as $line) {
        $line = trim($line);
        // Skip comments and empty lines
        if (empty($line) || strpos($line, '#') === 0) {
            continue;
        }

        // Split into name and value only if '=' is present
        if (strpos($line, '=') !== false) {
            list($name, $value) = explode('=', $line, 2);
            $name = trim($name);
            $value = trim($value);

            // Remove surrounding single or double quotes from the value
            if (strlen($value) > 1) {
                if (($value[0] === '"' && $value[strlen($value) - 1] === '"') ||
                    ($value[0] === "'" && $value[strlen($value) - 1] === "'")) {
                    $value = substr($value, 1, -1);
                }
            }
            
            if (!empty($name)) {
                 // Set for current script execution
                 $_ENV[$name] = $value;
                 // Optionally, for broader availability if needed by some libraries (less common for simple scripts)
                 // putenv("{$name}={$value}"); 
            }
        }
    }
} else {
    error_log("Critical Warning: .env file not found at " . $envPath . ". Application may not function correctly.");
    // Depending on how critical .env is, you might want to exit or throw an error here.
    // For now, lead.php will have fallbacks, but it's better if .env is always found.
}
?>