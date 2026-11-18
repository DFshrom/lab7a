<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab7a 3</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        .output { font-size: 18px; font-weight: bold;}
    </style>
</head>
<body>

<?php
function calculateArea($width, $height) {
    return $width * $height;
}

$width = 4;
$height = 2;
$area = calculateArea($width, $height);
?>

<div class="output">
    <?php echo "The area of a rectangle with a width of $width and $height is $area"; ?>
</div>

</body>
</html>