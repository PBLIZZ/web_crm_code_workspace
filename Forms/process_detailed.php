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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize inputs
    $full_name = filter_var(trim($_POST["full_name"]), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = filter_var(trim($_POST["phone"]), FILTER_SANITIZE_STRING);
    $sector = filter_var(trim($_POST["sector"]), FILTER_SANITIZE_STRING);
    $clients_weekly = filter_var(trim($_POST["clients_weekly"]), FILTER_SANITIZE_STRING);
    $comments = filter_var(trim($_POST["comments"]), FILTER_SANITIZE_STRING);
    
    // Validate required fields
    if (empty($full_name) || empty($email) || empty($phone) || empty($sector) || empty($clients_weekly)) {
        header("Location: index.html?message=" . urlencode("Please fill all required fields") . "&status=error");
        exit();
    } 
    // Validate email format
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: index.html?message=" . urlencode("Invalid email format") . "&status=error");
        exit();
    } 
    else {
        // Connect to database - using procedural style for simplicity
        $conn = mysqli_connect($host, $username, $password, $database);
        
        // Check connection
        if (!$conn) {
            header("Location: index.html?message=" . urlencode("Database connection failed. Please try again later.") . "&status=error");
            exit();
        }
        
        // Create table if it doesn't exist
        $create_table = "CREATE TABLE IF NOT EXISTS detailed_signups (
            id INT AUTO_INCREMENT PRIMARY KEY,
            full_name VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            phone VARCHAR(50) NOT NULL,
            sector VARCHAR(100) NOT NULL,
            clients_weekly VARCHAR(20) NOT NULL,
            comments TEXT,
            signup_date DATETIME NOT NULL
        )";
        
        if (!mysqli_query($conn, $create_table)) {
            header("Location: index.html?message=" . urlencode("Error setting up the database. Please try again later.") . "&status=error");
            exit();
        }
        
        // Prepare and execute the INSERT statement
        $stmt = mysqli_prepare($conn, "INSERT INTO detailed_signups (full_name, email, phone, sector, clients_weekly, comments, signup_date) 
                VALUES (?, ?, ?, ?, ?, ?, NOW())");
        mysqli_stmt_bind_param($stmt, "ssssss", $full_name, $email, $phone, $sector, $clients_weekly, $comments);
        
        if (mysqli_stmt_execute($stmt)) {
            // Success - send email notification
            $subject = "New Detailed Form Submission";
            $message = "A new user has submitted the detailed form with the following details:\n\n";
            $message .= "Name: " . $full_name . "\n";
            $message .= "Email: " . $email . "\n";
            $message .= "Phone: " . $phone . "\n";
            $message .= "Wellness Sector: " . $sector . "\n";
            $message .= "Clients Weekly: " . $clients_weekly . "\n";
            $message .= "Comments: " . $comments . "\n";
            $message .= "Date: " . date("Y-m-d H:i:s") . "\n";
            
            $headers = "From: noreply@" . $_SERVER['HTTP_HOST'] . "\r\n";
            
            // Use @ to suppress any mail errors
            @mail($admin_email, $subject, $message, $headers);
            
            // Redirect with success message
            header("Location: index.html?message=" . urlencode("Thank you for your submission!") . "&status=success");
        } else {
            header("Location: index.html?message=" . urlencode("Error saving your information. Please try again.") . "&status=error");
        }
        
        // Close statement and connection
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
        
        exit();
    }
} else {
    // If accessed directly
    header("Location: index.html");
    exit();
}

?>
