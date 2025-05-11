<?php // public/partials/main_layout.php

// Set default title and description if not provided by the calling script
$pageTitle = $pageTitle ?? 'Omnipotency AI'; // PHP 7.0+ null coalescing operator
$pageDescription = $pageDescription ?? 'The AI-Powered CRM for Wellness Professionals.';

// Define the base path for assets if not already defined (useful if layout is included from different depths)
//define('BASE_URL', rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\')); // More dynamic but can be tricky
//define('BASE_URL', ''); // Defined directly in index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    
    <!-- Tailwind Output CSS -->
    <link href="<?php echo BASE_URL; ?>/assets/css/output.css" rel="stylesheet">
    
    <!-- Google Fonts (Example - ensure this is what you use) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <?php 
    // For injecting page-specific <head> content if needed later
    // if (isset($additionalHeadContent)) { echo $additionalHeadContent; }
    ?>
</head>
<body class="bg-brand-green-800 text-gray-300 font-sans antialiased leading-relaxed">

    <?php
    // Include common header
    // __DIR__ is the directory of *this* file (main_layout.php)
    // So, header.php is expected in the same directory (partials/)
$headerPath = __DIR__ . '/header.php'; 
    if (file_exists($headerPath)) {
        include $headerPath;
    } else {
        echo '<div style="background:red;color:white;padding:1em;text-align:center;">Error: Header partial not found at ' . $headerPath . '</div>';
    }
?>

    <main> <!-- Removed container from main; sections will handle their own width/padding -->
        <?php 
        if (!empty($_SESSION['message'])): // For success/error messages via session
            $message_type = $_SESSION['message_type'] ?? 'success'; // Default to 'success'
            $alert_classes = 'my-6 p-4 rounded-md ';

            if ($message_type == 'error') {
                $alert_classes .= 'bg-red-100 border-red-400 text-red-700';
            } else { // Default to success style for any other type or if not 'error'
                $alert_classes .= 'bg-green-100 border-green-400 text-green-700';
            }
        ?>
            <div class="container mx-auto px-4">
                <div class="<?php echo $alert_classes; ?>" role="alert">
                    <?php echo htmlspecialchars($_SESSION['message']); ?>
                </div>
            </div>
        <?php 
            unset($_SESSION['message']);
            unset($_SESSION['message_type']);
        endif;

        // Inject page-specific content
        if (isset($pageSpecificContent)) {
            echo $pageSpecificContent;
        } else {
            echo '<div class="container mx-auto px-4 py-8"><p class="text-center text-yellow-400">Page content is missing.</p></div>';
        }
        ?>
    </main>

    <?php 
    // Include common footer
    $footerPath = __DIR__ . '/footer.php';
    if (file_exists($footerPath)) {
        include $footerPath;
    } else {
        echo '<div style="background:red;color:white;padding:1em;text-align:center;">Error: Footer partial not found at ' . $footerPath . '</div>';
    }
    ?>

    <script>
      window.OMNIPOTENCY_AI_CONFIG = {
          apiKey: <?php echo json_encode($jsApiKey ?? ''); ?>, // Use $jsApiKey passed from index.php
          baseUrl: <?php echo json_encode(BASE_URL); ?>
      };
    </script>
    <script src="<?php echo BASE_URL; ?>/assets/js/main.js" defer></script>
    <?php 
    // if (isset($additionalScripts)) { echo $additionalScripts; }
    ?>
</body>
</html>