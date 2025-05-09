<?php
// Basic error display
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Start with a clean simple page
echo "<!DOCTYPE html>
<html>
<head>
    <title>Form Submission Result</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; max-width: 600px; margin: 0 auto; padding: 20px; }
        .success { color: green; padding: 10px; border: 1px solid green; background-color: #f0fff0; }
        .error { color: red; padding: 10px; border: 1px solid red; background-color: #fff0f0; }
    </style>
</head>
<body>
    <h1>Form Submission Result</h1>";

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    
    // Display what was received
    echo "<p>Received email: " . htmlspecialchars($email) . "</p>";
    
    // Basic validation
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<div class='error'>Please enter a valid email address.</div>";
    } else {
        // Try database connection with procedural mysqli style
        $host = "localhost";
        $username = "u135083797_codexcrm2";
        $password = "zQS7Ddedg*K#CwN";
        $database = "u135083797_codexcrmweb2";
        
        echo "<p>Connecting to database...</p>";
        
        // Connect to database
        $conn = mysqli_connect($host, $username, $password, $database);
        
        // Check connection
        if (!$conn) {
            echo "<div class='error'>Database connection failed: " . mysqli_connect_error() . "</div>";
        } else {
            echo "<p>Database connection successful.</p>";
            
            // Create table if it doesn't exist (simple structure)
            $sql = "CREATE TABLE IF NOT EXISTS simple_emails (
                id INT AUTO_INCREMENT PRIMARY KEY,
                email VARCHAR(255) NOT NULL,
                date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )";
            
            if (mysqli_query($conn, $sql)) {
                echo "<p>Table check complete.</p>";
                
                // Insert data
                $insert_sql = "INSERT INTO simple_emails (email) VALUES (?)";
                $stmt = mysqli_prepare($conn, $insert_sql);
                
                if ($stmt) {
                    mysqli_stmt_bind_param($stmt, "s", $email);
                    
                    if (mysqli_stmt_execute($stmt)) {
                        echo "<div class='success'>Your email was successfully saved!</div>";
                        
                        // Try sending an email notification (non-critical)
                        $to = "team@omnipotency.ai";
                        $subject = "New Simple Form Submission";
                        $message = "New email submission: " . $email;
                        $headers = "From: noreply@" . $_SERVER['HTTP_HOST'];
                        
                        if (@mail($to, $subject, $message, $headers)) {
                            echo "<p>Notification email sent.</p>";
                        } else {
                            echo "<p>Note: Notification email could not be sent, but your data was saved.</p>";
                        }
                    } else {
                        echo "<div class='error'>Error saving email: " . mysqli_stmt_error($stmt) . "</div>";
                    }
                    
                    mysqli_stmt_close($stmt);
                } else {
                    echo "<div class='error'>Prepare statement failed: " . mysqli_error($conn) . "</div>";
                }
            } else {
                echo "<div class='error'>Error checking/creating table: " . mysqli_error($conn) . "</div>";
            }
            
            // Close connection
            mysqli_close($conn);
        }
    }
} else {
    echo "<div class='error'>No form data received. Please submit the form properly.</div>";
}

// Add link back to form
echo "<p><a href='simple_form.html'>Back to form</a></p>";
echo "</body></html>";
?>
