<?php
include 'config/conn.php';
    $nik = $_GET['nik'];
    $sql = "select * from users where nik = '{$nik}'";
    $res = $conn->query($sql);
    $data = array();
    while($row = $res->fetch_assoc()){
        $data[] = array("nik" => $row['nik']);
    }

    echo json_encode($data);
?>