<div id="main_content">
                <div class="radius_bg"></div>
	<section id="reseller_page">
		<div class="container-fluid">
			
			<div class="row">
				<div class="col-md-6 ">
					<img src="https://www.aice.co.id/assets/images/bg_reseller_left.png" class="img-fluid mb-3">
				</div>
				<div class="col-md-6">
					<form action="<?php echo base_url()?>home/tambahseller" method="POST" role="form">
						<input type="hidden" name="_token" value="">
						<div class="row">

							<div class="col-md-12">
								<h4 class="text-center section_title">Reseller Form</h4>
							</div>
							<div class="col-md-12">
						    </div>
							<div class="form-group col-md-6">
								<input type="text" class="form-control" name="nama" id="nama" required placeholder="Nama Lengkap *">
                                <small class="form-text text-danger"><?= form_error('nama') ?>.</small>
							</div>
							<div class="form-group col-md-6">
								<input type="email" class="form-control" name="email" id="email" required placeholder="Email *">
                                <small class="form-text text-danger"><?= form_error('email') ?>.</small>
							</div>
							<div class="form-group col-md-6">
								<input type="text" class="form-control" name="alamat" id="alamat" required placeholder="Alamat *">
                                <small class="form-text text-danger"><?= form_error('alamat') ?>.</small>
							</div>
							<div class="form-group col-md-6">
								<input type="text" class="form-control" name="no_hp" id="no_hp" required placeholder="No Handphone *">
                                <small class="form-text text-danger"><?= form_error('no_hp') ?>.</small>
							</div>
							<div class="form-group col-md-6">
                                <div class="select_form">
                                    <select name="nama_provinsi" id="nama_provinsi" class="form-control" required>
                                        <option value="">Pilih Provinsi *</option>
                                                                                    <option value="ACEH">ACEH</option>
                                                                                    <option value="SUMATERA UTARA">SUMATERA UTARA</option>
                                                                                    <option value="SUMATERA BARAT">SUMATERA BARAT</option>
                                                                                    <option value="RIAU">RIAU</option>
                                                                                    <option value="JAMBI">JAMBI</option>
                                                                                    <option value="SUMATERA SELATAN">SUMATERA SELATAN</option>
                                                                                    <option value="BENGKULU">BENGKULU</option>
                                                                                    <option value="LAMPUNG">LAMPUNG</option>
                                                                                    <option value="KEPULAUAN BANGKA BELITUNG">KEPULAUAN BANGKA BELITUNG</option>
                                                                                    <option value="KEPULAUAN RIAU">KEPULAUAN RIAU</option>
                                                                                    <option value="DKI JAKARTA">DKI JAKARTA</option>
                                                                                    <option value="JAWA BARAT">JAWA BARAT</option>
                                                                                    <option value="JAWA TENGAH">JAWA TENGAH</option>
                                                                                    <option value="DI YOGYAKARTA">DI YOGYAKARTA</option>
                                                                                    <option value="JAWA TIMUR">JAWA TIMUR</option>
                                                                                    <option value="BANTEN">BANTEN</option>
                                                                                    <option value="BALI">BALI</option>
                                                                                    <option value="NUSA TENGGARA BARAT">NUSA TENGGARA BARAT</option>
                                                                                    <option value="NUSA TENGGARA TIMUR">NUSA TENGGARA TIMUR</option>
                                                                                    <option value="KALIMANTAN BARAT">KALIMANTAN BARAT</option>
                                                                                    <option value="KALIMANTAN TENGAH">KALIMANTAN TENGAH</option>
                                                                                    <option value="KALIMANTAN SELATAN">KALIMANTAN SELATAN</option>
                                                                                    <option value="KALIMANTAN TIMUR">KALIMANTAN TIMUR</option>
                                                                                    <option value="KALIMANTAN UTARA">KALIMANTAN UTARA</option>
                                                                                    <option value="SULAWESI UTARA">SULAWESI UTARA</option>
                                                                                    <option value="SULAWESI TENGAH">SULAWESI TENGAH</option>
                                                                                    <option value="SULAWESI SELATAN">SULAWESI SELATAN</option>
                                                                                    <option value="SULAWESI TENGGARA">SULAWESI TENGGARA</option>
                                                                                    <option value="GORONTALO">GORONTALO</option>
                                                                                    <option value="SULAWESI BARAT">SULAWESI BARAT</option>
                                                                                    <option value="MALUKU">MALUKU</option>
                                                                                    <option value="MALUKU UTARA">MALUKU UTARA</option>
                                                                                    <option value="PAPUA BARAT">PAPUA BARAT</option>
                                                                                    <option value="PAPUA">PAPUA</option>
                                                                            </select>
                                                                            <small class="form-text text-danger"><?= form_error('nama_provinsi') ?>.</small>
                                </div>
                            </div>
                           <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="nama_kota" id="nama_kota" required placeholder=" Nama Kota *">
                                <small class="form-text text-danger"><?= form_error('nama_kota') ?>.</small>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="nama_kecamatan" id="nama_kecamatan" required placeholder="Nama Kecamatan *">
                                <small class="form-text text-danger"><?= form_error('nama_kecamatan') ?>.</small>
                            </div>
							<div class="form-group col-md-6">
								<input type="number" class="form-control" name="kode_pos" id="kode_pos" required placeholder="Kode Pos *">
                                <small class="form-text text-danger"><?= form_error('kode_pos') ?>.</small>
							</div>
							
							<div class="form-group col-md-6 text-right">
								<button type="submit" class="btn btn_main text-uppercase">Submit</button>
							</div>
						</div>
							
					</form>
				</div>
			</div>
		</div>
	</section>
        </div>
        
        
