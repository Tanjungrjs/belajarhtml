<?php
function swapping($a, $b) {
 

// $a = 10;
// $b = 50;

$a = $a + $b; //60
$b = $a - $b; //60 - 50 = 10
$a = $a - $b;  //60 - 10 = 50
echo "a awal $a ||";
echo " b awal $b";





$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo "a akhir $a ||";
echo " b akhir $b";


}

swapping(10, 50);
?>



<!-- <?php 
echo "a akhir $a ||";
echo " b akhir $b";
?> -->








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>