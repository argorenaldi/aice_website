 <!--Dibuat oleh ARGO DWI RENALDI NIM: 1303174098 -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Admin Panel</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?=base_url()?>admin">List Pesan</a></li>
      <li><a href="<?=base_url()?>admin/bereseller">List request reseller</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?=base_url()?>welcome/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>
</body>
</html>
