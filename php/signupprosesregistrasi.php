<?php
    include'../koneksi/koneksi.php';
    
    if(isset($_POST['regis'])){
        // $userurut=mysqli_num_rows(mysqli_query($koneksi,"select * from user"));
        $id_username=md5(uniqid());
        // $id_username=($userurut+1) 'dikiri dipakai bila ingin id_username keluar berurut didatabase pastikan id_username int() // diatas diaktifkan juga'
        $nama_lengkap=$_POST['nama_lengkap'];
        $username=$_POST['username'];
        $password=md5($_POST['password']);
        $email=$_POST['email'];
        $level=$_POST['level'];

        if(mysqli_query($koneksi,"INSERT into user VALUES
        ('$id_username','$nama_lengkap','$username','$password','$email','$level')")){
            echo "<script>alert('data berhasil di input silahkan anda login');
                window.location.href='signup.php';
                </script>";
        } else {
            echo 'anda salah input';
        }  
    }    

?>