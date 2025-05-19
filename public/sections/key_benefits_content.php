<?php
// sections/key_benefits_content.php - Why wellness professionals love us
?>
<section id="key-benefits" class="py-16 sm:py-24">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-12 md:mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-purple-400">Why Wellness Pros Love Us</h2>
            <p class="mt-4 text-lg text-gray-300">
                Our AI-powered platform handles the busywork so you can spend more time with your clients.
            </p>
        </div>

        <?php
        $benefits = [
            [
                'emoji' => '⏰', 
                'title' => 'Save 15+ Hours Weekly',
                'desc' => 'Automate scheduling, follow-ups, and notes to reclaim your evenings and weekends.',
                'color' => 'brand-teal-400'
            ],
            [
                'emoji' => '🤝', 
                'title' => 'Boost Client Retention',
                'desc' => 'Intelligent follow-ups and personalized care increase client loyalty and rebookings.',
                'color' => 'brand-orange-500'
            ],
            [
                'emoji' => '📈', 
                'title' => 'Grow Your Revenue',
                'desc' => 'Optimize your schedule, reduce no-shows, and identify opportunities to increase income.',
                'color' => 'purple-500'
            ],
            [
                'emoji' => '👥', 
                'title' => 'Grow Your Client Base',
                'desc' => 'Nurture potential clients with personalized outreach that feels human, not robotic.',
                'color' => 'brand-orange-500'
            ],
            [
                'emoji' => '📅', 
                'title' => 'Never Double-Book Again',
                'desc' => 'Smart scheduling with built-in buffers and automated reminders that reduce no-shows by 80%.',
                'color' => 'brand-teal-400'
            ],
            [
                'emoji' => '✨', 
                'title' => 'Data-Driven Insights',
                'desc' => 'Gain actionable analytics on client progress and practice performance.',
                'color' => 'purple-500'
            ]
        ];
        ?>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-10">
            <?php foreach ($benefits as $benefit): ?>
            <div class="p-6 rounded-3xl shadow-2xl border border-slate-700/70 
                         hover:border-<?php echo $benefit['color']; ?>/90 hover:border-2 
                         transition-all duration-300 ease-in-out transform hover:scale-[1.02]">
                <div class="flex items-start">
                    <div class="text-3xl sm:text-4xl mr-4 sm:mr-5 flex-shrink-0 pt-0.5">
                        <?php echo $benefit['emoji']; ?>
                    </div>
                    <div>
                        <h4 class="text-md sm:text-lg font-semibold text-white mb-1">
                            <?php echo htmlspecialchars($benefit['title']); ?>
                        </h4>
                        <p class="text-gray-300 text-sm leading-relaxed">
                            <?php echo htmlspecialchars($benefit['desc']); ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>