<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Achlys' Bookstore – Login</title>
    <link rel="shortcut icon" type="image/png" href="/assets/book_icon.ico" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto Slab', serif;
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

        /* Left Section with Darker Overlay */
        .bookstore-gradient {
            position: relative;
            background: url('https://static.vecteezy.com/system/resources/previews/022/336/538/non_2x/coffee-and-book-minimalist-background-illustration-ai-generative-free-photo.jpg') no-repeat center center;
            background-size: cover;
        }

        .bookstore-gradient::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(44, 41, 41, 0.85), rgba(139, 126, 116, 0.6));
            z-index: 0;
        }

        .bookstore-gradient>div {
            position: relative;
            z-index: 1;
        }
    </style>
</head>

<body class="text-gray-100 min-h-screen flex flex-col">

    <!-- Main Content -->
    <main class="flex flex-col md:flex-row flex-grow">

        <!-- Left Section -->
        <div class="bookstore-gradient text-white flex flex-col justify-center items-center p-12 md:w-2/3">
            <div class="max-w-md text-center space-y-6">
                <h2 class="header-title text-4xl md:text-5xl font-bold">Welcome to Achlys' Bookstore</h2>
                <p class="text-lg text-white/90 leading-relaxed">
                    From rare collections to modern favorites, your next great story awaits.
                    Join our community of passionate readers and explore the world through books.
                </p>
            </div>
        </div>

        <!-- Right Section (Login Form) -->
        <div class="flex justify-center items-center bg-white md:w-1/3 py-16 px-6">
            <div class="bg-white bg-opacity-90 rounded-2xl shadow-2xl p-10 w-full max-w-md">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-900 header-title">Welcome Back</h2>
                    <p class="text-gray-600 mt-2">Log in to continue your reading journey</p>
                </div>

                <form action="#" method="post" class="space-y-6">
                    <div>
                        <label for="email" class="block text-gray-700 font-semibold mb-3">Email Address</label>
                        <input type="email" id="email" name="email" required
                            class="w-full px-4 py-4 rounded-xl border-2 border-gray-200 focus:outline-none focus:ring-4 focus:ring-[#8B7E74]/20 focus:border-[#8B7E74] text-gray-900 placeholder-gray-500 transition-all duration-300"
                            placeholder="Enter your email" />
                    </div>

                    <div>
                        <label for="password" class="block text-gray-700 font-semibold mb-3">Password</label>
                        <input type="password" id="password" name="password" required
                            class="w-full px-4 py-4 rounded-xl border-2 border-gray-200 focus:outline-none focus:ring-4 focus:ring-[#8B7E74]/20 focus:border-[#8B7E74] text-gray-900 placeholder-gray-500 transition-all duration-300"
                            placeholder="Enter your password" />
                    </div>
                    <!--
                    <div class="flex justify-end text-sm text-right">
                        <a href="/forgot-password" class="text-[#8B7E74] hover:text-[#A99D92] transition-colors">Forgot password?</a>
                    </div>
    -->
                    <button type="submit"
                        class="w-full text-lg font-semibold px-6 py-4 rounded-full bg-[#8B7E74] hover:bg-[#A99D92] text-white shadow-lg focus:outline-none focus:ring-4 focus:ring-[#8B7E74]/50 transition-all duration-300">
                        Log In
                    </button>
                </form>

                <div class="text-center mt-6">
                    <p class="text-gray-700">
                        Don’t have an account?
                        <a href="/signupPage" class="font-semibold text-[#8B7E74] hover:text-[#A99D92] transition-colors">Create one now</a>
                    </p>
                </div>
            </div>
        </div>

    </main>

</body>

</html>