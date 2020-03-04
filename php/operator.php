<?php
echo"Haloo Dunia!!!! <br><br>";
print" Saat ini sedang belajar Bahasa Pemrograman PHP<br><br>";
print" Hari ini di Gedung BLK Banda Aceh Senin, 10 Februari 2020<br><br>";
print" Berikut Peserta Pembelajaran Bahasa Pemrograman PHP";

for ($i=1;$i <=16; $i++)
    {
    echo "<ol><li>$i Nama Siswa ke-$i</li></ol><br>";
    }
// --------------------------------------------------------------------------------------------------------
    $nama= "Spiderman";
    $alamat= "New York";
    $nohp= "+123456789";
    // echo($nama.$alamat);
    // echo($nama);
    $hasil="";
        if($hasil="Spiderman"){
            echo($nama);
        }elseif ($hasil="New York"){
            echo($alamat);
        }else{
            echo($nohp);
        }
?>
<!-- --------------------------------------------------------------------------------------------- -->
<?php 
    $a=10;
    $b=10;
    $c=20;
    function myTest(){
        global $a, $b, $c;
        echo "<br>";
        echo "<br>";
        echo ($a*$b+$c)/$b;
    }
    myTest();
?>

<?php
    
    $a=1;
    $b=2;
    function fungsi_saya(){
        $GLOBALS ["c"]=$GLOBALS["a"]+$GLOBALS["b"];
        echo "<br>";
        echo "<br>";
    }
    fungsi_saya();
    echo $c;

?>


<!-- persentase diskon -->
<?php
    $sepatu=200000;
    $diskon=0.1;

    $harga_net=$sepatu-($sepatu*$diskon);
    echo"harga yang harus dibayar = Rp $harga_net";
?>

<br>-------------------------------------------</br>
<!-- penggunaan operator modulus/sisa hasil bagi -->
<?php
    $hal=3;
    if($hal%2==0) {
    echo'Halaman anda adalah Halaman Genap';
}
    elseif ($hal%3==1) {
    echo'Halaman anda adalah Halaman Ganjil';
}
    else {
    echo'Halaman anda adalah Halaman Utama';
    }
?>
<br>-------------------------------------------</br>
<!-- operator -->
<?php
    $a=10;
    $b=5;
    $c=7;
    $d=8;

    $kali=($a*$d);
    $tambah=($a+$c);
    $kurang=($b-$d);
    $bagi=($a/$b);
    $hasil=$kurang;

    if ($hasil==80){
        echo"Nilai anda adalah $kali";
    }
    elseif ($hasil==17){
        echo"nilai anda adalah $tambah";
    }
    elseif ($hasil==-3){
        echo"nilai anda adalah $kurang";
    }
    elseif ($hasil==2){
        echo"nilai anda adalah $bagi";
    }
?>

<br>-------------------------------------------</br>

<!-- tipe data dasar dalam PHP -->
<?php
    $nim= "0500500500";
    $nama= 'Mardi';
    $umur=  23;
    $nilai= 82.25;
    $status= true;

    echo "Nim : ".$nim."<br>";
    echo "Nama : $nama <br>";
    print "Umur : ".$umur; print "<br>";
    printf ("Nilai : %.3f <br>", $nilai);
    if ($status){
        echo "Status: Aktif";
    }
    else {
        echo "Status : Tidak Aktif";
    }
?>

<br>-------------------------------------------</br>
<!-- membuat define variabel dan nilai -->
<?php
    define ("Nama","Sudiro <br>"); 
    define ("Alamat","Punge Jurong <br>");
    define ("Umur","24 Tahun <br>");
    define ("HP","0888888888 <br>");
  
// output
    echo "Nama : ", Nama;
    echo "Alamat : ", Alamat;
    echo "Umur : ", Umur;
    echo "No.HP : ", HP;

?>
<br>-------------------------------------------</br>

<!-- operator aritmatika dalam PHP -->
<?php
    $gaji=4000000;
    $pajak=0.025;
    $thp=$gaji-($gaji*$pajak);
    echo "Gaji Sebelum Pajak = Rp $gaji <br>";
    echo "Gaji Bersih = Rp $thp";

?>
<br>-------------------------------------------</br>
<!-- Operator logika dan perbandingan dalam PHP -->
<?php
    $a=5;
    $b=4;

    echo"$a==$b : ". ($a==$b); 
    echo"<br>$a !== $b : ". ($a != $b); 
    echo"<br>$a > $b : ". ($a > $b); 
    echo"<br>$a < $b : ". ($a < $b); 
    echo"<br>$a != $b && ($a > $b) : ".(($a != $b) && ($a > $b));
    echo"<br>$a != $b || ($a > $b) : ".(($a != $b) || ($a > $b));

?>
<br>-------------------------------------------</br>
<!-- PR tambahkan echo
Operator logika dan perbandingan dalam PHP -->
<?php
    $a=5;
    $b=4;

    echo"$a==$b : ". ($a==$b); 
    echo"<br>$a !== $b : ". ($a != $b); 
    echo"<br>$a > $b : ". ($a > $b); 
    echo"<br>$a < $b : ". ($a < $b); 
    echo"<br>$a != $b && ($a > $b) : ".(($a != $b) && ($a > $b));
    echo"<br>$a != $b || ($a > $b) : ".(($a != $b) || ($a > $b));

   
?>  

<br>-------------------------------------------</br>
<!-- logika hari -->
<?php
    $mon="Monday";
    $tue="Tuesday";
    $wed="Wednesday";
    $thu="Thursday";
    $fri="Friday";
    $hari="$wed";
    if ($hari=="Monday")
        echo "Hari ini adalah Upacara <br>";
    elseif ($hari=="Friday")
        echo "Hari ini Shalat Jumat";
    elseif ($hari=="Wednesday")
        echo "Hari ini Olahraga";

?>  
<br>-------------------------------------------</br>
<!-- Latihan  -->
<?php
    define ("Nim","012345678 <br>"); 
    define ("Name","Tommy Suharto <br>");
    define ("Jurusan","Biologi <br>");
    define ("Nilai","60 <br>");

    echo "Nim : ", Nim;
    echo "Name : ", Name;
    echo "Jurusan : ", Jurusan;
    echo "Nilai : ", Nilai;
    
    $nilai=60;
    if ($nilai<=50){
        echo "Nilai Huruf : E <br>";
    }
    elseif ($nilai<=65){
        echo "Nilai Huruf : D <br>";
    }
    elseif ($nilai<=72){
        echo "Nilai Huruf : C <br>";
    }
    elseif ($nilai<=83){
        echo "Nilai Huruf : B <br>";
    }
    elseif ($nilai<=100){
        echo "Nilai Huruf : A <br>";
    }
?>  
<br>-------------------------------------------</br>
<!-- Latihan  -->
<?php

    $tahun = date ("Y"); 
    $kabisat = ($tahun%4 == 0) ? "KABISAT" : "BUKAN KABISAT"; 
    echo "Tahun <b>
    $tahun</b> $kabisat"; 

?> 

<br>-------------------------------------------</br>

<!-- Struktur Kondisi If.  -->
<?php 
$nilai = 80; if ($nilai >= 60) {  
    echo "Nilai Anda $nilai, Anda LULUS"; } 
?>


<br>-------------------------------------------</br>
<!-- Struktur Kondisi If..Else -->

<?php 

$nilai = 50; if ($nilai >= 60) {  
        echo "Nilai Anda $nilai, Anda LULUS"; 
    } 
    else {  
        echo "Nilai Anda $nilai, Anda GAGAL"; } ?> 

<br>-------------------------------------------</br>
<!-- Memeriksa suatu variabel ada atau tidak.  -->

<?php 

$user=""; if (!isset($user)) {  
    echo "Variabel tidak ada/belum terbentuk"; } 
    else {  
        echo "Variabel ada"; 
 } ?>
<br>-------------------------------------------</br>

<!-- Memeriksa username dan password dengan If..Else -->

 <?php 
 $user = "achmatim"; $pass = "123"; 
    if ($user == "achmatim" && $pass == "123") {  echo "Login Berhasil"; } 
    else {  echo "Login Gagal"; } 
 
 ?> 

<br>-------------------------------------------</br>

<!-- Struktur Switch..Case untuk menampilkan nama hari dalam bahasa Indonesia.  -->
<?php 
$day = date ("D"); 
switch ($day) {  
    case 'Sun' : $hari = "Minggu"; break;  
    case 'Mon' : $hari = "Senin"; break;  
    case 'Tue' : $hari = "Selasa"; break;  
    case 'Wed' : $hari = "Rabu"; break;  
    case 'Thu' : $hari = "Kamis"; break;  
    case 'Fri' : $hari = "Jum'at"; break;  
    case 'Sat' : $hari = "Sabtu"; break;  
    default    : $hari = "Kiamat"; } 
    echo "Hari ini hari <b>$hari</b>"; 

?>