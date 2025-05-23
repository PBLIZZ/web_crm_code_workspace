<?php
// /Users/peterjamesblizzard/projects/web_omnipotency_ai/views/partials/footer.php
?>

<!-- Footer -->
<footer class="bg-[#0d270f] py-12 px-4">
  <div class="container mx-auto max-w-7xl">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-10 gap-8">
      
      <!-- Column 1: Logo and Text -->
      <div class="lg:col-span-3">
        <!-- Logo with controlled size -->
        <div class="relative mb-6 inline-block">
          <div class="absolute inset-0 bg-gradient-to-r from-teal-500/30 to-orange-500/30 blur-lg rounded-full"></div>
          <img src="/assets/img/logo.png" alt="Omnipotency AI logo" class="h-24 w-auto relative z-10">
        </div>
        <h3 class="font-bold text-xl text-white mb-2">Omnipotency AI</h3>
        <p class="text-slate-400 mb-4 text-sm">
          AI-powered CRM designed specifically for wellness practitioners. Automate admin work and focus on what matters most—your clients.
        </p>
        <!-- Social Links -->
        <div class="flex space-x-4 mb-6">
          <a href="https://www.linkedin.com/in/peterblizzard/" class="text-slate-400 hover:text-white transition">
            <span class="sr-only">LinkedIn</span>
            <svg width="22" height="22" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
            </svg>
          </a>
          <a href="https://x.com/jamietormenta" class="text-slate-400 hover:text-white transition">
            <span class="sr-only">X</span>
            <svg width="22" height="22" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
            </svg>
          </a>
          <a href="https://github.com/PBLIZZ" class="text-slate-400 hover:text-white transition">
            <span class="sr-only">GitHub</span>
            <svg width="22" height="22" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/>
            </svg>
          </a>
        </div>
      </div>
      
      <!-- Column 2: Quick Links -->
      <div class="pl-4 md:pl-8 lg:pl-6 lg:col-span-2">
        <h3 class="text-white font-semibold mb-4 text-lg">Quick Links</h3>
        <nav class="flex flex-col space-y-2">
          <a href="/#features-overview" class="text-[#FF8700] hover:text-white transition no-underline">Features</a>
          <a href="/#pricing" class="text-[#FF8700] hover:text-white transition no-underline">Pricing</a>

          <a href="/about#our-story" class="text-[#FF8700] hover:text-white transition no-underline">About Us</a>
          <a href="/about#team" class="text-[#FF8700] hover:text-white transition no-underline">Our Team</a>
          <a href="/about#mission-vision-values" class="text-[#FF8700] hover:text-white transition no-underline">Our Values</a>
          <a href="/beta" class="text-[#FF8700] hover:text-white transition no-underline">Beta Programme</a>
        </nav>
      </div>
      
      <!-- Column 3: Resources -->
      <div class="lg:pl-4 lg:col-span-2">
        <h3 class="text-white font-semibold mb-4 text-lg mt-6">Resources</h3>
        <nav class="flex flex-col space-y-2">
          <a href="/docs" class="text-[#FF8700] hover:text-white transition no-underline">Docs</a>
          <a href="/blog" class="text-[#FF8700] hover:text-white transition no-underline">Blog</a>
          <a href="/resources" class="text-[#FF8700] hover:text-white transition no-underline">Resources</a>
          <a href="/#faq" class="text-[#FF8700] hover:text-white transition no-underline">FAQ</a>
          <a href="/contact" class="text-[#FF8700] hover:text-white transition no-underline">Contact</a>
          <a href="/investors" class="text-[#FF8700] hover:text-white transition no-underline">Investors</a>
        </nav>   
      </div>
      
      <!-- Column 4: Waitlist Form -->
      <div class="lg:col-span-3">
        <h3 class="mb-6">
          <span class="text-[#14B8A6] font-bold text-xl">Omnipotency AI's</span> 
          <span class="text-[#FF8700] font-bold text-xl block">Wellness CRM</span> 
          <span class="text-white font-bold text-xl block">is Coming Soon</span>
        </h3>
        
        <p class="text-white text-sm mb-4">Join the waitlist for priority access and beta perks!</p>
        
        <form id="footerWaitlistForm" class="mb-4 max-w-md">
          <div class="flex flex-row shadow-lg rounded-lg overflow-hidden">
            <input 
              type="email" 
              name="email" 
              placeholder="Enter your email" 
              required 
              class="w-[60%] bg-white p-3 outline-none text-gray-900 text-sm" 
            />
            <button 
              id="waitlistButton"
              type="submit"
              class="w-[40%] whitespace-nowrap bg-gradient-to-r from-[#14B8A6] to-[#FF8700] text-white font-medium p-3 transition-all duration-300 ease-in-out text-sm px-4 sm:px-6"
            >
              Join Waitlist
            </button>
          </div>
          <p id="footerWaitlistSuccess" class="text-center text-sm text-green-400 mt-3 hidden">🎉 Thanks! We'll keep you updated.</p>
          <p id="footerWaitlistError" class="text-center text-sm text-red-400 mt-3 hidden"></p>
        </form>
      </div>
    </div>
    
    <!-- Footer Bottom - Copyright and Links -->
    <div class="mt-8 pt-6 border-t border-white/10 text-center">
      <div class="flex flex-col sm:flex-row justify-between items-center text-slate-400 text-xs">
        <p>&copy; 2025 Omnipotency AI. All rights reserved.</p>
        <div class="flex gap-4 mt-3 sm:mt-0">
          <a href="/privacy-policy" class="text-slate-400 hover:text-white transition no-underline">Privacy Policy</a>
          <a href="/terms-of-service" class="text-slate-400 hover:text-white transition no-underline">Terms of Service</a>
          <a href="/cookies" class="text-slate-400 hover:text-white transition no-underline">Cookies</a>
        </div>
      </div>
    </div>
  </div>

<!-- Back to Top Button -->
<button id="backToTopBtn" title="Go to top"
        class="fixed bottom-5 right-5 p-3 bg-brand-orange-500 text-white rounded-full shadow-lg hover:bg-brand-orange-600 transition-opacity duration-300 opacity-0 pointer-events-none z-50">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
    </svg>
</button>
</footer>

