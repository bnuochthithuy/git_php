<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            display: inline-block;
        }
    </style>
</head>
<body>
    <?php
       session_start();
       foreach ($_SESSION["all_info"] as $value) {
        echo "<h1> Xin chào " . $value["name"] . "</h1></br>";
        echo "Tên đăng nhập: " . $value["nameLog"] . "</br>";
        echo "Email: " . $value["email"] . "</br>";
        echo "Mật khẩu: " . $value["pass"] . "</br>";
       }
       echo "<a href = 'inform_login.php'>Click here to comeback on login </a>";
    ?>
</body>
</html>