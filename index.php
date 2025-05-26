<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Makeine: Too Many Losing Heroines - Character Wiki</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
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

    
    echo "<div class='nav-btns'>";
    echo "<a href='pages/welcomepage/index.php'>Welcome</a>";
    echo "<a href='pages/wikipage/index.php'>Wiki</a>";
    echo "</div>";

    echo "<div class='container' style='display: flex; align-items: flex-start; gap: 2rem;'>";

    
    echo "<aside style='flex:0 0 120px; text-align:center;'>";
    echo "<img src='assets/img/Sutemo Pout.png' alt='Sutemo Hanabira' style='max-width:100px; border-radius:1rem; box-shadow:0 2px 12px rgba(0,0,0,0.10); margin-bottom:1rem;'>";
    echo "<div style='font-weight:bold; color:#ff66aa; margin-top:0.5rem;'>Sutemo Hanabira</div>";
    echo "</aside>";

    
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