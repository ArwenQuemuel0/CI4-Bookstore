<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Achlys' Bookstore – Mood Board</title>
    <link rel="shortcut icon" type="image/png" href="/assets/book_icon.ico" />
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Righteous&family=Roboto+Slab:wght@400;700&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: "Roboto Slab", serif;
        }
    </style>
</head>

<body class="bg-white text-[#3c2f2f] px-20 py-10 max-w-[1200px] mx-auto">
    <div class="mt-6 text-left">
        <a href="/" class="bg-[#c7bbb0] text-[#3c2f2f] px-5 py-2 rounded-md font-semibold text-sm hover:bg-[#b3a698] transition-transform hover:scale-105 inline-block mb-6">
            ← Back to Home
        </a>
    </div>

    <h1 class="text-left font-['Righteous'] text-4xl text-[#3c2f2f] mb-1">Achlys’ Bookstore Moodboard</h1>
    <p class="text-[#6c5c4c] text-[1.05em] mb-10">Visual identity guide for Achlys Bookstore</p>

    <!-- COLOR SYSTEM -->
    <section class="mb-16">
        <h2 class="font-['Righteous'] text-[#3c2f2f] text-xl mb-4">Color System</h2>
        <p class="text-[#6c5c4c] text-[1.05em] mb-6">Three main color themes with three vibrance levels each.</p>

        <div class="flex justify-center flex-wrap gap-16 text-center py-5">
            <!-- Neutral Brown -->
            <div class="flex flex-col items-center gap-3">
                <div class="w-[220px] h-[65px] rounded-md bg-[#8B7E74]"></div>
                <div class="w-[220px] h-[65px] rounded-md bg-[#A99D92]"></div>
                <div class="w-[220px] h-[65px] rounded-md bg-[#C7BBB0]"></div>
                <p class="text-[#5a4b41] text-base mt-1">#8B7E74 — #A99D92 — #C7BBB0</p>
                <p class="font-semibold text-[#3c2f2f] text-[1.05em]">Neutral Brown <span class="text-[#6b5c51] text-sm font-normal">(Main Accent)</span></p>
            </div>

            <!-- Soft Beige -->
            <div class="flex flex-col items-center gap-3">
                <div class="w-[220px] h-[65px] rounded-md bg-[#F5F0EC]"></div>
                <div class="w-[220px] h-[65px] rounded-md bg-[#E8E1DB]"></div>
                <div class="w-[220px] h-[65px] rounded-md bg-[#DAD3CC]"></div>
                <p class="text-[#5a4b41] text-base mt-1">#F5F0EC — #E8E1DB — #DAD3CC</p>
                <p class="font-semibold text-[#3c2f2f] text-[1.05em]">Soft Beige <span class="text-[#6b5c51] text-sm font-normal">(Background)</span></p>
            </div>

            <!-- Charcoal Gray -->
            <div class="flex flex-col items-center gap-3">
                <div class="w-[220px] h-[65px] rounded-md bg-[#333333]"></div>
                <div class="w-[220px] h-[65px] rounded-md bg-[#555555]"></div>
                <div class="w-[220px] h-[65px] rounded-md bg-[#777777]"></div>
                <p class="text-[#5a4b41] text-base mt-1">#333333 — #555555 — #777777</p>
                <p class="font-semibold text-[#3c2f2f] text-[1.05em]">Charcoal Gray <span class="text-[#6b5c51] text-sm font-normal">(Text)</span></p>
            </div>
        </div>
    </section>

    <!-- TYPOGRAPHY -->
    <section class="mb-16">
        <h2 class="font-['Righteous'] text-[#3c2f2f] text-xl mb-4">Typography</h2>
        <div class="flex justify-between items-start flex-wrap gap-16 text-left">
            <div>
                <p class="font-['Righteous'] text-[#8b7e74] text-2xl">Heading font<br>Righteous — Heading Example</p>
            </div>
            <div class="max-w-[480px] text-[#3c2f2f] text-base leading-relaxed">
                <p>Body font<br>Roboto Slab — Example text that demonstrates readable copy for longer paragraphs in Achlys Bookstore materials.</p>
            </div>
        </div>
    </section>

    <!-- BUTTONS -->
    <section class="text-center mb-16">
        <h2 class="font-['Righteous'] text-[#3c2f2f] text-xl mb-6">Buttons</h2>

        <div class="flex flex-col items-center gap-8">
            <div>
                <div class="font-semibold text-[#5a4b41] mb-3">Light Mode</div>
                <div class="flex justify-center flex-wrap gap-3">
                    <button class="bg-[#8b7e74] text-white px-5 py-2 rounded-md font-semibold text-sm hover:bg-[#776b63] transition-transform hover:scale-105">Primary</button>
                    <button class="bg-[#c7bbb0] text-[#3c2f2f] px-5 py-2 rounded-md font-semibold text-sm hover:bg-[#b3a698] transition-transform hover:scale-105">Secondary</button>
                    <button class="border-2 border-[#8b7e74] text-[#8b7e74] px-5 py-2 rounded-md font-semibold text-sm hover:bg-[#8b7e74] hover:text-white transition-transform hover:scale-105">Border</button>
                    <button class="bg-[#ccc] text-[#999] px-5 py-2 rounded-md font-semibold text-sm cursor-not-allowed">Disabled</button>
                </div>
            </div>

            <div>
                <div class="font-semibold text-[#5a4b41] mb-3">Dark Mode</div>
                <div class="bg-[#3c2f2f] rounded-md py-5 px-10 inline-block">
                    <div class="flex justify-center flex-wrap gap-3">
                        <button class="bg-[#8b7e74] text-white px-5 py-2 rounded-md font-semibold text-sm hover:bg-[#a99d92] transition-transform hover:scale-105">Primary</button>
                        <button class="bg-[#a99d92] text-white px-5 py-2 rounded-md font-semibold text-sm hover:bg-[#c7bbb0] hover:text-[#3c2f2f] transition-transform hover:scale-105">Secondary</button>
                        <button class="border-2 border-[#c7bbb0] text-[#c7bbb0] px-5 py-2 rounded-md font-semibold text-sm hover:bg-[#c7bbb0] hover:text-[#3c2f2f] transition-transform hover:scale-105">Border</button>
                        <button class="bg-[#666] text-[#bbb] px-5 py-2 rounded-md font-semibold text-sm cursor-not-allowed">Disabled</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CARDS -->
    <section class="mb-16">
        <?= view('components/cards/sample_cards') ?>
    </section>

    <!-- LOGOS -->
    <section class="text-center">
        <h2 class="font-['Righteous'] text-[#3c2f2f] text-xl mb-6">Logos</h2>
        <div class="flex justify-center items-center gap-16 flex-wrap pt-5">
            <div class="bg-white border border-[#d9d4ce] rounded-xl p-8 text-center w-[250px] shadow-sm">
                <img src="/assets/circle_logo.png" alt="Achlys Circle Logo" class="w-[120px] h-[120px] mb-3 object-contain mx-auto">
                <p class="text-[#3c2f2f] text-[0.95em] font-medium">Main — Circle</p>
            </div>
            <div class="bg-white border border-[#d9d4ce] rounded-xl p-8 text-center w-[250px] shadow-sm">
                <img src="/assets/square_logo.png" alt="Achlys Square Logo" class="w-[120px] h-[120px] mb-3 object-contain mx-auto">
                <p class="text-[#3c2f2f] text-[0.95em] font-medium">Main — Square</p>
            </div>
        </div>
    </section>
</body>

</html>