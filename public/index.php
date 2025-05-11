<?php // public/index.php (Landing Page Controller)
session_start(); 
ini_set('display_errors', 1); error_reporting(E_ALL); 

// DEFINE BASE_URL HERE, AT THE TOP!
define('BASE_URL', ''); // Assuming assets are relative to the domain root for simplicity for local MAMP

// Load environment variables from .env
$loadEnvPath = __DIR__ . '/api/load_env.php'; // Path to load_env.php relative to project root
                                                      // Assumes .env is in project root: web_omnipotency_ai/.env
                                                      // And load_env.php is in public/api/
$projectRootEnvPath = __DIR__ . '/.env'; // For load_env.php to find it
                                                  // This line isn't strictly needed here IF load_env.php knows its path to .env

if (file_exists($loadEnvPath)) {
    // Pass the project root to load_env.php so it knows where .env is
    // Or ensure load_env.php correctly calculates path to .env (e.g., dirname(__DIR__, 2) . '/.env')
    require_once $loadEnvPath; // This should populate $_ENV
} else {
    error_log("FATAL: load_env.php not found at " . $loadEnvPath);  
    // Potentially set fallback critical $_ENV vars here or die
    $_ENV['API_KEY'] = 'STATIC_FALLBACK_KEY_IF_LOAD_ENV_FAILS'; // NOT RECOMMENDED FOR PROD
}

// --- Page Specific Variables ---
$pageTitle = 'Omnipotency AI – AI-Powered CRM for Wellness Professionals';
$pageDescription = 'The AI-powered CRM for wellness practitioners that gets it done. Automate admin, personalize marketing, and grow your practice.';
$currentPage = 'home'; 



// Variables needed for main_layout.php's JavaScript config block
// $jsApiKey = $_ENV['API_KEY'] ?? 'FALLBACK_API_KEY_FROM_INDEX_PHP'; // Use loaded API_KEY or a fallback
// $jsBaseUrl is already covered by the BASE_URL constant
$jsApiKey = $_ENV['API_KEY'] ?? null; // More accurate
if ($jsApiKey === null) {
    error_log("Warning from index.php: API_KEY was NOT found in \$_ENV. JS will receive a problematic key.");
    $jsApiKey = 'API_KEY_WAS_NULL_IN_INDEX_PHP'; // Make this distinct for debugging
}


// --- Buffer Content for the Main Layout ---
ob_start(); 
// Include sections for the landing page in order of appearance (based on your mockup)
// Ensure these files exist in public/sections/
// echo "<h1>Hero Section Would Be Here</h1>"; // Test with simple echo
include __DIR__ . '/sections/hero.php';
// include __DIR__ . '/sections/key_benefits.php'; // Example from mockup
// include __DIR__ . '/sections/social_proof_or_logos.php';
// include __DIR__ . '/sections/how_it_works_hub_diagram.php';
// include __DIR__ . '/sections/features_overview.php'; // Could be your feature carousel section
// include __DIR__ . '/sections/pricing.php'; // You provided this
// include __DIR__ . '/sections/testimonials.php';
// include __DIR__ . '/sections/faq_accordion.php';
// include __DIR__ . '/sections/final_cta_or_beta_form_preview.php';

$pageSpecificContent = ob_get_clean();

// --- Load the Main Layout ---
// main_layout.php will use $pageTitle, $pageDescription, $currentPage (for header), and $pageSpecificContent
require_once __DIR__ . '/partials/main_layout.php';
?>
