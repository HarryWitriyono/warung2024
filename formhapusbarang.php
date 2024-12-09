<!DOCTYPE html>
<html lang="en">
<head>
  <title>SIM Warung 2024 - Hapus Barang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Form Hapus Barang</h2>
<form method="post" action="hapusbarang.php">
  <div class="form-group row">
    <label for="KodeBarang " class="col-4 col-form-label">Kode Barang</label> 
    <div class="col-8">
      <input id="KodeBarang" name="KodeBarang" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" value="kunci" class="btn btn-primary">Hapus Barang</button>
    </div>
  </div>
</form>