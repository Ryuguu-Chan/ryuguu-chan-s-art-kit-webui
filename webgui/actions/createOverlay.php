<?php


// isset($_POST[nomDuBoutton])

if (isset($_POST['canvasWidth']) && isset($_POST['canvasHeight'])) {
        
    header('Content-Type: image/png');

    $width = $_POST['canvasWidth'];
    $height = $_POST['canvasHeight'];

    if (isset($_POST['ruleOfThirdSubmission'])) {
        header('Content-Disposition: attachment; filename="RuleOfThird.png"');

        $img = @imagecreatetruecolor($width, $height) or die ("cannot create the GD image stream");

        imagealphablending($img, false);
        imagesavealpha($img, true);

        $transparent = imagecolorallocatealpha($img, 0, 0, 0, 127);
        imagefill($img, 0, 0, $transparent);
        
        $backgroundColor = imagecolorallocate($img, 0, 0, 0);
        $lineColor = imagecolorallocate($img, 255, 0, 0);
        
        $imgWidthUnit = ($width/3);
        $imgHeightUnit = ($height/3);
        
        // horizontal lines
        imageline(
            $img,
            (int)$imgWidthUnit,
            0,
            (int)$imgWidthUnit,
            $height,
            $lineColor
        );
        imageline(
            $img,
            (int)$imgWidthUnit*2,
            0,
            (int)$imgWidthUnit*2,
            $height,
            $lineColor
        );
        
        // vertical lines
        imageline(
            $img,
            0,
            (int)$imgHeightUnit,
            $width,
            (int)$imgHeightUnit,
            $lineColor
        );
        imageline(
            $img,
            0,
            (int)$imgHeightUnit*2,
            $width,
            (int)$imgHeightUnit*2,
            $lineColor
        );
    }
    else if ($_POST['goldenRatioSubmission']) {
        header('Content-Disposition: attachment; filename="GoldenRatio.png"');

        $img = @imagecreatetruecolor($width, $height) or die ("cannot create the GD image stream");
        

    }
    
    imagepng($img);
    imagedestroy($img);
}
else {
    die("cannot process the image");
}