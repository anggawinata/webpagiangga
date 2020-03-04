<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Bootstrap Nilai Rata PHP</title>
    <link rel="stylesheet" href="./asset/css/bootstrap.min.css">
</head>
<body>
<center>
    <div class="judul text-center">
        <h3>Penghitung Nilai Rata Mahasiswa</h3>
        <p>((nilai harian x 10%) + (nilai kuis x 15%) + (nilai UAS x 40%) + (nilai UTS x 35%)) / 100</p>
    </div>

    <div class="tab-form table border border-dark col-md-4 offset-md-4">
        <h4 class="text-center bg-secondary col-md-10 offset-md-1 text-light">Inputan Nilai</h4>
        <form method="post" action="">
            <div class="form-row">
                <div class="form-group col-md-10 offset-md-1">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                </div>
                <div class="form-group col-md-10 offset-md-1">
                    <label for="harian">Nilai Harian</label>
                    <input type="number" class="form-control" id="harian" placeholder="Nilai Harian" name="harian">
                </div>

                <div class="form-group col-md-10 offset-md-1">
                    <label for="kuis">Nilai Kuis</label>
                    <input type="number" class="form-control" id="kuis" placeholder="Nilai Kuis" name="kuis">
                </div>

                <div class="form-group col-md-10 offset-md-1">
                    <label for="uas">Nilai UAS</label>
                    <input type="number" class="form-control" id="uas" placeholder="Nilai UAS" name="uas">
                </div>

                <div class="form-group col-md-10 offset-md-1">
                    <label for="uts">Nilai UTS</label>
                    <input type="number" class="form-control" id="uts" placeholder="Nilai UTS" name="uts">
                </div>
                
                <button type="submit" name="submit" class="btn btn-primary col-md-10 offset-md-1" value="submit">Check Nilai</button>
            </div>
        </form>
    </div>
    
    <hr><br><br>
    <div class="hasil col-md-10 offset-md-1 text-center">
        <h3>
            <?php
                if (isset($_POST['submit']) == "submit"){
                    $nama = $_POST['nama'];
                    $harian = $_POST['harian'] * 10 / 100;
                    $kuis = $_POST['kuis'] * 15 / 100;
                    $uas = $_POST['uas'] * 40 / 100;
                    $uts = $_POST['uts'] * 35 / 100;

                    $nilai = $harian + $kuis + $uas + $uts;

                    if ($nilai <= 50){
                        echo $nama ." Nilai : " .$nilai . " Nilai Anda : E";
                    }elseif ($nilai <= 65){
                        echo $nama ." Nilai : " .$nilai . " Nilai Anda : D";
                    }elseif ($nilai <= 72){
                        echo $nama ." Nilai : " .$nilai . " Nilai Anda : C";
                    }elseif ($nilai <= 83){
                        echo $nama ." Nilai : " .$nilai . " Nilai Anda : B";
                    }elseif ($nilai >= 83){
                        echo $nama ." Nilai : " .$nilai . " Nilai Anda : A";
                    }else{
                        echo "Anda Tidak Memasukkan Nilai Yang Benar";
                    }

                }
            ?>
        </h3>
    </div>
    </center>
    <script src="./asset/js/bootstrap.min.js"></script>
</body>
</html>