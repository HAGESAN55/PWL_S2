<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Form Nilai</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="bg-primary text-white p-4">
            <h1 class="text-center">Form Nilai</h1>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <form class="form-horizontal mt-3" action="form_nilai.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="nama" class="form-control my-input" placeholder="Nama Mahasiswa">
                        </div>
                        <div class="form-group">
                            <select name="matkul" class="form-control my-input">
                                <option selected>Pilih Mata Kuliah :</option>
                                <option value="DDP">Dasar-Dasar Pemrograman</option>
                                <option value="WEB">Pemrograman Web Lanjut</option>
                                <option value="BDI">Basis Data I</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="uts" class="form-control my-input" placeholder="Nilai UTS">
                        </div>
                        <div class="form-group">
                            <input type="text" name="uas" class="form-control my-input" placeholder="Nilai UAS">
                        </div>
                        <div class="form-group">
                            <input type="text" name="tgs" class="form-control my-input" placeholder="Nilai Tugas/Praktikum">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="proses" class="btn btn-block btn-primary send-button tx-tfm">
                        </div>
                    </form>
                </div>
                    <?php
                    require_once 'libfungsi.php';
                    $proses = $_POST['proses'];
                    $nama_siswa = $_POST['nama'];
                    $matkul = $_POST['matkul'];
                    $uts = $_POST['uts'];
                    $uas = $_POST['uas'];
                    $tgs = $_POST['tgs'];
                    $rrn = ($uts + $uas + $tgs)/3;
                    $_nilai = $rrn;
                    $hasil_ujian = kelulusan($_nilai);
                    $_hasil = predikat(grade($_nilai));
                    ?>

                <div class="col-3 mt-3 mx-auto">
                        <div class="card" style="width: 18rem;">
                            <div class="card-header bg-primary text-white">
                                Result
                            </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Nama : <?= $nama_siswa ?></li> 
                            <li class="list-group-item">Mata Kuliah : <?= $matkul ?></li> 
                            <li class="list-group-item">Nilai UTS : <?= $uts ?></li> 
                            <li class="list-group-item">Nilai UAS : <?= $uas ?></li> 
                            <li class="list-group-item">Nilai Tugas : <?= $tgs ?></li>
                            <li class="list-group-item">Grade Nilai : <?= $_hasil ?></li>
                            <li class="list-group-item"><?= $hasil_ujian ?></li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>