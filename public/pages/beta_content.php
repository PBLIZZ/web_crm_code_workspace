<?php // public/pages/beta_content.php
// This file is included by beta.php and contains the structure for the Beta page content.
?>

<div id="beta-page-background-wrapper" class="bg-gradient-beta">
    <!-- Hero Section for Beta Page -->
    <section id="beta-hero" class="relative text-white py-20 md:py-32 lg:py-40 overflow-hidden">
        <div class="relative container mx-auto px-6 text-center z-10">
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold tracking-tight leading-tight mb-6">
                Shape the <span class="text-brand-orange-500">Future</span> of Wellness <span class="text-brand-teal-400">Technology</span>
            </h1>
            <p class="text-lg sm:text-xl text-gray-300 max-w-3xl mx-auto mb-8">
                Join our exclusive Beta Shapers Program and help us build the perfect CRM for wellness practitioners while enjoying lifetime benefits.
            </p>
            <a href="#beta-list" class="bg-brand-orange-500 hover:bg-brand-orange-600 text-white px-8 py-3.5 rounded-lg font-semibold shadow-lg transition text-base no-underline">
                Reserve Your Spot Now
            </a>
        </div>
    </section>

    <!-- Include the beta sections -->
    <?php include __DIR__ . '/../sections/beta_benefits_content.php'; ?>
    <?php include __DIR__ . '/../sections/beta_waitlist_form_content.php'; ?>
</div>

<style>
    /* Beta page gradient background */
    .bg-gradient-beta {
        position: relative;
        background: linear-gradient(
            to bottom,
            #002f27 0%,      /* Very dark green at top */
            #003e35 15%,     /* Dark teal */
            #005349 40%,     /* Medium teal */
            #006758 70%,     /* Light teal */
            #003e35 90%,     /* Back to dark teal */
            #002f27 100%     /* Very dark green at bottom */
        );
    }

    /* Orange glow at the bottom */
    .bg-gradient-beta::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 30vh; /* Adjust height of the glow */
        background: linear-gradient(to top, 
            rgba(255, 135, 0, 0.2), /* brand-orange-500 with opacity */
            rgba(255, 135, 0, 0)
        );
        z-index: 0; /* Behind content but above main page bg */
        pointer-events: none;
        filter: blur(50px); /* Adjust blur amount */
    }

    /* Ensure content within sections has a higher z-index */
    #beta-page-background-wrapper > section {
        position: relative;
        z-index: 1;
    }
</style>
