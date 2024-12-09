<?php
if (isset($_POST['submit'])) {
    if ($_POST['submit']=='kunci') {
        include_once('koneksiwarung.php');
        $KodeBarang=mysqli_real_escape_string($kon,$_POST['KodeBarang']);
        $sql="DELETE FROM `barang` WHERE `KodeBarang` = '".$KodeBarang."'";
        $q=mysqli_query($kon,$sql);
        if ($q) {
           echo 'Rekord sudah dihapus !';
        } else {
            echo 'Rekord gagal dihapus !';
        }
    } else {
        echo 'Salah kunci proses !';
    }
} else {
    echo 'Salah penggunaan API !';
}
?>