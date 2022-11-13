<?php
require_once 'database.php'; //連結資料庫, 必需
require_once 'sensors.php'; //感測器們

if (isset($_GET["DataPack"])) { //若收到資料包就執行, isset:用於檢測()內是否為null
   $DataPack = $_GET["DataPack"]; //讀資料包
   $Datas = mb_split(",", $DataPack); //以逗號作為分割符, 此時$Datas為陣列
}
else {
   echo "Datas Import Error : (";
}

$index = 0; //資料索引值
while ($index < count($Datas)) {
   $sql = "UPDATE `lb` SET `" . $sensors[$index] . "` = " . $Datas[$index] . " WHERE 1"; //更新資料,    "UPDATE `資料表名` SET `" . 欄 . "` = " . $Datas[$index] . " WHERE 1"
   if ($connection->query($sql) === true)
      $index++;
}

if ($index == count($Datas)) { //若所有資料皆有收到, 顯示成功
   echo "Data Update Success <br>";
   echo "Data Import: ";
   print_r($DataPack);
}
else {
   echo "Data Update Fail : (";
}

$connection->close();
?>