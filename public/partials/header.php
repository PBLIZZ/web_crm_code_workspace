<?php
// public/partials/header.php

// This variable should be set by the including page (e.g., index.php, about.php)
// It helps determine the active navigation link.
// Example: $currentPage = 'home'; or $currentPage = 'about';
// If not set, default to empty or handle as needed.
$currentPage = $currentPage ?? ''; // Default to empty if not set

// Function to check if a link (or its section anchor) is active
// Updated to handle section anchors on the home page (index.php)
function isNavLinkActive($linkHref, $currentPageName, $currentIsIndex) {
    $linkPageName = strtok(basename($linkHref), '#'); // Get page part before #
    $linkPageName = str_replace('.php', '', $linkPageName);
    if ($linkPageName === 'index' || $linkPageName === '') $linkPageName = 'home';

    if (strpos($linkHref, '#') === 0 && $currentIsIndex) { // Anchor link on the current index page
        // For anchor links, active state might be handled by JS scrollspy later.
        // For now, we won't mark them as "page active" unless you want to.
        return false; 
    }
    return ($linkPageName === $currentPageName);
}

// Define navigation links based on your mockup (About, Docs, Blog, Pricing)
// For now, let's assume 'Docs' and 'Blog' might become sections on a page or separate pages.
// 'About' will be about.php, 'Pricing' and 'About' (as a section) are on index.php.
$navLinks = [
    // For the landing page (index.php), these are section links
    // For other pages, they might link back to index.php sections or dedicated pages.
    // This logic can get complex. For now, simple links.
    // If on index.php:
    // ['href' => '#about-section', 'text' => 'About', 'is_section' => true, 'page_context' => 'home'],
    // ['href' => '#pricing', 'text' => 'Pricing', 'is_section' => true, 'page_context' => 'home'],
    // ['href' => '#docs-section', 'text' => 'Docs', 'is_section' => true, 'page_context' => 'home'],
    // ['href' => '#blog-section', 'text' => 'Blog', 'is_section' => true, 'page_context' => 'home'],

    // Simpler approach for now - assuming direct links or sections on current page:
    // We will refine this when individual pages like about.php are built.
    // The $currentPage variable from the main PHP file (e.g. index.php or about.php)
    // will tell us which page we are on.

    // Links using clean URLs for the router
    ['href' => BASE_URL . '/about', 'text' => 'About', 'page_id' => 'about'],       // Routes to /pages/about_content.php
    ['href' => BASE_URL . '/docs', 'text' => 'Docs', 'page_id' => 'docs'],          // Routes to /pages/docs_content.php
    ['href' => BASE_URL . '/blog', 'text' => 'Blog', 'page_id' => 'blog'],          // Routes to /pages/blog_content.php
    ['href' => BASE_URL . '/#pricing', 'text' => 'Pricing', 'page_id' => 'home_pricing'] // Section on home
];

// Define base classes for links - Tailored to the dark teal header from your image
// The text color is white, hover is brand-orange-500
$desktopLinkBase = "font-medium py-2 px-3 md:px-4 transition duration-150 ease-in-out no-underline";
$desktopLinkDefaultColor = "text-white";
$desktopLinkHover = "hover:text-brand-orange-500";
$desktopLinkActiveColor = "text-brand-orange-500"; // Active link text color
$desktopLinkActiveBorder = "border-b-2 border-brand-orange-500"; // Active link border

$mobileLinkBase = "block py-3 px-4 text-base font-medium no-underline rounded-md";
$mobileLinkDefaultColor = "text-white";
$mobileLinkHover = "hover:bg-brand-green-700 hover:text-brand-orange-500"; // Use your brand green
$mobileLinkActiveBg = "bg-brand-green-700"; // Active mobile link background
$mobileLinkActiveColor = "text-brand-orange-500";
?>
<!-- Header Navigation -->
<header id="main-header" class="sticky top-0 z-50 bg-brand-green-800 bg-opacity-90 backdrop-blur-md shadow-lg">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-20">
      <a href="/" class="flex items-center gap-2 text-xl no-underline hover:opacity-90">
        <img src="<?php echo BASE_URL; ?>/assets/img/logo.png" alt="Omnipotency AI logo" class="h-10 sm:h-12 w-auto">
        <span class="font-semibold text-brand-teal-400">Omnipotency AI</span>
      </a>
      <nav class="hidden md:flex items-center space-x-1 lg:space-x-2">
        <?php foreach ($navLinks as $link):
            $linkTargetPage = str_replace('.php', '', basename(strtok($link['href'], '#')));
            if ($linkTargetPage === 'index') $linkTargetPage = 'home';
            $isActive = ($linkTargetPage === $currentPage && strpos($link['href'], '#') === false);
            
            $classes = $desktopLinkBase . ' ' . $desktopLinkHover;
            if ($isActive) {
                $classes .= ' ' . $desktopLinkActiveColor . ' ' . $desktopLinkActiveBorder;
            } else {
                $classes .= ' ' . $desktopLinkDefaultColor;
            }
        ?>
        <a href="<?php echo htmlspecialchars($link['href']); ?>" class="<?php echo $classes; ?>" <?php echo $isActive ? 'aria-current="page"' : ''; ?>>
          <?php echo htmlspecialchars($link['text']); ?>
        </a>
        <?php endforeach; ?>
      </nav>
      <div class="flex items-center">
        <a href="<?php echo BASE_URL; ?>/beta" class="hidden sm:inline-block bg-brand-orange-500 hover:bg-brand-orange-600 ml-3 rounded-lg px-5 py-2.5 text-sm font-medium text-white transition duration-150 ease-in-out no-underline">
          Get Started
        </a>
        <button id="menuToggle" type="button" class="ml-3 md:hidden inline-flex items-center justify-center p-2 rounded-md text-white hover:text-brand-orange-500 hover:bg-brand-green-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobileMenu" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg id="menuIconOpen" class="block h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
          <svg id="menuIconClose" class="hidden h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
        </button>
      </div>
    </div>
  </div>
  <nav id="mobileMenu" class="hidden md:hidden bg-brand-green-800 bg-opacity-95 border-t border-brand-green-700 links hover:bg-brand-green-700 hover:text-brand-orange-500">
    <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
       <?php foreach ($navLinks as $link):
            $linkTargetPage = str_replace('.php', '', basename(strtok($link['href'], '#')));
            if ($linkTargetPage === 'index') $linkTargetPage = 'home';
            $isActive = ($linkTargetPage === $currentPage && strpos($link['href'], '#') === false);

            $classes = $mobileLinkBase . ' ' . $mobileLinkHover;
            if ($isActive) {
                $classes .= ' ' . $mobileLinkActiveColor . ' ' . $mobileLinkActiveBg;
            } else {
                $classes .= ' ' . $mobileLinkDefaultColor;
            }
        ?>
        <a href="<?php echo htmlspecialchars($link['href']); ?>" class="<?php echo $classes; ?>" <?php echo $isActive ? 'aria-current="page"' : ''; ?>>
          <?php echo htmlspecialchars($link['text']); ?>
        </a>
        <?php endforeach; ?>
        <a href="<?php echo BASE_URL; ?>/beta" class="block w-full text-center bg-brand-orange-500 hover:bg-brand-orange-600 mt-2 rounded-md px-5 py-3 text-base font-medium text-white transition duration-150 ease-in-out no-underline">
          Get Started
        </a>
    </div>
  </nav>
</header>