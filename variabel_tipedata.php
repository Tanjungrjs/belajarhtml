<?php 
$string = "Text";
$integ = 1;
$float = "70.01";
$boolean = "true";
$null = null;

$music = array("Guitar","Drum","Keyboard");
var_dump($music);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Variabel & Tipe Data</title>
</head>

<body>
    <div style="text-align:center;">
    <?= "Ini Tipe Data String " . $string?> <br/>
    <?= "Ini adalah integ " . $integ?> <br/>
    <?= "Ini Tipe Data Float " . $float?> <br/>
    <?= "Ini Tipe Data Boolean " . $boolean?> <br/>
    
    <!-- <?php echo "Ini adalah Array" . $music?>  -->


</div>


</body>
</html>