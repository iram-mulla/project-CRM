<?php

include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

}else{
    session_start();
    $user_id = $_SESSION['user_id'];
    $user_name = $_SESSION['user_name'];
    $user_password = $_SESSION['user_password'];

}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>My SwiftCart Website</title>
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
        /* Style for the horizontal navigation menu */
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
        .product-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding-bottom: 80px; 
            padding-top: 40px; 
        }
        .product {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 250px;
            text-align: center;
            margin-bottom: 20px;
        }
        .product img {
            width: 80%;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .product h2 {
            font-size: 1.2em;
            margin-bottom: 10px;
        }
        .product p {
            margin-bottom: 10px;
            font-size: 0.9em;
        }
        .product span {
            font-weight: bold;
            color: #3498db;
            font-size: 1.1em;
            display: block;
            margin-bottom: 20px;
        }
        .product button {
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            width: 80%;
            margin: 0 auto;
            display: block;
        }
        .product button:hover {
            background-color: #2980b9;
        }
        footer {
            text-align: center;
            padding: 20px 0;
            clear: both;
        }
        /* Style for the search bar */
        .search-bar {
            position: relative;
            display: flex;
            align-items: center;
        }

        .search-bar input {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }

        .addButton {
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            text-decoration: none;
        }

        .addButton:hover {
            background-color: #2980b9;
        }

        .search-bar .icon {
            margin-left: 10px;
        }

        .search-bar .icon i {
            font-size: 1.2em;
        }

        .search-bar .icon:hover {
            color: #3498db;
        }


    </style>
</head>

<body>
    <header>
        <h1>Welcome to Iram's SwiftCart</h1>
    </header>
    <h1>Hello <?php echo $user_name ?></h1>

    <!-- <div class="search-bar">
        <input type="text" placeholder="Search products...">
        <button onclick="searchProducts()">Search</button>
        <span class="icon"><i class="fas fa-camera"></i></span> 
        <span class="icon"><i class="fas fa-microphone"></i></span> 
    </div> -->
    
    <div class="product-list">

    <?php

        $query = "SELECT * FROM movies";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) > 0){
            // print_r($result->fetch_all());
    
            foreach ($result as $movie){
                $movie_id = $movie['id'];
                $title = $movie['title'];
                $year = $movie['year'];
                $description = $movie['description'];
                $image = $movie['url'];
                
                $html = <<<HTML
                    <div class="product">
                        <img src="$image" alt="$title">
                        <h2>$title</h2>
                        <p>$description</p>
                        <span>$year</span>
                        <a class="addButton" href="add_review.php?movie_id={$movie['id']}">Add Review</a>
                        <!-- Add css here, this br is only of temporary use -->
                        <br>
                        <br>
                        <br>
                        <a class="addButton" href="review.php?movie_id={$movie['id']}">View Reviews</a>
                    </div>
                    HTML;
    
                echo $html;
            }
        }


    ?>

        <!-- <div class="product">
            <img src="luggagebag.jpg" alt="Travelling bags">
            <h2>Travelling bags</h2>
            <p>Description:Urban travel luggage , 70 L Strolley Duffel, high quality travelling bag</p>
            <span>1,250</span>
            <button onclick="addToCart('Travelling bags')">Add to Cart</button>
        </div>

        <div class="product">
            <img src="iPhone.webp" alt="Mobile">
            <h2>mobile</h2>
            <p>Description:</p>
            <span>1,80,589</span>
            <button onclick="addToCart('mobile')">Add to Cart</button>
        </div>

        <div class="product">
            <img src="toy.webp" alt="toy">
            <h2>toy</h2>
            <p>Description:</p>
            <span>799</span>
            <button onclick="addToCart('toy')">Add to Cart</button>
        </div>
        
        <div class="product">
            <img src="shoes.jpeg" alt="shoes">
            <h2>shoes</h2>
            <p>Description:</p>
            <span>952</span>
            <button onclick="addToCart('shoes')">Add to Cart</button>
        </div>
        
        <div class="product">
            <img src="gucci.jpeg" alt="bag">
            <h2>bag</h2>
            <p>Description:</p></n>
            <span>1,50,082</span>
            <button onclick="addToCart('bag')">Add to Cart</button>
        </div>

        <div class="product">
            <img src="brushkit.webp" alt="brushkit">
            <h2>brushkit</h2>
            <p>Description:</p></n>
            <span>325</span>
            <button onclick="addToCart('brushkit')">Add to Cart</button>
        </div>

        <div class="product">
            <img src="sunglasses.jpeg" alt="sunglasses">
            <h2>sunglasses</h2>
            <p>Description:</p></n>
            <span>80,520</span>
            <button onclick="addToCart('sunglasses')">Add to Cart</button>
        </div>

        <div class="product">
            <img src="gown.webp" alt="gown">
            <h2>gown</h2>
            <p>Description:</p></n>
            <span>950</span>
            <button onclick="addToCart('gown')">Add to Cart</button>
        </div>

        <div class="product">
            <img src="clgbag.webp" alt="school bags">
            <h2>school bags</h2>
            <p>Description:</p></n>
            <span>850</span>
            <button onclick="addToCart('school bags')">Add to Cart</button>
        </div>

        <div class="product">
            <img src="airpods.webp" alt="airpods">
            <h2>airpods</h2>
            <p>Description:</p></n>
            <span>$100</span>
            <button onclick="addToCart('airpods')">Add to Cart</button>
        </div>

        <div class="product">
            <img src="bracelate.webp" alt="bracelate">
            <h2>bracelate</h2>
            <p>Description:</p></n>
            <span>$100</span>
            <button onclick="addToCart('bracelate')">Add to Cart</button>
        </div>

        <div class="product">
            <img src="watch.jpeg" alt="watch">
            <h2>watch</h2>
            <p>Description:</p></n>
            <span>$100</span>
            <button onclick="addToCart('watch')">Add to Cart</button>
        </div>

        <div class="product">
            <img src="couple.jpg" alt="couple t shirt">
            <h2>couple t shirt</h2>
            <p>Description:</p></n>
            <span>520</span>
            <button onclick="addToCart('couple t shirt')">Add to Cart</button>
        </div>

        <div class="product">
            <img src="saree.jpg" alt="saree">
            <h2>saree</h2>
            <p>Description:</p></n>
            <span>780</span>
            <button onclick="addToCart('saree')">Add to Cart</button>
        </div>

        <div class="product">
            <img src="slingbag.jpg" alt="slingbag">
            <h2>slingbag</h2>
            <p>Description:</p></n>
            <span>520</span>
            <button onclick="addToCart('slingbag')">Add to Cart</button>
        </div> -->
    </div>

    <div id="search-result">
        <?php
            if (isset($_GET['message'])) {
                echo $_GET['message'];
            }
        ?>
    </div>

    <nav>
        <ul>
            <li><a href="product_page.php"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="registration.php"><i class="fas fa-bell"></i> Create User</a></li>
            <li><a href="reviews.php"><i class="fas fa-user"></i> Reviews</a></li>
            <li><a href="buy_movies.php"><i class="fas fa-shopping-cart"></i> Buy Movies </a></li>
        </ul>
    </nav>
     
    <footer>
        <p>&copy; 2023 My SwiftCart Store</p>
    </footer> 

    <script>
    function addToCart(productName) {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "add_to_cart.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    alert(xhr.responseText);
                } else {
                    alert('There was an error adding the product to the cart.');
                }
            }
        };
        xhr.send("product=" + productName);
    }
</script>

</body>
</html>