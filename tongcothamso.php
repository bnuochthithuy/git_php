<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    error_reporting(0);
   
        function tongHesoFun($hsa,$hsb){
            $tong =$hsa+$hsb;
            return $tong;
        }
        $a = $_POST['hsa'];
        $b = $_POST['hsb'];
        $sum = tongHesoFun($a,$b);
    ?>

    <form action="tongcothamso.php" method="post">
        
        hs1: <input type="number" name="hsa"><br>
        hs2: <input type="number" name="hsb"><br>
        <input type="hidden" name="from_admin" value="i"><br>
        <input type="submit" name="submit" value="submit">
        <div class="result"> result <?php echo $sum ?> </div>

    </form>

</body>
</html>