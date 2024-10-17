<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $sum1=0;$sum2=0;$si=0;
    for ($i=0; $i<=5; $i++){
        if($i%2 == 0){
            $sum1+=$i;
        }else{
            $sum2+=$i;
        }
    }
    echo "tổng số lẻ: ".$sum2 ,'<br>', "tổng chẵn: ".$sum1;
    ?>  
</body>
</html>