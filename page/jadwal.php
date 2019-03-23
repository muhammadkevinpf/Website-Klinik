<?php
    include '../class/dokter.php';
    include '../class/classJadwal.php';
    include '../config/conn.php';
    $dokter = new dokter;
    $jadwal = new jadwal;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Klinik</title>
    <?php include '../css.php'?>
</head>

<body>
    <?php include '../navbar.php'?>
    <div class="page-container">
        <div class="container-fluid">
            <div class="row mid">
                <div class="col-lg-7 mx-auto">
                    <table class="table table-inverse table-bordered table-responsive table-hover">
                        <legend class="text-center">Jadwal Praktek Dokter Gigi<br>Bandung Medical Center Jatinangor
                        </legend>
                        <thead class="thead-inverse">
                            <tr class='text-center table-danger'>
                                <th>Jadwal</th>
                                <th>Senin</th>
                                <th>Selasa</th>
                                <th>Rabu</th>
                                <th>Kamis</th>
                                <th>Jum'at</th>
                                <th>Sabtu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">08.00 - 14.00</td>
                                <td>Jafar, drg</td>
                                <td>Elsa, drg</td>
                                <td>Ghaisani, drg</td>
                                <td>Indah, drg</td>
                                <td>Jafar, drg</td>
                                <td>Indah, drg</td>
                            </tr>
                            <tr>
                                <td scope="row">14.00 - 20.00</td>
                                <td>Indah, drg</td>
                                <td>Chrisna, drg</td>
                                <td>Monica, drg</td>
                                <td>Chrisna, drg</td>
                                <td>Ghaisani, drg</td>
                                <td>Monica, drg</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-1 mx-auto">
                    <?php 
                        if(isset($_SESSION['nama'])){
                            echo '<button class="btn btn-danger" data-toggle="modal" data-target="#modalBook">Pendaftaran</button>';
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalBook" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header btn-danger" >
                    <h5 class="modal-title" id="modalBookLabel" style="color:white;">Form Pendaftaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:white;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                        <div class="form-group">
                            <label for="dokter">Nama Dokter</label>
                            <select name="dokter" class="form-control opsi" id="dokter">
                                <option value="">Pilih Dokter</option>
                                <?php $dokter->selectDokter($conn)?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jam">Jam</label>
                            <select class="form-control opsi" name="jam" id="jam">
                                <option value="">Pilih Jam</option>
                                <?php $jadwal->selectJadwal($conn) ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="hari">Jam</label>
                            <select class="form-control opsi" name="hari" id="hari">
                                <option value="">Pilih Hari</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" name="daftar">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include '../footer.php'?>
    <?php include '../jquery.php'?>

    <script>
        $(document).ready(function(){
            var dokters;
            $("#dokter").change(function(){
                dokters = this.value;
                $("#jam").prop('selectedIndex',0);
            });
            $("#jam").change(function(){
                var jam = this.value;
                    $.ajax({
                        type:'get',
                        url:'ajaxJadwal.php',
                        data: {dokter:dokters, jadwal:jam},
                        dataType: 'json',
                        success:function(response){
                            var len = response.length;
                            $("#hari").empty();
                            if(len == 0){
                                $("#hari").append("<option value=''>Jadwal Kosong</option>");
                            }else{
                                for(var i = 0; i < len; i++){
                                var id = response[i]['id'];
                                var hari = response[i]['hari'];
                                $("#hari").append("<option value='"+id+"'>"+hari+"</option>");
                                }
                            }
                            
                        }
                    });
                });
            
        });
    </script>
</body>

</html>