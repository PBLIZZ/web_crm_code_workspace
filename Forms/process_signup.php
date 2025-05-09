<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database configuration
$host = "localhost";
$username = "u135083797_codexcrm2";
$password = "zQS7Ddedg*K#CwN";
$database = "u135083797_codexcrmweb2";
$admin_email = "team@omnipotency.ai";

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"])) {
    // Validate and sanitize email
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: index.html?message=" . urlencode("Please provide a valid email address.") . "&status=error");
        exit();
    }
    
    // Connect to database - using procedural style for simplicity
    $conn = mysqli_connect($host, $username, $password, $database);
    
    // Check connection
    if (!$conn) {
        header("Location: index.html?message=" . urlencode("Database connection failed. Please try again later.") . "&status=error");
        exit();
    }
    
    // Create table if it doesn't exist
    $create_table = "CREATE TABLE IF NOT EXISTS quick_signups (
        id INT AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(255) NOT NULL,
        signup_date DATETIME NOT NULL
    )";
    
    if (!mysqli_query($conn, $create_table)) {
        header("Location: index.html?message=" . urlencode("Error setting up the database. Please try again later.") . "&status=error");
        exit();
    }
    
    // Prepare and execute the INSERT statement
    $stmt = mysqli_prepare($conn, "INSERT INTO quick_signups (email, signup_date) VALUES (?, NOW())");
    mysqli_stmt_bind_param($stmt, "s", $email);
    
    if (mysqli_stmt_execute($stmt)) {
        // Success - send email notification
        $subject = "New Quick Sign Up";
        $message = "A new user has signed up with the following details:\n\n";
        $message .= "Email: " . $email . "\n";
        $message .= "Date: " . date("Y-m-d H:i:s") . "\n";
        
        $headers = "From: noreply@" . $_SERVER['HTTP_HOST'] . "\r\n";
        
        // Use @ to suppress any mail errors
        @mail($admin_email, $subject, $message, $headers);
        
        // Redirect with success message
        header("Location: index.html?message=" . urlencode("Thank you for signing up!") . "&status=success");
    } else {
        // Duplicate entry check
        if (mysqli_errno($conn) == 1062) {
            header("Location: index.html?message=" . urlencode("This email is already registered.") . "&status=error");
        } else {
            header("Location: index.html?message=" . urlencode("Error saving your information. Please try again.") . "&status=error");
        }
    }
    
    // Close statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    
    exit();
} else {
    // If accessed directly
    header("Location: index.html");
    exit();
}
?>
