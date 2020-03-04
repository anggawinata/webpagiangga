<?php
    include"header.php";
?>

    <form action="" method="POST">
        <input type="text" name="color">
        <input type="submit" name="tambah" value="tampil">
    
    </form>
<?php 
    if(isset($_POST['tambah'])){
        $color=$_POST['color'];
    
        $arraycolor=[
            "mangga",
            "jambu",
            "jeruk",
            "durian",
        ];

        if($color==$arraycolor[0]){
            echo"<p style='color: black;'> $arraycolor[0] </p>";
        }
        elseif ($color==$arraycolor[1]){
            echo"<p style='color: red;'> $arraycolor[1]</p>";
        }
        elseif ($color==$arraycolor[2]){
            echo"<p style='color: orange;'> $arraycolor[2]</p>";
        }
        elseif ($color==$arraycolor[3]){
            echo"<p style='color: green;'> $arraycolor[3]</p>";
        }
        else{
            echo"warna tidak terdeteksi";
        }
    }

?>
<?php
    // include"footer.php";
?>