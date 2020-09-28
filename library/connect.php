<?php
    $dbhost     = "localhost";
    $dbuser     = "root";
    $dbpass     = "";
    $dbname     = "ban_hang_online";
    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    mysqli_query($conn,"SET CHARACTER SET 'utf8'");
    mysqli_query($conn,"SET SESSION collation_connection ='utf8_unicode_ci'");
    date_default_timezone_set("Asia/Ho_Chi_Minh");
?>