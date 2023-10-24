<?php

$music = array('gitar', 'drum', 'keyboard');
$boolean = false;

if (isset($_POST['submit'])) {
    $boolean = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Percabangan dan Perulangan</title>
</head>

<body>
    <div style="text-align: center;">

        <form method="post">
            <button type="submit" name="submit"> <?= ($boolean) ? "Sembunyikan" : "Munculkan" ?></button>
        </form>


        <?php
        if ($boolean == true) {

            for ($i = 0; $i < count($music); $i++) {
        ?>
                <h1><?= $i + 1 . " music " . $music[$i]; ?></h1>
        <?php
            }
        }
        ?>






    </div>
</body>

</html>
