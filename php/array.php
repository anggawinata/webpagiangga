<?php
    include"header.php";
?>

    <form action="" method="POST">
        <input type="text" name="mangga">
        <input type="submit" name="tambah" value="tampil">
    
    </form>
<?php 
    if(isset($_POST['tambah'])){
        $buah=$_POST['mangga'];
        
        $arraybuah=[
            "mangga",
            "jambu",
            "pisang"
        ];

        if($buah=$arraybuah[0]){
            echo"$arraybuah[1]";
         


        }
    }
?>






<?php
        //buah
            $Buah = array ("Mangga", "Apel", "Pisang", "Jeruk"); 
            echo "<br> <br>$Buah[1]";
                
            
        //warna
            $Warna = array(); 
            $Warna[] = "Merah"; 
            $Warna[] = "Biru"; 
            $Warna[] = "Hijau"; 
            $Warna[] = "Putih"; 
            echo "<br>$Warna[1]"; 
          
?>

<?php
    include"footer.php";
?>