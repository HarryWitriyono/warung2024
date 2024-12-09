<?php
if (isset($_POST['submit'])) {
    if ($_POST['submit']=='kunci') {
        include_once('koneksiwarung.php');
        $KodeBarang=mysqli_real_escape_string($kon,$_POST['KodeBarang']);
        $NamaBarang=mysqli_real_escape_string($kon,$_POST['NamaBarang']);
        $JumlahStok=mysqli_real_escape_string($kon,$_POST['JumlahStok']);
        $HargaJual=mysqli_real_escape_string($kon,$_POST['HargaJual']);
        $HargaBeli=mysqli_real_escape_string($kon,$_POST['HargaBeli']);
        $sql="UPDATE `barang` SET `NamaBarang`='".$NamaBarang."',`JumlahStok`='".$JumlahStok."',`HargaJual`='".$HargaJual."',`HargaBeli`='".$HargaBeli."' WHERE `KodeBarang`='".$KodeBarang."'";
        $q=mysqli_query($kon,$sql);
        if ($q) {
            echo 'Rekord sudah disimpan !';
        } else {
            echo 'Rekord gagal disimpan !';
        }
    } else {
        echo 'Salah kunci proses !';
    }
} else {
    echo 'Salah penggunaan API !';
}
?>