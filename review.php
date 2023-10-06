<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .review {
  margin-bottom: 10px;
  background-color: lightcoral;
  border-radius: 10px;
  padding: 5px;
}

.review img{
    width: 300px;
}

.review p {
  font-size: 16px;
  line-height: 24px;
}

    </style>
</head>
<body>

<?php

    include 'db_connection.php';

    session_start();
    $movie_id = $_GET['movie_id'];
    $user_id = $_SESSION['user_id'];

    $reviews = $conn->query("SELECT * FROM reviews WHERE movie_id = '$movie_id' AND user_id = '$user_id'");

    foreach ($reviews as $review) {
    ?>
    <div class="review">
        <p>Review: <?php echo $review['review']; ?></p>
        <p>Rating: <?php echo $review['rating']; ?></p>
    </div>
    <?php
    }

?>


</body>
</html>