<?php
?>
<!-- filepath: c:\xampp\htdocs\Website\computer\pages\checkout.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <header>
        <h1>Checkout</h1>
    </header>
    <div class="container">
        <main>
            <h2>Your Cart</h2>
            <ul>
                <?php
                // Example cart items (you can replace this with dynamic data)
                $cartItems = [
                    ['name' => 'Intel Core i9', 'price' => 500],
                    ['name' => 'NVIDIA GeForce RTX 3080', 'price' => 700],
                    ['name' => 'Corsair Vengeance 16GB', 'price' => 100]
                ];

                $total = 0;
                foreach ($cartItems as $item) {
                    echo "<li>{$item['name']} - $ {$item['price']}</li>";
                    $total += $item['price'];
                }
                ?>
            </ul>
            <h3>Total: $<?php echo $total; ?></h3>
            <button class="btn-checkout">Confirm Purchase</button>
        </main>
    </div>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Boris. All rights reserved.</p>
    </footer>
</body>
</html>