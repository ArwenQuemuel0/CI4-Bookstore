<?php
$cards = [
    [
        "content" => '
            <h3 class="text-4xl font-bold text-[#8B7E74] mb-2">1,254</h3>
            <p class="text-gray-700 mb-4">Books Sold</p>
        ',
        "link" => "#"
    ],
    [
        "content" => '
            <h3 class="text-2xl font-semibold text-gray-900 mb-2">Premium Collection</h3>
            <p class="text-gray-700 mb-4">Limited edition hand-picked books for collectors.</p>
        ',
        "link" => "#"
    ],
    [
        "content" => '
            <blockquote class="italic text-gray-700 mb-2">“A cozy place for every book lover.”</blockquote>
            <p class="text-gray-600 mb-4">— Loyal Customer</p>
        ',
        "link" => "#"
    ]
];
?>

<section id="cards" class="bg-white/90 backdrop-blur-sm py-20 text-gray-900">
    <div class="mx-auto px-4 max-w-6xl text-center">
        <h2 class="mb-12 font-bold text-[#8B7E74] text-4xl header-title">Card Samples</h2>

        <div class="grid gap-8 md:grid-cols-3">
            <?php foreach ($cards as $card): ?>
                <div class="bg-gray-50 hover:bg-white shadow-md p-8 rounded-2xl transition-all duration-300">
                    <?= $card['content'] ?>

                    <a href="<?= htmlspecialchars($card['link']) ?>"
                        class="inline-block bg-[#8B7E74] hover:bg-[#A99D92] text-white px-4 py-2 rounded-full font-semibold text-sm transition">
                        Read more
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>