<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $School = [
            "Students" => [
                [
                    "Masv" => "SV01",
                    "name" => "nguyễn thị ánh tú",
                    "ngay sinh" => "09-08-2009",
                    "gioi tinh" => "nữ"
                ],
                [
                    "Masv" => "SV02",
                    "name" => "hồng thắm",
                    "ngay sinh" => "03-09-2008",
                    "gioi tinh" => "nữ"
                ],
                [
                    "Masv" => "SV03",
                    "name" => "xuân",
                    "ngay sinh" => "08/06/2005",
                    "gioi tinh" => "nam"
                ],
                [
                    "Masv" => "SV04",
                    "name" => "ng van a",
                    "ngay sinh" => "08/06/2005",
                    "gioi tinh" => "nam"
                ]

            ],
            "teacher" => [
                [
                    "Masv" => "SV01",
                    "name" => "chung thị thúy hồng",
                    "ngay sinh" => "08-06-2006",
                    "gioi tinh" => "nữ"
                ],
                [
                    "Masv" => "SV02",
                    "name" => "xuân mai",
                    "ngay sinh" => "10--09-1998",
                    "gioi tinh" => "nữ"
                ]
            ]
            ];
        foreach($School as $k => $v){
            echo "<br>";
            echo $k ."<br";
            foreach($v as $v2){
                echo " -   Masv:     ". $v2['Masv'] . "<br>";
                echo " -   Ten:  ". $v2['name'] . "<br>";
                echo " -   Ngay sinh:    ". $v2['ngay sinh'] . "<br>";
                echo " -   Gioi Tinh:    ". $v2['gioi tinh'] . "<br>";
            }
        }
    ?>
</body>
</html>