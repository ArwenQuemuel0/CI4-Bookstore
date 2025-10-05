<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Achlys' Bookstore – Login</title>
    <link rel="shortcut icon" type="image/png" href="/assets/bookstore_icon.ico" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Righteous&family=Roboto+Slab:wght@100..900&display=swap"
        rel="stylesheet">
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

        input:focus {
            transition: all 0.3s ease;
            transform: scale(1.02);
        }

        button {
            transition: all 0.3s ease;
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(139, 126, 116, 0.3);
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
                <nav class="hidden md:flex space-x-6">
                    <a href="/home" class="hover:text-[#C7BBB0] transition-colors">Home</a>
                    <a href="/about" class="hover:text-[#C7BBB0] transition-colors">About</a>
                </nav>
            </div>
        </header>

        <!-- Login Form -->
        <main class="flex-grow flex items-center justify-center px-4 py-12">
            <div class="bg-white bg-opacity-90 backdrop-blur-sm rounded-2xl shadow-2xl p-8 w-full max-w-md border border-white/20">
                <div class="text-center mb-8">
                    <div class="w-16 h-16 mx-auto mb-4 bg-[#8B7E74] rounded-full flex items-center justify-center text-white text-2xl font-bold">📖</div>
                    <h2 class="text-3xl font-bold text-gray-900 header-title">Welcome Back</h2>
                    <p class="text-gray-600 mt-2">Sign in to continue your reading journey</p>
                </div>
                <form action="#" method="post" class="space-y-6">
                    <div>
                        <label for="email" class="block text-gray-700 font-semibold mb-3">Email Address</label>
                        <input type="email" id="email" name="email" required
                            class="w-full px-4 py-4 rounded-xl border-2 border-gray-200 focus:outline-none focus:ring-4 focus:ring-[#8B7E74]/20 focus:border-[#8B7E74] text-gray-900 placeholder-gray-500 transition-all duration-300"
                            placeholder="Enter your email" /> <!-- Added placeholder, rounded-xl, better focus ring, transition -->
                    </div>
                    <div>
                        <label for="password" class="block text-gray-700 font-semibold mb-3">Password</label>
                        <input type="password" id="password" name="password" required
                            class="w-full px-4 py-4 rounded-xl border-2 border-gray-200 focus:outline-none focus:ring-4 focus:ring-[#8B7E74]/20 focus:border-[#8B7E74] text-gray-900 placeholder-gray-500 transition-all duration-300"
                            placeholder="Enter your password" /> <!-- Same enhancements -->
                    </div>
                    <button type="submit"
                        class="w-full text-lg font-semibold px-6 py-4 rounded-full bg-[#8B7E74] hover:bg-[#A99D92] text-white shadow-lg focus:outline-none focus:ring-4 focus:ring-[#8B7E74]/50 transition-all duration-300">
                        Sign In
                    </button> <!-- Used Tailwind for colors, hover, shadow, focus; changed text to "Sign In" for modernity -->
                </form>
                <div class="text-center mt-6 space-y-2">
                    <p class="text-gray-700">
                        Don’t have an account?
                        <a href="/signupPage" class="font-semibold text-[#8B7E74] hover:text-[#A99D92] transition-colors">Create one now</a>
                    </p>
                    <a href="/forgot-password" class="text-sm text-gray-500 hover:text-gray-700 transition-colors">Forgot your password?</a>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="custom-neutral text-gray-100 text-center py-6 mt-auto">
            <p>&copy; <script>
                    document.write(new Date().getFullYear())
                </script> Achlys Bookstore. All rights reserved.</p>
            <p class="text-sm text-[#C7BBB0] mt-1">A haven for book lovers</p>
        </footer>
    </div>
</body>

</html>