<?php // public/sections/our_story.php ?>
<section id="our-story" class="py-16 sm:py-24">
  <div class="max-w-6xl mx-auto px-6 lg:px-8">
    <div class="max-w-3xl mx-auto text-center mb-12 md:mb-16">
      <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-brand-orange-500">Our Story</h2>
      <p class="mt-4 text-lg text-gray-300">
          From personal experience to a passion for empowering healers.
      </p>
    </div>

    <div class="grid md:grid-cols-2 gap-10 md:gap-16 items-center">
      <div class="relative group">
        <div class="absolute -inset-2 bg-gradient-to-br from-brand-teal-400/30 to-brand-orange-500/30 rounded-lg blur-xl opacity-0 group-hover:opacity-75 transition-opacity duration-500"></div>
        <img src="<?php echo BASE_URL; ?>/assets/img/founder-yoga.png" alt="Founder with wellness practitioners" 
             class="relative rounded-lg shadow-xl w-full max-w-md mx-auto transform transition-transform duration-500 group-hover:scale-105">
      </div>
      <div class="text-gray-300 text-left">
        <h3 class="text-2xl lg:text-3xl font-semibold text-white mb-6">From Frustration to Innovation</h3>
        <div class="space-y-4 prose prose-lg prose-invert max-w-none">
            <p>
              For a decade Peter James Blizzard watched gifted therapists drown in spreadsheets, no-show texts and pricey "enterprise" CRMs.  
              So in 2025, fresh from his own rehabilitation journey, he decided it was time to build software that genuinely <em>feels good</em> to use.
            </p>
            <p>
              Whether it's bookings, SOAP notes or gentle follow-ups, Omnipotency AI carries the busy-work so practitioners can stay fully present—with their clients <em>and</em> themselves. Technology should serve the healer, never the other way round.
            </p>
            <p>
              "I kept meeting brilliant healers who spent their evenings typing, not healing."
            </p>
            
            <div class="my-8 md:my-10 relative">
              <div class="absolute -inset-1 bg-gradient-to-r from-brand-teal-400/30 to-brand-orange-500/40 rounded-lg blur opacity-75"></div>
              <blockquote class="relative p-6 md:p-8 bg-gray-800/80 rounded-lg border-l-4 border-brand-orange-500 shadow-xl">
                <svg class="absolute text-brand-teal-400/20 h-16 w-16 top-4 left-4 transform -translate-x-1/3 -translate-y-1/3" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                  <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                </svg>
                <p class="relative text-xl md:text-2xl font-medium text-white leading-tight">
                  Every product I tried was either too clunky, too corporate, or too expensive for a solo practice.
                </p>
                <footer class="mt-4">
                  <p class="text-sm text-right text-brand-orange-400">— Peter James Blizzard, Founder</p>
                </footer>
              </blockquote>
            </div>
            
            <p>
              That's when the idea for Omnipotency AI was born – a CRM that understands the unique needs of wellness professionals and leverages AI to handle the administrative load, intuitively.
            </p>
        </div>
      </div>
    </div>
  </div>
</section>
