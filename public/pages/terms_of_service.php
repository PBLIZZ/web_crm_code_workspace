<?php // public/pages/terms_of_service.php
// session_start(); // Uncomment if this page ever needs session access
ini_set('display_errors', 1); error_reporting(E_ALL); // For development

// --- DEFINE BASE_URL ---
// Assuming MAMP serves the 'public_html' folder as the web root for 'localhost'
// If your project root is 'web_omnipotency_ai' and 'public_html' is inside it,
// and MAMP points to 'public_html', then BASE_URL is empty for root-relative links.
define('BASE_URL', ''); 

// --- LOAD .ENV CONFIGURATION (Mainly for API Key for JS, if any forms were on this page) ---
$loadEnvPath = __DIR__ . '/../api/load_env.php'; // Path relative to this file (pages/) to api/
if (file_exists($loadEnvPath)) {
    require_once $loadEnvPath; 
} else {
    error_log("FATAL from terms_of_service.php: load_env.php not found at " . $loadEnvPath);
    $_ENV['API_KEY'] = 'FALLBACK_KEY_STATIC'; // Should not happen in production
}

// --- Page Specific Variables ---
$pageTitle = 'Terms of Service – Omnipotency AI';
$pageDescription = 'The guidelines and agreements governing your use of Omnipotency AI services.';
$currentPage = 'terms'; // For active navigation link highlighting, if 'Terms' becomes a nav item

// Prepare variables for JavaScript config block in main_layout.php
$jsApiKey = $_ENV['API_KEY'] ?? 'KEY_NOT_LOADED_FROM_ENV_IN_TERMS';

// --- Buffer Content for the Main Layout ---
ob_start(); 
?>

<!-- Main Content for Terms of Service Page -->
<main>
    <!-- Hero Section for this page -->
    <section class="bg-brand-green-700 text-white py-16 sm:py-20"> <!-- Using a brand color -->
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
          <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-tight">
            Terms of Service
          </h1>
          <p class="mt-4 sm:mt-6 text-lg sm:text-xl text-gray-200 max-w-2xl mx-auto">
            Please read these terms carefully before using our services.
          </p>
        </div>
      </div>
    </section>

    <!-- Terms of Service Content -->
    <section class="bg-white text-slate-800 py-12 sm:py-16 lg:py-20"> <!-- Lighter background for content -->
      <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-lg prose-slate max-w-none"> <!-- Tailwind Typography plugin classes -->
          
          <p class="text-gray-500 text-sm">Last Updated: May 12, 2025</p> <!-- Update date -->
            
          <p>
            Welcome to Omnipotency AI. These Terms of Service ("Terms") govern your access to and use of our website and services. Please read these Terms carefully before using our services. By accessing or using our services, you agree to be bound by these Terms. If you do not agree to these Terms, please do not use our services.
          </p>
          
          <!-- Section 1: Definitions -->
          <h2>1. Definitions</h2>
          <p>Throughout these Terms, we use certain terms with specific meanings:</p>
          <ul>
            <li><strong>"Omnipotency AI"</strong>, <strong>"we"</strong>, <strong>"us"</strong>, or <strong>"our"</strong> refers to Omnipotency AI.</li>
            <li><strong>"Services"</strong> refers to our website, AI-powered CRM, and all related tools and features.</li>
            <li><strong>"User"</strong>, <strong>"you"</strong>, or <strong>"your"</strong> refers to any individual or entity that accesses or uses our Services.</li>
            <li><strong>"Content"</strong> refers to any information, data, text, software, graphics, or other materials that may be viewed on, or accessed through, our Services.</li>
          </ul>

          <!-- Section 2: Account Registration -->
          <h2>2. Account Registration</h2>
          <p>To access certain features of our Services, you may need to register for an account. When registering, you agree to:</p>
          <ul>
            <li>Provide accurate, current, and complete information.</li>
            <li>Maintain and promptly update your account information.</li>
            <li>Maintain the security of your account credentials.</li>
            <li>Accept responsibility for all activities that occur under your account.</li>
            <li>Notify us immediately of any unauthorized use of your account.</li>
          </ul>
          <p>We reserve the right to disable any user account if we believe you have violated these Terms.</p>

          <!-- Add all other sections (3 through 13) from your original HTML here -->
          <!-- Make sure to use <h2> for main section titles and <p>, <ul>, <li> as appropriate -->
          
          <h3 class="text-xl font-semibold text-gray-800 mb-3">Restrictions</h3>
            <p class="mb-4">
              When using our Services, you agree not to:
            </p>
            <ul class="list-disc pl-6 mb-6 space-y-2">
              <li>Violate any applicable laws, regulations, or third-party rights</li>
              <li>Use our Services to transmit harmful code or interfere with the operation of our Services</li>
              <li>Attempt to gain unauthorized access to any part of our Services</li>
              <li>Use our Services to collect or harvest personal information about others without their consent</li>
              <li>Impersonate any person or entity or misrepresent your affiliation with any person or entity</li>
              <li>Use our Services in any manner that could disable, overburden, damage, or impair our Services</li>
              <li>Use any robot, spider, or other automated means to access our Services</li>
              <li>Use our Services for any illegal or unauthorized purpose</li>
            </ul>
          </div>

          <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">4. User Content</h2>
            <p class="mb-6">
              Our Services allow you to store, share, and otherwise make available certain information, data, text, or other material ("User Content"). You are solely responsible for your User Content and the consequences of posting or publishing it.
            </p>
            <p class="mb-6">
              By providing User Content, you grant us a worldwide, non-exclusive, royalty-free, sublicensable, and transferable license to use, reproduce, distribute, prepare derivative works of, display, and perform the User Content in connection with the Services and our business, including for promoting and redistributing part or all of the Services.
            </p>
            <p class="mb-6">
              You represent and warrant that:
            </p>
            <ul class="list-disc pl-6 mb-6 space-y-2">
              <li>You own or have the necessary rights to use and authorize us to use your User Content</li>
              <li>The User Content does not violate any third-party rights, including intellectual property rights and privacy rights</li>
              <li>The User Content complies with these Terms and all applicable laws and regulations</li>
            </ul>
          </div>

          <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">5. Intellectual Property</h2>
            <p class="mb-6">
              Our Services and their entire contents, features, and functionality (including but not limited to all information, software, text, displays, images, video, and audio, and the design, selection, and arrangement thereof), are owned by Omnipotency AI, its licensors, or other providers of such material and are protected by copyright, trademark, patent, trade secret, and other intellectual property or proprietary rights laws.
            </p>
            <p class="mb-6">
              These Terms do not grant you any right, title, or interest in or to our Services or any content on our Services. You may not reproduce, distribute, modify, create derivative works of, publicly display, publicly perform, republish, download, store, or transmit any of the material on our Services, except as generally necessary for you to use our Services.
            </p>
          </div>

          <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">6. Payment Terms</h2>
            <p class="mb-6">
              Some of our Services are offered on a subscription basis. By subscribing to our Services, you agree to pay the fees as quoted to you for the subscription term you select. We may change the fees for any subsequent renewal term by providing notice prior to the renewal date.
            </p>
            <p class="mb-6">
              Unless otherwise stated:
            </p>
            <ul class="list-disc pl-6 mb-6 space-y-2">
              <li>All fees are quoted in Euro (€)</li>
              <li>Fees are non-refundable except as required by law or as explicitly stated in these Terms</li>
              <li>Subscriptions automatically renew for the same period unless cancelled before the renewal date</li>
              <li>You can cancel your subscription at any time through your account settings or by contacting us</li>
            </ul>
          </div>

          <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">7. HIPAA Compliance</h2>
            <p class="mb-6">
              If you are a healthcare provider or other entity covered by the Health Insurance Portability and Accountability Act of 1996 and its implementing regulations (collectively, "HIPAA"), and you use our Services in a manner that involves Protected Health Information ("PHI," as defined in HIPAA), you agree that you will be solely responsible for ensuring your compliance with HIPAA.
            </p>
            <p class="mb-6">
              We offer features designed to help you comply with HIPAA, and we will enter into a Business Associate Agreement with Covered Entities as defined by HIPAA. However, you are responsible for determining whether our Services meet your specific compliance needs.
            </p>
          </div>

          <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">8. Disclaimers and Limitations of Liability</h2>
            <p class="mb-6">
              THE SERVICES ARE PROVIDED "AS IS" AND "AS AVAILABLE," WITHOUT WARRANTY OF ANY KIND, EITHER EXPRESS OR IMPLIED. WITHOUT LIMITING THE FOREGOING, WE EXPLICITLY DISCLAIM ANY WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, QUIET ENJOYMENT, OR NON-INFRINGEMENT, AND ANY WARRANTIES ARISING OUT OF COURSE OF DEALING OR USAGE OF TRADE.
            </p>
            <p class="mb-6">
              IN NO EVENT SHALL OMNIPOTENCY AI, ITS AFFILIATES, OR THEIR RESPECTIVE OFFICERS, DIRECTORS, EMPLOYEES, OR AGENTS BE LIABLE FOR ANY INDIRECT, INCIDENTAL, SPECIAL, CONSEQUENTIAL, OR PUNITIVE DAMAGES, INCLUDING LOST PROFITS, LOSS OF DATA, OR GOODWILL, SERVICE INTERRUPTION, COMPUTER DAMAGE, OR SYSTEM FAILURE, OR THE COST OF SUBSTITUTE SERVICES ARISING OUT OF OR IN CONNECTION WITH THESE TERMS OR FROM THE USE OF OR INABILITY TO USE THE SERVICES, WHETHER BASED ON WARRANTY, CONTRACT, TORT (INCLUDING NEGLIGENCE), PRODUCT LIABILITY, OR ANY OTHER LEGAL THEORY, AND WHETHER OR NOT WE HAVE BEEN INFORMED OF THE POSSIBILITY OF SUCH DAMAGE.
            </p>
            <p class="mb-6">
              IN NO EVENT WILL OUR TOTAL LIABILITY ARISING OUT OF OR IN CONNECTION WITH THESE TERMS OR FROM THE USE OF OR INABILITY TO USE THE SERVICES EXCEED THE AMOUNTS YOU HAVE PAID TO OMNIPOTENCY AI FOR USE OF THE SERVICES IN THE TWELVE (12) MONTHS PRECEDING THE EVENT GIVING RISE TO THE LIABILITY OR ONE HUNDRED EUROS (€100), IF YOU HAVE NOT HAD ANY PAYMENT OBLIGATIONS TO OMNIPOTENCY AI.
            </p>
            <p class="mb-6">
              SOME JURISDICTIONS DO NOT ALLOW THE EXCLUSION OR LIMITATION OF LIABILITY FOR CONSEQUENTIAL OR INCIDENTAL DAMAGES, SO THE ABOVE LIMITATION MAY NOT APPLY TO YOU.
            </p>
          </div>

          <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">9. Indemnification</h2>
            <p class="mb-6">
              You agree to indemnify, defend, and hold harmless Omnipotency AI, its affiliates, officers, directors, employees, agents, and third-party service providers from and against any and all claims, damages, obligations, losses, liabilities, costs or debt, and expenses (including but not limited to attorney's fees) arising from:
            </p>
            <ul class="list-disc pl-6 mb-6 space-y-2">
              <li>Your use of and access to the Services</li>
              <li>Your violation of any provision of these Terms</li>
              <li>Your violation of any third-party right, including without limitation any copyright, property, or privacy right</li>
              <li>Any claim that your User Content caused damage to a third party</li>
            </ul>
            <p class="mb-6">
              This defense and indemnification obligation will survive these Terms and your use of the Services.
            </p>
          </div>

          <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">10. Termination</h2>
            <p class="mb-6">
              We may terminate or suspend your access to all or part of the Services immediately, without prior notice or liability, for any reason, including without limitation if you breach these Terms.
            </p>
            <p class="mb-6">
              Upon termination, your right to use the Services will immediately cease. If you wish to terminate your account, you may simply discontinue using the Services, or you may contact us to request account deletion.
            </p>
            <p class="mb-6">
              All provisions of these Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity, and limitations of liability.
            </p>
          </div>

          <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">11. Changes to Terms</h2>
            <p class="mb-6">
              We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material, we will provide at least 30 days' notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.
            </p>
            <p class="mb-6">
              By continuing to access or use our Services after any revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, you are no longer authorized to use the Services.
            </p>
          </div>

          <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">12. Governing Law and Jurisdiction</h2>
            <p class="mb-6">
              These Terms and any separate agreements whereby we provide you Services shall be governed by and construed in accordance with the laws of the European Union and the laws of Ireland.
            </p>
            <p class="mb-6">
              Any disputes relating to these Terms or the Services will be subject to the exclusive jurisdiction of the courts located in Dublin, Ireland.
            </p>
          </div>

          <div>
            <h2 class="text-2xl font-bold text-gray-900 mb-4">13. Contact Us</h2>
            <p class="mb-6">
              If you have any questions about these Terms, please contact us at <a href="mailto:team@omnipotency.ai" class="text-brand-green-600 hover:text-brand-green-700">team@omnipotency.ai</a>.
            </p>
          </div>
        </div>
      </div>
    </section>
</main>

<?php
$pageSpecificContent = ob_get_clean(); // Get all the buffered HTML content

// --- Load the Main Layout ---
// This path assumes main_layout.php is in public/partials/ and this file is in public/pages/
require_once __DIR__ . '/../partials/main_layout.php'; 
?>
