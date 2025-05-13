<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Parts</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <h1>Computer Parts Details</h1>
    <?php
    $parts = [
        "CPU" => ["Brand" => "Intel", "Model" => "i9-11900K", "Cores" => 8, "Threads" => 16],
        "GPU" => ["Brand" => "NVIDIA", "Model" => "RTX 3080", "Memory" => "10GB GDDR6X"],
        "RAM" => ["Brand" => "Corsair", "Model" => "Vengeance LPX", "Size" => "16GB", "Type" => "DDR4"],
        "Motherboard" => ["Brand" => "ASUS", "Model" => "ROG Strix Z590-E", "Socket" => "LGA 1200"],
    ];

    echo "<ul>";
    foreach ($parts as $part => $specs) {
        echo "<li><strong>$part</strong>:<ul>";
        foreach ($specs as $key => $value) {
            echo "<li>$key: $value</li>";
        }
        echo "</ul></li>";
    }
    echo "</ul>";
    ?>
    <script src="../js/script.js"></script>
</body>
</html>