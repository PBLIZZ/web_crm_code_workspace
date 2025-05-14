<?php
// public/pages/privacy_policy_content.php
// This file is included by index.php router for the '/privacy-policy' route.
// It only contains the unique content for this page.

global $pageTitle, $pageDescription, $currentPage; // Make router variables available
$pageTitle = 'Privacy Policy – Omnipotency AI';
$pageDescription = 'Our privacy practices and how we handle your data at Omnipotency AI.';
$currentPage = 'privacy-policy'; // For active nav link
?>

<!-- Main Content for Privacy Policy Page -->
<main>
    <section class="bg-brand-green-700 text-white py-16 sm:py-20">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold tracking-tight"><?php echo htmlspecialchars($pageTitle); ?></h1>
          <p class="mt-4 sm:mt-6 text-lg sm:text-xl text-gray-200 max-w-2xl mx-auto">How we collect, use, and protect your information.</p>
      </div>
    </section>

    <section class="bg-white text-slate-800 py-12 sm:py-16 lg:py-20">
      <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-lg prose-slate max-w-none">
          <p class="text-gray-500 text-sm">Last Updated: May 12, 2025</p>
          
          <p>
            This Privacy Policy describes how Omnipotency AI ("we", "our", or "us") collects, uses, and shares your personal information when you visit our website, use our services, or otherwise interact with us. Please read this Privacy Policy carefully. By using our services, you agree to the practices described in this Privacy Policy.
          </p>

          <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">1. Information We Collect</h2>
            <p class="mb-4">
              We collect several types of information from and about users of our services, including:
            </p>
            <ul class="list-disc pl-6 mb-6">
              <li class="mb-2"><strong>Personal Information:</strong> This includes information by which you may be personally identified, such as name, email address, and contact details.</li>
              <li class="mb-2"><strong>Usage Data:</strong> Information about your interaction with our website and services, including IP address, browser type, operating system, and the pages you visit.</li>
              <li class="mb-2"><strong>Communications:</strong> Records of your communications with us, including customer support interactions.</li>
              <li class="mb-2"><strong>Marketing Preferences:</strong> Your preferences for receiving marketing communications from us.</li>
            </ul>
          </div>

          <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">2. How We Collect Your Information</h2>
            <p class="mb-4">
              We collect information in the following ways:
            </p>
            <ul class="list-disc pl-6 mb-6">
              <li class="mb-2"><strong>Direct Interactions:</strong> When you sign up, contact us, or otherwise engage with our services.</li>
              <li class="mb-2"><strong>Automated Technologies:</strong> As you navigate through our website, we may use cookies, web beacons, and other tracking technologies to collect information about your equipment, browsing actions, and patterns.</li>
              <li class="mb-2"><strong>Third Parties:</strong> We may receive information about you from third-party partners, such as analytics providers and advertising networks.</li>
            </ul>
          </div>

          <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">3. How We Use Your Information</h2>
            <p class="mb-4">
              We use the information we collect about you for various purposes, including:
            </p>
            <ul class="list-disc pl-6 mb-6">
              <li class="mb-2">To provide, maintain, and improve our services;</li>
              <li class="mb-2">To process transactions and send transaction notifications;</li>
              <li class="mb-2">To send administrative information, such as updates to our terms and policies;</li>
              <li class="mb-2">To respond to your comments, questions, and requests;</li>
              <li class="mb-2">To send promotional communications, such as newsletters or information about new services;</li>
              <li class="mb-2">To monitor and analyze trends, usage, and activities in connection with our services;</li>
              <li class="mb-2">To detect, investigate, and prevent fraudulent transactions and other illegal activities;</li>
              <li class="mb-2">To personalize your experience on our website and deliver content relevant to your interests.</li>
            </ul>
          </div>

          <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">4. Sharing of Your Information</h2>
            <p class="mb-4">
              We may share your information with:
            </p>
            <ul class="list-disc pl-6 mb-6">
              <li class="mb-2"><strong>Service Providers:</strong> Companies that perform services on our behalf, such as website hosting, data analysis, payment processing, and customer service.</li>
              <li class="mb-2"><strong>Business Partners:</strong> Trusted third parties who help us operate our business and serve you.</li>
              <li class="mb-2"><strong>Legal Requirements:</strong> When required by law or to protect our rights, privacy, safety, or property, or that of others.</li>
              <li class="mb-2"><strong>Business Transfers:</strong> In connection with any merger, sale of company assets, financing, or acquisition of all or a portion of our business.</li>
            </ul>
          </div>

          <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">5. Your Choices</h2>
            <p class="mb-6">
              You have several choices regarding the information we collect and how it's used:
            </p>
            <ul class="list-disc pl-6 mb-6">
              <li class="mb-2"><strong>Account Information:</strong> You can review and change your personal information by logging into your account settings.</li>
              <li class="mb-2"><strong>Cookies:</strong> Most web browsers accept cookies by default. You can usually set your browser to remove or reject cookies.</li>
              <li class="mb-2"><strong>Communications:</strong> You can opt out of receiving promotional emails by following the instructions in those emails.</li>
            </ul>
          </div>

          <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">6. Data Security</h2>
            <p class="mb-6">
              We have implemented measures to secure your personal information from accidental loss and unauthorized access, use, alteration, and disclosure. However, the transmission of information via the internet is not completely secure, and we cannot guarantee the security of your personal information.
            </p>
          </div>

          <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">7. Children's Privacy</h2>
            <p class="mb-6">
              Our services are not intended for children under the age of 13, and we do not knowingly collect personal information from children under 13. If you are a parent or guardian and believe we have collected information from your child, please contact us.
            </p>
          </div>

          <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">8. Changes to Our Privacy Policy</h2>
            <p class="mb-6">
              We may update our Privacy Policy from time to time. If we make material changes, we will notify you by posting the new Privacy Policy on this page and, where appropriate, sending you an email notification.
            </p>
          </div>

          <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">9. International Data Transfers</h2>
            <p class="mb-6">
              Your information may be transferred to, and maintained on, computers located outside your state, province, country, or other governmental jurisdiction where the data protection laws may differ from those in your jurisdiction.
            </p>
          </div>

          <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">10. Contact Us</h2>
            <p>
              If you have questions about this Privacy Policy, please contact us at <a href="mailto:team@omnipotency.ai" class="text-brand-orange-500 hover:text-brand-orange-600 underline">team@omnipotency.ai</a>.
            </p>
          </div>
        </div>
      </div>
    </section>
</main>
