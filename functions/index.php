<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Function Demo</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <h1>ICS2609 PHP Functions</h1>
  <p>Click the buttons below to trigger different PHP functions.</p>

  <!-- Form to submit buttons -->
  <form method="post" action="<?php ($_SERVER["PHP_SELF"]); ?>">
  
    <!-- Button to trigger function 1 -->
    <button class="btn btn-primary" type="submit" name="function1">Function 1</button>
    
    <!-- Button to trigger function 2 -->
    <button class="btn btn-success" type="submit" name="function2">Function 2</button>
    
    <!-- Button to trigger function 3 -->
    <button class="btn btn-danger" type="submit" name="function3">Function 3</button>

  </form>

  <!-- Output container -->
  <div class="mt-3">
    <?php
    // Include the PHP file containing the functions
    include 'functions.php';

    // PHP code to handle form submission and execute functions
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['function1'])) {
            function1();
        } elseif (isset($_POST['function2'])) {
            function2("Parameter 1", "Parameter 2");
        } elseif (isset($_POST['function3'])) {
            $result = function3(5, 7);
            echo "Function 3 result: $result";
        }
    }
    ?>
  </div>
</div>

<!-- Bootstrap JS (optional, only required if you're using Bootstrap JavaScript components) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
