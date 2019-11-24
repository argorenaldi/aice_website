 <!--Dibuat oleh ARGO DWI RENALDI NIM: 1303174098 -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo "admin panel"; ?></title>
</head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<body>
	 <center><h1><?php echo $title; ?></h1></center>
	 <div class="container">
	 	<h2>Keterangan id_kategori</h2>
  <p>1 : Keluhan dan saran</p> 
  <p>2 : Kunjungan Pabrik / Factory Visit</p> 
  <p>3 : Kerjasama (Partnership)</p> 
    <input type="text" class="search form-control" placeholder="cari......">
	 <table border="1">
	 	<table class="table" id="userTbl">
    <thead>
	 	<tr>
	 		<th>id_kategori</th>
	 		<th>nama</th>
	 		<th>email</th>
	 		<th>nomer handphone</th>
	 		<th>Pesan</th>
	 		<th>AKSI</th>
	 	</tr>
	 </thead>
	 <tbody>
		<?php echo $this->session->flashdata('info');?>
		<tr><?php foreach ($list as $d) : ?>
                        <td><?= $d['id_kategori']; ?></td>
                        <td><?= $d['nama']; ?></td>
                        <td><?= $d['email']; ?></td>
                        <td><?= $d['nohp']; ?></td>
                        <td><?= $d['pesan']; ?></td>
                        <td>
                            <a href="<?= base_url(); ?>admin/hapus/<?= $d['id'] ?>" class="btn btn-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?>hapus</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
	 </tbody>
	 </table>
	 </div>
	 </br>
</body>
  <!-- JavaScript Search -->
<script>
$(document).ready(function(){
    $('.search').on('keyup',function(){
        var searchTerm = $(this).val().toLowerCase();
        $('#userTbl tbody tr').each(function(){
            var lineStr = $(this).text().toLowerCase();
            if(lineStr.indexOf(searchTerm) === -1){
                $(this).hide();
            }else{
                $(this).show();
            }
        });
    });
});
</script>
</html>
