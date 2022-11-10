<?php
require_once 'logic.php';
?>

<!doctype html>
    <html lang = "zh-Hant-TW">

<body>
    <div class="main">
        <?php
        if ($cc == 0)
            echo '<span class="cc"><img src = "picture/redCircle.png" width="50" height="50" ></span>';   //不亮
        else
            echo '<span class="c"><img src = "picture/red.png" width="50" height="50" /></span>';        //亮
        ?>
</body>