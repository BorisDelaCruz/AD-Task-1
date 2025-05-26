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
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body class="wiki-page">
    <?php showHeader("RomCom Visual Novel Wiki"); ?>
    <div class="nav-btns">
        <a href="/../index.php">Home</a>
        <a href="../WelcomePage/index.php">Welcome</a>
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
            <div class="wiki-images-row">
                <img src="/assets/img/GamePlays.png" alt="Sutemo in Classroom">
                <img src="/assets/img/GamePlays1.png" alt="Sutemo Pout">
            </div>
        </main>
    </div>
    <?php showFooter(); ?>
</body>
</html> 