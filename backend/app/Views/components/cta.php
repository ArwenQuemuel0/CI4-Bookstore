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

<section id="cta-section" class="relative bg-cover bg-center py-20 text-gray-900 w-full overflow-hidden"
    style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.4)), url('https://wallpapers.com/images/hd/sections-of-books-dark-academia-desktop-s6999l4lovk7cts6.jpg');">

    <!-- Subtle animated overlay particles for interest (using Tailwind + custom CSS) -->
    <div class="absolute inset-0 opacity-20 pointer-events-none">
        <div class="absolute top-10 left-10 w-2 h-2 bg-[#F5F0EC] rounded-full animate-ping"></div>
        <div class="absolute top-20 right-20 w-1 h-1 bg-[#C7BBB0] rounded-full animate-bounce [animation-delay:1s]"></div>
        <div class="absolute bottom-20 left-1/2 w-3 h-3 bg-white/50 rounded-full animate-pulse [animation-delay:2s]"></div>
    </div>

    <!-- Main overlay for contrast -->
    <div class="absolute inset-0 bg-gradient-to-br from-black/50 via-transparent to-black/30"></div>

    <!-- Container wrapping CTA and Image together -->
    <div class="relative z-10 flex flex-col lg:flex-row items-center justify-between max-w-6xl mx-auto px-6 gap-8 animate-fade-in-up">

        <!-- CTA box with enhanced styling and hover effects -->
        <div class="relative flex-1 text-left bg-white/25 backdrop-blur-md border border-white/20 rounded-2xl p-8 md:p-12 lg:max-w-md z-20 shadow-2xl hover:shadow-3xl transition-all duration-500 group">
            <!-- Decorative book icon or flourish -->
            <div class="absolute -top-4 left-1/2 -translate-x-1/2 w-10 h-10 bg-gradient-to-r from-[#F5F0EC] to-[#C7BBB0] rounded-full flex items-center justify-center shadow-lg">
                <svg class="w-5 h-5 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
            </div>

            <?php if (!empty($heading)): ?>
                <h2 class="mb-4 font-['Righteous'] text-3xl md:text-4xl lg:text-5xl font-bold text-[#F5F0EC] leading-tight group-hover:scale-105 transition-transform duration-300"><?= esc($heading) ?></h2>
            <?php endif; ?>
            <?php if (!empty($sub)): ?>
                <p class="mb-6 text-[#C7BBB0] text-base md:text-lg lg:text-xl leading-relaxed opacity-90 group-hover:opacity-100 transition-opacity duration-300"><?= esc($sub) ?></p>
            <?php endif; ?>
            <div class="flex flex-col sm:flex-row gap-4">
                <?php if (!empty($primary)): ?>
                    <?= view('components/buttons/primary_button', [
                        'label' => $primary['label'],
                        'href' => $primary['href'],
                        'class' => 'text-base md:text-lg px-6 py-3 bg-gradient-to-r from-[#F5F0EC] to-[#C7BBB0] hover:from-[#C7BBB0] hover:to-[#F5F0EC] text-gray-900 shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300'
                    ]) ?>
                <?php endif; ?>
            </div>
        </div>

        <!-- Books image with animation and better positioning -->
        <div class="flex-1 flex justify-center lg:justify-end w-full -mt-8 lg:-mt-0 lg:-ml-16 z-10 animate-slide-in-right">
            <img src="https://static.vecteezy.com/system/resources/previews/036/734/938/non_2x/ai-generated-books-stacked-isolated-on-transparent-background-free-png.png"
                alt="Stacked Books"
                class="w-full max-w-[800px] lg:max-w-[900px] object-contain drop-shadow-2xl hover:drop-shadow-3xl transition-shadow duration-500 -rotate-2 hover:rotate-0">
        </div>

    </div>
</section>

<style>
    @keyframes fade-in-up {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slide-in-right {
        from {
            opacity: 0;
            transform: translateX(20px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .animate-fade-in-up {
        animation: fade-in-up 0.6s ease-out forwards;
    }

    .animate-slide-in-right {
        animation: slide-in-right 0.6s ease-out 0.2s forwards;
        opacity: 0;
    }
</style>