<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $sum=0; $sum1=0;$sum2=0;$i=0;
    while($i<10){
        $sum=$sum+$i;
        if ($i%2==0){
            $sum1+=$i;
        }else{
            $sum2+=$i;
        }
        $i++;
    }
    echo"tong chan: ".$sum1 .'<br>' ,"tong le: ".$sum2;
    ?>
</body>
</html>