<?php // public/sections/mission_vision_values.php ?>
<section id="mission-vision-values" class="py-16 sm:py-24">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-12 md:mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-purple-400">Our Mission, Vision & Values</h2>
            <p class="mt-4 text-lg text-gray-300">
                The compass that keeps Omnipotency AI honest, human-centered, and relentlessly useful.
            </p>
        </div>

        <!-- Main Grid for 1/3 and 2/3 Columns -->
        <div class="grid md:grid-cols-3 gap-8 lg:gap-12 items-start"> <!-- Use items-start to align columns at the top -->
            
            <!-- Left Column: Mission & Vision Cards (Stacked Vertically) -->
            <div class="md:col-span-1 space-y-8"> <!-- This column will take 1/3 width on md+ screens -->
                
                <!-- Mission Card -->
                <div class="p-6 rounded-3xl shadow-2xl border border-slate-700/70 flex flex-col items-center text-center hover:border-brand-teal-400/90 hover:border-2 transition-all duration-300 ease-in-out transform hover:scale-[1.02] w-full">
                    <div class="mb-4">
                        <svg class="h-10 w-10 sm:h-12 sm:w-12 text-brand-teal-400 rotate-45" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl lg:text-2xl font-bold text-white mb-3">Our Mission</h3>
                    <p class="text-gray-300 text-sm sm:text-base leading-relaxed">
                        To equip every wellness practitioner with intuitive, ethical AI that amplifies their craft, automates the mundane, and nurtures authentic client relationships for lasting impact.
                    </p>
                </div>

                <!-- Vision Card -->
                <div class="p-6 rounded-3xl shadow-2xl border border-slate-700/70 flex flex-col items-center text-center hover:border-brand-orange-500/90 hover:border-2 transition-all duration-300 ease-in-out transform hover:scale-[1.02] w-full">
                     <div class="mb-4">
                        <svg class="h-10 w-10 sm:h-12 sm:w-12 text-brand-orange-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl lg:text-2xl font-bold text-white mb-3">Our Vision</h3>
                    <p class="text-gray-300 text-sm sm:text-base leading-relaxed">
                        To be the world's most trusted bridge between cutting-edge technology and heart-centered healing, fostering a future where practitioners thrive and global well-being is elevated.
                    </p>
                </div>
            </div>

            <!-- Right Column: Values List (Takes 2/3 width) -->
            <div class="md:col-span-2 mt-8 md:mt-0 p-6 sm:p-8 rounded-3xl border shadow-2xl border-slate-700/50 hover:border-purple-500/90 hover:border-2 transition-all duration-300 ease-in-out transform hover:scale-[1.02]"> <!-- Added a subtle background and padding -->
                <div class="flex items-center mb-6 sm:mb-8">
                <svg
                    class="h-10 w-10 sm:h-12 sm:w-12 text-purple-500 mr-4"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    >
                    <!-- outer diamond frame -->
                    <polyline points="2 10 7 4 17 4 22 10 12 22 2 10" />

                    <!-- top facets -->
                    <line x1="7"  y1="4"  x2="12" y2="10" />
                    <line x1="12" y1="10" x2="17" y2="4" />

                    <!-- horizontal facet line -->
                    <line x1="2"  y1="10" x2="22" y2="10" />

                    <!-- central vertical facet -->
                    <line x1="12" y1="10" x2="12" y2="22" />

                    <!-- inner diagonal facets -->
                    <line x1="7"  y1="10" x2="12" y2="22" />
                    <line x1="17" y1="10" x2="12" y2="22" />
                </svg>
                <h3 class="text-2xl lg:text-3xl font-bold text-white">Our Core Values</h3>
                </div>

                <div class="space-y-2">
                    <?php
                    $values = [
                        ['emoji' => '🧘‍♀️', 'title' => 'Wellness First', 'desc' => "Every decision must nurture practitioners' wellbeing and their clients' healing journey."],
                        ['emoji' => '🔍', 'title' => 'Radical Transparency', 'desc' => 'Open-source code, public roadmaps, and plain-English pricing—nothing swept under the rug.'],
                        ['emoji' => '🤝', 'title' => 'Community over Competition', 'desc' => "Collaboration fuels growth; we share knowledge freely and celebrate everyone's wins."],
                        ['emoji' => '✨', 'title' => 'Simplicity Wins', 'desc' => "Elegant workflows beat feature bloat. If it's not intuitive, we haven't finished."],
                        ['emoji' => '🤖', 'title' => 'Empower through AI', 'desc' => 'Automation should amplify human care, never replace it. AI does the admin, you bring the heart.'],
                        ['emoji' => '🔒', 'title' => 'Privacy & Security', 'desc' => "Your clients' data is sacred. We protect it with the industry's highest standards and never sell information."]
                    ];
                    ?>
                    <?php foreach ($values as $value): ?>
                    <div class="flex items-start p-3 rounded-lg hover:bg-slate-700/30 transition-colors duration-200"> <!-- Added padding and hover to list items -->
                        <div class="text-3xl sm:text-4xl mr-4 sm:mr-5 flex-shrink-0 pt-0.5"><?php echo $value['emoji']; ?></div>
                        <div>
                            <h4 class="text-md sm:text-lg font-semibold text-white mb-1"><?php echo htmlspecialchars($value['title']); ?></h4>
                            <p class="text-gray-300 text-sm leading-relaxed"><?php echo htmlspecialchars($value['desc']); ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>