<?php
include '../config/conn.php';
$jam = $_GET['jadwal'];
$dokter = $_GET['dokter'];

$sql = "select * from detailjadwal where idDokter='{$dokter}' and idJadwal ='{$jam}'";
$res = $conn->query($sql);

$data = array();

while($row = $res->fetch_assoc()){
    $id = $row['id'];
    $hari = $row['hari'];
    $data[] = array("id" => $id, "hari" => $hari);
}

echo json_encode($data);

?>