<!DOCTYPE html>
<html lang="en">
<head>
  <title>SIM Warung Versi 2024</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Form Input Barang</h2>
<form method="post" action="inputbarang.php">
  <div class="form-group row">
    <label for="KodeBarang" class="col-4 col-form-label">Kode Barang</label> 
    <div class="col-8">
      <input id="KodeBarang" name="KodeBarang" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="NamaBarang" class="col-4 col-form-label">Nama Barang</label> 
    <div class="col-8">
      <input id="NamaBarang" name="NamaBarang" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="JumlahStok" class="col-4 col-form-label">Jumlah Stok</label> 
    <div class="col-8">
      <input id="JumlahStok" name="JumlahStok" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="HargaJual" class="col-4 col-form-label">Harga Jual</label> 
    <div class="col-8">
      <input id="HargaJual" name="HargaJual" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="HargaBeli" class="col-4 col-form-label">Harga Beli</label> 
    <div class="col-8">
      <input id="HargaBeli" name="HargaBeli" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="bsubmit" type="submit" class="btn btn-primary">Submit</button>
      <input type="hidden" name="submit" value="kunci">
    </div>
  </div>
</form>
</div>
</body>
</html>  