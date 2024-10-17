<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .square{
        width: 30px;
        height: 30px;
        background-color:red;
        display: inline-flex;
    }
</style>
<body>
    <?php
    for ($i=0; $i<=10; $i++){
        for($j=0; $j<=5; $j++){
        echo"<div class='square'></div>,";
        }
    }
    ?>
</body>
</html>