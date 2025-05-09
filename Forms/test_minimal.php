<?php
// Set error reporting to show all errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Output basic information
echo "<!DOCTYPE html>
<html>
<head>
    <title>Minimal Test</title>
</head>
<body>
    <h1>PHP Minimal Test</h1>";

// 1. Basic PHP functionality
echo "<p>PHP Version: " . phpversion() . "</p>";
echo "<p>Server Time: " . date('Y-m-d H:i:s') . "</p>";

// 2. Database connection - ONLY connect
try {
    // Database configuration
    $host = "localhost";
    $username = "u135083797_codexcrm2";
    $password = "zQS7Ddedg*K#CwN";
    $database = "u135083797_codexcrmweb2";
    
    echo "<p>Attempting database connection...</p>";
    
    // Connect without any special settings
    $mysqli = mysqli_connect($host, $username, $password, $database);
    
    if (!$mysqli) {
        throw new Exception(mysqli_connect_error());
    }
    
    echo "<p style='color:green'>Connection successful!</p>";
    
    // Simple query - just check if we can run ANY query
    echo "<p>Attempting simple query...</p>";
    
    $result = mysqli_query($mysqli, "SELECT 1 AS test");
    
    if ($result) {
        echo "<p style='color:green'>Query successful!</p>";
        mysqli_free_result($result);
    } else {
        echo "<p style='color:red'>Query failed: " . mysqli_error($mysqli) . "</p>";
    }
    
    // Close the connection
    mysqli_close($mysqli);
    
} catch (Exception $e) {
    echo "<p style='color:red'>Database error: " . $e->getMessage() . "</p>";
}

// 3. Form data processing - show what was submitted
echo "<h2>Form Data</h2>";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<p>POST data received:</p>";
    echo "<ul>";
    foreach ($_POST as $key => $value) {
        echo "<li><strong>" . htmlspecialchars($key) . ":</strong> " . htmlspecialchars($value) . "</li>";
    }
    echo "</ul>";
}

// 4. Add a simple test form
echo "
<h2>Simple Test Form</h2>
<form method='post' action='test_minimal.php'>
    <p><input type='text' name='test_input' placeholder='Enter test text'></p>
    <p><button type='submit'>Submit Test</button></p>
</form>
";

echo "</body></html>";
?>
