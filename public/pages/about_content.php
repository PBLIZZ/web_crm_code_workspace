<?php // public/pages/about_content.php
// This file is included by about.php and contains the structure for the About page content.
// It will include various section partials.

// Define the overall page background style here, which will be wrapped by main_layout.php
// This approach allows different pages to have different overall background treatments if needed.
// The actual gradient will be applied via a class on a wrapper div.
?>

<div id="about-page-background-wrapper">
    <?php include __DIR__ . '/../sections/about_hero.php'; ?>
    <?php include __DIR__ . '/../sections/mission_vision_values.php'; ?>
    <?php include __DIR__ . '/../sections/built_for_wellness.php'; ?>
    <?php include __DIR__ . '/../sections/our_story.php'; ?>
    <?php include __DIR__ . '/../sections/team.php'; ?>
</div>

<style>
    /* Single flowing background gradient with orange overlay */
    #about-page-background-wrapper {
        position: relative;
        background: linear-gradient(
            to bottom,
            #002f27 0%,      /* Very dark green at top */
            #003e35 10%,     /* Dark teal */
            #14b8a6 50%,     /* Brightest teal at middle */
            #003e35 85%,     /* Back to dark teal */
            #002f27 100%     /* Very dark green at bottom */
        );
        /* Make sure wrapper extends full height */
        min-height: 100%;
    }
    
    /* Add the orange glow overlay in the middle */
    #about-page-background-wrapper::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(
            circle at center 60%, /* Position at 60% down the page */
            rgba(255, 135, 0, 0.15),
            rgba(255, 135, 0, 0) 60%
        );
        pointer-events: none;
        z-index: 0;
    }

    /* Ensure content within sections has a higher z-index */
    #about-page-background-wrapper > section {
        position: relative;
        z-index: 1;
    }
</style>
