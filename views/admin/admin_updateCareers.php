
<!DOCTYPE html>
<html>
<body>
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <h2>Update Careers</h2><hr/>
            <form action="<?php echo base_url()?>Admin/updateCareers/<?= $careers['id'] ?>" method="post" enctype="multipart/form-data">
                <input type="text" name="posisi" class="form-control" placeholder="Position" value="<?= $careers['position']; ?>" required/><br>
                <textarea id="deskproduk" name="deskripsi" class="form-control" placeholder="Deskripsi"><?= $careers['deskripsi']; ?></textarea><br/>
				<br>
                <input type="text" name="contact" class="form-control" placeholder="Contact" value="<?= $careers['contact']; ?>" required/><br>
                <button class="btn btn-primary btn-lg" type="submit">Update Careers</button>
            </form>
        </div>
         
    </div>
</body>
</html>