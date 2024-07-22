<?php
$products = [
    ["image" => "./assets", "description" => "Elegant Dress - ₦10,000"],
    ["image" => "sweater.jpg", "description" => "Stylish Sweater - ₦8,000"],
    ["image" => "jeans.jpg", "description" => "Comfortable Jeans - ₦7,500"],
    ["image" => "blouse.jpg", "description" => "Chic Blouse - ₦6,000"],
    ["image" => "skirt.jpg", "description" => "Classic Skirt - ₦5,500"],
    ["image" => "jacket.jpg", "description" => "Trendy Jacket - ₦12,000"],
    ["image" => "scarf.jpg", "description" => "Designer Scarf - ₦3,500"],
    ["image" => "hat.jpg", "description" => "Stylish Hat - ₦4,000"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tina's Classics</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="header-container">
            <h1>Tina's Classics</h1>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="hero-section">
            <div class="hero-text">
                <h2>Welcome to <span class="highlight">Tina's Classics</span></h2>
                <p>Your go-to boutique for classic and trendy outfits. Explore our latest collection and find your perfect style.</p>
                <a href="#" class="shop-now-btn">Shop Now</a>
            </div>
            <div class="hero-images">
                <div class="hero-product">
                    <img src="dress1.jpg" alt="Elegant Dress">
                </div>
                <div class="hero-product">
                    <img src="dress2.jpg" alt="Stylish Dress">
                </div>
                <div class="hero-product">
                    <img src="dress3.jpg" alt="Modern Dress">
                </div>
            </div>
        </div>
        <div class="main-container">
            <section class="featured-products" id="featured-products">
                <?php foreach ($products as $product) : ?>
                    <div class="product">
                        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['description']; ?>">
                        <p><?php echo $product['description']; ?></p>
                    </div>
                <?php endforeach; ?>
            </section>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Tina's Classics. All rights reserved.</p>
    </footer>
</body>
</html>