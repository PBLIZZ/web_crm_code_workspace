<?php
// sections/beta_benefits_content.php
// Beta tester benefits section
?>
<!-- Beta Tester Benefits -->
<section id="beta" class="py-16 sm:py-24"> <!-- Removed section-accent, section bg is transparent -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid md:grid-cols-2 gap-12 items-center">
      <div class="relative">
        <img src="<?php echo BASE_URL; ?>/assets/img/therapist-with-tablet.png" alt="Therapist using Omnipotency AI" class="w-full max-w-md mx-auto rounded-lg shadow-2xl relative z-10">
        <!-- Optional: Add a subtle glow behind the image -->
        <div class="absolute inset-0 -m-4 rounded-lg bg-brand-orange-500/10 filter blur-2xl opacity-75 -z-0 hidden md:block"></div>
        <!-- The animate-float class is fine if you've defined it in your CSS. If not, remove or define it.
             Example CSS for animate-float:
             @keyframes floatAnimation {
               0%, 100% { transform: translateY(0); }
               50% { transform: translateY(-10px); }
             }
             .animate-float { animation: floatAnimation 3s ease-in-out infinite; }
        -->
      </div>
      
      <div>
        <h2 class="text-3xl font-semibold text-white sm:text-4xl mb-6">
          Become an <span class="text-brand-orange-500">Omnipotency AI</span> Beta Shaper
        </h2>
        <p class="text-slate-300 text-lg mb-8">
          Help us craft the future of wellness CRMs. As a Beta Shaper, you'll get exclusive access, influence our roadmap, and enjoy lifetime perks:
        </p>
        
        <ul class="space-y-4 text-slate-200">
          <li class="flex items-start">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-brand-teal-400 mr-3 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
            </svg>
            <span>Free access during the entire beta period</span>
          </li>
          <li class="flex items-start">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-brand-teal-400 mr-3 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
            </svg>
            <span><strong class="text-brand-orange-400">50% lifetime discount</strong> on any plan after launch</span>
          </li>
          <li class="flex items-start">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-brand-teal-400 mr-3 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
            </svg>
            <span>Direct line to our development & product team</span>
          </li>
          <li class="flex items-start">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-brand-teal-400 mr-3 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
            </svg>
            <span>Influence feature development and priorities</span>
          </li>
          <li class="flex items-start">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-brand-teal-400 mr-3 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
            </svg>
            <span>Priority support and personalized onboarding</span>
          </li>
          <li class="flex items-start">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-brand-teal-400 mr-3 flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
            </svg>
            <span>Early access to new features before general release</span>
          </li>
        </ul>
        
        <div class="mt-10">
          <a href="#beta-list" class="inline-flex items-center justify-center bg-brand-orange-500 hover:bg-brand-orange-600 text-white font-semibold py-3 px-8 rounded-lg shadow-md transition-all duration-150 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-slate-900 focus:ring-brand-orange-500">
            Join the Beta Shapers
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
