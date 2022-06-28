<!DOCTYPE html>
<html>
<head>
<title>METANIT.COM</title>
<meta charset="utf-8" />
</head>
<body>
<h2>Список пользователей</h2>
<?php
$conn = new mysqli("localhost", "root", "Nfyrjvfysz123", "sparkler");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sql = "SELECT * FROM Clients";
if($result = $conn->query($sql)){
    $rowsCount = $result->num_rows; // количество полученных строк
    echo "<p>Получено объектов: $rowsCount</p>";
    echo "<table><tr><th>Id</th><th>Name</th><th>Surname</th><th>Email</th><th>Order Number</th><th>Furniture</th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["surname"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["order_num"] . "</td>";
            echo "<td>" . $row["furniture_id"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    $result->free();
} else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>
</body>
</html><?php /**PATH D:\WAMP\apache2\htdocs\sparkler\resources\views/list.blade.php ENDPATH**/ ?>