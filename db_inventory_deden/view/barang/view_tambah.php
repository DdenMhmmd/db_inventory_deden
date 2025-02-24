<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <h1>Halaman Tambah Barang Baru</h1>
    <form action="proses_tambah.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Id_barang</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_barang">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama_barang</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_barang">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Harga</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="harga">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Stok</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="stok">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Id_jenis</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id_jenis">
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
</body>
</html>