<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronic Store</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php
$Staffs = array(
    array(
    'Name' => 'Derek Emmanuel',
    'Reg_No' => 'FE/30304',
    'Email' => 'derekemmanuel@gmail.com'
    ),
    array(
    'Name' => 'Rubecca Michealson',
    'Reg_No' => 'FE/20003',
    'Email' => 'rmichealsongmail.com'
    
    ),
    );
    //Display Snippet:
    foreach ($Staffs as $key => $staffvalues) {
    echo "<tr>";
        echo $Staffs;
    foreach ($staffvalues as $staffkey => $value) {
        echo $staffkey;
    }
    }
    echo count($Staffs);
?>
</body>
</html>
