<?php
// Path: public/sections/home_content.php

// Define the overall page background style here, which will be wrapped by main_layout.php
// This approach allows different pages to have different overall background treatments.
?>

<div id="home-page-background-wrapper">
    <?php
    // Include the sections that make up your homepage, in order.
    if (file_exists(__DIR__ . '/hero.php')) {
        require_once __DIR__ . '/hero.php';
    } else {
        error_log("Homepage section missing: hero.php");
    }

    // Include key benefits/why wellness pros love us section
    if (file_exists(__DIR__ . '/key_benefits_content.php')) {
        require_once __DIR__ . '/key_benefits_content.php';
    } else {
        error_log("Homepage section missing: key_benefits_content.php");
    }

    // Include problems we solve section
    if (file_exists(__DIR__ . '/pain_points_content.php')) {
        require_once __DIR__ . '/pain_points_content.php';
    } else {
        error_log("Homepage section missing: pain_points_content.php");
    }

    // Include features overview section
    if (file_exists(__DIR__ . '/features_overview.php')) {
        require_once __DIR__ . '/features_overview.php';
    } else {
        error_log("Homepage section missing: features_overview.php");
    }

    // Include pricing section
    if (file_exists(__DIR__ . '/pricing_section.php')) {
        require_once __DIR__ . '/pricing_section.php';
    } else {
        error_log("Homepage section missing: pricing_section.php");
    }

    // Include FAQ section
    if (file_exists(__DIR__ . '/faq_content.php')) {
        require_once __DIR__ . '/faq_content.php';
    } else {
        error_log("Homepage section missing: faq_content.php");
    }
    ?>
</div>

<style>
    /* Single flowing background gradient with orange overlay, similar to about page */
    #home-page-background-wrapper {
        position: relative;
        background: linear-gradient(
            to bottom,
            #002f27 0%,      /* Very dark green at top */
            #003e35 10%,     /* Dark teal */
            #14b8a6 40%,     /* Teal in first part */
            #003e35 70%,     /* Back to dark teal */
            #002f27 100%     /* Very dark green at bottom */
        );
        /* Make sure wrapper extends full height */
        min-height: 100%;
    }
    
    /* Add the orange glow overlay in the middle */
    #home-page-background-wrapper::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(
            circle at center 40%, /* Position at 40% down the page */
            rgba(255, 135, 0, 0.2),
            rgba(255, 135, 0, 0) 60%
        );
        pointer-events: none;
        z-index: 0;
    }

    /* Ensure content within sections has a higher z-index */
    #home-page-background-wrapper > section {
        position: relative;
        z-index: 1;
    }
</style>
