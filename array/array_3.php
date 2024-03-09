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
function find_Pairs($nums, $pair_sum) {
$nums_pairs = "";
for ($i = 0; $i < count($nums); $i++) {
for ($j = $i + 1; $j < count($nums); $j++) {
if ($nums[$i] + $nums[$j] == (int)$pair_sum) {
$nums_pairs .= $nums[$i] . "," . $nums[$j] . ";";
}
}
}
return $nums_pairs;
}
$nums = array(6, 5, 4, 3, 2, 1, 0);
echo find_Pairs($nums, 5)."<br />";
echo find_Pairs($nums, 7)."<br />";
echo find_Pairs($nums, 7)."<br />";
echo find_Pairs($nums, 7)."<br />";
?>
</body>
</html>
