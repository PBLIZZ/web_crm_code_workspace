<?php
// sections/beta_waitlist_form_content.php
// Beta waitlist form section
?>
<!-- Beta Tester Waitlist Form -->
<section id="beta-list" class="py-16 sm:py-24"> <!-- Removed section-dark, section bg is transparent -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-3xl mx-auto text-center mb-12 sm:mb-16">
      <h2 class="text-3xl font-semibold tracking-tight text-white sm:text-4xl">
        Join Our <span class="text-brand-teal-400">Beta Shapers</span> Program
      </h2>
      <p class="mt-4 text-lg text-slate-300">
        Be among the first to experience how Omnipotency AI can revolutionize your wellness business and help us build the perfect tool.
      </p>
    </div>
    
    <div class="grid md:grid-cols-2 gap-8 lg:gap-12 items-start">
      <!-- Left Column: Reinforcing Points -->
      <div class="bg-slate-800/60 backdrop-blur-sm p-6 md:p-8 rounded-xl border border-slate-700/70 shadow-xl flex flex-col h-full">
        <div class="flex items-start mb-4">
          <div class="bg-brand-orange-500/20 p-2 rounded-full mr-3 sm:mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 sm:w-6 sm:h-6 text-brand-orange-400">
              <path stroke-linecap="round" stroke-linejoin="round" d="M16.464 9.929l-5.151 5.152-2.363-2.364m9.45-2.735a9 9 0 11-12.728 0 9 9 0 0112.728 0z" /> <!-- Different checkmark style -->
            </svg>
          </div>
          <h3 class="text-lg sm:text-xl font-semibold text-white">Exclusive Early Adopter Benefits</h3>
        </div>
        <p class="text-slate-300 mb-6 text-sm sm:text-base">
          Spots are limited. Early adopters get lifetime discounts, priority access, and direct influence on product development.
        </p>
        
        <div class="space-y-3 text-sm sm:text-base mb-6">
          <div class="flex items-start">
            <div class="flex-shrink-0 h-5 w-5 sm:h-6 sm:w-6 rounded-full bg-brand-teal-400/20 flex items-center justify-center mt-0.5 sm:mt-1 mr-2 sm:mr-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 sm:h-4 sm:w-4 text-brand-teal-400" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
            </div>
            <p class="text-slate-200"><strong class="font-medium text-brand-orange-400">50% lifetime discount</strong> on any paid plan</p>
          </div>
          <div class="flex items-start">
            <div class="flex-shrink-0 h-5 w-5 sm:h-6 sm:w-6 rounded-full bg-brand-teal-400/20 flex items-center justify-center mt-0.5 sm:mt-1 mr-2 sm:mr-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 sm:h-4 sm:w-4 text-brand-teal-400" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
            </div>
            <p class="text-slate-200">Priority access to beta & new features</p>
          </div>
          <div class="flex items-start">
            <div class="flex-shrink-0 h-5 w-5 sm:h-6 sm:w-6 rounded-full bg-brand-teal-400/20 flex items-center justify-center mt-0.5 sm:mt-1 mr-2 sm:mr-3">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 sm:h-4 sm:w-4 text-brand-teal-400" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
              </svg>
            </div>
            <p class="text-slate-200">Direct influence on product development</p>
          </div>
        </div>
        
        <div class="flex items-center space-x-3 mt-auto pt-4 border-t border-slate-700">
          <div class="flex -space-x-2">
            <img src="<?php echo BASE_URL; ?>/assets/img/avatar-1.png" alt="User" class="w-8 h-8 rounded-full border-2 border-slate-600 object-cover">
            <img src="<?php echo BASE_URL; ?>/assets/img/avatar-2.png" alt="User" class="w-8 h-8 rounded-full border-2 border-slate-600 object-cover">
            <img src="<?php echo BASE_URL; ?>/assets/img/avatar-3.png" alt="User" class="w-8 h-8 rounded-full border-2 border-slate-600 object-cover">
          </div>
          <span class="text-xs sm:text-sm text-slate-400">Join 200+ practitioners already on the waitlist</span>
        </div>
      </div>
      
      <!-- Right Column: Form -->
      <div class="order-1 md:order-2">
        <div class="bg-white dark:bg-slate-800 rounded-xl shadow-2xl overflow-hidden p-6 md:p-8">
            <div class="text-center mb-6">
              <h3 class="text-2xl font-bold text-slate-900 dark:text-white">Reserve Your Spot</h3>
              <p class="text-slate-500 dark:text-slate-400 mt-1 text-sm">No obligation, help shape the future.</p>
            </div>
            
            <form id="betaWaitlistForm" method="post" class="space-y-5"> <!-- Changed ID to match main.js handleFormSubmit -->
              <div>
                <label for="waitlist-name" class="block text-sm font-medium text-slate-700 dark:text-slate-200 text-left mb-1">Full Name</label>
                <div class="relative">
                  <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-400 dark:text-slate-500" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                    </svg>
                  </div>
                  <input type="text" id="waitlist-name" name="name" required class="pl-10 block w-full rounded-lg border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700/30 text-slate-900 dark:text-slate-100 shadow-sm focus:border-brand-orange-500 focus:ring-brand-orange-500 sm:text-sm" placeholder="Your name">
                </div>
              </div>
              
              <div>
                <label for="waitlist-email" class="block text-sm font-medium text-slate-700 dark:text-slate-200 text-left mb-1">Email Address</label>
                <div class="relative">
                  <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-400 dark:text-slate-500" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                      <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                    </svg>
                  </div>
                  <input type="email" id="waitlist-email" name="email" required class="pl-10 block w-full rounded-lg border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700/30 text-slate-900 dark:text-slate-100 shadow-sm focus:border-brand-orange-500 focus:ring-brand-orange-500 sm:text-sm" placeholder="you@example.com">
                </div>
              </div>
              
              <div>
                <label for="waitlist-practice" class="block text-sm font-medium text-slate-700 dark:text-slate-200 text-left mb-1">Practice Type</label>
                <div class="relative">
                  <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-400 dark:text-slate-500" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h12a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm3.293 1.293a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 01-1.414-1.414L7.586 10 5.293 7.707a1 1 0 010-1.414zM11 12a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd" />
                    </svg>
                  </div>
                  <select id="waitlist-practice" name="practice_type" required class="pl-10 block w-full rounded-lg border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700/30 text-slate-900 dark:text-slate-100 shadow-sm focus:border-brand-orange-500 focus:ring-brand-orange-500 sm:text-sm">
                    <option value="" selected disabled class="text-slate-500">Select your practice type</option>
                    <option value="massage" class="text-slate-700 dark:text-slate-200">Massage Therapy</option>
                    <option value="acupuncture" class="text-slate-700 dark:text-slate-200">Acupuncture</option>
                    <option value="yoga" class="text-slate-700 dark:text-slate-200">Yoga Instruction</option>
                    <option value="nutrition" class="text-slate-700 dark:text-slate-200">Nutrition</option>
                    <option value="coaching" class="text-slate-700 dark:text-slate-200">Health Coaching</option>
                    <option value="energy" class="text-slate-700 dark:text-slate-200">Energy Work</option>
                    <option value="other" class="text-slate-700 dark:text-slate-200">Other</option>
                  </select>
                </div>
              </div>
              
              <div>
                <label for="waitlist-message" class="block text-sm font-medium text-slate-700 dark:text-slate-200 text-left mb-1">What are you looking for in a CRM? <span class="text-slate-400 dark:text-slate-500">(Optional)</span></label>
                <textarea id="waitlist-message" name="message" rows="3" class="block w-full rounded-lg border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-700/30 text-slate-900 dark:text-slate-100 shadow-sm focus:border-brand-orange-500 focus:ring-brand-orange-500 sm:text-sm" placeholder="Tell us what's important for you..."></textarea>
              </div>
              
              <div>
                <p id="betaWaitlistError" class="text-red-500 dark:text-red-400 text-center mb-3 hidden text-sm"></p>
                <p id="betaWaitlistSuccess" class="text-green-500 dark:text-green-400 text-center mb-3 hidden text-sm">🎉 Thank you for joining our Beta Shapers Program! We'll be in touch soon.</p>
                <button type="submit" class="w-full py-3 px-4 bg-brand-orange-500 hover:bg-brand-orange-600 text-white font-semibold rounded-lg shadow-md transform transition-all duration-150 ease-in-out hover:scale-[1.02] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white dark:focus:ring-offset-slate-800 focus:ring-brand-orange-500">
                  Become a Beta Shaper
                </button>
              </div>
            </form>
            
            <p class="text-center text-xs sm:text-sm text-slate-500 dark:text-slate-400 mt-6">
              By joining, you agree to our 
              <a href="<?php echo BASE_URL; ?>/privacy-policy" class="text-brand-teal-600 dark:text-brand-teal-400 hover:underline">Privacy Policy</a> 
              and 
              <a href="<?php echo BASE_URL; ?>/terms-of-service" class="text-brand-teal-600 dark:text-brand-teal-400 hover:underline">Terms of Service</a>.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
