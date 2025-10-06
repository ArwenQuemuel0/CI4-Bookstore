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
    <link
        href="https://fonts.googleapis.com/css2?family=Righteous&family=Roboto+Slab:wght@100..900&display=swap"
        rel="stylesheet">

    <style>
        body {
            background: url('https://cdn.pixabay.com/photo/2017/10/15/08/56/neutral-2852878_1280.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Roboto Slab', serif;
            color: #3c2f2f;
        }

        .overlay {
            background: linear-gradient(rgba(100, 92, 92, 0.6), rgba(139, 126, 116, 0.4));
            min-height: 100vh;
            padding: 2rem 1rem;
        }

        .roadmap-card {
            background: rgba(255, 255, 255, 0.92);
            border-radius: 1rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            padding: 1.75rem;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .roadmap-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 6px 18px rgba(139, 126, 116, 0.35);
        }

        .status {
            font-weight: 600;
            padding: 0.3rem 0.9rem;
            border-radius: 9999px;
            font-size: 0.8rem;
            color: #fff;
        }

        .status.in-progress {
            background-color: #ffb74d;
        }

        .status.planned {
            background-color: #64b5f6;
        }

        .status.backlog {
            background-color: #73397eff;
        }

        .status.done {
            background-color: #81c784;
        }

        .divider {
            height: 1px;
            background-color: rgba(255, 255, 255, 0.3);
            margin: 3rem 0;
        }

        h1,
        h2,
        h3,
        .heading {
            font-family: 'Righteous', sans-serif;
            color: #3c2f2f;
        }

        select {
            background-color: rgba(255, 255, 255, 0.85);
        }

        .header-title {
            color: #fff;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>

<body>
    <div class="overlay">
        <div class="max-w-5xl mx-auto">

            <!-- Header -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-10 text-white">
                <div>
                    <h1 class="header-title text-4xl tracking-wide">Achlys Bookstore Roadmap</h1>
                    <p class="text-sm text-[#C7BBB0] mt-2">A visual overview of our bookstore’s ongoing and upcoming milestones.</p>
                </div>
            </div>

            <!-- Cards -->
            <div class="space-y-5">

                <!-- User Management -->
                <div class="roadmap-card">
                    <div class="flex justify-between items-start">
                        <h2 class="text-xl font-semibold">User Management</h2>
                        <span class="status in-progress">In Progress</span>
                    </div>
                    <p class="text-sm mt-2">
                        Manage user accounts for customers and staff, including roles, profile updates, and account management tools.
                    </p>
                    <p class="text-xs mt-3 text-[#8B7E74] font-medium">Priority: High</p>
                </div>

                <!-- E-Book Service Management -->
                <div class="roadmap-card">
                    <div class="flex justify-between items-start">
                        <h2 class="text-xl font-semibold">E-Book Service Management</h2>
                        <span class="status planned">Planned</span>
                    </div>
                    <p class="text-sm mt-2">
                        Manage e-books in the catalog, adjust pricing, and handle digital access for online readers.
                    </p>
                    <p class="text-xs mt-3 text-[#8B7E74] font-medium">Priority: Medium</p>
                </div>

                <!-- Book Request System -->
                <div class="roadmap-card">
                    <div class="flex justify-between items-start">
                        <h2 class="text-xl font-semibold">Book Request System</h2>
                        <span class="status backlog">Backlog</span>
                    </div>
                    <p class="text-sm mt-2">
                        Let users request unavailable books and get notified when they’re restocked or released.
                    </p>
                    <p class="text-xs mt-3 text-[#8B7E74] font-medium">Priority: Low</p>
                </div>

                <!-- Recommendation Engine -->
                <div class="roadmap-card">
                    <div class="flex justify-between items-start">
                        <h2 class="text-xl font-semibold">Recommendation Engine</h2>
                        <span class="status planned">Planned</span>
                    </div>
                    <p class="text-sm mt-2">
                        Suggest personalized titles based on reader preferences and browsing history.
                    </p>
                    <p class="text-xs mt-3 text-[#8B7E74] font-medium">Priority: Medium</p>
                </div>

                <!-- Community Features -->
                <div class="roadmap-card">
                    <div class="flex justify-between items-start">
                        <h2 class="text-xl font-semibold">Community Features</h2>
                        <span class="status in-progress">In Progress</span>
                    </div>
                    <p class="text-sm mt-2">
                        Introduce book clubs, discussion boards, and author Q&A sessions to engage readers more deeply.
                    </p>
                    <p class="text-xs mt-3 text-[#8B7E74] font-medium">Priority: High</p>
                </div>
            </div>

            <!-- Divider -->
            <div class="divider"></div>

            <!-- Completed Section -->
            <h2 class="text-2xl font-semibold mb-5 heading text-white">Completed</h2>

            <div class="roadmap-card">
                <div class="flex justify-between items-start">
                    <h2 class="text-xl font-semibold">Store Setup & Admin Roles</h2>
                    <span class="status done">Done</span>
                </div>
                <p class="text-sm mt-2">
                    Initial setup of the Achlys Bookstore platform with admin and employee role configurations.
                </p>
                <p class="text-xs mt-3 text-[#8B7E74] font-medium">Priority: High</p>
            </div>

        </div>
    </div>
</body>

</html>