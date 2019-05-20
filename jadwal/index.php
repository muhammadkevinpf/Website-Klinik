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

<body class="jadwal">
    <?php include '../navbar.php'?>
    <div class="null">
        <div class="container-fluid">
            <div class="row mid">
                <div class="col-lg-6 mx-auto">
                    <table class="table table-inverse table-bordered table-hover text-center">
                        <legend class="text-center">Jadwal Praktek Dokter Gigi<br>Bandung Medical Center Jatinangor
                        </legend>
                        <thead class="thead-inverse">
                            <tr class='text-center table-danger'>
                                <th>Nama Dokter</th>
                                <th>Hari</th>
                                <th>Jam</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $jadwal->selectDokter($conn); ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-1 mx-auto">
                    <button class="btn btn-danger" data-toggle="modal" data-target="#modalBook" <?php if(!isset($_SESSION['nama'])) echo 'disabled'; ?>>Pendaftaran</button>
                    
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
                            <label for="hari">Hari</label>
                            <select class="form-control opsi" name="hari" id="hari">
                                <option value="">Pilih Hari</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="harga" id="hrg" value=""/>
                            <label class="text-danger">Harga: <span id="harga"> - </span></label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" name="daftar">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
        <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header alert-success">
                <h4 class="modal-title">Success</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <img src="../assets/img/checkmark.png" class="mx-auto d-block img-fluid" style="width:50%"/>
                <h4 class="text-center mt-4">Pendaftaran anda berhasil</h4>
                </div>
            </div>
        </div>
    </div>

    <?php include '../footer.php'?>
    <?php include '../jquery.php'?>

    <script>
    	function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
		}
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
                                var harga = response[0]['harga'];
                                for(var i = 0; i < len; i++){
                                var id = response[i]['id'];
                                var hari = response[i]['hari'];
                                $("#hari").append("<option value='"+id+"'>"+hari+"</option>");
                                }
                                $("#harga").text(formatRupiah(harga, 'Rp. '));
                                $("#hrg").val(harga);
                            }
                            
                        }
                    });
                });
        });
    </script>
    <script>
        <?php $jadwal->insertDaftar($conn,$_SESSION['nik'],$_POST['hari'],$_POST['harga']) ?>
        <?php $jadwal->insertTempDaftar($conn,$_SESSION['nik'],$_POST['hari'],$_POST['harga']) ?>
    </script>
</body>

</html>