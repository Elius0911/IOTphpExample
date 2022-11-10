<?php
require_once 'databaseImport.php';
?>

<!doctype html>
    <html lang = "zh-Hant-TW">

<body>
    <?php
    if ($cc == 0)
        echo '<img src = "picture/redCircle.png" width="50" height="50" >';   //不亮
    else
        echo '<img src = "picture/red.png" width="50" height="50" />';        //亮
    ?>
</body>