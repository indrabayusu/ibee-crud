<?php
    // 20 10 2022
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "ibee_crud";
    // buat koneksi dengan database MySQL
    $link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if (!$link) {
        die ("Koneksi dengan MySQL gagal: ".mysqli_connect_errno()." - ".mysqli_connect_error());
    }
?>
