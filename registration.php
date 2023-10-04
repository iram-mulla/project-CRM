<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      padding: 20px;
      margin: 0;
    }
    .container {
      max-width: 600px;
      margin: 0 auto;
      background-color: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h2 {
      color: #3498db;
      text-align: center;
      margin-bottom: 20px;
    }
    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }
    input, textarea {
      width: calc(100% - 22px);
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
      transition: border-color 0.3s;
    }
    input[type="radio"] {
      display: none;
    }
    .gender-options label {
      display: inline-block;
      width: 100px;
      padding: 10px;
      border-radius: 50%;
      text-align: center;
      cursor: pointer;
      margin-right: 10px;
      transition: background-color 0.3s;
    }
    .gender-options label:hover {
      background-color: #e0e0e0;
    }
    .gender-options input[type="radio"]:checked + label {
      background-color: #3498db;
      color: white;
    }
    input:focus, textarea:focus {
      border-color: #3498db;
    }
    button[type="submit"] {
      padding: 10px 20px;
      background-color: #3498db; 
      color: white; 
      border: none;
      cursor: pointer;
    }
    button[type="submit"]:hover {
      background-color: #2980b9; 
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Customer Registration Form</h2>

  <form action="create.php" method="post">
    <label for="myid">ID</label>
    <input type="text" name="id" id="myid" placeholder="Enter ID">

    <label for="myfirstname"> Name</label>
    <input type="text" name="name" id="myname" placeholder="Enter your name " required>

    <label for="myusername">Username</label>
    <input type="text" name="username" id="myusername" placeholder="Enter your Username" required>

    <label for="mypassword">Password</label>
    <input type="password" name="password" id="mypassword" placeholder="Enter your Password" required>

    <label for="mycontact">Contact</label>
    <input type="text" name="contact" id="mycontact" placeholder="Enter your contact No" required>

    <label for="mygen" required="">Gender</label>
    <div class="gender-options">
      <input type="radio" name="gender" id="mygen1" value="Male" >
      <label for="mygen1">&#9898; Male</label>

      <input type="radio" name="gender" id="mygen2" value="Female">
      <label for="mygen2">&#9898; Female</label>

      <input type="radio" name="gender" id="mygen3" value="Other">
      <label for="mygen3">&#9898; Other</label>
    </div>

    <label for="myadd">Address</label>
    <textarea name="address" cols="50" rows="6" id="myadd" placeholder="Enter your Address" required></textarea>

    <div style="text-align: center;">
      <button type="submit">Register Now</button>
    </div>

    </form>
</div>

</body>
</html>
