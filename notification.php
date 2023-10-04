<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications</title>
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
            width: 25%;
        }

        nav ul li a {
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
            font-size: 1.2em;
            display: block;
            padding: 15px 0;
        }

        .notification-section {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .notification {
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
            margin-bottom: 10px;
        }

        .notification:last-child {
            border-bottom: none;
            padding-bottom: 0;
            margin-bottom: 0;
        }

        .notification h2 {
            font-size: 1.2em;
            margin-bottom: 5px;
        }

        .notification p {
            font-size: 0.9em;
            color: #555;
        }

        .notification .icon {
            margin-right: 20px;
            font-size: 1.5em;
        }

        .notification .content {
            display: inline-block;
            vertical-align: top;
            width: calc(100% - 40px); /* Adjust as needed */
        }

    </style>
</head>
<body>
    <header>
        <h1>Notifications</h1>
    </header>

    <div class="notification-section">
        <div class="notification">
            <span class="icon"><i class="fas fa-store"></i></span>
            <div class="content">
                <h2>New Product Arrived!</h2>
                <p>We have just added exciting new products to our store. Check them out now!</p>
            </div>
        </div>

        <div class="notification">
            <span class="icon"><i class="fas fa-tags"></i></span>
            <div class="content">
                <h2>Special Discount Alert!</h2>
                <p>For a limited time, enjoy special discounts on selected items. Hurry and grab your favorites!</p>
            </div>
        </div>

        <div class="notification">
            <span class="icon"><i class="fas fa-truck"></i></span>
            <div class="content">
                <h2>Shipping Update</h2>
                <p>Your recent order has been shipped. Track your package to know its current status.</p>
            </div>
        </div>

        <div class="notification">
            <span class="icon"><i class="fas fa-gift"></i></span>
            <div class="content">
                <h2>Special Gift for You</h2>
                <p>Enjoy a special gift from us on your next purchase. Thank you for being our valued customer!</p>
            </div>
        </div>

        <div class="notification">
            <span class="icon"><i class="fas fa-globe"></i></span>
            <div class="content">
                <h2>Global Sale Event!</h2>
                <p>Join our worldwide sale event and avail amazing discounts on a variety of products.</p>
            </div>
        </div>

        <div class="notification">
            <span class="icon"><i class="fas fa-heart"></i></span>
            <div class="content">
                <h2>Your Favorites Back in Stock</h2>
                <p>Good news! Your favorite items are now back in stock. Order before they run out again.</p>
            </div>
        </div>
        
    </div>

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