<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Document</title>
</head>
    <body>
    <div><a href=" https://github.com/bnuochthithuy/git_php/blob/main/formTinhTong.php ">function</a></div>
    <form action="formTinhTong.php" class="frm" id="form_sum" method="post">
            <h1> BẢNG ĐIỂM CỦA EM </h1>
            <div class="input">Semester1: <input type="number" name="number1"><br></div>
            <div class="input">Semester2: <input type="number" name="number2"><br></div>
            <label for="year"> year:</label>
                <select name="year" id="year">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                </select>
                <br>
            <div class="button ">
                <button type="submit" id="ok"> OK </button>
                <button type="reset" id="cancle"> Cancel </button>
            </div>
            <div class="kq"> KQ: <?php echo sum(); ?> </div>
        </form>
        <?php
            error_reporting(0);
            function sum(): float{
                $hs1 = $_POST['number1'];
                $hs2 = $_POST['number2'];
                $hs3 = $_POST['year'];
                if ($hs3==1){
                    $kq = ($hs1+($hs2*2))/3;
                }
                else if($hs3==2){
                    $kq = ($hs1+($hs2*3))/4;
                }
                else if($hs3== 3){
                    $kq = ($hs1+($hs2*4))/5;
                }
                return $kq;
            }
            $kq = sum();
        ?>
</body>
</html>