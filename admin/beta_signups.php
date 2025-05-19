<?php 
// admin/beta_signups.php
// Simple admin page to view beta tester signups

// Ensure only authorized access
session_start();
// This is a very simple example - you'll want to implement proper authentication
$authorized = false;

// Simple login mechanism - in production, use a proper authentication system
if (isset($_POST['password'])) {
    // Hardcoded for demo only - NEVER do this in production
    if ($_POST['password'] === 'omnipotencyAdmin2025') {
        $_SESSION['admin_authorized'] = true;
        $authorized = true;
    }
}

if (isset($_SESSION['admin_authorized']) && $_SESSION['admin_authorized'] === true) {
    $authorized = true;
}

// Database connection
require_once dirname(__DIR__) . '/config/database.php';
$db = null;
$beta_testers = [];
$error = '';

// Main logic - only run if authorized
if ($authorized) {
    try {
        $db = get_db_connection();
        
        if (!$db) {
            throw new Exception('Database connection failed');
        }
        
        // Get all beta testers, ordered by most recent first
        $result = $db->query("SELECT * FROM beta_testers ORDER BY created_at DESC");
        
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $beta_testers[] = $row;
            }
        }
    } catch (Exception $e) {
        $error = 'Error: ' . $e->getMessage();
    } finally {
        if ($db) {
            $db->close();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beta Signups Admin - Omnipotency AI</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-5xl mx-auto">
            <h1 class="text-3xl font-semibold mb-6">Omnipotency AI - Beta Tester Signups</h1>
            
            <?php if (!$authorized): ?>
                <!-- Login Form -->
                <div class="bg-white rounded-lg shadow-md p-8">
                    <form method="post" class="space-y-4">
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Admin Password</label>
                            <input type="password" id="password" name="password" required 
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <button type="submit" 
                            class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            Log In
                        </button>
                        
                        <?php if (isset($_POST['password'])): ?>
                            <p class="text-red-600 mt-2">Invalid password. Please try again.</p>
                        <?php endif; ?>
                    </form>
                </div>
            <?php else: ?>
                <!-- Admin Panel -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <?php if ($error): ?>
                        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4">
                            <?php echo htmlspecialchars($error); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="p-4 border-b border-gray-200 bg-gray-50 flex justify-between items-center">
                        <h2 class="text-xl font-semibold">Beta Tester Signups (<?php echo count($beta_testers); ?>)</h2>
                        <a href="/admin/export_beta_signups.php" class="bg-green-600 text-white px-3 py-1 rounded-md text-sm hover:bg-green-700">
                            Export CSV
                        </a>
                    </div>
                    
                    <?php if (empty($beta_testers)): ?>
                        <p class="p-6 text-gray-500 italic">No beta tester signups yet.</p>
                    <?php else: ?>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Practice Type</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Message</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <?php foreach ($beta_testers as $tester): ?>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <?php echo htmlspecialchars($tester['name'] ?: '-'); ?>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <?php echo htmlspecialchars($tester['email']); ?>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <?php echo htmlspecialchars($tester['practice_type'] ?: '-'); ?>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="max-w-xs truncate">
                                                    <?php echo htmlspecialchars($tester['message'] ?: '-'); ?>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <?php 
                                                    if ($tester['created_at']) {
                                                        $date = new DateTime($tester['created_at']);
                                                        echo $date->format('Y-m-d H:i');
                                                    } else {
                                                        echo '-';
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php endif; ?>
                    
                    <div class="p-4 border-t border-gray-200">
                        <a href="/"
                            class="text-blue-600 hover:text-blue-800 font-medium">
                            Back to Homepage
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
