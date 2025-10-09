<?php
// Component: components/cta.php (Tailwind-Optimized, Compact Version)
// Data contract:
// $heading: string
// $sub: string|null
// $primary: object (array with 'label' and 'href' keys)
// $secondary: object (array with 'label' and 'href' keys, optional)
// Usage example:
// <?= view('components/cta', [
//     'heading' => 'Unlock Worlds Within Pages',
//     'sub' => 'Dive into enchanting tales that ignite your imagination. Join our community of avid readers and discover stories that stay with you forever.',
//     'primary' => ['label' => 'Start Reading Now', 'href' => '/shop'],
//     'secondary' => ['label' => 'Explore Genres', 'href' => '/categories']
// ]) 
?>

<section id="cta-section"
    class="relative bg-cover bg-center py-6 md:py-8 text-gray-900 w-full overflow-hidden"
    style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.4)), url('https://wallpapers.com/images/hd/sections-of-books-dark-academia-desktop-s6999l4lovk7cts6.jpg');">

    <!-- Subtle animated overlay particles -->
    <div class="absolute inset-0 opacity-20 pointer-events-none">
        <div class="absolute top-4 left-6 w-2 h-2 bg-[#F5F0EC] rounded-full animate-ping"></div>
        <div class="absolute top-12 right-12 w-1 h-1 bg-[#C7BBB0] rounded-full animate-bounce"></div>
        <div class="absolute bottom-10 left-1/2 w-2 h-2 bg-white/50 rounded-full animate-pulse"></div>
    </div>

    <!-- Gradient overlay -->
    <div class="absolute inset-0 bg-gradient-to-br from-black/50 via-transparent to-black/30"></div>

    <!-- Container -->
    <div class="relative z-10 flex flex-col lg:flex-row items-center justify-between max-w-5xl mx-auto px-4 gap-4">

        <!-- CTA box -->
        <div class="relative flex-1 text-left bg-white/25 backdrop-blur-md border border-white/20 rounded-xl p-5 md:p-6 lg:max-w-sm 
                    z-20 shadow-xl hover:shadow-2xl transition-all duration-700 transform hover:-translate-y-1 hover:scale-[1.02]">

            <!-- Decorative book icon -->
            <div class="absolute -top-3 left-1/2 -translate-x-1/2 w-8 h-8 bg-gradient-to-r from-[#F5F0EC] to-[#C7BBB0] 
                        rounded-full flex items-center justify-center shadow-lg">
                <svg class="w-4 h-4 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                    </path>
                </svg>
            </div>

            <?php if (!empty($heading)): ?>
                <h2 class="mb-2 font-['Righteous'] text-xl md:text-2xl font-bold text-[#F5F0EC] leading-snug 
                           transform transition duration-500 hover:scale-105">
                    <?= esc($heading) ?>
                </h2>
            <?php endif; ?>

            <?php if (!empty($sub)): ?>
                <p class="mb-4 text-[#C7BBB0] text-sm md:text-base leading-relaxed opacity-90 
                           transition duration-500 hover:opacity-100">
                    <?= esc($sub) ?>
                </p>
            <?php endif; ?>

            <div class="flex flex-col sm:flex-row gap-3">
                <?php if (!empty($primary)): ?>
                    <?= view('components/buttons/primary_button', [
                        'label' => $primary['label'],
                        'href' => $primary['href'],
                        'class' => 'text-sm md:text-base px-4 py-2 bg-gradient-to-r from-[#F5F0EC] to-[#C7BBB0] hover:from-[#C7BBB0] hover:to-[#F5F0EC] text-gray-900 shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300'
                    ]) ?>
                <?php endif; ?>
            </div>
        </div>

        <!-- Book image -->
        <div class="flex-1 flex justify-center lg:justify-end w-full -mt-4 lg:-mt-0 lg:-ml-8 z-10 
                    opacity-0 translate-y-6 transition-all duration-[1200ms] ease-out delay-300 
                    motion-safe:opacity-100 motion-safe:translate-y-0">
            <img src="https://static.vecteezy.com/system/resources/previews/036/734/938/non_2x/ai-generated-books-stacked-isolated-on-transparent-background-free-png.png"
                alt="Stacked Books"
                class="w-full max-w-[500px] lg:max-w-[600px] object-contain drop-shadow-xl hover:drop-shadow-2xl 
                       transition duration-700 transform -rotate-2 hover:rotate-0">
        </div>
    </div>
</section>