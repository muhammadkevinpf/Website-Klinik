<?php
class jadwal{
    public function selectJadwal($conn){
        $sql = "select * from jadwal";
        $res = $conn->query($sql);
        while ($row = $res->fetch_assoc()){
            echo "<option value='".$row['id']."'>".$row['jam']."</option>";
        }
    }
    public function insertDaftar($conn,$nik,$jadwal){
        $tanggal = date('Y-m-d');
        $sql = "insert into pendaftaran values (null,'{$nik}','{$jadwal}','{$tanggal}')";
        $res = $conn->query($sql);
        if($res){
            echo "$('#myModal').modal('show');";
        }
    }
    public function selectDaftar($conn){
        $no = 1;
        $sql = "select u.nik,u.nama, d.nama as nama_dokter, dj.hari,p.created_at, j.jam from detailjadwal as dj inner join pendaftaran as p on p.idJadwal = dj.id inner join users as u on u.nik = p.nik inner join dokter as d on d.id = dj.idDokter inner join jadwal as j on j.id = dj.idJadwal";
        $res = $conn->query($sql);
        while($row = $res->fetch_assoc()){
            echo "<tr>
            <td>{$no}</td>
            <td>".$row['nama_dokter'].", drg</td>
            <td>".$row['hari'].", ".$row['jam']."</td>
            <td style='text-transform:capitalize;'>".$row['nama']."</td>
            <td>".$row['created_at']."</td>
            </tr>";
            $no++;
        }
    }
    
}

?>