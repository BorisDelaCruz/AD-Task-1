<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Parts</title>
    <link rel="stylesheet" href="../css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Include Chart.js -->
    <script src="../js/script.js" defer></script>
</head>
<body>
    <header>
        <h1>Welcome to the Computer Parts Store</h1>
    </header>
    <div class="container">
        <aside class="sidebar left-sidebar">
            <h3>Categories</h3>
            <ul>
                <?php
                $categories = ['CPU', 'GPU', 'RAM', 'Storage'];
                foreach ($categories as $category) {
                    echo "<li>$category</li>";
                }
                ?>
            </ul>
        </aside>
        <main>
            <h2>Available Computer Parts</h2>
            <ul>
                <?php
                $parts = [
                    'CPU' => [
                        ['name' => 'Intel Core i9', 'color' => '#ff5733'],
                        ['name' => 'AMD Ryzen 9', 'color' => '#33c1ff']
                    ],
                    'GPU' => [
                        ['name' => 'NVIDIA GeForce RTX 3080', 'color' => '#33ff57'],
                        ['name' => 'AMD Radeon RX 6800', 'color' => '#ff33a8']
                    ],
                    'RAM' => [
                        ['name' => 'Corsair Vengeance 16GB', 'color' => '#ffc133'],
                        ['name' => 'G.Skill Ripjaws 32GB', 'color' => '#8a33ff']
                    ],
                    'Storage' => [
                        ['name' => 'Samsung 970 EVO 1TB', 'color' => '#33ffcc'],
                        ['name' => 'Western Digital Blue 2TB', 'color' => '#335bff']
                    ]
                ];

                foreach ($categories as $category) {
                    echo "<li>$category:</li>";
                    if (array_key_exists($category, $parts)) {
                        echo "<ul>";
                        foreach ($parts[$category] as $part) {
                            echo "<li>
                                    <div class='product-color' style='background-color: {$part['color']};'></div>
                                    <span>{$part['name']}</span>
                                    <button class='btn-add'>Add to Cart</button>
                                    <button class='btn-details'>View Details</button>
                                </li>";
                        }
                        echo "</ul>";
                    } else {
                        echo "<ul><li>No parts available</li></ul>";
                    }
                }
                ?>
            </ul>
            <h2>Storage Availability</h2>
            <canvas id="storageChart" width="400" height="200"></canvas> <!-- Canvas for the chart -->
        </main>
        <aside class="sidebar right-sidebar">
            <h3>Cart</h3>
            <p>Your cart is empty.</p>
            <a href="checkout.php" class="btn-checkout">Go to Checkout</a>
        </aside>
    </div>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Boris. All rights reserved.</p>
    </footer>
</body>
</html>