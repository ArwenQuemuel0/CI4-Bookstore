<?php
$roadmapItems = [
    [
        "title" => "User Management",
        "description" => "Manage user accounts for customers and staff, including roles, profile updates, and account management tools.",
        "status" => "In Progress",
        "priority" => "High",
        "statusClass" => "bg-[#ffb74d]"
    ],
    [
        "title" => "E-Book Service Management",
        "description" => "Manage e-books in the catalog, adjust pricing, and handle digital access for online readers.",
        "status" => "Planned",
        "priority" => "Medium",
        "statusClass" => "bg-[#64b5f6]"
    ],
    [
        "title" => "Recommendation Engine",
        "description" => "Suggest personalized titles based on reader preferences and browsing history.",
        "status" => "Planned",
        "priority" => "Medium",
        "statusClass" => "bg-[#64b5f6]"
    ],
    [
        "title" => "Book Request System",
        "description" => "Let users request unavailable books and get notified when they’re restocked or released.",
        "status" => "Backlog",
        "priority" => "Low",
        "statusClass" => "bg-[#73397e]"
    ],
    [
        "title" => "Community Features",
        "description" => "Introduce book clubs, discussion boards, and author Q&A sessions to engage readers more deeply.",
        "status" => "In Progress",
        "priority" => "High",
        "statusClass" => "bg-[#ffb74d]"
    ],
];

// --- Sort items by priority: High → Medium → Low ---
usort($roadmapItems, function ($a, $b) {
    $priorityOrder = ["High" => 3, "Medium" => 2, "Low" => 1];
    return $priorityOrder[$b['priority']] <=> $priorityOrder[$a['priority']];
});
?>

<div class="space-y-5">
    <?php foreach ($roadmapItems as $item): ?>
        <div class="bg-white/90 backdrop-blur-sm border border-white/20 shadow-lg hover:shadow-2xl rounded-2xl p-7 transition-all duration-300 hover:-translate-y-1">
            <div class="flex justify-between items-start">
                <h2 class="font-semibold text-xl text-[#3c2f2f]"><?= htmlspecialchars($item['title']) ?></h2>
                <span class="status px-3 py-1 rounded-full text-white text-xs font-semibold <?= $item['statusClass'] ?>">
                    <?= htmlspecialchars($item['status']) ?>
                </span>
            </div>
            <p class="mt-2 text-sm text-[#3c2f2f]">
                <?= htmlspecialchars($item['description']) ?>
            </p>
            <p class="mt-3 font-medium text-[#8B7E74] text-xs">
                Priority: <?= htmlspecialchars($item['priority']) ?>
            </p>
        </div>
    <?php endforeach; ?>
</div>