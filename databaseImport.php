<?php
require_once 'database.php';

$sql = "SELECT * FROM `sensor` WHERE 1";
$result = $connection->query($sql);

while ($row = $result->fetch_assoc()) { // fetch_assoc: 取得資料之值
    $s1 = array_values($row)[0];
    $s2 = array_values($row)[1];
    $s3 = array_values($row)[2];
    $s4 = array_values($row)[3];
}
?>