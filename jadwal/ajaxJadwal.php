<?php
include '../config/conn.php';
$jam = $_GET['jadwal'];
$dokter = $_GET['dokter'];

$sql = "SELECT dj.id, d.nama, d.harga, j.jam, dj.hari from detailjadwal as dj inner join dokter as d on d.id = dj.idDokter inner join jadwal as j on j.id = dj.idJadwal where dj.idDokter='{$dokter}' and dj.idJadwal ='{$jam}'";
$res = $conn->query($sql);

$data = array();

while($row = $res->fetch_assoc()){
    $id = $row['id'];
    $hari = $row['hari'];
    $harga = $row['harga'];
    $data[] = array("id" => $id, "hari" => $hari, "harga" => $harga);
}

echo json_encode($data);

?>