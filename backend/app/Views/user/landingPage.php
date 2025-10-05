<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Achlys' Bookstore</title>
    <link rel="shortcut icon" type="image/png" href="/assets/book_icon.ico" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <style>
        body {
            background: url('https://cdn.pixabay.com/photo/2017/10/15/08/56/neutral-2852878_1280.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Roboto Slab', serif;

        }

        .overlay {
            background: linear-gradient(rgba(44, 41, 41, 0.6), rgba(139, 126, 116, 0.4));
        }

        .custom-neutral {
            background-color: #8B7E74;
        }

        .header-title,
        h1,
        h2,
        h3,
        h4,
        .heading {
            font-family: "Righteous", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        button,
        a.btn-main,
        .card-hover {
            transition: all 0.3s ease;
        }

        button:hover,
        a.btn-main:hover,
        .card-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(139, 126, 116, 0.3);
        }

        input:focus,
        .focus-ring:focus {
            transition: all 0.3s ease;
            transform: scale(1.02);
        }
    </style>
</head>

<body class="text-gray-100">
    <div class="overlay min-h-screen flex flex-col">
        <!-- Header -->
        <header class="custom-neutral shadow-lg text-gray-100 sticky top-0 z-50">
            <div class="max-w-7xl mx-auto px-4 py-6 flex justify-between items-center">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-[#8B7E74] font-bold text-lg">A</div>
                    <h1 class="header-title text-3xl md:text-4xl tracking-wider">Achlys Bookstore</h1>
                </div>
                <nav class="hidden md:flex items-center space-x-6">
                    <a href="/loginPage" class="btn-main px-6 py-3 rounded-full bg-[#8B7E74] hover:bg-[#A99D92] text-white shadow-lg ml-4">Login</a>
                    <a href="/signupPage" class="btn-main px-6 py-3 rounded-full bg-[#C7BBB0] hover:bg-[#A99D92] text-gray-800 shadow-lg">Sign Up</a>
                </nav>
                <button class="md:hidden text-gray-100">☰</button>
            </div>
        </header>

        <main class="flex-grow">
            <section class="py-32 flex items-center justify-center text-center">
                <div class="max-w-4xl mx-auto px-4 backdrop-blur-sm bg-white/10 rounded-2xl p-8">
                    <div class="w-20 h-20 mx-auto mb-6 bg-[#8B7E74] rounded-full flex items-center justify-center text-white text-3xl">📚</div>
                    <h2 class="text-5xl md:text-7xl font-bold mb-8 text-gray-50 drop-shadow-2xl header-title">Buy & Download eBooks Instantly</h2>
                    <p class="text-xl md:text-3xl mb-12 text-gray-200 leading-relaxed">
                        Discover, purchase, and enjoy your favorite books in digital format—anytime, anywhere.
                    </p>
                    <a href="#ebooks" class="inline-block text-xl md:text-2xl px-10 py-5 rounded-full bg-white hover:bg-gray-100 text-gray-800 shadow-xl font-semibold focus:outline-none focus:ring-4 focus:ring-[#8B7E74]/50 transition-all duration-300 btn-main">Browse eBooks</a>
                </div>
            </section>

            <!-- eBooks Section -->
            <section id="ebooks" class="py-20 bg-white/90 backdrop-blur-sm text-gray-900">
                <div class="max-w-6xl mx-auto px-4">
                    <h3 class="text-4xl font-bold text-center mb-12 header-title text-[#8B7E74]">Featured eBooks</h3>
                    <div class="grid gap-8 md:grid-cols-3">
                        <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 flex flex-col card-hover border border-gray-200/50">
                            <div class="w-full h-48 bg-gray-200 rounded-xl overflow-hidden mb-4 flex items-center justify-center">
                                <img src="https://cdn.shopify.com/s/files/1/0070/1884/0133/t/8/assets/pf-8a8430b5--Books5.jpg?v=1620061376" alt="Book: “The Lord of the Rings” by J.R.R. Tolkien" class="w-full h-full object-cover rounded-xl" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="w-full h-48 bg-gradient-to-br from-[#8B7E74]/20 to-transparent flex items-center justify-center text-2xl hidden rounded-xl">📖</div>
                            </div>
                            <h4 class="text-2xl font-semibold mb-2 text-gray-900 header-title">The Lord of the Rings</h4>
                            <
                                <p class="text-gray-700 mb-4 flex-grow">by J.R.R. Tolkien — A story about Frodo Baggins’ quest to destroy a dark lord’s powerful ring and save Middle-earth.</p>
                                <div class="flex justify-between items-center mt-auto">
                                    <span class="font-bold text-xl text-[#8B7E74]">₱199</span>
                                    <a href="#" class="px-4 py-2 rounded-full bg-[#8B7E74] hover:bg-[#A99D92] text-white font-semibold text-sm focus:outline-none focus:ring-2 focus:ring-[#8B7E74]/50">Buy Now</a>
                                </div>
                        </div>
                        <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 flex flex-col card-hover border border-gray-200/50">
                            <div class="w-full h-48 bg-gray-200 rounded-xl overflow-hidden mb-4 flex items-center justify-center">
                                <img src="https://cdn.shopify.com/s/files/1/0070/1884/0133/t/8/assets/pf-b57dac15--Books8_1200x.jpg?v=1620061403" alt="Book: “Harry Potter and the Sorcerer's Stone” by J.K Rowling" class="w-full h-full object-cover rounded-xl" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="w-full h-48 bg-gradient-to-br from-[#8B7E74]/20 to-transparent flex items-center justify-center text-2xl hidden rounded-xl">📖</div>
                            </div>
                            <h4 class="text-2xl font-semibold mb-2 text-gray-900 header-title">Harry Potter and the Sorcerer's Stone</h4>
                            <p class="text-gray-700 mb-4 flex-grow">by J.K Rowling — A story about young wizard Harry as he discovers his magical heritage, attends Hogwarts School, and faces dark forces.</p>
                            <div class="flex justify-between items-center mt-auto">
                                <span class="font-bold text-xl text-[#8B7E74]">₱149</span>
                                <a href="#" class="px-4 py-2 rounded-full bg-[#8B7E74] hover:bg-[#A99D92] text-white font-semibold text-sm focus:outline-none focus:ring-2 focus:ring-[#8B7E74]/50">Buy Now</a>
                            </div>
                        </div>
                        <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 flex flex-col card-hover border border-gray-200/50">
                            <div class="w-full h-48 bg-gray-200 rounded-xl overflow-hidden mb-4 flex items-center justify-center">
                                <img src="https://cdn.shopify.com/s/files/1/0070/1884/0133/t/8/assets/pf-71b40b91--Books_1200x.jpg?v=1620061288" alt="Book: “The Origin of Species” by Charles Darwin" class="w-full h-full object-cover rounded-xl" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="w-full h-48 bg-gradient-to-br from-[#8B7E74]/20 to-transparent flex items-center justify-center text-2xl hidden rounded-xl">📖</div>
                            </div>
                            <h4 class="text-2xl font-semibold mb-2 text-gray-900 header-title">The Origin of Species</h4>
                            <p class="text-gray-700 mb-4 flex-grow">by Charles Darwin — Explains how species evolve over time through natural selection, laying the foundation for modern evolutionary biology.</p>
                            <div class="flex justify-between items-center mt-auto">
                                <span class="font-bold text-xl text-[#8B7E74]">₱179</span>
                                <a href="#" class="px-4 py-2 rounded-full bg-[#8B7E74] hover:bg-[#A99D92] text-white font-semibold text-sm focus:outline-none focus:ring-2 focus:ring-[#8B7E74]/50">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- How It Works -->
            <section id="howitworks" class="py-20 bg-white/90 backdrop-blur-sm text-gray-900">
                <div class="max-w-5xl mx-auto px-4 text-center">
                    <h3 class="text-4xl font-bold mb-8 header-title text-[#8B7E74]">How It Works</h3>
                    <div class="grid md:grid-cols-3 gap-8 text-left">
                        <div class="p-6 rounded-xl bg-gray-50 hover:bg-white shadow-md transition-all duration-300">
                            <div class="w-12 h-12 mx-auto mb-4 bg-[#8B7E74] rounded-full flex items-center justify-center text-white text-xl">1️⃣</div>
                            <
                                <h4 class="font-bold text-xl mb-2 text-gray-900 header-title">Browse & Select</h4>
                                <p class="text-gray-700">Explore our curated collection of eBooks and pick your favorites.</p>
                        </div>
                        <div class="p-6 rounded-xl bg-gray-50 hover:bg-white shadow-md transition-all duration-300">
                            <div class="w-12 h-12 mx-auto mb-4 bg-[#8B7E74] rounded-full flex items-center justify-center text-white text-xl">2️⃣</div>
                            <h4 class="font-bold text-xl mb-2 text-gray-900 header-title">Secure Payment</h4>
                            <p class="text-gray-700">Pay securely using credit/debit card, GCash, or PayPal.</p>
                        </div>
                        <div class="p-6 rounded-xl bg-gray-50 hover:bg-white shadow-md transition-all duration-300">
                            <div class="w-12 h-12 mx-auto mb-4 bg-[#8B7E74] rounded-full flex items-center justify-center text-white text-xl">3️⃣</div>
                            <h4 class="font-bold text-xl mb-2 text-gray-900 header-title">Instant Download</h4>
                            <p class="text-gray-700">Get your eBook instantly—read on any device, anytime.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- About -->
            <section id="about" class="py-20 bg-white/90 backdrop-blur-sm text-gray-900">
                <div class="max-w-5xl mx-auto px-4 text-center">
                    <h3 class="text-4xl font-bold mb-8 header-title text-[#8B7E74]">About Achlys' Bookstore</h3>
                    <div class="w-16 h-16 mx-auto mb-6 bg-[#8B7E74] rounded-full flex items-center justify-center text-white text-2xl">🏛️</div>
                    <p class="text-lg mb-6 text-gray-700 leading-relaxed max-w-3xl mx-auto">
                        Achlys Bookstore is your trusted online bookstore for digital reading. We offer a wide range of genres, from business and self-help to fiction and technology, all available in convenient soft copy formats. Enjoy affordable prices, instant access, and a seamless reading experience.
                    </p>
                </div>
            </section>

            <!-- Contact -->
            <section id="contact" class="py-20 bg-white/90 backdrop-blur-sm text-gray-900">
                <div class="max-w-4xl mx-auto px-4 text-center">
                    <h3 class="text-4xl font-bold mb-8 header-title text-[#8B7E74]">Contact Us</h3>
                    <div class="w-16 h-16 mx-auto mb-6 bg-[#8B7E74] rounded-full flex items-center justify-center text-white text-2xl">📧</div>
                    <p class="mb-4 text-lg text-gray-700">Email: <a href="mailto:support@achlysbookstore.com" class="underline text-[#8B7E74] hover:text-[#A99D92] font-semibold transition-colors">support@achlysbookstore.com</a></p>
                    <p class="text-gray-700">For inquiries, partnerships, or bulk orders, reach out anytime!</p>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="custom-neutral text-gray-100 text-center py-8 mt-auto">
            <p class="text-lg">&copy; <script>
                    document.write(new Date().getFullYear())
                </script> Achlys' Bookstore. All rights reserved.</p>
            <p class="text-sm text-[#C7BBB0] mt-2">A haven for book lovers</p>
        </footer>
    </div>
</body>

</html>