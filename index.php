<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Makeine: Too Many Losing Heroines - Character Wiki</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
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
            max-width: 900px;
            margin: 2rem auto;
            background: #fff;
            border-radius: 1rem;
            box-shadow: 0 2px 12px rgba(0,0,0,0.08);
            padding: 2rem;
        }
        .character-list li {
            margin-bottom: 1.2em;
        }
        .nav-btns {
            text-align: center;
            margin: 20px 0;
        }
        .nav-btns a {
            display: inline-block;
            margin: 0 10px;
            padding: 10px 24px;
            background: #ff66aa;
            color: #fff;
            border: none;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.2s;
        }
        .nav-btns a:last-child {
            background: #66ccff;
        }
        .nav-btns a:hover {
            opacity: 0.85;
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
    <?php
    // Fragment: Header
    function showHeader($title) {
        echo "<header><h1>$title</h1><p>The ultimate encyclopedia for every heroine in Makeine!</p></header>";
    }

    // Fragment: Footer
    function showFooter() {
        echo "<footer><p>&copy; " . date("Y") . " Makeine: Too Many Losing Heroines Wiki. All rights reserved.</p></footer>";
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

    // Function
    function showList($items, $descriptions) {
        echo "<ul class='character-list'>";
        foreach ($items as $item) {
            $desc = isset($descriptions[$item]) ? $descriptions[$item] : "";
            echo "<li><strong>$item</strong>: $desc</li>";
        }
        echo "</ul>";
    }

    showHeader("Makeine: Too Many Losing Heroines - Character Wiki");

    // Navigation buttons
    echo "<div class='nav-btns'>";
    echo "<a href='pages/welcome.php'>Welcome</a>";
    echo "<a href='pages/landing.php'>WIKI</a>";
    echo "</div>";

    echo "<div class='container' style='display: flex; align-items: flex-start; gap: 2rem;'>";

    // Add Sutemo's image on the left
    echo "<aside style='flex:0 0 120px; text-align:center;'>";
    echo "<img src='assets/img/Sutemo Pout.png' alt='Sutemo Hanabira' style='max-width:100px; border-radius:1rem; box-shadow:0 2px 12px rgba(0,0,0,0.10); margin-bottom:1rem;'>";
    echo "<div style='font-weight:bold; color:#ff66aa; margin-top:0.5rem;'>Sutemo Hanabira</div>";
    echo "</aside>";

    // Main content on the right
    echo "<div style='flex:1'>";
    echo "<h2>About the Game</h2>";
    echo "<p>
        <strong>Under the Sakura Tree</strong> is a romantic comedy visual novel that follows the misadventures of Sutemo Hanabira, a high school girl who always seems to find herself at the center of love triangles, misunderstandings, and comedic mishaps. Despite her best efforts, fate conspires to keep her from winning in romance, leading to a series of heartfelt and hilarious encounters with her friends and rivals.
    </p>";
    echo "<p>
        Dive into a world filled with quirky characters, unexpected twists, and touching moments as Sutemo navigates the ups and downs of high school life. Will she finally find her happy ending, or is she destined to be the ultimate losing heroine? Explore the stories, relationships, and secrets that make this visual novel a unique and memorable experience.
    </p>";
    echo "</div>";

    echo "</div>";

    showFooter();
    ?>
</body>
</html>