
<!DOCTYPE html>
<html>
<body>
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <h2>Update Product</h2><hr/>
            <form action="<?php echo base_url()?>Admin/updateProduct/<?= $produk['id'] ?>" method="post" enctype="multipart/form-data">
                <input type="text" name="nama" class="form-control" placeholder="Nama Produk" value="<?= $produk['nama']; ?>" required/><br>
                <textarea id="deskproduk" name="deskproduk" class="form-control" placeholder="Deskripsi Produk"><?= $produk['deskripsi']; ?></textarea><br/>
				<br>
                <input type="file" name="fotoproduk" required><br>
                <button class="btn btn-primary btn-lg" type="submit">Update Produk</button>
            </form>
        </div>
         
    </div>
</body>
</html>