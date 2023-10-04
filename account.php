<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
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

        .account-section {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .account-section h2 {
            margin-bottom: 10px;
        }

        .account-section label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .account-section input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Account</h1>
    </header>

    <div class="account-section">
        <h2><i class="fas fa-user"></i>Welcome to your account</h2>
        <p>Here you can manage your profile.</p>
    </div>

    <div class="account-section">
        <h2>Your Profile Information</h2>
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" placeholder="Enter your first name">

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" placeholder="Enter your last name">

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" placeholder="Enter your address">

        <label for="contactNumber">Contact Number:</label>
        <input type="tel" id="contactNumber" name="contactNumber" placeholder="Enter your contact number">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email">

        <button type="button" class="save-button" onclick="saveData()">Save</button>
    </div>

    <script>
        function saveData() {
            const formData = {
                firstName: document.getElementById('firstName').value,
                lastName: document.getElementById('lastName').value,
                address: document.getElementById('address').value,
                contactNumber: document.getElementById('contactNumber').value,
                email: document.getElementById('email').value
            };
            localStorage.setItem('formData', JSON.stringify(formData));
            alert('Data saved successfully.');
}

    </script>

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
