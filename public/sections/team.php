<?php // public/sections/team.php ?>
<section id="team" class="py-16 sm:py-24">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="max-w-3xl mx-auto text-center mb-12 md:mb-16">
      <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-brand-teal-400">Meet the Team</h2>
      <p class="mt-4 text-lg text-gray-300">
        The passionate people behind Omnipotency AI, committed to transforming wellness technology.
      </p>
    </div>

    <div class="grid md:grid-cols-2 gap-8 lg:gap-12">
      <!-- Peter -->
      <div class="p-8 rounded-3xl text-center border border-white/70 shadow-md hover:shadow-xl hover:border-brand-orange-500/90 hover:border-2 transition-all duration-300 ease-in-out transform hover:scale-[1.02]">
        <div class="relative mx-auto w-24 h-24 mb-6 group">
          <div class="absolute inset-0 rounded-full bg-gradient-to-br from-brand-orange-400/60 to-brand-orange-500/30 opacity-0 group-hover:opacity-100 blur-md transition-opacity duration-300"></div>
          <img src="<?php echo BASE_URL; ?>/assets/img/peter blizzard copy 2.png" alt="Peter James Blizzard" 
               class="w-20 h-20 rounded-full mx-auto object-cover relative shadow-lg transition-transform duration-300 group-hover:scale-105">
        </div>
        <h3 class="text-xl font-semibold text-white mb-1">Peter James Blizzard</h3>
        <p class="text-brand-orange-400 mb-4">Founder & CEO</p>
        <p class="text-gray-300 text-sm leading-relaxed">
        Massage therapist for 25 years and yoga teacher for over a decade, Peter spent his career guiding clients toward body–mind balance before a series of health setbacks nudged him off the treatment table and into tech. Living with ADHD and an ileostomy, he channelled his hyper-focus into night-time coding sprints, open-source contributions, and—eventually—Omnipotency AI.

        <p class="text-gray-300 text-sm leading-relaxed mt-3">
        What started as a coping mechanism soon became a calling: to build the tools he wished he’d had as a practitioner. Today, Peter is the founder of Omnipotency AI, on a mission to give solo wellness professionals automation superpowers—so they can grow their income while staying fully present with their clients.        </p>
        </p>
      </div>

      <!-- We Are Hiring Section -->
      <div class="p-8 rounded-3xl border border-white/70 shadow-md hover:shadow-xl hover:border-brand-teal-400/90 hover:border-2 transition-all duration-300 ease-in-out transform hover:scale-[1.02]">
        <h3 class="text-2xl font-semibold text-white mb-8 text-center">We're Growing Our Team!</h3>
        
        <div class="space-y-6">
            <!-- Full Stack Developer Role -->
            <div class="opacity-90 hover:opacity-100 transition-opacity duration-300">
              <div class="flex items-start mb-2">
                <div class="shrink-0 mr-3 pt-1">
                  <svg class="w-5 h-5 text-brand-orange-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" /></svg>
                </div>
                <h4 class="text-lg font-medium text-white">Full Stack Software Developer</h4>
              </div>
              <p class="text-gray-400 text-sm ml-8 mb-2">
                Talented developer with data science experience to help build our AI-powered platform and shape our core product.
              </p>
              <a href="mailto:team@omnipotency.ai?subject=Full Stack Developer Inquiry" class="ml-8 text-brand-teal-400 hover:text-brand-orange-500 text-sm font-medium transition-colors duration-200">
                Apply Now →
              </a>
            </div>
            
            <!-- Relationship Manager Role -->
            <div class="opacity-90 hover:opacity-100 transition-opacity duration-300">
              <div class="flex items-start mb-2">
                 <div class="shrink-0 mr-3 pt-1">
                  <svg class="w-5 h-5 text-brand-orange-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" /></svg>
                </div>
                <h4 class="text-lg font-medium text-white">Relationship Manager</h4>
              </div>
              <p class="text-gray-400 text-sm ml-8 mb-2">
                Influential individual to manage key relationships with investors, customers, and partners in the wellness tech ecosystem.
              </p>
              <a href="mailto:team@omnipotency.ai?subject=Relationship Manager Inquiry" class="ml-8 text-brand-teal-400 hover:text-brand-orange-500 text-sm font-medium transition-colors duration-200">
                Inquire Here →
              </a>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
