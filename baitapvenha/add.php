<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="add.php">
        <label>Mã sinh viên:</label><input type="text" name="student_id" required><br>
        <label>Họ và tên:</label><input type="text" name="name" required><br>
        <label>Giới tính:</label><input type="text" name="hometown"required><br>
        <label>Quê quán:</label><input type="text" name="hometown" required><br>
        <label>Năm sinh:</label><input type="text" name="birth_year" required><br>
        <label>Ngành học:</label><input type="text" name="major" required><br>
        <button type="submit">Thêm</button>
    </form>
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $student_id = $_POST['student_id'];
            $name = $_POST['name'];
            $gender = $_POST['gender'];
            $hometown = $_POST['hometown'];
            $birth_year = $_POST['birth_year'];
            $major = $_POST['major'];
        
            $file = 'students.json';
            $students = json_decode(file_get_contents($file), true);
            
            $new_student = array($student_id, $name, $gender, $hometown, $birth_year, $major);
            $students[] = $new_student;
        
            file_put_contents($file, json_encode($students));
            echo "<p>Đã thêm sinh viên mới: $name</p>";
        }
    $students = json_decode(file_get_contents('students.json'), true);

    foreach ($students as $student) {
        echo "<tr><td>" . $student[0] . "</td><td>" . $student[1] . "</td>...</tr>";
    }
    ?>
    

</body>
</html>