<?php
include $_SERVER["DOCUMENT_ROOT"].'/klinik/config/conn.php';
    $id = $_GET['id'];
    $sql = "update pendaftaran set status = 'Sudah Bayar' where nik = '{$id}'";
    $res = $conn->query($sql);
?>