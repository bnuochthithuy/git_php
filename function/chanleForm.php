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
    // tham trị để gọi giá trị hàm vào
    // tạo một form 1 ô iput có 1 giá trị và kiểm tra trong ô input đó là giá trị chẵn hay giá trị lẻ
    function checkIn($hso){
        if ($hso % 2 == 0){
            echo"day la so chan", $hso;
        }else{
            echo "day la so le", $hso;
        }
    }
    $a = $_POST['hs1'];
    ?>
      <form action="chanleForm.php" method="post">
        hs: <input type="number" value="number" name="hs1" id="hs1"><br>
        <button type="submit"> submit </button>
        <div class="kq">KQ: <?php checkIn($a) ?> </div>
    </form>
</body>
</html>