<?php

// Connect to the database
include 'db_connection.php';

session_start();
$user = $_SESSION['user_id'];

// Get all the reviews
// $reviews = $conn->query("SELECT * FROM reviews WHERE user_id='$user'");
// $reviews = $conn->query("SELECT reviews.*, movies.title
// FROM reviews
// JOIN movies ON reviews.movie_id = movies.id");

$movies = $conn->query("SELECT * FROM movies");

?>

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
    <!-- <h1>Total Reviews : <?php print_r($reviews->num_rows) ?></h1> -->

    <?php
    
// Loop through the movies and for each movie, get all the reviews for that movie
foreach ($movies as $movie) {

    // Get all the reviews for the movie
    $reviews = $conn->query("SELECT * FROM reviews WHERE movie_id =".$movie['id']);
  
    // Print the reviews for the movie to the HTML page
    ?>
    <h2><?php echo $movie['title']; ?> Reviews</h2>
    <?php

    if($reviews->num_rows <= 0){
        echo "No reviews for ".$movie['title'];
    }

    foreach ($reviews as $review) {
      ?>
      <div class="review">
        <p>Review: <?php echo $review['review']; ?></p>
        <p>Rating: <?php echo $review['rating']; ?></p>
      </div>
      <?php
      // print_r($review);
    }
  }
  
  ?>

<h2>Total Purchase:  <?php print_r($movies->num_rows) ?></h2>

<?php
    

    // Loop through the reviews and print each review to the HTML page
    foreach ($movies as $movie) {
    ?>
    <div class="review">
        <img src="<?php echo $movie['url'] ?>" alt="movie">
        <p>Title: <?php echo $movie['title']; ?></p>
        <p>Year: <?php echo $movie['year']; ?></p>
        <p>Description: <?php echo $movie['description']; ?></p>
    </div>
    <?php
    }

?>

</body>
</html>