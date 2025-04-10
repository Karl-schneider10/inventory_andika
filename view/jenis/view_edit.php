<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Tambah Jenis Baru</title>
</head>
<body>
    <div class="container">
        <h1>Tambah Jenis Baru</h1>
        <?php 
        include '../../config/koneksi.php';
        $id=$_GET['id'];
        $query=mysqli_query($conn, "SELECT * FROM jenis WHERE id_jenis='$id'");
        $result=mysqli_fetch_array($query);
?>
    <form action="proses_edit.php?id=<?php echo $result['id_jenis']?>" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Id Jenis</label>
    <input type="text" class="form-control" name="id_jenis" value="<?php echo $result['id_jenis'] ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama Jenis</label>
    <input type="text" class="form-control" name="nama_jenis" value="<?php echo $result['nama_jenis'] ?>" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</body>
</html>