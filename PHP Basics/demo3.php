<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Conditional Statements and Looping Demo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f8f9fa;
            border: 1px solid #d6d8db;
            border-radius: 5px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            background-color: #ffffff;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #d6d8db;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="container">

    <?php
    // Sample user and cart information
    $userLoggedIn = true;
    $userRole = 'customer';
    $cartItemCount = 3;

    // Conditional statements based on user status and cart contents
    if ($userLoggedIn) {
        // User is logged in
        echo "<p>Welcome back, user!</p>";

        // Nested condition based on user role
        if ($userRole === 'admin') {
            echo "<p>You have admin privileges.</p>";
        } else {
            echo "<p>You are a regular customer.</p>";
        }

        // Condition based on cart contents
        if ($cartItemCount > 0) {
            echo "<p>You have $cartItemCount item(s) in your shopping cart:</p>";

            // Loop to display each item in the cart
            echo "<ul>";
            for ($i = 1; $i <= $cartItemCount; $i++) {
                echo "<li>Product $i</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Your shopping cart is empty.</p>";
        }
    } else {
        // User is not logged in
        echo "<p>Welcome, guest! Please log in to access your account.</p>";
    }
    ?>

</div>

</body>
</html>
