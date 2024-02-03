<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Conditional Statements Demo</title>
</head>
<body>

<?php
// Sample user and cart information
$userLoggedIn = true;
$userRole = 'customer';
$cartItemCount = 5;

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
        echo "<p>You have items in your shopping cart.</p>";
    } else {
        echo "<p>Your shopping cart is empty.</p>";
    }
} else {
    // User is not logged in
    echo "<p>Welcome, guest! Please log in to access your account.</p>";
}
?>

</body>
</html>
