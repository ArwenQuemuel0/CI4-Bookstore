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
            background: url('https://static.vecteezy.com/system/resources/previews/022/336/538/non_2x/coffee-and-book-minimalist-background-illustration-ai-generative-free-photo.jpg') no-repeat center center fixed;
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
    <div class="flex flex-col min-h-screen overlay">
        <!-- Header -->
        <header class="top-0 z-50 sticky shadow-lg text-gray-100 custom-neutral">
            <div class="flex justify-between items-center mx-auto px-4 py-6 max-w-7xl">
                <div class="flex items-center space-x-3">
                    <img src="/assets/circle_logo.png" alt="Achlys Circle Logo" class="w-10 md:w-12 h-10 md:h-12">
                    <h1 class="text-3xl md:text-4xl tracking-wider header-title">Achlys Bookstore</h1>
                </div>
                <nav class="hidden md:flex items-center space-x-6">
                    <a href="/loginPage" class="bg-[#C7BBB0] hover:bg-[#A99D92] shadow-lg px-6 py-3 rounded-full text-gray-800 btn-main">Login</a>
                    <a href="/signupPage" class="bg-[#C7BBB0] hover:bg-[#A99D92] shadow-lg px-6 py-3 rounded-full text-gray-800 btn-main">Sign Up</a>
                    <a href="/moodboardPage" class="bg-[#C7BBB0] hover:bg-[#A99D92] shadow-lg px-6 py-3 rounded-full text-gray-800 btn-main">Moodboard</a>
                    <a href="/roadmapPage" class="bg-[#C7BBB0] hover:bg-[#A99D92] shadow-lg px-6 py-3 rounded-full text-gray-800 btn-main">Roadmap</a>
                </nav>
                <button class="md:hidden text-gray-100">☰</button>
            </div>
        </header>

        <main class="flex-grow">
            <section class="flex justify-center items-center py-32 text-center">
                <div class="bg-white/10 backdrop-blur-sm mx-auto p-8 px-4 rounded-2xl max-w-4xl">
                    <div class="flex justify-center items-center bg-[#8B7E74] mx-auto mb-6 rounded-full w-20 h-20 text-white text-3xl">📚</div>
                    <h2 class="drop-shadow-2xl mb-8 font-bold text-gray-50 text-5xl md:text-7xl header-title">Buy & Download eBooks Instantly</h2>
                    <p class="mb-12 text-gray-200 text-xl md:text-3xl leading-relaxed">
                        Discover, purchase, and enjoy your favorite books in digital format—anytime, anywhere.
                    </p>
                    <a href="#ebooks" class="inline-block bg-white hover:bg-gray-100 shadow-xl px-10 py-5 rounded-full focus:outline-none focus:ring-[#8B7E74]/50 focus:ring-4 font-semibold text-gray-800 text-xl md:text-2xl transition-all duration-300 btn-main">Browse eBooks</a>
                </div>
            </section>

            <!-- eBooks Section -->
            <section id="ebooks" class="bg-white/90 backdrop-blur-sm py-20 text-gray-900">
                <div class="mx-auto px-4 max-w-6xl">
                    <h3 class="mb-12 font-bold text-[#8B7E74] text-4xl text-center header-title">Featured eBooks</h3>
                    <div class="gap-8 grid md:grid-cols-3">
                        <div class="flex flex-col bg-white shadow-lg hover:shadow-2xl p-6 border border-gray-200/50 rounded-2xl transition-all duration-300 card-hover">
                            <div class="flex justify-center items-center bg-gray-200 mb-4 rounded-xl w-full h-48 overflow-hidden">
                                <img src="https://cdn.shopify.com/s/files/1/0070/1884/0133/t/8/assets/pf-8a8430b5--Books5.jpg?v=1620061376" alt="Book: “The Lord of the Rings” by J.R.R. Tolkien" class="rounded-xl w-full h-full object-cover" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="hidden flex justify-center items-center bg-gradient-to-br from-[#8B7E74]/20 to-transparent rounded-xl w-full h-48 text-2xl">📖</div>
                            </div>
                            <h4 class="mb-2 font-semibold text-gray-900 text-2xl header-title">The Lord of the Rings</h4>
                            <
                                <p class="flex-grow mb-4 text-gray-700">by J.R.R. Tolkien — A story about Frodo Baggins’ quest to destroy a dark lord’s powerful ring and save Middle-earth.</p>
                                <div class="flex justify-between items-center mt-auto">
                                    <span class="font-bold text-[#8B7E74] text-xl">₱199</span>
                                    <a href="#" class="bg-[#8B7E74] hover:bg-[#A99D92] px-4 py-2 rounded-full focus:outline-none focus:ring-[#8B7E74]/50 focus:ring-2 font-semibold text-white text-sm">Buy Now</a>
                                </div>
                        </div>
                        <div class="flex flex-col bg-white shadow-lg hover:shadow-2xl p-6 border border-gray-200/50 rounded-2xl transition-all duration-300 card-hover">
                            <div class="flex justify-center items-center bg-gray-200 mb-4 rounded-xl w-full h-48 overflow-hidden">
                                <img src="https://cdn.shopify.com/s/files/1/0070/1884/0133/t/8/assets/pf-b57dac15--Books8_1200x.jpg?v=1620061403" alt="Book: “Harry Potter and the Sorcerer's Stone” by J.K Rowling" class="rounded-xl w-full h-full object-cover" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="hidden flex justify-center items-center bg-gradient-to-br from-[#8B7E74]/20 to-transparent rounded-xl w-full h-48 text-2xl">📖</div>
                            </div>
                            <h4 class="mb-2 font-semibold text-gray-900 text-2xl header-title">Harry Potter and the Sorcerer's Stone</h4>
                            <p class="flex-grow mb-4 text-gray-700">by J.K Rowling — A story about young wizard Harry as he discovers his magical heritage, attends Hogwarts School, and faces dark forces.</p>
                            <div class="flex justify-between items-center mt-auto">
                                <span class="font-bold text-[#8B7E74] text-xl">₱149</span>
                                <a href="#" class="bg-[#8B7E74] hover:bg-[#A99D92] px-4 py-2 rounded-full focus:outline-none focus:ring-[#8B7E74]/50 focus:ring-2 font-semibold text-white text-sm">Buy Now</a>
                            </div>
                        </div>
                        <div class="flex flex-col bg-white shadow-lg hover:shadow-2xl p-6 border border-gray-200/50 rounded-2xl transition-all duration-300 card-hover">
                            <div class="flex justify-center items-center bg-gray-200 mb-4 rounded-xl w-full h-48 overflow-hidden">
                                <img src="https://cdn.shopify.com/s/files/1/0070/1884/0133/t/8/assets/pf-71b40b91--Books_1200x.jpg?v=1620061288" alt="Book: “The Origin of Species” by Charles Darwin" class="rounded-xl w-full h-full object-cover" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <div class="hidden flex justify-center items-center bg-gradient-to-br from-[#8B7E74]/20 to-transparent rounded-xl w-full h-48 text-2xl">📖</div>
                            </div>
                            <h4 class="mb-2 font-semibold text-gray-900 text-2xl header-title">The Origin of Species</h4>
                            <p class="flex-grow mb-4 text-gray-700">by Charles Darwin — Explains how species evolve over time through natural selection, laying the foundation for modern evolutionary biology.</p>
                            <div class="flex justify-between items-center mt-auto">
                                <span class="font-bold text-[#8B7E74] text-xl">₱179</span>
                                <a href="#" class="bg-[#8B7E74] hover:bg-[#A99D92] px-4 py-2 rounded-full focus:outline-none focus:ring-[#8B7E74]/50 focus:ring-2 font-semibold text-white text-sm">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- How It Works -->
            <section id="howitworks" class="bg-white/90 backdrop-blur-sm py-20 text-gray-900">
                <div class="mx-auto px-4 max-w-5xl text-center">
                    <h3 class="mb-8 font-bold text-[#8B7E74] text-4xl header-title">How It Works</h3>
                    <div class="gap-8 grid md:grid-cols-3 text-left">
                        <div class="bg-gray-50 hover:bg-white shadow-md p-6 rounded-xl transition-all duration-300">
                            <div class="flex justify-center items-center bg-[#8B7E74] mx-auto mb-4 rounded-full w-12 h-12 text-white text-xl">1️⃣</div>
                            <h4 class="mb-2 font-bold text-gray-900 text-xl header-title">Browse & Select</h4>
                            <p class="text-gray-700">Explore our curated collection of eBooks and pick your favorites.</p>
                        </div>
                        <div class="bg-gray-50 hover:bg-white shadow-md p-6 rounded-xl transition-all duration-300">
                            <div class="flex justify-center items-center bg-[#8B7E74] mx-auto mb-4 rounded-full w-12 h-12 text-white text-xl">2️⃣</div>
                            <h4 class="mb-2 font-bold text-gray-900 text-xl header-title">Secure Payment</h4>
                            <p class="text-gray-700">Pay securely using credit/debit card, GCash, or PayPal.</p>
                        </div>
                        <div class="bg-gray-50 hover:bg-white shadow-md p-6 rounded-xl transition-all duration-300">
                            <div class="flex justify-center items-center bg-[#8B7E74] mx-auto mb-4 rounded-full w-12 h-12 text-white text-xl">3️⃣</div>
                            <h4 class="mb-2 font-bold text-gray-900 text-xl header-title">Instant Download</h4>
                            <p class="text-gray-700">Get your eBook instantly—read on any device, anytime.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- About -->
            <section id="about" class="bg-white/90 backdrop-blur-sm py-20 text-gray-900">
                <div class="mx-auto px-4 max-w-5xl text-center">
                    <h3 class="mb-8 font-bold text-[#8B7E74] text-4xl header-title">About Achlys' Bookstore</h3>
                    <div class="flex justify-center items-center bg-[#8B7E74] mx-auto mb-6 rounded-full w-16 h-16 text-white text-2xl">🏛️</div>
                    <p class="mx-auto mb-6 max-w-3xl text-gray-700 text-lg leading-relaxed">
                        Achlys Bookstore is your trusted online bookstore for digital reading. We offer a wide range of genres, from business and self-help to fiction and technology, all available in convenient soft copy formats. Enjoy affordable prices, instant access, and a seamless reading experience.
                    </p>
                </div>
            </section>

            <!-- Contact -->
            <section id="contact" class="bg-white/90 backdrop-blur-sm py-20 text-gray-900">
                <div class="mx-auto px-4 max-w-4xl text-center">
                    <h3 class="mb-8 font-bold text-[#8B7E74] text-4xl header-title">Contact Us</h3>
                    <div class="flex justify-center items-center bg-[#8B7E74] mx-auto mb-6 rounded-full w-16 h-16 text-white text-2xl">📧</div>
                    <p class="mb-4 text-gray-700 text-lg">Email: <a href="mailto:support@achlysbookstore.com" class="font-semibold text-[#8B7E74] hover:text-[#A99D92] underline transition-colors">support@achlysbookstore.com</a></p>
                    <p class="text-gray-700">For inquiries, partnerships, or bulk orders, reach out anytime!</p>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="mt-auto py-8 text-gray-100 text-center custom-neutral">
            <p class="text-lg">&copy; <script>
                    document.write(new Date().getFullYear())
                </script> Achlys' Bookstore. All rights reserved.</p>
            <p class="mt-2 text-[#C7BBB0] text-sm">A haven for book lovers</p>
        </footer>
    </div>
</body>

</html>