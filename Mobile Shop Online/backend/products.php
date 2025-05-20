<?php
$host = 'localhost'; $user = 'root'; $pass = ''; $db = 'mobileshop';
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) { die('Connection failed'); }
$sql = 'SELECT * FROM products';
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
    echo $row['name'] . " - $" . $row['price'] . "<br>";
}
?>