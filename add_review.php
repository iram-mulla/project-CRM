<?php


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'db_connection.php';

    $review_text = $_POST['review'];
    $rating = $_POST['rating'];

    $movie_id = $_GET['movie_id'];

    // Check if the review text is empty
    if (empty($review_text)) {

        // Redirect the user back to the add review form with an error message
        echo "<script>alert('Review cannot be empty')</script>";
        exit();
    }

    // Add the review to the database
    addReview($review_text, $rating, $movie_id);

    // Redirect the user back to the movie page
    // header('Location: movie.php?id=' . $_GET['movie_id']);
}else{
    session_start();
    // print_r($_SESSION['user_id']);
    // $_SESSION['movie_id'] = $_GET['movie_id'];
}

function addReview($review_text, $rating, $movie_id){
    global $conn;

    session_start();
    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO reviews (movie_id, user_id, rating, review) VALUES ('$movie_id','$user_id','$rating','$review_text')";

    // $result = mysqli_query($conn, $sql);

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Review added successfully')</script>";
        header('Location: reviews.php');
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo "add_review.php?movie_id=".$_GET['movie_id']; ?>" method="post">
        <h2>Add Review</h2>
        <label for="review">Review:</label>
        <br>
        <textarea name="review" id="review" placeholder="Enter your review here..." required></textarea>
        <br>
        <br>
        <label for="rating">Rating:</label>
        <select name="rating" id="rating" required>
            <option value="1">1 star</option>
            <option value="2">2 stars</option>
            <option value="3">3 stars</option>
            <option value="4">4 stars</option>
            <option value="5">5 stars</option>
        </select>
        <br>
        <input type="submit" name="submit" value="Submit Review">
    </form>
</body>
</html>