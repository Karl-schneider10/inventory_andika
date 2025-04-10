<?php 

$id=$_GET['id'];
$nama_barang=$_POST['nama_barang'];
$id_jenis=$_POST['id_jenis'];
$harga=$_POST['harga'];
$stok=$_POST['stok'];
include '../../config/koneksi.php';

$query = mysqli_query($conn,"UPDATE barang SET
nama_barang='$nama_barang',
id_jenis='$id_jenis',
harga='$harga',
stok='$stok'
WHERE id_barang='$id'");

if($query){
    echo "<script>alret('Data berhasil diedit')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
    echo "<script>alret('Data gagal diedit')</script>";
    echo "<script>window.location.href='view_tambah.php'</script>";
} 
?>