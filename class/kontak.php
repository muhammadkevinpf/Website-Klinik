<?php
    class kontak{
        public function insertKontak($conn,$nama,$email,$pesan){
            $date = date('Y-m-d');
            $sql = "insert into kontak values (null,'{$nama}','{$email}','{$pesan}','{$date}')";
            $res = $conn->query($sql);
            if($res){
                echo "$('#myModal').modal('show');";
            }
        }
        public function selectKontak($conn){
            $no = 1;
            $sql = "select * from kontak order by created_at";
            $res = $conn->query($sql);
            while($row = $res->fetch_assoc()){
                echo "<tr>
                <td>{$no}</td>
                <td class='caps'>".$row['nama']."</td>
                <td>".$row['email']."</td>
                <td>".substr($row['pesan'],0,20)."...</td>
                <td>".$row['created_at']."</td>
                </tr>";
                $no++;
            }
        }
    }
?>