<?php // public/pages/beta.php
// Controller for the Beta Programme page

ini_set('display_errors', 1); error_reporting(E_ALL); 

define('BASE_URL', ''); 

$loadEnvPath = __DIR__ . '/../api/load_env.php'; 
if (file_exists($loadEnvPath)) {
    require_once $loadEnvPath; 
} else {
    error_log("FATAL from beta.php: load_env.php not found at " . $loadEnvPath);
    $_ENV['API_KEY'] = 'FALLBACK_KEY_STATIC_BETA'; 
}

// --- Page Specific Variables for Beta Page ---
$pageTitle = 'Join the Omnipotency AI Beta Program';
$pageDescription = 'Become a Beta Shaper and help craft the future of the leading wellness practitioner CRM with exclusive benefits and early access.';
$currentPage = 'beta'; // For active navigation link in header.php

$jsApiKey = $_ENV['API_KEY'] ?? 'KEY_NOT_LOADED_FROM_ENV_IN_BETA';

// --- Buffer Content for the Main Layout ---
ob_start(); 
// Include the beta page content
include __DIR__ . '/beta_content.php'; 
$pageSpecificContent = ob_get_clean(); 

// --- Load the Main Layout ---
require_once __DIR__ . '/../partials/main_layout.php';
?>
