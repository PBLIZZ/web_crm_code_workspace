<?php // public/sections/hero.php ?>
<section id="hero" class="relative h-auto max-h-screen flex items-center justify-center overflow-hidden bg-brand-green-800 text-white">
    <!-- Background Gradient/Image Layer -->
    <div class="absolute inset-0 bg-gradient-to-br from-brand-green-800 via-brand-green-700 to-brand-dark-base opacity-75 z-0"></div>
    
    <!-- Decorative Blurs (behind content) -->
    <div class="absolute -top-1/4 -left-1/4 w-1/2 h-1/2 md:w-1/3 md:h-1/3 bg-brand-teal-400 rounded-full filter blur-3xl opacity-20 animate-[pulse_8s_cubic-bezier(0.4,0,0.6,1)_infinite] z-0"></div>
    <div class="absolute -bottom-1/4 -right-1/4 w-1/2 h-1/2 md:w-1/3 md:h-1/3 bg-brand-orange-500 rounded-full filter blur-3xl opacity-15 animate-[pulse_10s_cubic-bezier(0.4,0,0.6,1)_infinite_2s] z-0"></div>

    <!-- Content Container -->
    <div class="relative w-full max-w-none px-6 sm:px-12 lg:px-24 py-8 sm:py-10 md:py-12 lg:py-16 z-10"> <!-- Increased padding, removed max-w-7xl -->
        
        <div class="flex flex-col md:flex-row items-center justify-between gap-4 sm:gap-6 md:gap-8 lg:gap-12"> <!-- Main flex container for text and image -->
            
            <!-- Text Content Column (takes more space initially, image is positioned) -->
            <div class="w-full lg:w-4/5 xl:w-2/3 text-center lg:text-left space-y-4 sm:space-y-5 md:space-y-6 lg:space-y-8">
                <h1 class="text-4xl sm:text-4xl md:text-4xl lg:text-5xl font-extrabold tracking-tight leading-tight">
                    The <span class="text-brand-teal-400">AI-Powered CRM</span>
                    for <span class="text-brand-orange-500">Wellness Practitioners</span>
                    that Gets It <span class="text-brand-teal-400">Done</span>
                </h1>
                
                <p class="text-lg sm:text-sm md:text-base lg:text-xl text-gray-300 max-w-xl mx-auto lg:mx-0">
                    The only CRM built for wellness pros. Automate admin & marketing, so you can focus on client relationships and growing your practice.
                </p>
                
                <!-- Hero Waitlist Form -->
                <div class="pt-4 max-w-md mx-auto lg:mx-0"> <!-- Constrain form width -->
                    <form id="heroWaitlistForm" class="flex flex-row rounded-lg shadow-xl overflow-hidden border border-slate-700 focus-within:ring-2 focus-within:ring-brand-teal-400 focus-within:border-brand-teal-400 transition-all duration-300" novalidate>
                        <label for="hero-email" class="sr-only">Email address</label>
                        <input 
                            type="email" 
                            name="email" 
                            id="hero-email"
                            placeholder="Enter your email" 
                            required
                            aria-label="Email address for waitlist"
                            class="flex-grow w-[60%] bg-slate-800 text-white placeholder-gray-400 px-3 sm:px-5 py-3.5 text-sm sm:text-base outline-none border-none ring-0 focus:ring-0" 
                        >
                        <button 
                            type="submit" 
                            title="Be the first to know when we launch. No spam, ever."
                            class="w-[40%] whitespace-nowrap bg-gradient-to-r from-brand-teal-400 to-brand-orange-500 hover:from-brand-teal-500 hover:to-brand-orange-600 text-white px-3 sm:px-6 py-3.5 text-sm sm:text-base font-semibold transition-all duration-300 ease-in-out transform hover:scale-105"
                        >
                            Join Waitlist
                        </button>
                    </form>
                    <p id="heroWaitlistSuccess" class="text-center lg:text-left text-sm text-green-400 mt-3 hidden">🎉 Thanks! We'll keep you in the loop.</p>
                    <p id="heroWaitlistError" class="text-center lg:text-left text-sm text-red-400 mt-3 hidden"></p>
                </div>
            </div>

            <!-- Image Column (positioned to be symmetrical with heading) -->
            <div class="w-full lg:w-2/5 flex justify-center lg:justify-center self-center lg:self-center mt-10 lg:mt-6 relative hidden lg:flex max-w-[300px] lg:max-w-none mx-auto"> <!-- Adjusted positioning for better symmetry -->
                <img src="/assets/img/woman-smiling-about.png" 
                     alt="Wellness professional using Omnipotency AI" 
                     class="relative rounded-lg shadow-2xl w-full sm:w-1/2 md:w-1/2 lg:w-auto max-h-[50vh] sm:max-h-[50vh] md:max-h-[50vh] lg:max-h-[80vh] xl:max-h-[600px] object-contain z-10 floating-animation">
                     <!-- Doubled max heights, added full width on mobile, 2/3 width on small screens -->
            </div>
        </div>
    </div>
</section>