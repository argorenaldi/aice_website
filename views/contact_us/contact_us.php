<!--Dibuat oleh ARGO DWI RENALDI NIM: 1303174098 -->
<div id="main_content">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
            	<div class="radius_bg"></div>
	<section id="contact_us_page">
		<div class="container-fluid">
			
			<div class="row">
				<div class="col-md-12">
					<h4 class="text-center section_title">Our Office</h4>
				</div>
				<div class="col-md-6 content_left ">
					<div class="row alamat">
						<div class="col-md-6 mb-3">
							<h5>SINGAPORE</h5>
							<p>
								<b>(Headquater)</b><br>
								80 Robinson Road
								#02-00 Singapore
								068898
							</p>
						</div>
						<div class="col-md-6 mb-3">
							<h5>INDONESIA</h5>
							<p>
								The Suites Tower, Lt. 18<br>
								Jl. Boulevard Pantai Indah Kapuk No.1<br>
								Penjaringan, Jakarta Utara, 14470<br>
								Phone : +62 21 2251 1112<br>
								Jam Kerja : Senin - Jumat, 08.00 - 17.00
							</p>
						</div>
					</div>
				</div>

				<div class="col-md-6 content_right">
					<form action="<?php echo base_url()?>home/tambah" method="POST" role="form" class="form_contact_us" id="formcontactus">
						<div class="row">
							<div class="col-md-12">
							</div>
							<div class="form-group mb-4 col-md-12">
								<div class="select_form">
		                            <select class="form-control mb-5" required="" name="id_kategori" id="id_kategori"><option value="" selected="selected">Pilih Kategori *</option><option value="1">Keluhan dan Saran</option><option value="2">Kunjungan Pabrik / Factory Visit</option><option value="3">Kerjasama (Partnership)</option></select>
		                        </div>
	                        </div>
							<div class="form-group mb-4 col-md-6">
								<input type="text" class="form-control " name="nama" id="nama" required="" placeholder="Nama Lengkap *">
								<small class="form-text text-danger"><?= form_error('nama') ?>.</small>
							</div>
							<div class="form-group mb-4 col-md-6">
								<input type="email" class="form-control " name="email" id="email" required="" placeholder="Email *">
								<small class="form-text text-danger"><?= form_error('email') ?>.</small>
							</div>
							<div class="form-group mb-4 col-md-6">
								<input type="number" class="form-control " name="nohp" id="nohp" required="" placeholder="No Handphone *">
								<small class="form-text text-danger"><?= form_error('nohp') ?>.</small>
							</div>
							<div class="form-group mb-4 col-md-6 mb-5">
								<input type="text" class="form-control " name="pesan" id="pesan" required="" placeholder="Pesan *">
								<small class="form-text text-danger"><?= form_error('pesan') ?>.</small>
							</div>
							
							<div class="form-group col-md-6 text-right">
								<button type="submit" name="tambah" id="tambah" class="btn btn_main text-uppercase">Submit</button>
							</div>
						</div>
							
					</form>
				</div>
			</div>
		</div>
	</section>
	