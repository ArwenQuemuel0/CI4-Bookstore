<?php
$products = [
    [
        "title" => "The Lord of the Rings",
        "description" => "by J.R.R. Tolkien — A story about Frodo Baggins’ quest to destroy a dark lord’s powerful ring and save Middle-earth.",
        "price" => 199,
        "image" => "https://cdn.shopify.com/s/files/1/0070/1884/0133/t/8/assets/pf-8a8430b5--Books5.jpg?v=1620061376"
    ],
    [
        "title" => "Harry Potter and the Sorcerer's Stone",
        "description" => "by J.K. Rowling — A story about young wizard Harry as he discovers his magical heritage, attends Hogwarts School, and faces dark forces.",
        "price" => 149,
        "image" => "https://cdn.shopify.com/s/files/1/0070/1884/0133/t/8/assets/pf-b57dac15--Books8_1200x.jpg?v=1620061403"
    ],
    [
        "title" => "The Origin of Species",
        "description" => "by Charles Darwin — Explains how species evolve over time through natural selection, laying the foundation for modern evolutionary biology.",
        "price" => 179,
        "image" => "https://cdn.shopify.com/s/files/1/0070/1884/0133/t/8/assets/pf-71b40b91--Books_1200x.jpg?v=1620061288"
    ]
];
?>

<section id="products" class="bg-white/90 backdrop-blur-sm py-20 text-gray-900">
    <div class="mx-auto px-4 max-w-6xl">
        <h3 class="mb-12 font-bold text-[#8B7E74] text-4xl text-center header-title">
            Featured Products
        </h3>

        <div class="gap-8 grid md:grid-cols-3">
            <?php foreach ($products as $product): ?>
                <div class="flex flex-col bg-white shadow-lg hover:shadow-2xl p-6 border border-gray-200/50 rounded-2xl transition-all duration-300 card-hover">
                    <!-- Image Section -->
                    <div class="flex justify-center items-center bg-gray-200 mb-4 rounded-xl w-full h-56 overflow-hidden">
                        <img
                            src="<?= htmlspecialchars($product['image']) ?>"
                            alt="Product: <?= htmlspecialchars($product['title']) ?>"
                            class="rounded-xl w-full h-full object-cover"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="hidden flex justify-center items-center bg-gradient-to-br from-[#8B7E74]/20 to-transparent rounded-xl w-full h-56 text-3xl">
                            📖
                        </div>
                    </div>

                    <!-- Title -->
                    <h4 class="mb-2 font-semibold text-gray-900 text-2xl header-title">
                        <?= htmlspecialchars($product['title']) ?>
                    </h4>

                    <!-- Description -->
                    <p class="flex-grow mb-4 text-gray-700 leading-relaxed">
                        <?= htmlspecialchars($product['description']) ?>
                    </p>

                    <!-- Price and Button -->
                    <div class="flex justify-between items-center mt-auto">
                        <span class="font-bold text-[#8B7E74] text-xl">
                            ₱<?= htmlspecialchars($product['price']) ?>
                        </span>
                        <a href="#"
                            class="bg-[#8B7E74] hover:bg-[#A99D92] px-4 py-2 rounded-full focus:outline-none focus:ring-[#8B7E74]/50 focus:ring-2 font-semibold text-white text-sm transition">
                            Buy Now
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>