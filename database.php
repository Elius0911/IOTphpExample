https://github.com/Elius0911/IOTphpExample/blob/master/database.php

<?php
//資料庫連接
$host = 'localhost';
$dbUser ='root';
$dbPassword = 'root';
$dbName = 'fire';
$connection = mysqli_connect($host, $dbUser, $dbPassword, $dbName);
?>