<?php
// sections/faq_content.php - FAQ section
?>
<!-- FAQ Section -->
<section id="faq" class="py-16 sm:py-24">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12 sm:mb-16">
      <p class="text-brand-orange-500 text-sm uppercase font-semibold tracking-wider mb-2">FREQUENTLY ASKED QUESTIONS</p>
      <h2 class="text-3xl sm:text-4xl font-semibold tracking-tight text-white mb-4">You ask? We <span class="italic text-brand-teal-400">answer.</span></h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6" id="faqContainer">
      
      <?php
      // Your actual FAQ items
      $faqs = [
          [
              'question' => "When will Omnipotency AI be available?",
              'answer' => "We're in open beta right now (since March 2025) and onboarding new users every week. General Availability (v1.0) is scheduled for September 2025. <a href='#hero' class='text-brand-teal-400 hover:underline'>Join the waitlist</a> and we'll give you early-bird perks."
          ],
          [
              'question' => "Which wellness modalities does Omnipotency AI support?",
              'answer' => "We're building Omnipotency AI to support a wide range of wellness practitioners including massage therapists, acupuncturists, yoga instructors, nutritionists, health coaches, and energy workers. Our flexible template system allows you to customize the platform for your specific modality."
          ],
          [
              'question' => "How is client data protected?",
              'answer' => "Client privacy and data security are paramount. Omnipotency AI uses industry-standard encryption, secure hosting, and strict access controls. We're designed to be HIPAA-compliant for practitioners who require it, and we never sell or share your client information with third parties. You can find more details in our <a href='" . BASE_URL . "/privacy-policy' class='text-brand-teal-400 hover:underline'>Privacy Policy</a>."
          ],
          [
              'question' => "How much will Omnipotency AI cost?",
              'answer' => "We keep it simple and usage-based:<br><br>• <strong>Inspire – €0/mo</strong> – up to 50 contacts and 150 monthly AI credits. Perfect for testing the waters or running a small side practice.<br>• <strong>Empower – €27/mo</strong> – up to 1000 contacts and 1000 AI credits. All automations unlocked, plus social media content planning.<br>• <strong>Transform – €97/mo</strong> – 2500 AI credits and unlimited contacts with hosted website, booking page and AI image generation.<br><br>Need a little extra one month? Add 150 additional AI credits for €9.97—unused add-on credits roll over, so you only ever pay for what you truly use. <a href='#pricing' class='text-brand-teal-400 hover:underline scroll-to-pricing'>See our pricing section for more details.</a>"
          ],
          [
              'question' => "Can I import my existing client data?",
              'answer' => "Yes! We've built an intuitive data migration tool that helps you import client information from spreadsheets, other CRMs, or practice management systems. Our onboarding team can provide guidance on preparing your data for smooth migration."
          ],
          [
              'question' => "What makes Omnipotency AI different from other CRMs?",
              'answer' => "Omnipotency AI isn't just an automation tool - it handles all your admin tasks and provides powerful marketing capabilities. We offer hyper-personalization, sentiment analysis, post performance tracking, A/B testing, and data insights. These are premium marketing features that are typically too expensive for small wellness businesses. Check out <a href='#pain-points' class='text-brand-teal-400 hover:underline'>the problems we solve</a> for wellness practitioners that other CRMs don't address."
          ],
          [
              'question' => "Do I need technical skills to use Omnipotency AI?",
              'answer' => "Not at all. We've designed Omnipotency AI to be intuitive even for practitioners who don't consider themselves \"tech-savvy.\" Our onboarding process includes personalized setup assistance, and we offer ongoing support through clear documentation, video tutorials, and responsive customer service."
          ],
          [
              'question' => "Is there a mobile app available?",
              'answer' => "Omnipotency AI is fully responsive and works beautifully on mobile devices through your web browser. A dedicated mobile app is on our roadmap for later in 2025, but you won't be missing functionality by using the mobile web version in the meantime."
          ]
      ];
      ?>

      <?php foreach ($faqs as $index => $faq): ?>
      <div class="faq-item rounded-3xl border border-slate-700/70 shadow-2xl transition-all duration-300 ease-in-out transform hover:scale-[1.01] hover:border-brand-teal-400/90 hover:border-2">
        <button class="w-full p-4 sm:p-5 text-left flex justify-between items-center focus:outline-none" data-faq-button>
          <h3 class="text-md sm:text-lg font-medium text-slate-100 group-hover:text-brand-teal-400"><?php echo htmlspecialchars($faq['question']); ?></h3>
          <div class="h-7 w-7 sm:h-8 sm:w-8 flex items-center justify-center rounded-full bg-slate-700/50 text-brand-teal-400 transition-transform duration-300 transform">
            <!-- Plus Icon -->
            <svg class="plus-icon w-4 h-4 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
            <!-- Minus Icon (initially hidden) -->
            <svg class="minus-icon w-4 h-4 sm:w-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
            </svg>
          </div>
        </button>
        <div class="faq-answer hidden px-4 sm:px-5 pb-5">
          <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
            <?php echo $faq['answer']; // Allow HTML for line breaks and links ?>
          </p>
        </div>
      </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>