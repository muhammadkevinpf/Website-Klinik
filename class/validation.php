<?php
    class validation{
        protected $nama;
        protected $nik;
        public function setNama($nama){
            $this->nama = $nama;
        }
        public function getNama(){
            return $this->nama;
        }
        public function setNik($nik){
            $this->nik = $nik;
        }
        public function getNik(){
            return $this->nik;
        }

        public function login($conn,$username,$password){
            $q = "select l.username, l.password, l.nik, l.status, u.nama from login as l 
            inner join users as u on l.nik = u.nik
            where l.username='{$username}' and l.password='{$password}'";
            $res = $conn->query($q);
            $row = $res->fetch_assoc();
            if(mysqli_num_rows($res) > 0){
                if($row['status'] == 'admin'){
                    echo "<meta http-equiv='refresh' content='0;url=/klinik/monster-lite/admin' />";
                }else if($row['status'] == 'dokter'){
                    echo "<meta http-equiv='refresh' content='0;url=/klinik/monster-lite/dokter' />";
                }else{
                    $this->setNama($row['nama']);
                    $this->setNik($row['nik']);
                    echo "<meta http-equiv='refresh' content='0;url=/klinik/' />";
                }
                
            }else{
                echo "<div class='alert alert-danger'>
                <p class='text-center'>Username / Password Salah</p>
                </div>";
            }
        }

        public function register($conn,$nik,$tl,$nama,$alamat,$username,$password){
            $q = "insert into users values('{$nik}','{$nama}','{$alamat}','{$tl}')";
            $q2 = "insert into login values(null,'{$username}','{$password}','{$nik}','member')";
            $q3 = "select * from login where username='{$username}'";
            $res = $conn->query($q3);
            if(mysqli_num_rows($res) > 0){
                echo "<div class='alert alert-danger'>
                <p class='text-center'>Username sudah ada</p>
                </div>";
            }else{
                $conn->query($q);
                $conn->query($q2);
                echo "<div class='alert alert-success'>
                <p>Berhasil Daftar, Silahkan <a href='login.php'>Login</a></p>
                </div>";
            }
        }
    }
?>