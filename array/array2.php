<?php
// Creating an array of electronic items with their prices
$electronicItems = array(
    "Laptop" => 1200,
    "Smartphone" => 800,
    "Tablet" => 500,
    "Smartwatch" => 300,
    "Headphones" => 150
);

// Displaying the list of electronic items and their prices
echo "Available electronic items:<br>";
foreach ($electronicItems as $item => $price) {
    echo $item . ": $" . $price . "<br>";
}

// Calculating the total price of all electronic items
$totalPrice = 0;
foreach ($electronicItems as $price) {
    $totalPrice += $price;
}

echo "Total price of all electronic items: $" . $totalPrice . "<br>";

// Checking if an electronic item exists in the array
$searchItem = "Smartwatch";
if (array_key_exists($searchItem, $electronicItems)) {
    echo $searchItem . " is available.<br>";
} else {
    echo $searchItem . " is not available.<br>";
}

// Adding a new electronic item to the array
$newItem = "Smart Speaker";
$newPrice = 200;
$electronicItems[$newItem] = $newPrice;

echo "Updated list of electronic items:<br>";
foreach ($electronicItems as $item => $price) {
    echo $item . ": $" . $price . "<br>";
}
?>
