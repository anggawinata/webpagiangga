<?php
    include "header.php"

?>
    <form action="signupproses.php" method="POST">		
        <div class="container">
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="username" 
                placeholder="masukkan username">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" 
                placeholder="masukkan password">
            </div>
            <button type="submit" class="btn btn-primary" name="login">Login</button>
        </div>
    </form>
    
    <?php 
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

<?php
    include "footer.php"

?>