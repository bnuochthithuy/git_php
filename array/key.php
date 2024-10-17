<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $soures = array(
        'Front_end' => array(
            'title' => 'khoa hoc lap trin frontEnd online',
            'fee' => 200000 ),
        'Back_end ' => array(
            'title'=> 'khoa hoc lap trinh web php online',
            'fee'=> 120000),
        );
        foreach( $soures as $key => $value ) {
            echo''. $key .'<br>';
            echo "-- $value[title]<br>";
            echo "-- $value[fee]<br>";
        }
    ?>
</body>
</html>