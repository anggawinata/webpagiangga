<?php
// variasi perulangan for
// contoh 1
    for($i=0; $i<=10;$i++){
        echo "$i";

    }
    echo "<br><br>";

?>
<!-- contoh 2 -->
<?php
    for ($i = 1; ; $i++) {    
        if ($i > 10) {        break;    }   
        echo "$i "; } 
        echo "<br><br>"; 
?>
<!-- contoh 3 -->
<?php   
    $i = 1; for (; ; ) {
        if ($i > 10) {        break;    }
        echo "$i ";    $i++; } 
        echo "<br><br>"; 
?>
<!-- contoh 4 -->
<?php   
for ($i = 1; $i <= 10; print "$i ", $i++); 

?>


<br>-------------------------------------------</br>
<?php 
/* contoh 3  penggunaan perulangan untuk menampilkan tulisan dengan format <H1> sampai <H6>  */ 
// $i = 1; while ($i <= 6) {    
//     echo "<h$i>Heading $i</h$i>";    $i++; } 
    
// ?> 
<br>-------------------------------------------</br>

<?php 
//   Struktur Perulangan For dan beberapa variasinya. 
 
/* contoh 1 */ 
    for ($i = 1; $i <= 10; $i++) {
        echo "$i "; } 
        echo "<br><br>"; 

 
/* contoh 2 */ 
    for ($i = 1; ; $i++) {
        if ($i > 10) {        break;    }    
        echo "$i "; } 
        echo "<br><br>"; 
 
/* contoh 3 */ 
    $i = 1; 
    for (; ; ) {
        if ($i > 10) {        break;    }    
        echo "$i ";    $i++; } 
        echo "<br><br>"; 
 
/* contoh 4 */ 
        for ($i = 1; $i <= 10; print "$i ", $i++); 
 
?> 

<br>-------------------------------------------------------</br>

<?php
$nilai=1;
    for ($nilai; $nilai <=10; $nilai+=2) {
    if($nilai%2==0) {
        echo "$nilai adalah genap <br>";
    }
    else {
        echo "$nilai adalah ganjil <br>";
    }
}

?>

<br>-------------------------------------------------------</br>

<?php
$nilai=2;
    for ($nilai; $nilai <=10; $nilai+=2) {
    if($nilai%2==0) {
        echo "$nilai adalah genap <br>";
    }
    else {
        echo "$nilai adalah ganjil <br>";
    }
}

?>
<br>-------------------------------------------------------</br>

<?php 
/* contoh 1 s.d 3 Struktur Perulangan While dan beberapa variasinya 
 Struktur Perulangan While dan beberapa variasinya*/ 
    $nilai = 1; while ($nilai <= 10) {    
        echo $nilai++;  } 
        echo "<br><br>"; 
 
/* contoh 2 
*/ 

$nilai = 1; while ($nilai <= 10):    
    echo "$nilai";    $nilai++; endwhile; 
    echo "<br><br>"; 

?> 
<br>-------------------------------------------------------</br>

<!-- struktur perulangan do..while. -->
<?php
    $gambar=1;
    do{
//statement
        echo"<img src=../html/css/FB.png>";
        $gambar++;
        }
        while ($gambar <=5);
    
?>


<br>-------------------------------------------------------</br>



<?php 
 
$nilai = 1; do {  
    echo "$nilai adalah ganjil <br>";  $nilai+=2; } while ($nilai <= 30); 
 
?>
<br>-------------------------------------------------------</br>
<?php 
 
$nilai = 2; do {  
    echo "$nilai adalah genap <br>"; ;  $nilai+=2; } 
    while ($nilai <= 30) ; 
 
?>