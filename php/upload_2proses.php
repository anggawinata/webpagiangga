<?php

    // ambil data file
    $nama_file = $_FILES['foto']['name'];
    
    $format= explode(".",$nama_file);
    $fileExtension= end($format);
    $nama_sementara = $_FILES['foto']['tmp_name'];
    $md5file= md5($nama_file) . "." . $fileExtension;
    // tentukan lokasi file akan dipindahkan
    $lokasi_upload = "../terupload/";

    // pindahkan file
    $fungsi_upload = move_uploaded_file($nama_sementara, $lokasi_upload.$md5file);

    if ($fungsi_upload) {
        echo "<script>alert('Upload berhasil!', window.location.href='upload_2.php');</script>";
    } else {
        echo "<script>alert('Upload Gagal!', window.location.href='upload_2.php');</script>";
    }

?>
