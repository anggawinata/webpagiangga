<?php
    include'../koneksi/koneksi.php';
    
    if(isset($_POST['nilaim'])){
        $id_nilai=uniqid();
        $nim=$_POST['nim_mahasiswa'];
        $nama=$_POST['nama_mahasiswa'];
        $jurusan=$_POST['jurusan'];
        $mk=$_POST['mata_kuliah'];
        $nilai_h=$_POST['nilai_harian'];
        $nilai_k=$_POST['nilai_kuis'];
        $nilai_uts=$_POST['nilai_uts'];
        $nilai_uas=$_POST['nilai_uas'];
        $nilai_akhir=($nilai_h*0.1)+($nilai_k*0.2)+($nilai_uts*0.3)+($nilai_uas*0.4);

        if($nilai_akhir<=50){
            $grade='E';
        }elseif($nilai_akhir<=65){
            $grade='D';
        }elseif($nilai_akhir<=75){
            $grade='C';
        }elseif($nilai_akhir<=85){
            $grade='B';
        }elseif($nilai_akhir<=100){
            $grade='A';
        }

        $query_nilai=mysqli_query($koneksi,"INSERT into nilai VALUES('$id_nilai','$nim','$nama','$jurusan','$mk','$nilai_h',
        '$nilai_k','$nilai_uts','$nilai_uas','$nilai_akhir','$grade')")or die(mysqli_error($query_nilai));
        
        if($query_nilai){
            echo "<script>alert('data berhasil di input'); window.location.href='nilaimahasiswa.php';</script>";
        } 
        else{
            echo "<script>alert('data anda salah'); window.location.href='nilaimahasiswa.php';</script>";
        } 
    }    


?>