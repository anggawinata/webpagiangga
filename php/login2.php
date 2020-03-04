<?php
    include"header.php";
?>
	
    <form action="" method="POST">		
		<table>
			<tr>
				<td>username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="login" value="Log in"></td>
			</tr>
		</table>
    </form>
    <?php 
        if(isset($_POST['login'])){
            $username=$_POST['username'];
            $password=$_POST['password'];
            
            if($username=='admin'&& $password=='admin123'){
                header('location: mahasiswa.php');
            }
            elseif($username=='siswa'&& $password=='siswa123'){
                echo"<script>
                alert(window.location.href='diskon.php');
                </script>";
            }
            else{
                echo"The username or password is incorrect";
            }   
        }
    ?>
<?php   
    include"footer.php";
?>