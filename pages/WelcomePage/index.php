<?php

function osuHeader() {
    echo '<div class="osu-header">';
    echo '<div class="osu-logo">Sakura</div>';
    echo '<nav class="osu-nav">';
    echo '<a href="/../index.php">Home</a>';
    echo '<a href="../WikiPage/index.php">Wiki</a>';
    echo '</nav>';
    echo '</div>';
}

function osuFooter() {
    echo '<div class="osu-footer">&copy; ' . date("Y") . ' Makeine: Too Many Losing Heroines | Fan Wiki</div>';
}

// Features from your visual novel game
$features = [
    "Branching Choices",
    "Multiple Heroines",
    "CG Gallery",
    "Comedy Events",
    "Secret Endings"
];

$featureDescriptions = [
    "Branching Choices" => "Shape Sutemo's story with every decision you make. Each choice leads to new scenes and outcomes.",
    "Multiple Heroines" => "Interact with a cast of unique heroines, each with their own personalities and storylines.",
    "CG Gallery" => "Unlock beautiful artwork from key moments in the game as you progress through different routes.",
    "Comedy Events" => "Enjoy hilarious and heartwarming moments as Sutemo navigates the chaos of high school romance.",
    "Secret Endings" => "Discover hidden endings by exploring every possibility and making unexpected choices."
];

function showOsuFeatures($features, $descriptions) {
    echo '<div class="osu-features">';
    foreach ($features as $feature) {
        $desc = isset($descriptions[$feature]) ? $descriptions[$feature] : '';
        echo '<div class="osu-feature">';
        echo "<h3>$feature</h3>";
        echo "<p>$desc</p>";
        echo '</div>';
    }
    echo '</div>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sakura! Game Features</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body class="welcome-page">
    <?php osuHeader(); ?>
    <section class="osu-section">
        <h2 style="text-align:center;">Welcome to H1H3 Co.</h2>
        <p style="text-align:center;">Explore the unique features of this romantic comedy visual novel and see what makes Sutemo's journey so special!</p>
        <?php showOsuFeatures($features, $featureDescriptions); ?>
    </section>
    <?php osuFooter(); ?>
</body>
</html>