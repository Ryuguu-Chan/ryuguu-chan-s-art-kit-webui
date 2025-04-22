<?php
    include 'res/strings.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $strings["appTitle"]." (v".$strings["version"].")"; ?></title>
</head>
<body>
    <header>
        <h1><?= $strings["appTitle"]." (".$strings["appAuthor"].") (v".$strings["version"].")";?></h1>
    </header>
    <div class="menuDiv">
        <!-- TODO: faire le menu ici -->
    </div>
    <div class="content">
        <form action="actions/ruleOfThird.php" method="post">
            <h2>Canvas's width</h2>
            <input type="number" name="canvasWidth" id="canvasWidthTextBox">
            <h2>Canvas's height</h2>
            <input type="number" name="canvasHeight" id="canvasHeightTextBox">
        </form>
    </div>
    <script src="scripts/ruleOfThird.js"></script>
</body>
</html>