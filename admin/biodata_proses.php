<?php

    include'../koneksi/koneksi.php';

        if(isset($_POST['tambah'])){
            $userurut=mysqli_num_rows(mysqli_query($koneksi,"select * from biodata"));
            $id_username=($userurut+1);
            $id_user=uniqid('');
            $nama_saya=$_POST['nama'];
            $email_saya=$_POST['email'];
            $jenis_kelamin=$_POST['jenis_kelamin'];
            $alamat=$_POST['alamat'];
            $tempat_lahir=$_POST['tempat_lahir'];
            $tanggal=$_POST['tanggal_lahir'];
            $no_hp=$_POST['nohp'];
            $hobby1=(!empty($_POST['hobby1']))?$_POST['hobby1']:'';
            $hobby2=(!empty($_POST['hobby2']))?$_POST['hobby2']:'';
            $hobby3=(!empty($_POST['hobby3']))?$_POST['hobby3']:'';
            $hobby=($hobby1.', '.$hobby2.', '.$hobby3);
            $jur=$_POST['jurusan'];

            $foto= $_FILES['foto']['name'];
            
            $format= explode(".",$foto);
            $fileExtension= end($format);
            $nama_sementara= $_FILES['foto']['tmp_name'];
            $md5file= md5($foto) . "." . $fileExtension;
            // tentukan lokasi file akan dipindahkan
            $lokasi_upload = "../terupload/";

            // pindahkan file
            $fungsi_upload = move_uploaded_file($nama_sementara, $lokasi_upload.$md5file);    
            
            $query=mysqli_query($koneksi,"INSERT INTO biodata VALUES('$id_username','$id_user','$nama_saya','$email_saya','$jenis_kelamin','$alamat','$tempat_lahir', '$tanggal','$no_hp','$hobby','$jur','$md5file')")or die(mysqli_error($query));
            
            if ($query){

                echo "<script>alert('data anda berhasil di masukkan');
                window.location.href='biodata_admin.php';
                </script>";

            }else{
                echo "<script>alert('data anda gagal di masukkan');
                window.location.href='biodata_admin.php';
                </script>";
            }

            
        }
    ?>
                