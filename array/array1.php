<?php
// Creating an array of student names
$studentNames = array("John", "Alice", "Bob", "Emily", "Michael");


// Accessing array elements by index
echo "First student: " . $studentNames[0] . "<br>";
echo "Second student: " . $studentNames[1] . "<br>";


// Adding a new student to the array
$studentNames[] = "Eva";


// Looping through the array and printing each student's name
echo "All students:<br>";
foreach ($studentNames as $student) {
    echo $student . "<br>";
}


// Associative array example: storing student names with their corresponding ages
$studentAges = array(
    "John" => 20,
    "Alice" => 21,
    "Bob" => 19,
    "Emily" => 22,
    "Michael" => 20
);


// Accessing elements in an associative array
echo "Alice's age: " . $studentAges["Alice"] . "<br>";


// Adding a new entry to the associative array
$studentAges["Eva"] = 23;


// Looping through the associative array and printing each student's name and age
echo "All students with ages:<br>";
foreach ($studentAges as $name => $age) {
    echo $name . " is " . $age . " years old<br>";
}
?>
