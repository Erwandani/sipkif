<!DOCTYPE html>
<html>
<head>
  <title> SIPKIF </title>
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
  <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/login/css/style.css">
</head>
<body>
<div class="index-title">
  <h1>SIPKIF</h1>
<h3> Sistem Informasi Pendataan Kerusakan Infrastruktur Dan Fasilitas Publik </h3>
</div>
 

  <div class="modal-dialog text-center">
    <div class="col-sm-8 main-section">
    <div class="modal-content">

    <div class="col-12 user-img">
    
      </div>

      <form class="col-12" action="<?php echo base_url('index.php/auth/aksi_login'); ?>" method="post">
      <div class="form-group">
        <input type="text" class="form-control" name="username" placeholder="Masukkan Username">
        </div>
      <div>
        <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
        </div>
        <br>
        <button type="submit" class="btn"><i class="fas fa-sign-in-alt"></i>Login</button>
        </form>

        <div class="col-12 forgot">
        <br>
  </div> 

  <!--- End of modal -->

</body>
</html>
