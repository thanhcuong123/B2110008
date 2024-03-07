<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlsv";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['id'];
$name_major = $_POST['name_major'];

$sql = "UPDATE major SET name_major='$name_major' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Cập nhật thành công. <a href='major_index.php'>Trở về danh sách</a>";
} else {
    echo "Lỗi: " . $conn->error;
}

$conn->close();
?>
