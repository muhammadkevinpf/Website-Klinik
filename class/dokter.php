<?php
    class dokter{

        public function selectDokter($conn){
            $sql = "select * from dokter";
            $res = $conn->query($sql);
            while($row = $res->fetch_assoc()){
                echo "<option value='".$row['id']."'>".$row['nama'].", drg</option>";
            }
        }
    }
?>