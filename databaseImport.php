<?php
require_once 'database.php'; //連結資料庫, 必需

$sql = "SELECT * FROM `lb` WHERE 1";
$result = $connection->query($sql);

while ($row = $result->fetch_assoc()) { // fetch_assoc: 取得資料之值
    $s1 = array_values($row)[0];
    $s2 = array_values($row)[1];
    $s3 = array_values($row)[2];
    $s4 = array_values($row)[3];
}

function alarmJudge () {
    global $s1;
    if ($s1 != 0) {
        $newData = array('alarm' => 1, 'Text' => "cc");
    }
    else {
        $newData = array('alarm' => 0);
    }
    file_put_contents('alarm.json', json_encode($newData)); //複寫alarm.json
}

alarmJudge();

echo ("<script type=\"text/javascript\">");
echo ("function fresh_page()");
echo ("{");
echo ("window.location.reload();");
echo ("}");
echo ("setTimeout('fresh_page()',1000);"); //1秒刷新一次
echo ("</script>");
?>

