<?php
    include'../koneksi/koneksi.php';
    
    if(isset($_POST['bayar'])){
        $id_user=uniqid();
        $nama_barang=$_POST['nama_barang'];
        $harga_barang=$_POST['harga_barang'];
        $stok_barang=$_POST['stok_barang'];
        $total=$harga_barang*$stok_barang;
        $kategori=$_POST['kategori'];

        $query_input=mysqli_query($koneksi,"INSERT into stok VALUES
        ('','$id_user','$nama_barang','$harga_barang','$stok_barang','$total','$kategori')") or die(mysqli_error($query_input));
        
        if($query_input){
            echo "<script>alert('data berhasil di input'); window.location.href='inputdiskon.php';</script>";
        } 
        else{
            echo 'data anda salah';
        } 
    }    


?>

