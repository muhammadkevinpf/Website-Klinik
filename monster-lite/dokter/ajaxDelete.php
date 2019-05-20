<?php
include $_SERVER["DOCUMENT_ROOT"].'/klinik/config/conn.php';
    $id = $_GET['id'];
    $sql = "delete from temp_pendaftaran where nik = '{$id}'";
    $res = $conn->query($sql);
        echo $sql;
?>