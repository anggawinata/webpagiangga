




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
        <form action="nilaimhsproses_hapus_j.php" method="post">
            <div class='form-group'>
                <label for="nama"> NIM Mahasiswa :</label>
                    <input type="number" name="nim_mahasiswa" class='form-control'>
                </div>   
            <div class='form-group'>
                <label for="nama"> Nama Mahasiswa :</label>
                    <input type="text" name="nama_mahasiswa" class='form-control'>
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
                    <input type="number" name="nilai_harian" class='form-control'>
                    </div>
            <div class='form-group'>
                <label for="kuis"> Nilai Kuis :</label>
                    <input type="number" name="nilai_kuis" class='form-control'>
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

    // ada tambahan button hapus kalo nilaimahasiswa.php tidak ada.
    while($data=mysqli_fetch_assoc($query_nilai)){
        $id = $data['id_nilai'];

        if($data['nilai_akhir']<=50){
            $gr = "grade E";
        }elseif($data['nilai_akhir']<=65){
            $gr = "grade E";
        }elseif($data['nilai_akhir']<=75){
            $gr = "grade E";
        }elseif($data['nilai_akhir']<=85){
            $gr = "grade E";
        }elseif($data['nilai_akhir']<=100 || $data['nilai_akhir']>100){
            $gr = "grade E";
        }

?>

<div class='alert alert-success' role='alert'>
                NIM : <?= $data['nim']; ?> Nama : <?=$data['nama']; ?>  Jurusan : <?=$data['jurusan']; ?> Mata Kuliah : <?=$data['mata_kuliah']; ?>
                nilai angka  <?=$data['nilai_akhir']; ?>  nilai <?= $gr; ?>  
                <br>
                <a class='btn btn-info' href='nilaimhs_edit.php?id_nilai=<?= $data['id_nilai']; ?>'>Edit</a>
                <a class='btn btn-danger' onClick="return confirm('Are sure to deleted?')" href='nilaimhsproses_hapus_j.php?id_nilai=<?= $id; ?>''>Delete</a>
</div>

<?php
    }
?>

    </div>
</div>
<script>
function delete(id){
     if(confirm('are you sure.?')){
         location='nilaimhsproses_hapus_j.php?id_nilai='+id;
         return true;
     }
 }
</script>

<?php
    include'footer.php';

?>
