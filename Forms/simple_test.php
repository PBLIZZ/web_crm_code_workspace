<?php
// Enable error display
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<h1>Simple Diagnostics</h1>";

// PHP Info
echo "<h2>PHP Environment</h2>";
echo "<p>PHP Version: " . phpversion() . "</p>";
echo "<p>Server Software: " . $_SERVER['SERVER_SOFTWARE'] . "</p>";
echo "<p>Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "</p>";

// Database test - no file writing
echo "<h2>Database Connection</h2>";

// Database configuration
$host = "localhost"; 
$username = "u135083797_codexcrm2"; 
$password = "zQS7Ddedg*K#CwN"; 
$database = "u135083797_codexcrmweb2"; 

echo "<p>Host: $host</p>";
echo "<p>Username: $username</p>";
echo "<p>Database: $database</p>";

// Test connection
try {
    $conn = new mysqli($host, $username, $password, $database);
    
    if ($conn->connect_error) {
        echo "<p style='color:red'>Connection Error: " . $conn->connect_error . "</p>";
    } else {
        echo "<p style='color:green'>Database Connection: SUCCESS</p>";
        
        // Try simple query
        $result = $conn->query("SHOW TABLES");
        if ($result) {
            echo "<p style='color:green'>Query Execution: SUCCESS</p>";
            
            if ($result->num_rows > 0) {
                echo "<p>Tables found: " . $result->num_rows . "</p>";
                echo "<ul>";
                while($row = $result->fetch_array()) {
                    echo "<li>" . $row[0] . "</li>";
                }
                echo "</ul>";
            } else {
                echo "<p>No tables found in database. This is normal for a new database.</p>";
            }
            
            // Test table creation
            echo "<h3>Testing Table Creation</h3>";
            $test_sql = "CREATE TABLE IF NOT EXISTS simple_test (
                id INT AUTO_INCREMENT PRIMARY KEY,
                test_value VARCHAR(100)
            )";
            
            if ($conn->query($test_sql)) {
                echo "<p style='color:green'>Table Creation: SUCCESS</p>";
                
                // Try insertion
                $insert_sql = "INSERT INTO simple_test (test_value) VALUES ('Test at " . date('Y-m-d H:i:s') . "')";
                if ($conn->query($insert_sql)) {
                    echo "<p style='color:green'>Data Insertion: SUCCESS</p>";
                } else {
                    echo "<p style='color:red'>Data Insertion Error: " . $conn->error . "</p>";
                }
            } else {
                echo "<p style='color:red'>Table Creation Error: " . $conn->error . "</p>";
            }
        } else {
            echo "<p style='color:red'>Query Error: " . $conn->error . "</p>";
        }
    }
} catch (Exception $e) {
    echo "<p style='color:red'>Exception: " . $e->getMessage() . "</p>";
}

// Form Mail Test - this shows if mail() function works, a common source of 500 errors
echo "<h2>Mail Function Test</h2>";
echo "<p>Testing mail() function availability...</p>";

if (function_exists('mail')) {
    echo "<p style='color:green'>mail() function exists</p>";
    
    // Check common mail settings
    echo "<p>Checking mail configuration:</p>";
    if (ini_get('sendmail_path')) {
        echo "<p>sendmail_path: " . ini_get('sendmail_path') . "</p>";
    } else {
        echo "<p style='color:orange'>Warning: sendmail_path not defined in PHP configuration</p>";
    }
    
    echo "<p>SMTP settings:</p>";
    echo "<p>SMTP: " . ini_get('SMTP') . "</p>";
    echo "<p>smtp_port: " . ini_get('smtp_port') . "</p>";
} else {
    echo "<p style='color:red'>mail() function is not available - this will cause form submission failures</p>";
}

// Directory permissions
echo "<h2>Directory Permissions</h2>";
$current_dir = dirname(__FILE__);
echo "<p>Current directory: $current_dir</p>";

// Get directory permissions
$perms = fileperms($current_dir);
$dir_perms = substr(sprintf('%o', $perms), -4);
echo "<p>Directory permissions: $dir_perms</p>";

// Available PHP functions
echo "<h2>Important PHP Functions</h2>";
$functions = array('mysqli_connect', 'mail', 'file_put_contents', 'error_log');
echo "<ul>";
foreach ($functions as $function) {
    if (function_exists($function)) {
        echo "<li style='color:green'>$function: Available</li>";
    } else {
        echo "<li style='color:red'>$function: Not Available</li>";
    }
}
echo "</ul>";

echo "<hr>";
echo "<p>Test completed at " . date('Y-m-d H:i:s') . "</p>";
?>
