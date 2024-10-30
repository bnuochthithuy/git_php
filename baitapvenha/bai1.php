<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <h1>Danh sách sinh viên</h1>
    
    <!-- Tính năng tìm kiếm -->
    <form method="GET">
        <label for="search">Tìm kiếm:</label>
        <input type="text" id="search" name="search" placeholder="Nhập từ khóa tìm kiếm">
        <button type="submit">Tìm</button>
    </form>

    <?php
    // Danh sách sinh viên (có thể lưu trong cơ sở dữ liệu hoặc file)
    $students = array(
        array("2015478", "Nguyễn Thị Hồng Loan", "Nữ", "Hiệp Hòa - Bắc Giang", "1999", "Công nghệ thông tin"),
        array("2017501", "Võ Giang Sơn", "Nam", "Mông Cái - Quảng Ninh", "1998", "Cơ điện tử"),
        array("2017300", "Bùi Thanh Lam", "Nữ", "Tiền Hải - Thái Bình", "2001", "Kế toán"),
        array("2017105", "Phạm Quốc Huy", "Nam", "Phú Lý - Hà Nam", "2000", "Văn hóa học"),
        array("2017594", "Nguyễn Thanh Phương", "Nữ", "Ninh Giang - Hải Dương", "1998", "Quản trị văn phòng"),
        array("2018320", "Tô Cát Anh", "Nữ", "Yên Khánh - Ninh Bình", "2000", "Ngôn ngữ Anh"),
        array("2018794", "Phạm Hồng Quang", "Nam", "Lục Ngạn - Bắc Giang", "1998", "Công nghệ thông tin"),
        array("2017553", "Hoàng Thu Hạnh", "Nữ", "Gia Lộc - Hải Dương", "1999", "Thiết kế thời trang"),
        array("2017199", "Trần Nguyễn Ngọc Sơn", "Nam", "Nho Quan - Ninh Bình", "1999", "Cơ khí")
    );

    // Tính năng tìm kiếm
    if (isset($_GET['search'])) {
        $searchTerm = $_GET['search'];
        $students = array_filter($students, function($student) use ($searchTerm) {
            return stripos($student[1], $searchTerm) !== false || stripos($student[3], $searchTerm) !== false;
        });
    }

    // Kiểm tra xem có mã sinh viên được truyền vào không
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Tìm kiếm sinh viên theo mã và xóa sinh viên
        foreach ($students as $key => $student) {
            if ($student[0] == $id) {
                unset($students[$key]);
                echo "<p>Đã xóa thông tin sinh viên: " . $student[1] . "</p>";
                break;
            }
        }
    }
    ?>

    <table>
        <tr>
            <th>Mã sinh viên</th>
            <th>Họ và tên</th>
            <th>Giới tính</th>
            <th>Quê quán</th>
            <th>Ngày sinh</th>
            <th>Ngành học</th>
            <th>Tác vụ</th>
        </tr>
        <?php
        foreach ($students as $student) {
            echo "<tr>";
            echo "<td>" . $student[0] . "</td>";
            echo "<td>" . $student[1] . "</td>";
            echo "<td>" . $student[2] . "</td>";
            echo "<td>" . $student[3] . "</td>";
            echo "<td>" . $student[4] . "</td>";
            echo "<td>" . $student[5] . "</td>";
            echo "<td>";
            echo "<a href='?edit=" . $student[0] . "'>Sửa</a> ";
            echo "<a href='?id=" . $student[0] . "' onclick='return confirm(\"Bạn có chắc chắn muốn xóa không?\")'>Xóa</a>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <!-- Chức năng thêm mới -->
    <a href="add.php">Thêm sinh viên mới</a>

</body>
</html>