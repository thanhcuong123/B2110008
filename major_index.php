<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlsv";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM major";
$result = $conn->query($sql);

echo "<h2>Danh Sách Chuyên Ngành</h2>";
echo "<a href='major_add.php'>Thêm Chuyên Ngành Mới</a><br/><br/>"; // Nút thêm chuyên ngành mới
echo "<table border='1'><tr><th>ID</th><th>Chuyên Ngành</th><th>Hành Động</th></tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["name_major"]."</td><td><a href='major_edit.php?id=".$row["id"]."'>Sửa</a> | <a href='major_delete.php?id=".$row["id"]."'>Xóa</a></td></tr>";
    }
} else {
    echo "<tr><td colspan='3'>Không có dữ liệu</td></tr>";
}

echo "</table>";

$conn->close();
?>
