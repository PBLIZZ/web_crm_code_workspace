<?php // public/sections/features_overview.php ?>
<section id="features-overview" class="relative overflow-hidden py-16 sm:py-24">
    <!-- Background elements removed for page-wide background -->

    <div class="relative max-w-7xl mx-auto px-6 lg:px-8 z-10">
        <div class="grid grid-cols-1 md:grid-cols-12 md:gap-x-6 lg:gap-x-12 xl:gap-x-16 items-start">

            <!-- Left Column: Textual Content -->
            <div class="md:col-span-4 lg:col-span-4 text-center md:text-left mb-12 md:mb-0 md:pb-8 lg:pb-0">
                <h2 class="text-base font-semibold uppercase tracking-wider text-brand-orange-500 mb-2">Core Capabilities</h2>
                <p class="text-3xl sm:text-4xl lg:text-4xl xl:text-5xl font-semibold tracking-tight text-white mb-6">
                    Your AI <span class="text-brand-orange-500 font-semibold">Engine</span> for <span class="text-brand-teal-400 font-semibold">Effortless</span> Practice Management.
                </p>
                <p class="text-lg text-gray-300 mb-8 max-w-lg mx-auto lg:mx-0">
                    Discover how Omnipotency AI streamlines every facet of your wellness business, freeing you to focus on healing and growth.
                </p>
                <!-- Optional CTA if needed, or let cards be the focus -->
                <!-- <a href="about.php#beta-list" 
                   class="inline-block bg-brand-teal-400 hover:bg-brand-teal-500 text-brand-dark-base px-8 py-3 rounded-lg font-semibold shadow-md transition duration-150 ease-in-out no-underline text-base">
                    See Demo
                </a> -->
            </div>

            <!-- Right Column: Feature Card Carousel -->
            <div class="md:col-span-8 lg:col-span-8 pt-2 md:pt-0">
                <div class="relative">
                    <!-- Navigation: Place outside the overflow-hidden div if they are larger than card group -->
                    <button id="prevFeatureCard" aria-label="Previous feature" class="absolute left-0 top-1/2 transform -translate-y-1/2 -translate-x-1 xs:-translate-x-2 sm:-translate-x-8 z-20 bg-slate-700/70 hover:bg-brand-orange-500 text-brand-orange-500 hover:text-white rounded-full p-2 sm:p-2.5 shadow-lg focus:outline-none transition-colors">
                        <svg class="h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
                    </button>
                    <button id="nextFeatureCard" aria-label="Next feature" class="absolute right-0 top-1/2 transform -translate-y-1/2 translate-x-1 xs:translate-x-2 sm:translate-x-8 z-20 bg-slate-700/70 hover:bg-brand-orange-500 text-brand-orange-500 hover:text-white rounded-full p-2 sm:p-2.5 shadow-lg focus:outline-none transition-colors">
                        <svg class="h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                    </button>
                    
                    <div class="overflow-hidden rounded-xl"> <!-- Added rounded-xl here --> 
                        <div id="featureCardSlider" class="flex -mx-2"> <!-- Negative margin to counteract p-2 on slides for edge alignment -->
                            
                            <?php
                            $features = [
                                ['id' => 'feat-client-360', 'icon' => '/assets/img/icon-client.svg', 'title' => 'Unified Client 360°', 'desc' => 'Holistic client views: history, preferences, AI-driven "next best action" prompts.'],
                                ['id' => 'feat-smart-scheduling', 'icon' => '/assets/img/icon-scheduling.svg', 'title' => 'Smart Scheduling', 'desc' => 'AI booking fills gaps, prevents burnout, syncs with Google/Outlook/iCal seamlessly.'],
                                ['id' => 'feat-marketing-automation', 'icon' => '/assets/img/icon-marketing.svg', 'title' => 'Hyper-Personal Marketing', 'desc' => 'Automated client journeys. AI optimizes emails, subject lines, and send times for you.'],
                                ['id' => 'feat-docs-vault', 'icon' => '/assets/img/icon-docs.svg', 'title' => 'Compliance & Docs Vault', 'desc' => 'HIPAA-ready encrypted notes & SOAP charts. E-signatures for painless audits.'],
                                ['id' => 'feat-social-copilot', 'icon' => '/assets/img/icon-social.svg', 'title' => 'Social Content Co-Pilot', 'desc' => 'Plan posts, AI-suggested hashtags & captions, ideal posting times. Content creation simplified.'],
                                ['id' => 'feat-payments-billing', 'icon' => '/assets/img/icon-payments.svg', 'title' => 'Integrated Payments', 'desc' => 'POS, online checkout, auto-billing for memberships. No more chasing late payments.'],
                                ['id' => 'feat-dashboards', 'icon' => '/assets/img/icon-dashboard.svg', 'title' => 'Real-Time Dashboards', 'desc' => 'Track KPIs—utilization, LTV, churn risk. Compare with peers using AI benchmarks.'],
                                ['id' => 'feat-membership-engine', 'icon' => '/assets/img/icon-membership.svg', 'title' => 'Membership & Loyalty', 'desc' => 'Tiered plans, auto-points, easy redemption. AI flags dormant members with win-back ideas.'],
                                ['id' => 'feat-voc-insights', 'icon' => '/assets/img/icon-voc.svg', 'title' => 'Voice-of-Client Insights', 'desc' => 'Post-session surveys feed an AI sentiment model. Fix friction before it hits reviews.'],
                                ['id' => 'feat-magnet-funnel', 'icon' => '/assets/img/icon-funnel.svg', 'title' => 'Lead Magnet Studio', 'desc' => 'From zero to booked in one click. AI optimizes every aspect of your funnel.']
                            ];
                            ?>

                            <?php foreach ($features as $feature): ?>
                            <div id="<?php echo htmlspecialchars($feature['id']); ?>" class="feature-card-slide w-full sm:w-1/2 lg:w-1/3 flex-shrink-0 p-2">
                                <div class="bg-gradient-to-br from-slate-800/70 via-slate-800/60 to-slate-900/80 backdrop-blur-sm p-5 md:p-6 rounded-xl shadow-xl h-full flex flex-col justify-between border-l-4 border border-l-brand-orange-500 border-slate-700/70 hover:border-brand-teal-400/70 transition-all duration-300 ease-in-out group relative overflow-hidden hover:translate-y-[-3px] hover:shadow-2xl">
                                    <!-- Radial glow accent on hover -->
                                    <div class="absolute top-1/2 right-0 w-24 h-24 bg-brand-orange-500/10 rounded-full filter blur-xl opacity-0 group-hover:opacity-100 transition-all duration-500 ease-in-out group-hover:scale-150"></div>
                                    <!-- Soft inner shadow for depth -->
                                    <div class="absolute inset-0 rounded-xl shadow-[inset_0_2px_4px_0_rgba(0,0,0,0.2),inset_0_-2px_4px_0_rgba(255,255,255,0.05)]"></div>
                                    
                                    <div class="flex items-start mb-4 relative z-10">
                                        <div class="mr-3 md:mr-4 shrink-0 pt-0.5 transform group-hover:scale-110 transition-transform duration-300">
                                            <div class="bg-gradient-to-br from-brand-teal-400/30 to-brand-teal-400/10 rounded-full p-1.5 md:p-2 backdrop-blur-sm border border-brand-teal-400/40 group-hover:border-brand-teal-400/70 transition-all duration-300 shadow-inner">
                                                <img src="<?php echo BASE_URL . htmlspecialchars($feature['icon']); ?>" alt="" class="h-8 w-8 md:h-10 md:w-10 text-white filter group-hover:brightness-110 transition-all duration-300"> 
                                            </div>
                                        </div>
                                        <h3 class="text-base md:text-lg font-semibold leading-tight text-brand-teal-400 break-words hyphens-auto group-hover:text-brand-orange-500 transition-colors duration-300"><?php echo htmlspecialchars($feature['title']); ?></h3>
                                    </div>
                                    <p class="text-gray-300 text-sm mt-auto pt-4 relative z-10 opacity-90 group-hover:opacity-100 transform group-hover:translate-y-[-2px] transition-all duration-300"><?php echo htmlspecialchars($feature['desc']); ?></p>
                                </div>
                            </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                    
                    <div class="flex justify-center mt-8 space-x-1.5" id="featureCardSliderDots">
                        <!-- Dots will be generated by JS -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>