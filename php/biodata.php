<?php
    include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    
</head>
<body>
<div class="container">
    <form action="biodata_proses.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <div class="col-md-5">
                <label for=''> Nama :</label>
                <input id="" type="text" name="nama" class="form-control" placeholder="Masukan Nama">
            </div>
            <div class="col-md-5">
                <label for=''> Email :</label>
                <input id="" type="email" name="email" class="form-control" placeholder="Masukan email">
            </div>
            <div class="col-md-5">
                <label for=''> Jenis Kelamin :</label><br>
                <input type="radio" name="jenis_kelamin" value="Lk"> Laki
                <input type="radio" name="jenis_kelamin" value="Pr"> Perempuan
            </div>
            <div class="col-md-5">
                <label for=''>Alamat :</label>
                <textarea name="alamat" class="form-control" placeholder="Masukan alamat" ></textarea>
            </div>
            <div class="col-md-5">
                <label for=''>Tanggal Lahir:</label>
                <input type="date" name="tanggal_lahir" class="form-control" placeholder="Masukan tanggal lahir">
            </div>
            <div class="col-md-5">
                <label for=''>Tempat Lahir:</label>
                <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukan tempat lahir">
            </div>
            <div class="col-md-5">
                <label for=''>No Handphone :</label>
                <input type="number" name="nohp" class="form-control" placeholder="Masukan Nomor Handphone">
            </div>
            <div class="col-md-5">
                <label for=''>Hobby :</label><br>
                <input type="checkbox" name="hobby1" value="badminton"> Badminton <br>
                <input type="checkbox" name="hobby2" value="running"> Running <br>
                <input type="checkbox" name="hobby3" value="footbal"> Football <br>
            </div>
            <div class="col-md-5">
                <label for=''>Jurusan :</label>
                <input type="text" name="jurusan" class="form-control" placeholder="Masukan jurusan Pendidikan anda">
            </div>
            <div class="col-md-5">
                <label for=''>Upload Foto</label><br>
                <input class="file-path validate" name="foto" type="file">
                </div>
            </div>
            <div class="col-md-5">
            <input type="submit" class="btn btn-primary" name="tambah" value="Input">
            </div>

</div>
    </form>
</body>
</html>
<?php
    include 'footer.php';
?>