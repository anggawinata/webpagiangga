<?php
include'../koneksi/koneksi.php';

if(isset($_GET['id_nilai'])){

    $id=$_GET['id_nilai'];
    $delete=mysqli_query($koneksi, "DELETE FROM nilai WHERE id_nilai='$id'")or die (mysqli_error($delete));

    if($delete){ ?>
    
    <script>
    alert('you data deleted')</script>
<?php }else{?>
    <script>alert('failed to deleted')</script>

<?php   }
} ?>
