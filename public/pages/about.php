<?php // public/pages/about.php
// session_start(); 
ini_set('display_errors', 1); error_reporting(E_ALL); 

define('BASE_URL', ''); 

$loadEnvPath = __DIR__ . '/../api/load_env.php'; 
if (file_exists($loadEnvPath)) {
    require_once $loadEnvPath; 
} else {
    error_log("FATAL from about.php: load_env.php not found at " . $loadEnvPath);
    $_ENV['API_KEY'] = 'FALLBACK_KEY_STATIC_ABOUT'; 
}

// --- Page Specific Variables for About Page ---
$pageTitle = 'About Omnipotency AI – Our Mission, Vision, and Story';
$pageDescription = 'Learn about the team, vision, and values behind Omnipotency AI, a CRM built by wellness practitioners for wellness practitioners.';
$currentPage = 'about'; // For active navigation link in header.php

$jsApiKey = $_ENV['API_KEY'] ?? 'KEY_NOT_LOADED_FROM_ENV_IN_ABOUT';

// --- Buffer Content for the Main Layout ---
ob_start(); 
// This will include all the sections for the about page
include __DIR__ . '/about_content.php'; 
$pageSpecificContent = ob_get_clean(); 

// --- Load the Main Layout ---
require_once __DIR__ . '/../partials/main_layout.php';
?>