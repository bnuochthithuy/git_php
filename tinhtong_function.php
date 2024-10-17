<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p class="kq">
        <?php
        echo"$kq"
        ?>

    </p>
    <?php
        function tinhTong(){
            $a=6;
            $b=9;
            return $a+$b;
            }
        echo"tong la", tinhTong();
    ?>
    
      <form action="form.php" method="POST">
        số thứ nhất: <input type="number" name="FirstNum"><br>
        số thứ hai: <input type="number" name="SecondNum"><br>
        <input type="hidden" name="from_admin" value="i"><br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
