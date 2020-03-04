<?php
include'../koneksi/koneksi.php';

if(isset($_GET['id_nilai'])){
    $id_nilai=$_GET['id_nilai'];
    if(mysqli_query($koneksi,"DELETE FROM nilai WHERE id_nilai='$id_nilai'") or die (mysqli_error($delete))){
        echo "<script>window.location.href='nilaimahasiswa_hapus_j.php';</script>";
    }
    
    
} 
?>
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
            echo "<script>alert('data berhasil di input'); window.location.href='nilaimahasiswa_hapus_j.php';</script>";
        } 
        else{
            echo "<script>alert('data anda salah'); window.location.href='nilaimahasiswa_hapus_j.php';</script>";
        } 
    }    


?>
<?php
include'../koneksi/koneksi.php';

if(isset($_GET['update'])){
    $id_nilai=$_GET['id_nilai'];
    $nim=$_GET['nim'];
    $nama=$_GET['nama'];
    $jurusan=$_GET['jurusan'];
    $mk=$_GET['mata_kuliah'];
    $nilai_h=$_GET['nilai_h'];
    $nilai_k=$_GET['nilai_k'];
    $nilai_uts=$_GET['nilai_uts'];
    $nilai_uas=$_GET['nilai_uas'];
    $nilai_akhir=($nilai_h*0.1)+($nilai_k*0.2)+($nilai_uts*0.3)+($nilai_uas*0.4);

                if($nilai_akhir<=50){
                    $grade='E';
                }else if($nilai_akhir<=65){
                    $grade='D';
                }else if($nilai_akhir<=75){
                    $grade='C';
                }else if($nilai_akhir<=85){
                    $grade='B';
                }else if($nilai_akhir<=100 ||$hasil>100){
                    $grade='A';
                }

    $update =mysqli_query($koneksi,"UPDATE nilai SET nim='$nim',nama='$nama',jurusan='$jurusan',mata_kuliah='$mk',nilai_harian='$nilai_h',nilai_kuis='$nilai_k',nilai_uts='$nilai_uts',nilai_uas='$nilai_uas',nilai_akhir='$nilai_akhir', grade='$grade' WHERE id_nilai='$id_nilai'")or die(mysqli_error($update));
    
    if($update){
        echo'
            <script>alert("data berhasil diupdate");
            window.location.href="nilaimahasiswa_hapus_j.php"
            </script>
        ';
    }else{
        echo'
        <script>alert("data gagal diupdate");
        window.location.href="nilaimhs_edit.php"
        </script>
    ';
    }


}

?>