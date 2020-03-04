<?php
    include'../koneksi/koneksi.php';

        if(isset($_POST['login'])){
            $username=$_POST['username'];
            $password=md5($_POST['password']);
            
            // <!-- query -->
            $login=mysqli_query($koneksi,"SELECT * from user WHERE username='$username' 
            and password='$password'");
            // pengecekan
            $cek=mysqli_num_rows($login);
            // menampilkan defenisi data
            $data=mysqli_fetch_assoc($login);

            if($cek>0){
                if($data['level']=="Penjual"){
                    $_SESSION['username']=$data['username'];
                    $_SESSION['level']=$data['level'];
                    $_SESSION['status']='login';
                
                echo "<script>
                    alert(window.location.href='nilaimahasiswa.php');
                </script>";
                }

                elseif($data['level']=="Pembeli"){
                    $_SESSION['username']=$data['username'];
                    $_SESSION['level']=$data['level'];
                    $_SESSION['status']='login';

                echo "<script>
                    alert(window.location.href='nilaiarray.php');
                </script>";

                }
            }else{
                echo "<br><br> namun data anda tidak tersedia";
            }   
        }
        
        // if(isset($_POST['login'])){
        //     $username=$_POST['username'];
        //     $password=$_POST['password'];
            
        //     if($username=='admin'&& $password=='admin123'){
        //         header('location: mahasiswa.php');
        //     }
        //     elseif($username=='siswa'&& $password=='siswa123'){
        //         echo"<script>
        //         alert(window.location.href='diskon.php');
        //         </script>";
        //     }
        //     else{
        //         echo"The username or password is incorrect";
        //     }   
        // }
?>
