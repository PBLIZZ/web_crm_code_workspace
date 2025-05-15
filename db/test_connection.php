<?php
// db/test_connection.php - Test database connection script

require_once __DIR__ . '/../config/database.php';

echo "Testing database connection...\n";
echo "Using the following configuration:\n";
echo "  Host: $db_host\n";
echo "  Port: $db_port\n";
echo "  Database: $db_name\n";
echo "  User: $db_user\n";
echo "  Connection: $db_connection\n";

try {
    // Check for socket connection
    $socket = get_env_value('DB_SOCKET');
    echo "  Socket: " . ($socket ?: 'Not set') . "\n";
    
    // Create connection - handle socket if present and host is localhost
    if ($socket && $db_host === 'localhost') {
        $dsn = "$db_connection:unix_socket=$socket;dbname=$db_name";
        echo "Using socket connection\n";
    } else {
        $dsn = "$db_connection:host=$db_host;port=$db_port;dbname=$db_name";
        echo "Using TCP/IP connection\n";
    }
    $conn = new PDO($dsn, $db_user, $db_pass);
    
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "\nConnection successful! 🎉\n";
    
    // Test if our tables exist
    $tables = ['subscribers', 'leads'];
    foreach ($tables as $table) {
        $stmt = $conn->query("SHOW TABLES LIKE '$table'");
        if ($stmt->rowCount() > 0) {
            echo "Table '$table' exists.\n";
        } else {
            echo "Table '$table' does NOT exist.\n";
        }
    }
    
    echo "\nWhen the database connection is working, run the following command to mark your initial migration as applied:\n";
    echo "./vendor/bin/phinx migrate -c ./phinx.php -e development\n";
    
} catch(PDOException $e) {
    echo "\nConnection failed: " . $e->getMessage() . "\n";
    echo "\nPlease check your .env file and make sure the database configuration is correct.\n";
    echo "You can also ensure the database server is running and accessible.\n";
}
?>
