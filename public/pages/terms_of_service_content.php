<?php
// public/pages/terms_of_service_content.php
// This file is included by index.php router for the '/terms-of-service' route.
// It only contains the unique content for this page.

global $pageTitle, $pageDescription, $currentPage; // Make router variables available
$pageTitle = 'Terms of Service – Omnipotency AI';
$pageDescription = 'Review the Terms of Service for Omnipotency AI.';
$currentPage = 'terms-of-service'; // For active nav link
?>

<!-- Main Content for Terms of Service Page -->
<main>
    <section class="bg-brand-green-700 text-white py-16 sm:py-20">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-tight"><?php echo htmlspecialchars($pageTitle); ?></h1>
          <p class="mt-4 sm:mt-6 text-lg sm:text-xl text-gray-200 max-w-2xl mx-auto">Please read these terms carefully.</p>
      </div>
    </section>

    <section class="bg-white text-slate-800 py-12 sm:py-16 lg:py-20">
      <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-lg prose-slate max-w-none">
          <p class="text-gray-500 text-sm">Last Updated: May 12, 2025</p>
          
          <p>
            Welcome to Omnipotency AI. These Terms of Service ("Terms") govern your access to and use of our website and services. Please read these Terms carefully before using our services. By accessing or using our services, you agree to be bound by these Terms. If you do not agree to these Terms, please do not use our services.
          </p>

          <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">1. Acceptance of Terms</h2>
            <p class="mb-6">
              By accessing or using our services, you agree to be bound by these Terms and our Privacy Policy. If you do not agree to these Terms, you must not access or use our services.
            </p>
          </div>

          <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">2. Changes to Terms</h2>
            <p class="mb-6">
              We may revise and update these Terms from time to time in our sole discretion. All changes are effective immediately when we post them. Your continued use of the services following the posting of revised Terms means that you accept and agree to the changes.
            </p>
          </div>

          <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">3. Accessing the Services</h2>
            <p class="mb-6">
              We reserve the right to withdraw or modify our services in our sole discretion without notice. We will not be liable if for any reason all or any part of our services are unavailable at any time or for any period.
            </p>
          </div>

          <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">4. User Registration</h2>
            <p class="mb-6">
              To access certain features of our services, you may be required to register for an account. You agree to provide accurate, current, and complete information during the registration process and to update such information to keep it accurate, current, and complete.
            </p>
          </div>

          <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">5. Intellectual Property</h2>
            <p class="mb-6">
              Our Services and their entire contents, features, and functionality (including but not limited to all information, software, text, displays, images, video, and audio, and the design, selection, and arrangement thereof), are owned by Omnipotency AI, its licensors, or other providers of such material and are protected by copyright, trademark, patent, trade secret, and other intellectual property or proprietary rights laws.
            </p>
          </div>

          <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">6. Prohibited Uses</h2>
            <p class="mb-6">
              You may use our services only for lawful purposes and in accordance with these Terms. You agree not to use our services in any way that violates any applicable federal, state, local, or international law or regulation.
            </p>
          </div>

          <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">7. Termination</h2>
            <p class="mb-6">
              We may terminate or suspend your account and access to our services immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach these Terms.
            </p>
          </div>

          <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">8. Disclaimer of Warranties</h2>
            <p class="mb-6">
              YOUR USE OF OUR SERVICES IS AT YOUR SOLE RISK. OUR SERVICES ARE PROVIDED ON AN "AS IS" AND "AS AVAILABLE" BASIS, WITHOUT ANY WARRANTIES OF ANY KIND, EITHER EXPRESS OR IMPLIED.
            </p>
          </div>

          <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">9. Indemnification</h2>
            <p class="mb-6">
              You agree to indemnify, defend, and hold harmless Omnipotency AI, its affiliates, officers, directors, employees, agents, and third-party service providers from and against any and all claims, damages, obligations, losses, liabilities, costs or debt, and expenses (including but not limited to attorney's fees) arising from:
            </p>
            <ul class="list-disc pl-6 mb-6">
              <li class="mb-2">Your use of and access to our services;</li>
              <li class="mb-2">Your violation of any term of these Terms;</li>
              <li class="mb-2">Your violation of any third-party right, including without limitation any copyright, property, or privacy right; or</li>
              <li class="mb-2">Any claim that your content caused damage to a third party.</li>
            </ul>
          </div>

          <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">10. Limitation of Liability</h2>
            <p class="mb-6">
              IN NO EVENT WILL OMNIPOTENCY AI, ITS AFFILIATES, OR THEIR LICENSORS, SERVICE PROVIDERS, EMPLOYEES, AGENTS, OFFICERS, OR DIRECTORS BE LIABLE FOR DAMAGES OF ANY KIND, UNDER ANY LEGAL THEORY, ARISING OUT OF OR IN CONNECTION WITH YOUR USE, OR INABILITY TO USE, OUR SERVICES, INCLUDING ANY DIRECT, INDIRECT, SPECIAL, INCIDENTAL, CONSEQUENTIAL, OR PUNITIVE DAMAGES.
            </p>
          </div>

          <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">11. Governing Law</h2>
            <p class="mb-6">
              These Terms and your use of our services will be governed by and construed in accordance with the laws of the state where our company is headquartered, without giving effect to any choice or conflict of law provision or rule.
            </p>
          </div>

          <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">12. Waiver and Severability</h2>
            <p class="mb-6">
              No waiver by Omnipotency AI of any term or condition set out in these Terms shall be deemed a further or continuing waiver of such term or condition or a waiver of any other term or condition, and any failure of Omnipotency AI to assert a right or provision under these Terms shall not constitute a waiver of such right or provision.
            </p>
          </div>

          <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">13. Contact Us</h2>
            <p>If you have questions about these Terms, please contact us at <a href="mailto:team@omnipotency.ai" class="text-brand-orange-500 hover:text-brand-orange-600 underline">team@omnipotency.ai</a>.</p>
          </div>
        </div>
      </div>
    </section>
</main>
