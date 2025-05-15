<?php // public/index.php (Landing Page Controller)
require_once __DIR__ . '/bootstrap.php';

// --- SIMPLE ROUTING SYSTEM ---
$request_uri = $_SERVER['REQUEST_URI'];
$base_path_offset = ''; // If index.php is directly in MAMP's web root for localhost

// If your MAMP setup serves from a subdirectory for this project, adjust accordingly
// For now, assuming index.php is at the root of what localhost serves for this site

$path = parse_url($request_uri, PHP_URL_PATH);
if ($base_path_offset && strpos($path, $base_path_offset) === 0) {
    $path = substr($path, strlen($base_path_offset)); // Remove base path offset
}
if (empty($path)) {
    $path = '/'; // Default to root if path is empty
}

// Define routes (key = clean URL path, value = path to PHP file relative to __DIR__ of index.php)
$routes = [
    '/'                   => '/sections/home_content.php', // Homepage sections
    '/about'              => '/pages/about_content.php', // About page
    '/terms-of-service'   => '/pages/terms_of_service_content.php',
    '/privacy-policy'     => '/pages/privacy_policy_content.php',
    '/blog'               => '/pages/blog_content.php',
    '/resources'          => '/pages/resources_content.php',
    '/docs'               => '/pages/docs_content.php',
    '/contact'            => '/pages/contact_content.php',
    '/investors'          => '/pages/investors_content.php',
    '/cookies'            => '/pages/cookies_content.php'
    // Add more routes as needed
];

// DEFINE BASE_URL HERE for use throughout the site
define('BASE_URL', ''); // Assuming assets are relative to the domain root for local MAMP

// Check if the current path matches any defined route
if (isset($routes[$path])) {
    // --- Prepare variables needed by main_layout.php AND the specific content file ---
    
    // Load environment variables from .env
    $loadEnvPath = __DIR__ . '/api/load_env.php';
    if (file_exists($loadEnvPath)) { 
        require_once $loadEnvPath; 
    } else { 
        error_log("FATAL from router: load_env.php not found at " . $loadEnvPath); 
        $_ENV['API_KEY'] = 'FALLBACK_KEY_ROUTER'; 
    }
    
    $jsApiKey = $_ENV['API_KEY'] ?? 'FALLBACK_KEY_ROUTER';

    // Default page metadata (can be overridden in the content files)
    $pageTitle = 'Omnipotency AI';
    $pageDescription = 'The AI-Powered CRM for Wellness Professionals.';
    $currentPage = str_replace('/', '', $path) ?: 'home'; // For active nav link

    ob_start();
    // Include the PHP file that generates the *content* for this route
    $contentFilePath = __DIR__ . $routes[$path];
    if (file_exists($contentFilePath)) {
        include $contentFilePath; 
    } else {
        // If content file for a defined route is missing, show error or 404 content
        http_response_code(404);
        echo "<div class='container mx-auto px-4 py-8'><h1 class='text-2xl font-bold text-red-600'>404 - Page Content Not Found</h1><p>The content file for the route '{$path}' is missing at {$contentFilePath}.</p></div>";
    }
    $pageSpecificContent = ob_get_clean();

    // Now load the main layout, which will use the variables defined above
    require_once __DIR__ . '/partials/main_layout.php';
    exit; // IMPORTANT: Stop execution after serving the routed page
}

// --- IF NO ROUTE MATCHED (should ideally not happen if '/' is defined, but as a fallback) ---
// This is the 404 page handling
http_response_code(404); // If no route in $routes matched (and not an asset file)
$pageTitle = '404 Not Found - Omnipotency AI';
$pageDescription = 'The page you requested could not be found.';
$currentPage = '404';
$jsApiKey = $_ENV['API_KEY'] ?? 'FALLBACK_KEY_404'; // Load .env if not already for 404 page too

ob_start();
echo "<div class='container mx-auto text-center py-20'>
        <h1 class='text-4xl font-bold text-brand-green-600'>404 - Page Not Found</h1>
        <p class='mt-4 text-lg'>Sorry, the page you are looking for does not exist.</p>
        <a href='".BASE_URL."/'' class='mt-6 inline-block px-6 py-3 bg-brand-orange-500 text-white font-medium rounded hover:bg-brand-orange-600 transition-colors'>Go to Homepage</a>
      </div>";
$pageSpecificContent = ob_get_clean();
require_once __DIR__ . '/partials/main_layout.php';
exit;
// --- Load the Main Layout ---
// main_layout.php will use $pageTitle, $pageDescription, $currentPage (for header), and $pageSpecificContent
require_once __DIR__ . '/partials/main_layout.php';
?>
