<?php
// sections/pain_points_content.php - Problems We Solve section
?>
<!-- Pain Points Solved Section -->
<section id="pain-points" class="section-dark py-16 sm:py-24 relative overflow-hidden">
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10">
        <div class="max-w-3xl mx-auto text-center mb-12 sm:mb-16">
            <h2 class="text-3xl font-semibold tracking-tight text-white sm:text-4xl">The <span class="text-brand-orange-500">Problems</span> We Solve</h2>
            <p class="mt-4 text-lg text-slate-300">
                Wellness practitioners face unique challenges that generic business solutions don't address. We get it.
            </p>
        </div>

        <div class="relative">
            <!-- Navigation Buttons - Correctly Positioned -->
            <button id="prevProblem" aria-label="Previous problem" class="absolute left-0 top-1/2 transform -translate-y-1/2 -translate-x-1 xs:-translate-x-2 sm:-translate-x-8 z-20 bg-slate-700/70 hover:bg-brand-orange-500 text-brand-orange-500 hover:text-white rounded-full p-2 sm:p-2.5 shadow-lg focus:outline-none transition-colors">
                <svg class="h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
            </button>
            <button id="nextProblem" aria-label="Next problem" class="absolute right-0 top-1/2 transform -translate-y-1/2 translate-x-1 xs:translate-x-2 sm:translate-x-8 z-20 bg-slate-700/70 hover:bg-brand-orange-500 text-brand-orange-500 hover:text-white rounded-full p-2 sm:p-2.5 shadow-lg focus:outline-none transition-colors">
                <svg class="h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
            </button>

            <!-- Carousel container -->
            <div class="overflow-hidden rounded-xl">
                <div id="problemsSlider" class="flex -mx-2"> <!-- This ID is used by main.js -->
                    <?php
                    // Your specific pain points content
                    $painPoints = [
                        [
                            'icon_path' => 'M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z',
                            'title' => 'Administrative Overload',
                            'description' => "Practitioners spend up to 40% of their time on paperwork and admin tasks instead of healing work.",
                            'solution' => "AI-powered automation handles scheduling, reminders, and follow-ups with your personal touch."
                        ],
                        [
                            'icon_path' => 'M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z',
                            'title' => 'Client Retention', // Title from your original code
                            'description' => "Maintaining relationships and ensuring clients continue their healing journey is challenging with limited time.",
                            'solution' => "Personalized follow-up systems nurture relationships while respecting clients' unique paths."
                        ],
                        [
                            'icon_path' => 'M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605',
                            'title' => 'Business Visibility', // Title from your original code
                            'description' => "Most wellness businesses fly blind — no clear view of bookings, revenue or retention trends.",
                            'solution' => "Visual analytics reveal practice patterns and growth opportunities in an intuitive format."
                        ],
                        [
                            'icon_path' => 'M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z',
                            'title' => 'Compliance & Documentation', // Title from your original code
                            'description' => "Maintaining proper clinical documentation and meeting compliance requirements adds complexity and stress.",
                            'solution' => "Modality-specific templates and secure storage simplifies documentation while ensuring compliance."
                        ],
                        [
                            'icon_path' => 'M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z',
                            'title' => 'Technology Overwhelm', // Title from your original code
                            'description' => "Many existing solutions are too complex, requiring technical skills that practitioners don't have time to learn.",
                            'solution' => "An intuitive, human-centered interface designed with and for wellness professionals."
                        ],
                        [
                            'icon_path' => 'M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z', // Used a generic icon, you might want a specific one for cost
                            'title' => 'Cost-Prohibitive Solutions', // Title from your original code
                            'description' => "Many CRMs are priced for large corporations, not solo practitioners or small wellness businesses with tighter budgets.",
                            'solution' => "Transparent, fair pricing that scales with your practice and offers real value from day one."
                        ]
                    ];
                    ?>

                    <?php foreach ($painPoints as $point): ?>
                    <div class="problems-slide w-full sm:w-1/2 lg:w-1/3 flex-shrink-0 p-2"> <!-- This class name is used by main.js -->
                        <div class="bg-slate-800/70 backdrop-blur-sm p-5 md:p-6 rounded-xl shadow-xl h-full flex flex-col justify-between border border-slate-700/70 hover:border-brand-teal-400/70 transition-all duration-300 ease-in-out group relative overflow-hidden hover:translate-y-[-3px] hover:shadow-2xl">
                            <div class="absolute top-1/2 right-0 w-24 h-24 bg-brand-orange-500/10 rounded-full filter blur-xl opacity-0 group-hover:opacity-100 transition-all duration-500 ease-in-out group-hover:scale-150 -z-10"></div>
                            <div class="absolute inset-0 rounded-xl shadow-[inset_0_2px_4px_0_rgba(0,0,0,0.2),inset_0_-2px_4px_0_rgba(255,255,255,0.05)]"></div>
                            
                            <div class="relative z-10">
                                <div class="flex items-start mb-4">
                                    <div class="mr-3 md:mr-4 shrink-0 pt-0.5 transform group-hover:scale-110 transition-transform duration-300">
                                        <div class="bg-gradient-to-br from-brand-orange-500/30 to-brand-orange-500/10 rounded-full p-1.5 md:p-2 backdrop-blur-sm border border-brand-orange-500/40 group-hover:border-brand-orange-500/70 transition-all duration-300 shadow-inner">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-brand-orange-500 filter group-hover:brightness-110 transition-all duration-300">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="<?php echo htmlspecialchars($point['icon_path']); ?>" />
                                            </svg>
                                        </div>
                                    </div>
                                    <h3 class="text-md sm:text-lg font-semibold leading-tight text-brand-teal-400 group-hover:text-brand-orange-500 transition-colors duration-300"><?php echo htmlspecialchars($point['title']); ?></h3>
                                </div>
                                <p class="text-slate-400 text-sm mb-4 opacity-90 group-hover:opacity-100 transform group-hover:translate-y-[-2px] transition-all duration-300"><?php echo htmlspecialchars($point['description']); ?></p>
                            </div>
                            <div class="mt-auto pt-4 relative z-10">
                                <p class="text-brand-orange-400 font-medium text-sm opacity-90 group-hover:opacity-100 transform group-hover:translate-y-[-2px] transition-all duration-300">
                                    <span class="font-semibold text-brand-teal-400/80">Solution:</span> <?php echo htmlspecialchars($point['solution']); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            
            <!-- Dots navigation -->
            <div id="problemsSliderDots" class="flex justify-center mt-8 space-x-1.5"> <!-- This ID is used by main.js -->
                <!-- Dots will be generated by JS -->
            </div>
        </div>
    </div>
</section>