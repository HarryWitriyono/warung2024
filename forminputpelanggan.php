<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Form Input Pelanggan Baru</h2>
  <form method="post" action="inputpelanggan.php">
  <div class="form-group row">
    <label for="NoHPWA " class="col-4 col-form-label">No. HP/WA</label> 
    <div class="col-8">
      <input id="NoHPWA " name="NoHPWA " type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="NamaPelanggan" class="col-4 col-form-label">Nama Pelanggan</label> 
    <div class="col-8">
      <input id="NamaPelanggan" name="NamaPelanggan" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="Alamat" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <textarea id="Alamat" name="Alamat" cols="40" rows="5" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="Password" class="col-4 col-form-label">Password</label> 
    <div class="col-8">
      <input id="Password" name="Password" type="password" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" value="kunci" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>

</body>
</html> 