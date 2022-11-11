<?php
require_once 'databaseImport.php'; //各感測器的值匯入
?>

<!doctype html>
    <html lang = "zh-Hant-TW">

<body>
    <?php
    if ($s1 == 0)
        echo '<img src = "picture/redCircle.png" width="50" height="50" />';   //不亮
    else
        echo '<img src = "picture/red.png" width="50" height="50" />';        //亮
    ?>
</body>

