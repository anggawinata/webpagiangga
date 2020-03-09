<?php

include'../koneksi/koneksi.php';

            if(isset($_GET['id_biodata'])){
                $id=$_GET['id_biodata'];

                $hapus=mysqli_query($koneksi,"DELETE FROM biodata WHERE id_biodata='$id'")or die(mysqli_error($hapus));

                if($hapus){
                    echo"<script>alert('data berhasil di hapus');
                window.location.href='../admin/table-biodata.php';
                </script>";
                }else{
                    echo"<script>alert('data gagal di hapus');
                window.location.href='../admin/table-biodata.php';
                </script>";
                }
            
            }
?>