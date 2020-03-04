<!DOCTYPE html>
<html lang="en">
<?php
    include "header.php";
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Mahasiswa</title>
</head>
<body>
    <div class="container">
        <div class='col-6'>
        <form action="nilaimhsproses_hapus.php" method="post">
            <div class='form-group'>
                <label for="nama"> NIM Mahasiswa :</label>
                    <input type="number" name="nim" class='form-control'>
                </div>   
            <div class='form-group'>
                <label for="nama"> Nama Mahasiswa :</label>
                    <input type="text" name="nama" class='form-control'>
                </div>
            <div class='form-group'>
                <label for="nama"> Jurusan :</label>
                    <input type="text" name="jurusan" class='form-control'>
                </div>
            <div class='form-group'>
                <label for="nama"> Mata Kuliah :</label>
                    <input type="text" name="mata_kuliah" class='form-control'>
                </div> 
            <div class='form-group'>
                <label for="harian"> Nilai Harian :</label>
                    <input type="number" name="nilai_h" class='form-control'>
                    </div>
            <div class='form-group'>
                <label for="kuis"> Nilai Kuis :</label>
                    <input type="number" name="nilai_k" class='form-control'>
                    </div>
            <div class='form-group'>
                <label for="uts"> Nilai UTS :</label>
                    <input type="number" name="nilai_uts" class='form-control'>
                    </div>
            <div class='form-group'>
                <label for="uas"> Nilai UAS :</label>
                    <input type="number" name="nilai_uas" class='form-control'>
                    </div>
            <button type="submit" class="btn btn-success" name="nilaim">Submit Nilai</button>
        </form>
        </div>
    </div>
</body>
</html>

<div class="container">
    <div class='col-5'>
    <br>
<?php

include'../koneksi/koneksi.php';

$query_nilai=mysqli_query($koneksi,"SELECT * FROM nilai")or die(mysqli_error($query_nilai));

        

while($data=mysqli_fetch_array($query_nilai)){
    if($data['nilai_akhir']<=50){
        echo"
            <div class='alert alert-danger' role='alert'>
            Nim :".$data['nim']." Nama : ".$data['nama']."  Jurusan :".$data['jurusan']." Mata Kuliah :".$data['mata_kuliah']." Nilai Angka ".$data['nilai_akhir']."  Nilai Huruf E 
            <a href='nilaimhs_edit.php?id_nilai=".$data['id_nilai']."' type='submit' class='btn btn-info'>Edit</a> 
            <a href='nilaimhsproses_hapus.php?id_nilai=".$data['id_nilai']."' type='submit' class='btn btn-danger' onClick='delete();'>delete</a>  
            </div>
        ";
    }elseif($data['nilai_akhir']<=65){
        echo"
            <div class='alert alert-warning' role='alert'>
            Nim :".$data['nim']." Nama : ".$data['nama']."  Jurusan :".$data['jurusan']." Mata Kuliah :".$data['mata_kuliah']." Nilai Angka ".$data['nilai_akhir']."  Nilai Huruf D
            <a href='nilaimhs_edit.php?id_nilai=".$data['id_nilai']."' type='submit' class='btn btn-info'>Edit</a>
            <a href='nilaimhsproses_hapus.php?id_nilai=".$data['id_nilai']."' type='submit' class='btn btn-danger' onClick='delete();'>delete</a>  
            </div>
        ";
    }elseif($data['nilai_akhir']<=75){
        echo"
            <div class='alert alert-info' role='alert'>
            Nim :".$data['nim']." Nama : ".$data['nama']."  Jurusan :".$data['jurusan']." Mata Kuliah :".$data['mata_kuliah']." Nilai Angka ".$data['nilai_akhir']."  Nilai Huruf C
            <a href='nilaimhs_edit.php?id_nilai=".$data['id_nilai']."' type='submit' class='btn btn-info'>Edit</a>
            <a href='nilaimhsproses_hapus.php?id_nilai=".$data['id_nilai']."' type='submit' class='btn btn-danger' onClick='delete();'>delete</a>  
            </div>
        ";
    }elseif($data['nilai_akhir']<=85){
        echo"
            <div class='alert alert-primary' role='alert'>
            Nim :".$data['nim']." Nama : ".$data['nama']."  Jurusan :".$data['jurusan']." Mata Kuliah :".$data['mata_kuliah']." Nilai Angka ".$data['nilai_akhir']."  Nilai Huruf B
            <a href='nilaimhs_edit.php?id_nilai=".$data['id_nilai']."' type='submit' class='btn btn-info'>Edit</a>    
            <a href='nilaimhsproses_hapus.php?id_nilai=".$data['id_nilai']."' type='submit' class='btn btn-danger' onClick='delete();'>delete</a>
            </div>
        ";
    }elseif($data['nilai_akhir']<=100 || $data['nilai_akhir']>100){
        echo"
            <div class='alert alert-success' role='alert'>
            Nim :".$data['nim']." Nama : ".$data['nama']."  Jurusan :".$data['jurusan']." Mata Kuliah :".$data['mata_kuliah']." Nilai Angka ".$data['nilai_akhir']."  Nilai Huruf A
            <br>
            <a href='nilaimhs_edit.php?id_nilai=".$data['id_nilai']."' type='submit' class='btn btn-info'>Edit</a>  
            <a href='nilaimhsproses_hapus.php?id_nilai=".$data['id_nilai']."' type='submit' class='btn btn-danger' onClick='delete();'>delete</a>  
            </div>
        ";
    }
}

?>
</div>

<?php
include'footer.php';
?>
