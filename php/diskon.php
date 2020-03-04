<?php
    include 'header.php';

?>

    <!-- content -->
    <div class='container'>
        <div class='col-6'>
            <form action="" method="POST">
                <div class='form-group'>
                    <label for="nama_barang"> Nama Barang :</label>
                        <input type="text" name="nama_barang"
                        class='form-control' id="nama_barang">                  
                    <label for="harga_barang"> Harga Barang :</label>
                        <input type="text" name="harga_barang"
                        class='form-control' id="harga_barang">  
                </div>
                <input type="submit" name="bayar" class="btn
                btn-success" value="bayar">
                <br>
                <br>
            </form>
        </div>
    </div>
    <div class="col-6">
    <?php
        if (isset($_POST["bayar"])){
            $nama_barang = $_POST["nama_barang"];
            $harga_barang = $_POST["harga_barang"];
            $diskon= 20/100;
            if ($harga_barang >= 400000){
                    echo "
                        <div class='alert-primary'
                        role='alert'>
                        harga diskon yang diperoleh sebesar Rp", 
                        $harga_barang*$diskon;
                    echo " dan harga $nama_barang yang harus dibayar sebesar Rp", $harga_barang-
                    ($harga_barang*$diskon);
                    echo" </div>";
            }
        }
    ?>
    </div>

<?php
    include 'footer.php';

?>