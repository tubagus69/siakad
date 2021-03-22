<?php
    $hostname ="localhost";
    $user ="root";
    $password ="";
    $dbname ="rumahsakit";

    $db = mysqli_connect($hostname , $user , $password , $dbname);

    if( !$db) {
        die("Gagal terhubung dengan database : " . mysqli_connect_error());
    }
?>