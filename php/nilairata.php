<?php
$harian=70*10/100;
$kuis=80*15/100;
$uas=90*40/100;
$uts=75*35/100;

$nilai=$harian+$kuis+$uas+$uts;

if ($nilai<=50){
    echo "Nilai yang anda dapatkan : E <br>";
}
elseif ($nilai<=65){
    echo "Nilai yang anda dapatkan : D <br>";
}
elseif ($nilai<=72){
    echo "Nilai yang anda dapatkan : C <br>";
}
elseif ($nilai<=83){
    echo "Nilai yang anda dapatkan : B <br>";
}
elseif ($nilai<=100){
    echo "Nilai yang anda dapatkan : A <br>";
}

?>
<br>-------------------------------------------</br>

<?php
$nim= "0500500500";
$nama= 'Mardi';
$jurusan=  'matematika';
$harian= 80;
$kuis= 90;
$uts= 70;
$uas= 87;
$nilai=($harian*10/100)+($kuis*15/100)+($uas*40/100)+($uts*35/100);

if ($nilai<=50){
    echo "Grade yang diperoleh oleh Nama : $nama dengan nim: $nim dan  Jurusan : $jurusan nilai diperoleh $nilai adalah : E <br>";
}
elseif ($nilai<=65){
    echo "Grade yang diperoleh oleh $nama dengan $nim dan $jurusan nilai diperoleh $nilai adalah : D <br>";
}
elseif ($nilai<=72){
    echo "Grade yang diperoleh oleh $nama dengan $nim dan $jurusan nilai diperoleh $nilai adalah : C <br>";
}
elseif ($nilai<=83){
    echo "Grade yang diperoleh oleh $nama dengan $nim dan $jurusan nilai diperoleh $nilai adalah : B <br>";
}
elseif ($nilai<=100){
    echo "Grade yang diperoleh oleh $nama dengan $nim dan $jurusan nilai diperoleh $nilai adalah : A <br>";
}

?>