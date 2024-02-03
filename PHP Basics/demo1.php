<?php
$userRole = 'admin';
$isLoggedIn = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Example</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <p>hello<p>
    <?php if ($isLoggedIn && $userRole === 'admin'): ?>
        <p>Welcome, Admin!</p>
    <?php elseif ($isLoggedIn && $userRole === 'user'): ?>
        <p>Welcome, User!</p>
    <?php else: ?>
        <p>Please log in to access content.</p>
    <?php endif; ?>
</body>
</html>
