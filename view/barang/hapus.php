<?php 

$id=$_GET['id'];

include '../../config/koneksi.php';

$query = mysqli_query($conn, "DELETE FROM barang WHERE  id_barang = '$id' ");

if($query){
    echo "<script>alret('Data berhasil dihapus')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
    echo "<script>alret('Data gagal dihapus')</script>";
    echo "<script>window.location.href='view_tambah.php'</script>";
}
?>