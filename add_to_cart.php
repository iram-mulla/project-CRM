<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    $product = $_POST['product'];
    array_push($_SESSION['cart'], $product);

    echo "Product added to cart: $product";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3eded;
            padding: 20px;
            margin: 0;
        }

        header {
            text-align: center;
            padding: 20px 0;
        }

        nav {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #fff;
            box-shadow: 0px -5px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: space-around;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
            width: 25% ;
        }

        nav ul li a {
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
            font-size: 1.2em;
            display: block;
            padding: 15px 0;
        }
    </style>
</head>
<body>
    <h1>My Cart</h1>

    <ul>
        <?php
        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $product) {
                echo "<li>$product</li>";
            }
        } else {
            echo "Your cart is empty.";
        }
        ?>
    </ul>

    <nav>
        <ul>
            <li><a href="product_page.php"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="notification.php"><i class="fas fa-bell"></i> Notifications</a></li>
            <li><a href="account.php"><i class="fas fa-user"></i> Account</a></li>
            <li><a href="add_to_cart.php"><i class="fas fa-shopping-cart"></i> Cart</a></li>
        </ul>
    </nav>

</body>
</html>
