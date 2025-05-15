<?php // public/sections/built_for_wellness.php ?>
<section id="built-for-wellness" class="py-16 sm:py-24">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">
        <h2 class="text-3xl sm:text-4xl font-bold tracking-tight mb-4">
            Designed by <span class="text-brand-orange-500">Wellness Practitioners</span> for your <span class="text-teal-800">Wellness Business</span>
        </h2>
        <p class="mt-4 text-lg text-white/90 max-w-2xl mx-auto mb-12 md:mb-16">
            We understand the unique challenges you face because we've been there. 
            Omnipotency AI is crafted with your workflow, clients, and well-being at its core because our Founder was himself a Yoga Teacher and Massage Therapist for 25 years.
        </p>

        <div class="p-6 rounded-2xl border border-white/80 max-w-6xl mx-auto">
            <div class="flex flex-wrap justify-center items-center gap-x-8 gap-y-10 sm:gap-x-12 md:gap-x-16 lg:gap-x-20">
                <?php
                $practitioners = [
                    ['name' => 'Yoga Teachers', 'img' => '/assets/img/wellness-pros/yoga.png'],
                    ['name' => 'Wellness Coaches', 'img' => '/assets/img/wellness-pros/wellness.png'],
                    ['name' => 'Fitness Trainers', 'img' => '/assets/img/wellness-pros/FiTNESS.png'],
                    ['name' => 'Massage Therapists', 'img' => '/assets/img/wellness-pros/MASSAGE.png'],
                    ['name' => 'Nutritionists', 'img' => '/assets/img/wellness-pros/nutrition.png'],
                ];
                ?>
                <?php foreach ($practitioners as $practitioner): ?>
                <div class="flex flex-col items-center" style="width: 150px;">
                    <div class="rounded-3xl overflow-hidden w-36 h-36 mb-3 relative">
                        <img src="<?php echo BASE_URL . htmlspecialchars($practitioner['img']); ?>" 
                             alt="<?php echo htmlspecialchars($practitioner['name']); ?>" 
                             class="w-full h-full object-cover object-center">
                    </div>
                    <p class="text-sm font-medium text-center text-white">
                        <?php echo htmlspecialchars($practitioner['name']); ?>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>