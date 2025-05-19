<?php
// admin/export_beta_signups.php
// Exports beta tester signups as a CSV file

// Ensure only authorized access
session_start();
if (!isset($_SESSION['admin_authorized']) || $_SESSION['admin_authorized'] !== true) {
    // Redirect to login page if not authorized
    header('Location: beta_signups.php');
    exit;
}

// Database connection
require_once dirname(__DIR__) . '/config/database.php';

// Set headers for CSV download
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="beta_testers_' . date('Y-m-d') . '.csv"');

// Create output stream
$output = fopen('php://output', 'w');

// Write CSV header
fputcsv($output, ['ID', 'Name', 'Email', 'Practice Type', 'Message', 'Date']);

// Connect to database and get data
try {
    $db = get_db_connection();
    
    if (!$db) {
        throw new Exception('Database connection failed');
    }
    
    // Get all beta testers, ordered by most recent first
    $result = $db->query("SELECT * FROM beta_testers ORDER BY created_at DESC");
    
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $date = $row['created_at'] ? (new DateTime($row['created_at']))->format('Y-m-d H:i') : '';
            
            // Write row to CSV
            fputcsv($output, [
                $row['id'],
                $row['name'] ?? '',
                $row['email'],
                $row['practice_type'] ?? '',
                $row['message'] ?? '',
                $date
            ]);
        }
    }
    
    $db->close();
    
} catch (Exception $e) {
    // In case of error, write error message to CSV
    fputcsv($output, ['Error: ' . $e->getMessage()]);
}

// Close the output stream
fclose($output);
exit;
?>
