<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <!-- <style>
        .styles{
            color: red;
            font-size:30px;
        }
    </style> -->
<body>
    <?php
    $colors = array("red","orange","black", "blue");
    for ($i = 0; $i < count($colors); $i++){
        // echo"<p class='styles'>$colors[$i]</p>";
        echo "<p style='color: $colors[$i]; font-size: 30px;'>$colors[$i]</p>";
    }
?>
</body>
</html>