<?php
    class validation{
        public function login($conn,$username,$password){
            $q = "select * from login where username='{$username}' and password='{$password}'";
            $res = $conn->query($q);
            if(mysqli_num_rows($res) > 0){
                echo "<meta http-equiv='refresh' content='0;url=http://google.com/' />";
            }else{
                echo "<div class='alert alert-danger'>
                <p class='text-center'>Username / Password Salah</p>
                </div>";
            }
        }

        public function register($conn,$nik,$tl,$nama,$alamat,$username,$password){
            $q = "insert into users values('{$nik}','{$nama}','{$alamat}','{$tl}')";
            $q2 = "insert into login values(null,'{$username}','{$password}','{$nik}')";
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