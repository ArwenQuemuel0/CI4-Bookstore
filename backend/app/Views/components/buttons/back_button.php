<?php
$button = [
    "href" => "/",
    "label" => "← Back to Home",
    "class" => "bg-[#c7bbb0] text-[#3c2f2f] hover:bg-[#b3a698]"
];
?>

<a href="<?= htmlspecialchars($button['href']) ?>"
    class="<?= htmlspecialchars($button['class']) ?> px-5 py-2 rounded-md font-semibold text-sm transition-transform hover:scale-105 inline-block mb-6">
    <?= htmlspecialchars($button['label']) ?>
</a>