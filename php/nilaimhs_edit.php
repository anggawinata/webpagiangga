<!DOCTYPE html>
<html lang="en">
<?php
    include"header.php";
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Mahasiswa</title>
</head>

<?php
include'../koneksi/koneksi.php';


$id_nilai= $_GET['id_nilai'];

$show=mysqli_query($koneksi, "SELECT * FROM nilai WHERE id_nilai='$id_nilai'") or die (mysqli_error($show));

if(mysqli_num_rows($show)==0){

    echo'
        <script>window.history.back()</script>
    ';
}else{
    $data=mysqli_fetch_array($show);



?>


<body>
    <div class="container">
        <div class='col-5'>
        <form action="nilaimhsproses_edit.php" method="GET">
        <input type="hidden" name="id_nilai" value="<?php echo $id_nilai;?>">
            <div class='form-group'>
                <label for="nama"> NIM Mahasiswa :</label>
                    <input type="number" name="nim" class='form-control' id="nim" 
                    value="<?php echo $data['nim']?>">
                </div>        
            <div class='form-group'>
                <label for="nama"> Nama Mahasiswa :</label>
                    <input type="text" name="nama" class='form-control' id="nama" 
                    value="<?php echo $data['nama']?>">
                </div>
            <div class='form-group'>
                <label for="nama"> Jurusan :</label>
                    <input type="text" name="jurusan" class='form-control' id="jurusan" 
                    value="<?php echo $data['jurusan']?>">
                </div>
            <div class='form-group'>
                <label for="nama"> Mata Kuliah :</label>
                    <input type="text" name="mata_kuliah" class='form-control' id="mata_kuliah" 
                    value="<?php echo $data['mata_kuliah']?>">
                </div>        
            <div class='form-group'>
                <label for="harian"> Nilai Harian :</label>
                    <input type="number" name="nilai_h" class='form-control' id="nilai_h" 
                    value="<?php echo $data['nilai_harian']?>">
                    </div>
            <div class='form-group'>
                <label for="kuis"> Nilai Kuis :</label>
                    <input type="number" name="nilai_k" class='form-control' id="nilai_k" 
                    value="<?php echo $data['nilai_kuis']?>"> 
                    </div>
            <div class='form-group'>
                <label for="uts"> Nilai UTS :</label>
                    <input type="number" name="nilai_uts" class='form-control' id="nilai_uts" 
                    value="<?php echo $data['nilai_uts']?>">
                    </div>
            <div class='form-group'>
                <label for="uas"> Nilai UAS :</label>
                    <input type="number" name="nilai_uas" class='form-control' id="nilai_uas" 
                    value="<?php echo $data['nilai_uas']?>">
                    </div>
            <button type="submit" class="btn btn-success" value="update" name="update">Update</button>
        </form>
        </div>
    </div>
</body>
</html>

<div class="container">
    <div class='col-6'>
    <br>

</div>
<?php
}
    include'footer.php';
?>