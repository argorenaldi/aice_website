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
    <input type="text" class="search form-control" placeholder="cari......">
	 <table border="1">
	 	<table class="table" id="userTbl">
    <thead>
	 	<tr>
	 		<th>nama</th>
	 		<th>email</th>
      <th>alamat</th>
	 		<th>nomer handphone</th>
	 		<th>provinsi</th>
      <th>kota</th>
      <th>kecamatan</th>
      <th>kode pos</th>
	 		<th>AKSI</th>
	 	</tr>
	 </thead>
	 <tbody>
		<?php echo $this->session->flashdata('info');?>
		<tr><?php foreach ($list as $d) : ?>
                        <td><?= $d['nama']; ?></td>
                        <td><?= $d['email']; ?></td>
                        <td><?= $d['alamat']; ?></td>
                        <td><?= $d['no_hp']; ?></td>
                        <td><?= $d['nama_provinsi']; ?></td>
                        <td><?= $d['nama_kota']; ?></td>
                        <td><?= $d['nama_kecamatan']; ?></td>
                        <td><?= $d['kode_pos']; ?></td>
                        <td>
                            <a href="<?= base_url(); ?>admin/hapusSeller/<?= $d['id'] ?>" class="btn btn-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?>hapus</a>
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
