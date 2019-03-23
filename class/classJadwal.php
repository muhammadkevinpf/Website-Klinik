<?php
class jadwal{
    public function selectJadwal($conn){
        $sql = "select * from jadwal";
        $res = $conn->query($sql);
        while ($row = $res->fetch_assoc()){
            echo "<option value='".$row['id']."'>".$row['jam']."</option>";
        }
    }
    public function insertDaftar($conn,$jadwal){
        
    }
}

?>