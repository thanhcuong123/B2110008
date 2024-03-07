<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlsv";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];

$sql = "SELECT * FROM major WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>

<!-- Form sửa chuyên ngành -->
<form action="major_edit_save.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
    Tên Chuyên Ngành: <input type="text" name="name_major" value="<?php echo $row["name_major"]; ?>">
    <input type="submit" value="Lưu Thay Đổi">
</form>

<?php
$conn->close();
?>
