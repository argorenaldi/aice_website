
<!DOCTYPE html>
<html>
<body>
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <h2>Ubah Postingan</h2><hr/>
            <form action="<?php echo base_url()?>Admin/updateBerita/<?= $news['berita_id'] ?>" method="post" enctype="multipart/form-data">
                 <input type="hidden" name="id" value="<?= $news['berita_id']; ?>">
                <input type="text" name="judul" class="form-control" value="<?= $news['berita_judul']; ?>" required/><br/>
                <textarea id="ckeditor" name="berita" class="form-control" required><?php echo $news['berita_isi'];?></textarea><br/>
                <input type="file" name="filefoto" required><br>
                <button class="btn btn-primary btn-lg" type="submit">Ubah berita</button>
            </form>
        </div>
         
    </div>
     

   <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
      $(function () {
        CKEDITOR.replace('ckeditor');
      });
    </script>
</body>
</html>