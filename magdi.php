<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calification</h1>

    <?php
    $calif = 31;
        if($calif >= 60) {
        echo $calif . "First Division";
        }
        else if($calif >=45) {
        echo $calif ."Second Division";
        }
        else if($calif >=33) {
        echo $calif . "Third Division";
        }
        else {
        echo $calif . "Fail";
        }   
    ?>

</body>
</html>