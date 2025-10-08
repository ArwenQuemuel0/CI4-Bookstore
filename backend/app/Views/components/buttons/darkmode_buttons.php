<?php
$darkModeButtons = [
    [
        "label" => "Primary",
        "class" => "bg-[#8b7e74] text-white hover:bg-[#a99d92]"
    ],
    [
        "label" => "Secondary",
        "class" => "bg-[#a99d92] text-white hover:bg-[#c7bbb0] hover:text-[#3c2f2f]"
    ],
    [
        "label" => "Border",
        "class" => "border-2 border-[#c7bbb0] text-[#c7bbb0] hover:bg-[#c7bbb0] hover:text-[#3c2f2f]"
    ],
    [
        "label" => "Disabled",
        "class" => "bg-[#666] text-[#bbb] cursor-not-allowed",
        "disabled" => true
    ]
];
?>

<div class="font-semibold text-[#5a4b41] mb-3">Dark Mode</div>
<div class="bg-[#3c2f2f] rounded-md py-5 px-10 inline-block">
    <div class="flex justify-center flex-wrap gap-3">
        <?php foreach ($darkModeButtons as $btn): ?>
            <button
                class="<?= htmlspecialchars($btn['class']) ?> px-5 py-2 rounded-md font-semibold text-sm transition-transform hover:scale-105"
                <?= isset($btn['disabled']) ? 'disabled' : '' ?>>
                <?= htmlspecialchars($btn['label']) ?>
            </button>
        <?php endforeach; ?>
    </div>
</div>