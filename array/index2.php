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
            <div class="form-group">
                <label for="itemDescription">Item Description:</label>
                <textarea class="form-control" id="itemDescription" name="itemDescription" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="itemQuantity">Item Quantity:</label>
                <input type="number" min="1" class="form-control" id="itemQuantity" name="itemQuantity" required>
            </div>
            <button type="submit" class="btn btn-primary" name="addItem">Add Item</button>
        </form>

        <hr>

        <?php
        // Initialize an empty array to store electronic items
        $electronicItems = array();

        // Check if form is submitted to add item
        if(isset($_POST['addItem'])) {
            // Retrieve item details from form
            $itemName = $_POST['itemName'];
            $itemPrice = $_POST['itemPrice'];
            $itemDescription = $_POST['itemDescription'];
            $itemQuantity = $_POST['itemQuantity'];

            // Add the item to the electronic items array
            $electronicItems[] = array(
                'name' => $itemName,
                'price' => $itemPrice,
                'description' => $itemDescription,
                'quantity' => $itemQuantity
            );
        }

        // Display the list of electronic items
        if(!empty($electronicItems)) {
            echo "<h3>Electronic Items:</h3>";
            echo "<div class='row'>";
            foreach($electronicItems as $item) {
                echo "<div class='col-md-6'>";
                echo "<div class='card mb-3'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>" . $item['name'] . "</h5>";
                echo "<h6 class='card-subtitle mb-2 text-muted'>$" . number_format($item['price'], 2) . "</h6>";
                echo "<p class='card-text'>" . $item['description'] . "</p>";
                echo "<p class='card-text'>Quantity: " . $item['quantity'] . "</p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            echo "</div>";
        } else {
            echo "<p>No electronic items available.</p>";
        }
        ?>
    </div>
</body>
</html>
