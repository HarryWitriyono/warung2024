<?php
if (isset($_POST['submit'])) {
    if ($_POST['submit']=='kunci') {
        include_once('koneksiwarung.php');
        $KodeBarang=mysqli_real_escape_string($kon,$_POST['KodeBarang']);
        $sql="SELECT * FROM `barang` WHERE `KodeBarang` = '".$KodeBarang."'";
        $q=mysqli_query($kon,$sql);
        $r=mysqli_fetch_assoc($q);
        $hasil=array();
        if (!empty($r)) {
           do {
               array_push($hasil,$r);
           } while($r=mysqli_fetch_assoc($q));
           echo json_encode($hasil);
        } else {
            echo 'Rekord tidak ditemukan !';
        }
    } else {
        echo 'Salah kunci proses !';
    }
} else {
    echo 'Salah penggunaan API !';
}
?>