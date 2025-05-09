<?php
// Set error reporting to maximum level
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database configuration
$host = "localhost"; 
$username = "u135083797_codexcrm2"; 
$password = "zQS7Ddedg*K#CwN"; 
$database = "u135083797_codexcrmweb2"; 

// Create a log file
file_put_contents('connection_log.txt', "Testing connection at " . date('Y-m-d H:i:s') . "\n", FILE_APPEND);

echo "<h1>Database Connection Test</h1>";

// Test 1: Basic PHP functionality
echo "<p>PHP Version: " . phpversion() . "</p>";

// Test 2: Try mysqli connection with error output
try {
    echo "<p>Attempting to connect to database...</p>";
    $conn = new mysqli($host, $username, $password, $database);
    
    // Check connection
    if ($conn->connect_error) {
        file_put_contents('connection_log.txt', "Connection failed: " . $conn->connect_error . "\n", FILE_APPEND);
        echo "<p style='color:red'>Connection failed: " . $conn->connect_error . "</p>";
    } else {
        file_put_contents('connection_log.txt', "Connection successful!\n", FILE_APPEND);
        echo "<p style='color:green'>Connection successful!</p>";
        
        // Try to query the database
        echo "<p>Testing query execution...</p>";
        $result = $conn->query("SHOW TABLES");
        
        if ($result) {
            echo "<p style='color:green'>Query executed successfully!</p>";
            
            // Display tables
            echo "<p>Tables in database:</p>";
            echo "<ul>";
            if ($result->num_rows > 0) {
                while($row = $result->fetch_array()) {
                    echo "<li>" . $row[0] . "</li>";
                }
            } else {
                echo "<li>No tables found</li>";
            }
            echo "</ul>";
            
            // Try to create a test table
            echo "<p>Attempting to create a test table...</p>";
            $create_table = "CREATE TABLE IF NOT EXISTS test_table (id INT AUTO_INCREMENT PRIMARY KEY, test_data VARCHAR(50))";
            
            if ($conn->query($create_table)) {
                echo "<p style='color:green'>Test table created successfully!</p>";
            } else {
                echo "<p style='color:red'>Error creating test table: " . $conn->error . "</p>";
                file_put_contents('connection_log.txt', "Error creating table: " . $conn->error . "\n", FILE_APPEND);
            }
        } else {
            echo "<p style='color:red'>Error executing query: " . $conn->error . "</p>";
            file_put_contents('connection_log.txt', "Error executing query: " . $conn->error . "\n", FILE_APPEND);
        }
    }
} catch (Exception $e) {
    file_put_contents('connection_log.txt', "Exception: " . $e->getMessage() . "\n", FILE_APPEND);
    echo "<p style='color:red'>Exception: " . $e->getMessage() . "</p>";
}

// Test 3: Check if error logging works
error_log("Test error message");
echo "<p>Attempted to write to error log</p>";

// Test 4: File system permissions
echo "<p>Testing file write permissions...</p>";
$test_file = 'test_write.txt';
$content = 'Test write at ' . date('Y-m-d H:i:s');

if (file_put_contents($test_file, $content)) {
    echo "<p style='color:green'>Successfully wrote to file system</p>";
} else {
    echo "<p style='color:red'>Failed to write to file system</p>";
}

echo "<hr><p>Test completed at " . date('Y-m-d H:i:s') . "</p>";
?>
