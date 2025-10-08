<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Achlys' Bookstore – Roadmap</title>
    <link rel="shortcut icon" type="image/png" href="/assets/book_icon.ico" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto Slab', serif;
        }

        .heading {
            font-family: 'Righteous', sans-serif;
        }
    </style>
</head>

<body class="bg-fixed bg-cover bg-center text-[#3c2f2f]" style="background-image: url('https://cdn.pixabay.com/photo/2017/10/15/08/56/neutral-2852878_1280.jpg');">

    <div class="min-h-screen bg-gradient-to-b from-[rgba(100,92,92,0.6)] to-[rgba(139,126,116,0.4)] px-4 py-10">
        <div class="mx-auto max-w-5xl">

            <!-- Header -->
            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center mb-10 text-white">
                <div>
                    <div class="mt-6 text-left">
                        <?= view('components/buttons/back_button.php') ?>
                    </div>
                    <h1 class="text-4xl tracking-wide heading drop-shadow-sm">Achlys Bookstore Roadmap</h1>
                    <p class="mt-2 text-[#C7BBB0] text-sm">A visual overview of our bookstore’s ongoing and upcoming milestones.</p>
                </div>
            </div>

            <!-- Cards -->
            <div class="space-y-5">

                <!-- User Management -->
                <div class="bg-white/90 border border-white/20 rounded-xl shadow-md p-7 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_6px_18px_rgba(139,126,116,0.35)]">
                    <div class="flex justify-between items-start">
                        <h2 class="font-semibold text-xl heading">User Management</h2>
                        <span class="text-white bg-[#ffb74d] font-semibold text-xs px-3 py-1 rounded-full">In Progress</span>
                    </div>
                    <p class="mt-2 text-sm">Manage user accounts for customers and staff, including roles, profile updates, and account management tools.</p>
                    <p class="mt-3 font-medium text-[#8B7E74] text-xs">Priority: High</p>
                </div>

                <!-- E-Book Service Management -->
                <div class="bg-white/90 border border-white/20 rounded-xl shadow-md p-7 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_6px_18px_rgba(139,126,116,0.35)]">
                    <div class="flex justify-between items-start">
                        <h2 class="font-semibold text-xl heading">E-Book Service Management</h2>
                        <span class="text-white bg-[#64b5f6] font-semibold text-xs px-3 py-1 rounded-full">Planned</span>
                    </div>
                    <p class="mt-2 text-sm">Manage e-books in the catalog, adjust pricing, and handle digital access for online readers.</p>
                    <p class="mt-3 font-medium text-[#8B7E74] text-xs">Priority: Medium</p>
                </div>

                <!-- Book Request System -->
                <div class="bg-white/90 border border-white/20 rounded-xl shadow-md p-7 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_6px_18px_rgba(139,126,116,0.35)]">
                    <div class="flex justify-between items-start">
                        <h2 class="font-semibold text-xl heading">Book Request System</h2>
                        <span class="text-white bg-[#73397e] font-semibold text-xs px-3 py-1 rounded-full">Backlog</span>
                    </div>
                    <p class="mt-2 text-sm">Let users request unavailable books and get notified when they’re restocked or released.</p>
                    <p class="mt-3 font-medium text-[#8B7E74] text-xs">Priority: Low</p>
                </div>

                <!-- Recommendation Engine -->
                <div class="bg-white/90 border border-white/20 rounded-xl shadow-md p-7 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_6px_18px_rgba(139,126,116,0.35)]">
                    <div class="flex justify-between items-start">
                        <h2 class="font-semibold text-xl heading">Recommendation Engine</h2>
                        <span class="text-white bg-[#64b5f6] font-semibold text-xs px-3 py-1 rounded-full">Planned</span>
                    </div>
                    <p class="mt-2 text-sm">Suggest personalized titles based on reader preferences and browsing history.</p>
                    <p class="mt-3 font-medium text-[#8B7E74] text-xs">Priority: Medium</p>
                </div>

                <!-- Community Features -->
                <div class="bg-white/90 border border-white/20 rounded-xl shadow-md p-7 transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_6px_18px_rgba(139,126,116,0.35)]">
                    <div class="flex justify-between items-start">
                        <h2 class="font-semibold text-xl heading">Community Features</h2>
                        <span class="text-white bg-[#ffb74d] font-semibold text-xs px-3 py-1 rounded-full">In Progress</span>
                    </div>
                    <p class="mt-2 text-sm">Introduce book clubs, discussion boards, and author Q&A sessions to engage readers more deeply.</p>
                    <p class="mt-3 font-medium text-[#8B7E74] text-xs">Priority: High</p>
                </div>
            </div>
        </div>
    </div>
    <?= view('components/footer.php') ?>
</body>

</html>