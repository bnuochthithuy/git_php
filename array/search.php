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
    function Search($value, $array){
        return array_search($value, $array);  
    }
    $array = [
        "ram",  
        "askash",
        "saran",
        "mohan"
    ];
    $value = $_POST['search'];
    $kq = Search($value, $array);
    ?>
    <form action="search.php" method="post">
        <div class="search_input">Search: <input type="search" name="search" id="search"></div>
        <button id="button" type="submit"> OK</button>
        <div> hien thi ket qua <?php echo $kq?> </div>
    </form>
</body>
</html>