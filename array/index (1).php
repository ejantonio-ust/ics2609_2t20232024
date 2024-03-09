<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronic Store</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Electronic Store</h2>
        <form method="post">
            <div class="form-group">
                <label for="itemName">Item Name:</label>
                <input type="text" class="form-control" id="itemName" name="itemName" required>
            </div>
            <div class="form-group">
                <label for="itemPrice">Item Price (PHP):</label>
                <input type="number" step="0.01" min="0" class="form-control" id="itemPrice" name="itemPrice" required>
            </div>
            <button type="submit" class="btn btn-primary" name="addItem">Add Item</button>
        </form>

        <hr>

        <?php
        // Initialize an empty array to store electronic items
        $electronicItems = array();

        // Check if form is submitted to add item
        if(isset($_POST['addItem'])) {
            // Retrieve item name and price from form
            $itemName = $_POST['itemName'];
            $itemPrice = $_POST['itemPrice'];

            // Add the item to the electronic items array
            $electronicItems[$itemName] = $itemPrice;
        }

        // Check if form is submitted to delete item
        if(isset($_POST['deleteItem'])) {
            // Retrieve item name to delete
            $itemNameToDelete = $_POST['deleteItem'];

            // Remove the item from the electronic items array
            unset($electronicItems[$itemNameToDelete]);
        }

        // Display the list of electronic items
        if(!empty($electronicItems)) {
            echo "<h3>Electronic Items:</h3>";
            echo "<ul class='list-group'>";
            foreach($electronicItems as $itemName => $itemPrice) {
                echo "<li class='list-group-item d-flex justify-content-between align-items-center'>";
                echo "$itemName <span class='badge badge-primary badge-pill'>$" . number_format($itemPrice, 2) . "</span>";
                echo "<form method='post'><input type='hidden' name='deleteItem' value='$itemName'><button type='submit' class='btn btn-danger btn-sm ml-2'>Delete</button></form>";
                echo "</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No electronic items available.</p>";
        }
        ?>
    </div>
</body>
</html>
