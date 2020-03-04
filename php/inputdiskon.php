<?php
    include 'header.php';

?>

    <!-- content -->
    <div class='container'>
        <div class='col-5'>
            <form action="prosesdiskon.php" method="POST">
                <div class='form-group'>
                    <label for="nama_barang"> Nama Barang :</label>
                        <input type="text" name="nama_barang"
                        class='form-control' id="nama_barang">                  
                    <label for="harga_barang"> Harga Barang :</label>
                        <input type="text" name="harga_barang"
                        class='form-control' id="harga_barang">  
                    <label for="harga_barang"> Stok Barang :</label>
                        <input type="text" name="stok_barang"
                        class='form-control' id="stok_barang"> 
                    <label for="harga_barang"> Kategori :</label>
                        <input type="text" name="kategori"
                        class='form-control' id="kategori"> 
                </div>
                <input type="submit" name="bayar" class="btn
                btn-success" value="Input">
                <br>
                <br>
            </form>
        </div>
    </div>
    <div class="col-6">
    <?php
        include "../koneksi/koneksi.php";
        
            while ($tampil_data=mysqli_query($koneksi,"SELECT * FROM stok") or die($tampil_data)){
            if($tampil_data['harga_barang'] >= 1000000){
                    echo "
                        <div class='alert-primary'
                        role='alert'>
                        harga diskon yang diperoleh sebesar Rp", 
                        $tampil_data['harga_barang']*20/100;
                    echo " dan harga $nama_barang yang harus dibayar sebesar Rp", $tampil_data['harga_barang']-
                    ($tampil_data['harga_barang']*20/100);
                    echo" </div>";
            }
        }
    ?>
    </div>

<?php
    include 'footer.php';

?>