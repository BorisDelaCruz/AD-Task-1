<?php

function osuHeader() {
    echo '<div class="osu-header">';
    echo '<div class="osu-logo">Sakura</div>';
    echo '<nav class="osu-nav">';
    echo '<a href="../index.php">Home</a>';
    echo '<a href="Osu.php">Game Main</a>';
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
    <title>Makeine! Game Features</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <style>
        body {
            background: linear-gradient(135deg, #ff66aa 0%, #66ccff 100%);
            font-family: 'Segoe UI', Arial, sans-serif;
            color: #fff;
            margin: 0;
            padding: 0;
        }
        .osu-header {
            text-align: center;
            padding: 2rem 0 1rem 0;
        }
        .osu-logo {
            font-size: 2rem;
            font-weight: bold;
            letter-spacing: 1px;
            color: #fff;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            width: 140px;
            height: 140px;
            line-height: 140px;
            margin: 0 auto 1rem auto;
            box-shadow: 0 4px 24px rgba(0,0,0,0.15);
        }
        .osu-nav {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-bottom: 2rem;
        }
        .osu-nav a {
            color: #fff;
            background: rgba(0,0,0,0.15);
            padding: 0.7rem 1.5rem;
            border-radius: 2rem;
            text-decoration: none;
            font-weight: 500;
            transition: background 0.2s;
        }
        .osu-nav a:hover {
            background: rgba(0,0,0,0.3);
        }
        .osu-section {
            max-width: 700px;
            margin: 2rem auto;
            background: rgba(255,255,255,0.08);
            border-radius: 1.5rem;
            padding: 2rem;
            box-shadow: 0 2px 12px rgba(0,0,0,0.08);
        }
        .osu-features {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            justify-content: center;
            margin-top: 1.5rem;
        }
        .osu-feature {
            background: rgba(0,0,0,0.12);
            border-radius: 1rem;
            padding: 1rem 1.5rem;
            min-width: 180px;
            text-align: center;
            flex: 1 1 180px;
        }
        .osu-footer {
            text-align: center;
            margin: 2rem 0 1rem 0;
            color: #fff;
            opacity: 0.7;
        }
    </style>
</head>
<body>
    <?php osuHeader(); ?>
    <section class="osu-section">
        <h2 style="text-align:center;">Welcome to H1H3 Co.</h2>
        <p style="text-align:center;">Explore the unique features of this romantic comedy visual novel and see what makes Sutemo's journey so special!</p>
        <?php showOsuFeatures($features, $featureDescriptions); ?>
    </section>
    <?php osuFooter(); ?>
</body>
</html>