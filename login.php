<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
include 'db_connection.php';

  $username = $_POST["username"];
  $password = $_POST["password"];

  $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $query);

  if(mysqli_num_rows($result) > 0)    
      {
          session_start();
          $row = mysqli_fetch_assoc($result);
          $_SESSION['user_id'] = $row['id'];
          $_SESSION['user_name'] = $row['name'];
          $_SESSION['user_password'] = $row['password'];

          header("location:product_page.php");
  }else{
      echo "<script>alert('Username or Password is invalid')</script>";
  }



}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      padding: 50px;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .container {
      width: 350px;
      background-color: #fff;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }
    h2 {
      color: #3498db;
      text-align: center;
      margin-bottom: 20px;
    }
    label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
    }
    input[type="text"], input[type="password"] {
      width: 100%;
      padding: 12px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }
    input[type="submit"] {
      width: 100%;
      padding: 15px;
      background-color: #3498db;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }
    input[type="submit"]:hover {
      background-color: #2980b9;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Login Form</h2>

  <form action="login.php" method="post">
    <label for="myusername">Username</label>
    <input type="text" name="username" id="myusername" placeholder="Enter Username" required>

    <label for="mypassword">Password</label>
    <input type="password" name="password" id="mypassword" placeholder="Enter Password" required>

    <input type="submit" value="Login">
  </form>
</div>

</body>
</html>