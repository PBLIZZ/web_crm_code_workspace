<?php // public/sections/values_principles.php ?>
<section id="values" class="py-16 sm:py-24">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="max-w-3xl mx-auto text-center mb-12 md:mb-16">
      <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-white">Our Values & Guiding Principles</h2>
      <p class="mt-4 text-lg text-gray-300">
        The compass that keeps Omnipotency AI honest, human-centered, and relentlessly useful.
      </p>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
      <?php
      // Define our values with emojis as icons
      $values = [
          ['emoji' => '🧘‍♀️', 'title' => 'Wellness First', 'desc' => "Every decision must nurture practitioners' wellbeing and their clients' healing journey.", 'color' => 'red-500'],
          ['emoji' => '🔍', 'title' => 'Radical Transparency', 'desc' => 'Open-source code, public roadmaps, and plain-English pricing—nothing swept under the rug.', 'color' => 'brand-orange-500'],
          ['emoji' => '🤝', 'title' => 'Community over Competition', 'desc' => "Collaboration fuels growth; we share knowledge freely and celebrate everyone's wins.", 'color' => 'yellow-500'],
          ['emoji' => '✨', 'title' => 'Simplicity Wins', 'desc' => "Elegant workflows beat feature bloat. If it's not intuitive, we haven't finished.", 'color' => 'green-500'],
          ['emoji' => '🤖', 'title' => 'Empower through AI', 'desc' => 'Automation should amplify human care, never replace it. AI does the admin, you bring the heart.', 'color' => 'blue-500'],
          ['emoji' => '🔒', 'title' => 'Privacy & Security', 'desc' => "Your clients' data is sacred. We protect it with the industry's highest standards and never sell information.", 'color' => 'purple-500']
      ];
      ?>
      <?php foreach ($values as $value): ?>
      <div class="bg-slate-800/50 backdrop-blur-md p-6 rounded-xl shadow-lg flex flex-col items-center text-center border-t-4 border-<?php echo $value['color']; ?> hover:shadow-[0_10px_25px_-5px_rgba(0,0,0,0.3),0_0_10px_rgba(<?php echo $value['color'] === 'brand-orange-500' ? '255,135,0' : '20,184,166'; ?>,0.4)] hover:border-t-[6px] transition-all duration-300 ease-in-out transform hover:-translate-y-2">
        <div class="text-5xl mb-5"><?php echo $value['emoji']; ?></div>
        <h3 class="text-xl font-semibold text-white mb-3"><?php echo htmlspecialchars($value['title']); ?></h3>
        <p class="text-gray-400 text-sm leading-relaxed flex-grow"><?php echo htmlspecialchars($value['desc']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
