
<?php
    include 'header.php';

?>



    <form action="" method="post">
        <label for="hbrg">Masukkan Harga Barang : </label>
        <input type="number" name="hbrg" id="hbrg"><br>
        <label for="diskon">Masukkan Persentase Diskon : </label>
        <input type="number" name="diskon" id="diskon"><br>
        <label for="diskon">Harga Minimal Diskon : </label>
        <input type="number" name="h_min_diskon" id="h_min_diskon">
        <button type="submit" name="submit" value="cek">Check</button>
    </form>

    <?php
        if (isset($_POST["submit"]) == "cek"){
            $harga = $_POST['hbrg'];
            $diskon = $_POST['diskon'];
            $min_diskon = $_POST['h_min_diskon'];
            if (!empty($min_diskon)){
                if ($min_diskon <= $harga ){
                    echo "harga barang setelah diskon : Rp. ", $harga - ($harga * $diskon / 100);
                }else {
                    echo "Total Pembelian anda belum mencapai batas minimum diskon.<br>";
                    echo "harga barang adalah : Rp. $harga";
                } 
            }else{
                echo "harga barang setelah diskon : Rp. ", $harga - ($harga * $diskon / 100);
            }
        }
    ?>


<?php
    include "footer.php";

?>