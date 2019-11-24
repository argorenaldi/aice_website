<!--Dibuat oleh ARGO DWI RENALDI NIM: 1303174098 -->
<!DOCTYPE html>
<html>
  <head>
    <title>Admin Login</title>
    <!-- Bootstrap -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/login.css">
  </head>
  <body id="login">
    <div class="container">
      <form class="form-signin" action="<?php echo base_url('welcome/login'); ?>" method="post">
        <h2 class="form-signin-heading">Silahkan Login</h2>
        <input type="text" class="input-block-level" name="username" placeholder="username">
        <input type="password" class="input-block-level" name="password" placeholder="Password">
        <center><button class="btn btn-primary" type="submit">Login</button></center>
      </form>

    </div> 
    <center><p style="color: red">  <?PHP   echo $this->session->flashdata('info'); ?></p></center>
  </body>
</html>