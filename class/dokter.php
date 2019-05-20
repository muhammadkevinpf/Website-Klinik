<?php
    class dokter{

        protected $nama,$nik,$tanggal;

        public function selectDokter($conn){
            $sql = "select * from dokter";
            $res = $conn->query($sql);
            while($row = $res->fetch_assoc()){
                echo "<option value='".$row['id']."'>".$row['nama'].", drg</option>";
            }
        }
        public function selectDaftar($conn){
            $no = 1;
            $sql = "select u.nik,u.nama,p.harga, p.status, d.nama as nama_dokter, dj.hari,p.created_at, j.jam from detailjadwal as dj inner join temp_pendaftaran as p on p.idJadwal = dj.id inner join users as u on u.nik = p.nik inner join dokter as d on d.id = dj.idDokter inner join jadwal as j on j.id = dj.idJadwal";
            $res = $conn->query($sql);
            while($row = $res->fetch_assoc()){
                echo "<tr class='text-center'>
                <td>{$no} <input type='hidden' value='".$row['nik']."'></td>
                <td>".$row['nama']."</td>
                <td>".$row['created_at']."</td>
                <td>".$row['status']."</td>
                <td><a href='diagnosa.php?id=".$row['nik']."'>Update</a></td>
                <td><a href='#' id='hapusPasien' data-id='".$row['nik']."'>Hapus</a></td>
                </tr>";
                $no++;
            }
        }
        public function hapusPasien($conn,$id){
            $sql = "delete from temp_pendaftaran where nik = '{$id}'";
            $conn->query($sql);
        }
        public function selectTreatment($conn){
            $sql = "select * from treatment";
            $res = $conn->query($sql);
            while($row = $res->fetch_assoc()){
                echo "<option value='".$row['harga']."'>".$row['nama_treatment']."</option>";
            }
        }
        public function selectPasien($conn,$id){
            $sql = "select u.nik,u.nama,p.harga, p.status, d.nama as nama_dokter, dj.hari,p.created_at, j.jam from detailjadwal as dj inner join temp_pendaftaran as p on p.idJadwal = dj.id inner join users as u on u.nik = p.nik inner join dokter as d on d.id = dj.idDokter inner join jadwal as j on j.id = dj.idJadwal where u.nik = '{$id}'";
            $res = $conn->query($sql);
            $row = $res->fetch_assoc();
            $this->setNik($row['nik']);
            $this->setNama($row['nama']);
            $this->setTanggal($row['created_at']);
        }


        public function updatePendaftaran($conn,$id,$tanggal,$harga){
            $sql = "update pendaftaran set harga = harga+{$harga} where nik = '{$id}' and created_at = '{$tanggal}'";
            $conn->query($sql);
        }
        public function updateTempPendaftaran($conn,$id,$tanggal){
            $sql = "update temp_pendaftaran set status='Sudah Diperiksa' where nik = '{$id}' and created_at = '{$tanggal}'";
            $conn->query($sql);
            echo $sql;
            echo "<meta http-equiv='refresh' content='0;url=index.php' />";
        }

        /**
         * Get the value of nik
         */ 
        public function getNik()
        {
                return $this->nik;
        }

        /**
         * Set the value of nik
         *
         * @return  self
         */ 
        public function setNik($nik)
        {
                $this->nik = $nik;

                return $this;
        }

        /**
         * Get the value of nama
         */ 
        public function getNama()
        {
                return $this->nama;
        }

        /**
         * Set the value of nama
         *
         * @return  self
         */ 
        public function setNama($nama)
        {
                $this->nama = $nama;

                return $this;
        }

        /**
         * Get the value of tanggal
         */ 
        public function getTanggal()
        {
                return $this->tanggal;
        }

        /**
         * Set the value of tanggal
         *
         * @return  self
         */ 
        public function setTanggal($tanggal)
        {
                $this->tanggal = $tanggal;

                return $this;
        }
    }
?>