
<!DOCTYPE html>
<html>
<body>
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <h2>Tambah Careers</h2><hr/>
            <form action="<?php echo base_url().'admin/tambah_careers'?>" method="post" enctype="multipart/form-data">
                <input type="text" name="posisi" class="form-control" placeholder="Position" required/><br>
                <textarea id="deskproduk" name="deskripsi" class="form-control" placeholder="Deskripsi"></textarea><br/>
				<br>
                <input type="text" name="contact" class="form-control" placeholder="Contact" required/><br>
                <button class="btn btn-primary btn-lg" type="submit">Tambah Careers</button>
            </form>
        </div>
         
    </div>
</body>
</html>