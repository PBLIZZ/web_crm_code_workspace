<?php
// Path: public/sections/home_content.php

// Include the sections that make up your homepage, in order.
// Ensure these files exist in the same 'sections' directory.
// Using require_once is a good practice for essential parts.

if (file_exists(__DIR__ . '/hero.php')) {
    require_once __DIR__ . '/hero.php';
} else {
    error_log("Homepage section missing: hero.php");
    // Optionally echo a placeholder or error for debugging
    // echo "<p>Error: Hero section content is missing.</p>";
}

if (file_exists(__DIR__ . '/features_overview.php')) {
    require_once __DIR__ . '/features_overview.php';
} else {
    error_log("Homepage section missing: features_overview.php");
}

if (file_exists(__DIR__ . '/pricing_section.php')) {
    require_once __DIR__ . '/pricing_section.php';
} else {
    error_log("Homepage section missing: pricing_section.php");
}

// Add other sections that were previously in your old index.php
// Example:
// if (file_exists(__DIR__ . '/key_benefits.php')) {
//     require_once __DIR__ . '/key_benefits.php';
// } else {
//     error_log("Homepage section missing: key_benefits.php");
// }

// ... and so on for all your homepage sections ...
?>
