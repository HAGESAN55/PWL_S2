<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>E-Commerce</title>
</head>
<body>
    <div class="bg-primary p-5">
    <h1 class="text-center text-white">E-Commerce</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="form_belanja.php" method="POST" class="mt-3">
            
            <div class="form-group">
                    <label for=""> Kustomer</label>
                    <input type="text" name="customer" class="form-control">
                </div>
                <div class="form-group">
                <label for="">Barang</label><br>
                  <div class="form-check form-check-inline">
                  
                    <input class="form-check-input" type="radio" name="produk" id="inlineRadio1" value="tv">
                    <label class="form-check-label" for="inlineRadio1">TV</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="produk" id="inlineRadio2" value="kulkas">
                    <label class="form-check-label" for="inlineRadio2">Kulkas</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="produk" id="inlineRadio3" value="mesin cuci">
                    <label class="form-check-label" for="inlineRadio3">Mesin Cuci</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Jumlah Barang</label>
                    <input type="text" name="jumlah" class="form-control">
                </div>
                <label>Kurir</label>
                <select name="kurir" class="form-select form-control" class="form-control" >
                    <option selected>--Pilih Jasa Pengiriman--</option>
                    <option value="Tiki">Tiki</option>
                    <option value="Si Cepat">Si Cepat</option>
                    <option value="Pos">Pos</option>
                    <option value="Grab">Grab</option>
                    <option value="Gojek">Gojek</option>
                </select>
                <div class="form-group">
                    <label>Alamat Pengiriman</label>
                    <textarea class="form-control" name="alamat" cols="30" rows="5"></textarea>
                </div>         
                <input type="submit" value="Simpan" name="" class="btn btn-primary btn-sm btn-block">
            </form>
            </div>

            <?php
                $customer = $_POST['customer'];
                $produk = $_POST['produk'];
                $jb = $_POST['jumlah'];
                $kurir = $_POST['kurir'];
                $alamat = $_POST['alamat'];
                if ($kurir == 'Si Cepat' || $kurir == 'Pos' || $kurir == 'Tiki'){
                    $hk = 15000;
                }
                else if ($kurir == 'Grab' || $kurir == 'Gojek'){
                    $hk = 35000;
                }

                if ($produk == 'tv'){
                    $hasil = $jb*3000000+$hk;
                }
                else if($produk == 'kulkas'){
                    $hasil = $jb*6000000+$hk;
                }
                else{
                    $hasil = $jb*4000000+$hk;
                }
            ?>

            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Nama Kustomer : <?php echo $customer ?></li>
                    <li class="list-group-item">Barang : <?php echo $produk ?></li>
                    <li class="list-group-item">Kurir : <?php echo $kurir ?></li>
                    <li class="list-group-item">Alamat Pengiriman : <?php echo $alamat ?></li>
                    <li class="list-group-item">Biaya Kurir :  <?php echo 'Rp.'.$hk ?></li>
                    <li class="list-group-item">Total Biaya :  <?php echo 'Rp.'.$hasil ?></li>
                   
                </ul>
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Daftar Harga
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">TV : Rp 3.000.000</li>
                    <li class="list-group-item">Kulkas : Rp 6.000.000</li>
                    <li class="list-group-item">Mesin Cuci : Rp 4.000.000</li>
                </ul>
                </div>
            </div>
            
        </div>
        
    </div>
</body>
</html>