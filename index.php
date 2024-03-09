<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Demonstration</h1>
    <?php
    renderDemoFile("array");
    renderDemoFile("functions");
    renderDemoFile("PHP Basics")
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<?php 

function renderDemoFile(string $directoryName) 
{
    ?>
    <div class="">
        <h2><?= $directoryName ?></h2>
        <ul>
        <?php
        foreach (scandir("array") as $fileName) :
            if ($fileName == "." || $fileName == "..") {
                continue;
            }
        ?>
        <li>
            <a href="<?= dirname(__DIR__) . $fileName ?>">
            <?= $fileName ?>
            </a>
        </li>
        <?php endforeach ?>
        </ul>
    </div>
    <?php
}
?>