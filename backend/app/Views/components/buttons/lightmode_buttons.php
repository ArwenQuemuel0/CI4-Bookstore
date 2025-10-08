<?php
$lightModeButtons = [
    [
        "label" => "Primary",
        "class" => "bg-[#8b7e74] text-white hover:bg-[#776b63]"
    ],
    [
        "label" => "Secondary",
        "class" => "bg-[#c7bbb0] text-[#3c2f2f] hover:bg-[#b3a698]"
    ],
    [
        "label" => "Border",
        "class" => "border-2 border-[#8b7e74] text-[#8b7e74] hover:bg-[#8b7e74] hover:text-white"
    ],
    [
        "label" => "Disabled",
        "class" => "bg-[#ccc] text-[#999] cursor-not-allowed",
        "disabled" => true
    ]
];
?>

<div class="font-semibold text-[#5a4b41] mb-3">Light Mode</div>
<div class="flex justify-center flex-wrap gap-3">
    <?php foreach ($lightModeButtons as $btn): ?>
        <button
            class="<?= htmlspecialchars($btn['class']) ?> px-5 py-2 rounded-md font-semibold text-sm transition-transform hover:scale-105"
            <?= isset($btn['disabled']) ? 'disabled' : '' ?>>
            <?= htmlspecialchars($btn['label']) ?>
        </button>
    <?php endforeach; ?>
</div>