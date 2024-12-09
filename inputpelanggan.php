<?php
if (isset($_POST['submit'])) {
    if ($_POST['submit']=='kunci') {
        include_once('koneksiwarung.php');
        $NoHPWA=mysqli_real_escape_string($kon,$_POST['NoHPWA']);
        $NamaPelanggan=mysqli_real_escape_string($kon,$_POST['NamaPelanggan']);
        $Alamat=mysqli_real_escape_string($kon,$_POST['Alamat']);
        $Password=mysqli_real_escape_string($kon,$_POST['Password']);
        $sql="INSERT INTO `pelanggan`(`NoHPWA`, `NamaPelanggan`, `Alamat`, `Password`) VALUES ('".$NoHPWA."','".$NamaPelanggan."','".$Alamat."','".$Password."')";
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