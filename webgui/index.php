<?php
    include 'res/strings.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css" media="all">
    <link rel="stylesheet" href="styles/phone.css" media="screen and (max-width: 800px)">
    <title><?= $strings["appTitle"]." (v".$strings["version"].")"; ?></title>
</head>
<body>
    <header>
        <h1><?= $strings["appTitle"]." (".$strings["appAuthor"].") (v".$strings["version"].")";?></h1>
    </header>
    <div class="content">
        <form action="actions/createOverlay.php" method="post">
            <h2>Canvas's width</h2>
            <input type="number" name="canvasWidth" id="canvasWidthTextBox" class="inputField">
            <h2>Canvas's height</h2>
            <input type="number" name="canvasHeight" id="canvasHeightTextBox" class="inputField">
            <input type="submit" name="ruleOfThirdSubmission" value="Generate a rule of third overlay" class="submissionButton" disabled>
            <input type="submit" name="goldenRatioSubmission" value="Generate a golden ratio overlay" class="submissionButton" disabled>
        </form>
    </div>
    <script src="scripts/form.js"></script>
</body>
</html>