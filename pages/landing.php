<?php
// Fragment: Header
function showHeader($title) {
    echo "<header><h1>$title</h1><p>Your encyclopedia for all things about the game!</p></header>";
}

// Fragment: Footer
function showFooter() {
    echo "<footer><p>&copy; " . date("Y") . " RomCom VN Wiki. All rights reserved.</p></footer>";
}

// Array 
$characters = [
    "Sutemo Hanabira",
    "Emi Tachibana",
    "Rina Hoshizora",
    "Yume Akiyama",
    "Kanae Minamoto"
];

// Dictionary 
$characterDescriptions = [
    "Sutemo Hanabira" => "The determined and kind-hearted protagonist. Despite her best efforts, she always finds herself in comedic misfortune. Loves cherry blossoms and believes in happy endings.",
    "Emi Tachibana" => "Sutemo's energetic childhood friend who secretly cheers her on from the sidelines. She hides her own feelings behind a bright smile.",
    "Rina Hoshizora" => "The quiet, book-loving classmate with a mysterious past. She often gives Sutemo cryptic advice that somehow always helps.",
    "Yume Akiyama" => "A transfer student with a flair for the dramatic. She dreams of becoming a novelist and sees Sutemo as her muse.",
    "Kanae Minamoto" => "The student council president, strict on the outside but soft on the inside. She admires Sutemo's perseverance and secretly supports her."
];

// Array
$terms = ["Choice System", "Routes", "CG Gallery", "Good Ending"];

// Dictionary 
$termDescriptions = [
    "Choice System" => "Players make decisions that affect the story's direction and relationships.",
    "Routes" => "Each heroine has her own unique storyline and ending.",
    "CG Gallery" => "Unlockable artwork scenes from memorable moments.",
    "Good Ending" => "Achieved by making the right choices for each character."
];

// Function
function showList($items, $descriptions) {
    echo "<ul>";
    foreach ($items as $item) {
        $desc = isset($descriptions[$item]) ? $descriptions[$item] : "";
        echo "<li><strong>$item</strong>: $desc</li>";
    }
    echo "</ul>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RomCom Visual Novel Wiki</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <style>
        body {
            background: linear-gradient(135deg, #ffe0f0 0%, #cce6ff 100%);
            font-family: 'Segoe UI', Arial, sans-serif;
            color: #333;
            margin: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        header {
            background: #ff66aa;
            color: #fff;
            padding: 2rem 0 1rem 0;
            text-align: center;
        }
        .container {
            display: flex;
            flex: 1;
            max-width: 1100px;
            margin: 2rem auto;
            gap: 2rem;
        }
        aside {
            background: #fff;
            border-radius: 1rem;
            box-shadow: 0 2px 12px rgba(0,0,0,0.08);
            padding: 1.5rem;
            min-width: 220px;
            max-width: 260px;
        }
        main {
            background: #fff;
            border-radius: 1rem;
            box-shadow: 0 2px 12px rgba(0,0,0,0.08);
            padding: 2rem;
            flex: 1;
        }
        h2 {
            color: #ff66aa;
        }
        .character-list li {
            margin-bottom: 0.5em;
        }
        .term-list li {
            margin-bottom: 0.5em;
        }
        footer {
            margin-top: auto;
            width: 100%;
            background: #222;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }
    </style>
</head>
<body>
    <?php showHeader("RomCom Visual Novel Wiki"); ?>
    <div class="nav-btns" style="text-align:center; margin: 20px 0;">
        <a href="../index.php" style="display:inline-block; margin:0 10px; padding:10px 24px; background:#ff66aa; color:#fff; border:none; border-radius:25px; text-decoration:none; font-weight:bold;">Home</a>
        <a href="Osu.php" style="display:inline-block; margin:0 10px; padding:10px 24px; background:#66ccff; color:#fff; border:none; border-radius:25px; text-decoration:none; font-weight:bold;">Welcome</a>
    </div>
    <div class="container">
        <aside>
            <h3>Main Characters</h3>
            <?php showList($characters, $characterDescriptions); ?>
        </aside>
        <main>
            <h2>Game Terms & Features</h2>
            <?php showList($terms, $termDescriptions); ?>
            <h2>About This Game</h2>
            <p>
                Welcome to the official wiki for our romantic comedy visual novel! Here you'll find information about the characters, story routes, and unique features that make our game a heartwarming and hilarious adventure. Dive into the world of friendship, love, and unexpected twists!
            </p>
            <div style="margin: 2em 0 0 0; display: flex; justify-content: flex-start; gap: 1.5em;">
                <img src="../assets/img/GamePlays.png" alt="Sutemo in Classroom" style="max-width:250px; width:100%; border-radius:1rem; box-shadow:0 2px 12px rgba(0,0,0,0.10); margin-left:0; object-fit:cover; aspect-ratio:4/3;">
                <img src="../assets/img/GamePlays1.png" alt="Sutemo Pout" style="max-width:250px; width:100%; border-radius:1rem; box-shadow:0 2px 12px rgba(0,0,0,0.10); object-fit:cover; aspect-ratio:4/3;">
            </div>
        </main>
    </div>
    <?php showFooter(); ?>
</body>
</html>