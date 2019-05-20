<?php
class jadwal{
    public function selectJadwal($conn){
        $sql = "select * from jadwal";
        $res = $conn->query($sql);
        while ($row = $res->fetch_assoc()){
            echo "<option value='".$row['id']."'>".$row['jam']."</option>";
        }
    }
    public function insertDaftar($conn,$nik,$jadwal,$harga){
        $tanggal = date('Y-m-d');
        $sql = "insert into pendaftaran values (null,'{$nik}','{$jadwal}',{$harga},'Belum Bayar','{$tanggal}')";
        $res = $conn->query($sql);
        if($res){
            echo "$('#myModal').modal('show');";
        }
    }
    public function insertTempDaftar($conn,$nik,$jadwal,$harga){
        $tanggal = date('Y-m-d');
        $sql = "insert into temp_pendaftaran values (null,'{$nik}','{$jadwal}',{$harga},'Belum Diperiksa','{$tanggal}')";
        $conn->query($sql);
    }
    public function selectDaftar($conn){
        $no = 1;
        $sql = "select u.nik,u.nama,p.harga, p.status, d.nama as nama_dokter, dj.hari,p.created_at, j.jam from detailjadwal as dj inner join pendaftaran as p on p.idJadwal = dj.id inner join users as u on u.nik = p.nik inner join dokter as d on d.id = dj.idDokter inner join jadwal as j on j.id = dj.idJadwal";
        $res = $conn->query($sql);
        while($row = $res->fetch_assoc()){
            echo "<tr class='text-center'>
            <td>".$row['nama_dokter'].", drg</td>
            <td>".$row['hari'].", ".$row['jam']."</td>
            <td style='text-transform:capitalize;'>".$row['nama']."</td>
            <td>".$this->rupiah($row['harga'])."</td>
            <td>".$row['created_at']."</td>";
            if($row['status'] == 'Sudah Bayar'){
                echo "<td>".$row['status']."</td>";
            }else{
                echo "<td><a href='#' id='bayar' data-id=".$row['nik'].">".$row['status']."</a></td>";
            }
            echo "</tr>";
            $no++;
        }
    }

    public function selectDokter($conn){
        $sql = "SELECT dj.id, d.nama, d.harga, j.jam, dj.hari from detailjadwal as dj inner join dokter as d on d.id = dj.idDokter inner join jadwal as j on j.id = dj.idJadwal order by d.nama";
        $res = $conn->query($sql);
        while($row = $res->fetch_assoc()){
            echo "<tr>
            <td>".$row['nama']."</td>
            <td>".$row['hari']."</td>
            <td>".$row['jam']."</td>
            <td>".$this->rupiah($row['harga'])."</td>
            </tr>";
        }
    }

    function rupiah($angka){
        $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
        return $hasil_rupiah;
    }
    
}

?>