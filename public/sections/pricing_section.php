<?php // public/sections/pricing_section.php ?>
<section id="pricing" class="py-16 sm:py-24 text-white relative overflow-hidden bg-gradient-to-br from-brand-green-900 via-brand-green-600 to-orange-500">
    <!-- Orange overlay with low opacity -->
    <div class="absolute inset-0 bg-orange-500/20 mix-blend-overlay"></div>
    <!-- Background pattern -->
    <div class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.1)_1px,transparent_1px)] bg-[length:20px_20px]"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 relative z-10">
            <p class="uppercase text-white text-md tracking-widest font-medium mb-2">PRICING</p>
            <h2 class="text-3xl font-bold tracking-tight text-teal-400 sm:text-4xl">Start <span class="text-orange-500">Free</span>, Grow Your Practice</h2>
            <p class="mt-4 text-lg text-gray-300 max-w-3xl mx-auto">Choose the plan that fits your journey. AI Credits unlock automation and insights, ensuring you focus on healing, not headaches. Purchased credits roll over!</p>
        </div>

        <div class="grid lg:grid-cols-3 gap-8 max-w-7xl mx-auto relative z-10"> <!-- Increased max-width slightly -->

            <!-- Inspire Tier -->
            <div class="flex flex-col bg-gradient-to-b from-teal-900/80 to-teal-950/90 backdrop-blur-sm rounded-xl border border-teal-700/30 shadow-lg hover:shadow-xl hover:border-2 hover:border-purple-500 transition-all duration-300 transform hover:-translate-y-1 overflow-hidden group relative">
                <!-- Orange glow effect behind card -->
                <div class="absolute inset-0 -z-10 bg-orange-500/20 blur-xl opacity-0 group-hover:opacity-30 transition-opacity duration-500 rounded-xl"></div>
                <div class="p-8 flex-grow">
                    <h3 class="text-2xl font-semibold text-teal-300 mb-2 relative inline-block">
                        Inspire
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-teal-400 group-hover:w-full transition-all duration-500"></span>
                    </h3>
                    <p class="text-gray-400 mb-4 h-12 text-sm">Essential tools to launch your practice and manage your first clients.</p>
                    <div class="flex items-baseline mb-6">
                        <p class="text-5xl font-bold text-white">€0</p>
                        <span class="text-gray-400 ml-1">/mo</span>
                    </div>
                    <p class="font-semibold text-teal-400 mb-4 text-sm">Includes 150 AI Credits / month</p>
                    <ul class="space-y-3 text-sm mb-6 feature-list">
                        <li class="flex items-start"><svg class="h-5 w-5 text-orange-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="text-gray-300">Up to 50 Contacts</span></li>
                        <li class="flex items-start"><svg class="h-5 w-5 text-orange-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="text-gray-300">Client Profiles & Notes</span></li>
                        <li class="flex items-start"><svg class="h-5 w-5 text-orange-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="text-gray-300">Manual Appointment Scheduling</span></li>
                        <li class="flex items-start"><svg class="h-5 w-5 text-orange-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="text-gray-300">Calendar Sync (Google, Outlook)</span></li>
                        <li class="flex items-start"><svg class="h-5 w-5 text-orange-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="text-gray-300">Stripe Payment Integration</span></li>
                        <!-- Hidden Features -->
                        <li class="feature-hidden hidden flex items-start"><svg class="h-5 w-5 text-orange-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="text-gray-300">Basic Task Management</span></li>
                        <li class="feature-hidden hidden flex items-start"><svg class="h-5 w-5 text-orange-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="text-gray-300">Data Import (CSV)</span></li>
                        <li class="feature-hidden hidden flex items-start"><svg class="h-5 w-5 text-orange-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="text-gray-300"><strong>AI Credit Use:</strong> ~50 Reminders OR 15 AI Email Drafts / mo</span></li>
                    </ul>
                    <button class="text-teal-400 text-sm hover:underline toggle-features-btn">See All Features</button>
                </div>
                <div class="px-8 py-6 bg-slate-800/50 mt-auto">
                    <a href="#waitlist-footer" class="block w-full py-3 px-4 text-center bg-orange-500 hover:bg-orange-600 text-white font-medium rounded-lg transition">Get Started Free</a>
                </div>
            </div>

            <!-- Empower Tier -->
            <div class="flex flex-col bg-gradient-to-b from-teal-800/80 to-teal-900/90 backdrop-blur-sm rounded-xl border-2 border-orange-500 shadow-2xl overflow-hidden relative group transform hover:-translate-y-1 transition-all duration-300 hover:border-2 hover:border-purple-500 z-20">
                <!-- Orange glow effect behind card -->
                <div class="absolute inset-0 -z-10 bg-orange-500/20 blur-xl opacity-0 group-hover:opacity-30 transition-opacity duration-500 rounded-xl"></div>
                <!-- Subtle shine effect -->
                <div class="absolute inset-0 bg-gradient-to-t from-orange-500/20 to-transparent opacity-0 group-hover:opacity-30 transition-opacity duration-500 rounded-xl"></div>
                 <div class="absolute top-0 right-0 -mt-3 -mr-3 z-10 animate-pulse">
                    <div class="w-0 h-0 border-l-[60px] border-l-transparent border-b-[60px] border-b-orange-500 transform rotate-[-45deg] translate-x-[-18px] translate-y-[18px] shadow-lg"></div>
                    <span class="absolute top-[28px] right-[6px] text-white text-xs font-bold transform rotate-45" style="transform-origin: center;">POPULAR</span>
                 </div>
                <div class="p-8 flex-grow">
                    <h3 class="text-2xl font-semibold text-orange-400 mb-2 relative inline-block">
                        Empower
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-orange-500 group-hover:w-full transition-all duration-500"></span>
                    </h3>
                     <p class="text-gray-400 mb-4 h-12 text-sm">Automate admin and marketing to save time and grow your client base.</p>
                    <div class="flex items-baseline mb-6">
                        <p class="text-5xl font-bold text-white">€27</p>
                        <span class="text-gray-400 ml-1">/mo</span>
                    </div>
                    <p class="font-semibold text-teal-400 mb-4 text-sm">Includes 1000 AI Credits / month</p>
                    <ul class="space-y-3 text-sm mb-6 feature-list">
                        <li class="flex items-start"><svg class="h-5 w-5 text-orange-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="text-gray-300">All Inspire Features</span></li>
                        <li class="flex items-start"><svg class="h-5 w-5 text-orange-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="text-gray-300">Up to 1000 Contacts</span></li>
                        <li class="flex items-start"><svg class="h-5 w-5 text-orange-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="text-gray-300">Workflow Automation (Reminders, Follow-ups)</span></li>
                        <li class="flex items-start"><svg class="h-5 w-5 text-orange-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="text-gray-300">AI SOAP Note Helper</span></li>
                        <li class="flex items-start"><svg class="h-5 w-5 text-orange-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="text-gray-300">Social Media Content Planner & AI Ideas</span></li>
                         <!-- Hidden Features -->
                        <li class="feature-hidden hidden flex items-start"><svg class="h-5 w-5 text-orange-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="text-gray-300">Basic Segmentation</span></li>
                        <li class="feature-hidden hidden flex items-start"><svg class="h-5 w-5 text-orange-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="text-gray-300">Built-in Email Marketing</span></li>
                        <li class="feature-hidden hidden flex items-start"><svg class="h-5 w-5 text-orange-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="text-gray-300">Communication Tracking</span></li>
                        <li class="feature-hidden hidden flex items-start"><svg class="h-5 w-5 text-orange-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="text-gray-300">Basic Reports & Dashboards</span></li>
                         <li class="feature-hidden hidden flex items-start"><svg class="h-5 w-5 text-orange-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="text-gray-300"><strong>AI Credit Use:</strong> Daily AI Notes, Emails, Social Posts (Text)</span></li>
                    </ul>
                     <button class="text-purple-400 text-sm hover:underline hover:text-purple-300 transition-colors duration-300 toggle-features-btn">See All Features</button>
                </div>
                <div class="px-8 py-6 bg-slate-800/50 mt-auto">
                    <a href="#waitlist-footer" class="block w-full py-3 px-4 text-center bg-teal-500 hover:bg-teal-600 text-white font-medium rounded-lg transition">Choose Empower</a>
                </div>
            </div>

            <!-- Transform Tier -->
            <div class="flex flex-col bg-gradient-to-b from-teal-900/80 to-teal-950/90 backdrop-blur-sm rounded-xl border border-teal-700/30 shadow-lg hover:shadow-xl hover:border-2 hover:border-purple-500 transition-all duration-300 transform hover:-translate-y-1 overflow-hidden group relative">
                <div class="p-8 flex-grow">
                    <h3 class="text-2xl font-semibold text-purple-300 mb-2 relative inline-block">
                        Transform
                        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-purple-400 group-hover:w-full transition-all duration-500"></span>
                    </h3>
                     <p class="text-gray-400 mb-4 h-12 text-sm">The complete platform to scale your practice with advanced AI and a professional web presence.</p>
                    <div class="flex items-baseline mb-6">
                        <p class="text-5xl font-bold text-white">€97</p>
                        <span class="text-gray-400 ml-1">/mo</span>
                    </div>
                    <p class="font-semibold text-teal-400 mb-4 text-sm">Includes 2500 AI Credits / month</p>
                     <ul class="space-y-3 text-sm mb-6 feature-list">
                        <li class="flex items-start"><svg class="h-5 w-5 text-orange-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="text-gray-300">All Empower Features</span></li>
                        <li class="flex items-start"><svg class="h-5 w-5 text-orange-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="text-gray-300">Unlimited Contacts</span></li>
                        <li class="flex items-start"><svg class="h-5 w-5 text-orange-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><strong class="text-white">Hosted Website & Auto-Booking Page</strong></li>
                        <li class="flex items-start"><svg class="h-5 w-5 text-orange-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="text-gray-300">AI Social Media Image Generation</span></li>
                        <li class="flex items-start"><svg class="h-5 w-5 text-orange-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="text-gray-300">Advanced AI Analytics & Insights</span></li>
                         <!-- Hidden Features -->
                         <li class="feature-hidden hidden flex items-start"><svg class="h-5 w-5 text-orange-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="text-gray-300">Full Customization Options</span></li>
                         <li class="feature-hidden hidden flex items-start"><svg class="h-5 w-5 text-orange-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="text-gray-300">Advanced Segmentation</span></li>
                         <li class="feature-hidden hidden flex items-start"><svg class="h-5 w-5 text-orange-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="text-gray-300">Membership & Loyalty Engine</span></li>
                         <li class="feature-hidden hidden flex items-start"><svg class="h-5 w-5 text-orange-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="text-gray-300">Client Portal Access</span></li>
                         <li class="feature-hidden hidden flex items-start"><svg class="h-5 w-5 text-orange-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="text-gray-300">Social Media Auto-Posting</span></li>
                         <li class="feature-hidden hidden flex items-start"><svg class="h-5 w-5 text-orange-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="text-gray-300">HIPAA / GDPR Compliance Tools</span></li>
                         <li class="feature-hidden hidden flex items-start"><svg class="h-5 w-5 text-orange-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="text-gray-300">Priority Onboarding & Support</span></li>
                         <li class="feature-hidden hidden flex items-start"><svg class="h-5 w-5 text-orange-400 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="text-gray-300"><strong>AI Credit Use:</strong> Heavy daily AI including Images, Insights</span></li>
                     </ul>
                     <button class="text-teal-400 text-sm hover:underline toggle-features-btn">See All Features</button>
                </div>
                <div class="px-8 py-6 bg-slate-800/50 mt-auto">
                    <a href="#waitlist-footer" class="block w-full py-3 px-4 text-center bg-teal-500 hover:bg-teal-600 text-white font-medium rounded-lg transition">Choose Transform</a>
                </div>
            </div>

        </div>

        <!-- Credit Explanation -->
        <div class="mt-16 pt-8 border-t border-slate-700 text-center max-w-2xl mx-auto">
            <h4 class="text-lg font-semibold text-white mb-3">What are AI Credits?</h4>
            <p class="text-gray-400 text-sm mb-4">
                Credits cover AI actions like generating social posts, summarizing notes, or drafting emails. Basic CRM functions don't use credits. Your plan includes monthly credits; purchased top-ups (<strong class="text-teal-400">150 for €9.97</strong>) roll over!
            </p>
            <p class="text-gray-400 text-sm">
                 (<a href="#faq" class="text-teal-400 underline hover:text-teal-300">See FAQ for detailed examples</a>) <!-- Link to your FAQ section -->
            </p>
        </div>

    </div>
</section>
<!-- END Pricing Section -->