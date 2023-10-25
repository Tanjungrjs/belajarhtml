<?php

//Buat fungsi penilaian ()
//Nilai lebih dari 90 = 'A'
//Nilai lebih dari 80-89 = 'B'
//Nilai lebih dari 70-79 = 'C'
//Nilai kurang dari 70 = 'D'

//penilaian (87)


function penilaian($nilai) {

    if ($nilai > 90) {
        echo "A";
    }
    elseif ($nilai >= 80 && $nilai <= 89) {
        echo "B";
        
    }
    elseif ($nilai >= 70 && $nilai <= 79) {
        echo "C";
        
    }
    elseif ($nilai < 70) {
        echo "D";
        
    }


}


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo penilaian(68);
?>    

</body>
</html>