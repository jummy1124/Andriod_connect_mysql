<?php
    $link=mysqli_connect("IP","使用者名稱","密碼","資料庫名稱");
    $link->set_charset("UTF8");
    $result = mysqli_query($link, "SELECT * FROM `資料表名稱`");
    while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
        print($row[0]);
        // print("<br>");
    }
    $link->close();
    ?>
