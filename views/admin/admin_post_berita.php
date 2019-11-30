<!DOCTYPE html>
<html>
<body>
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <h2>Post Berita</h2><hr/>
            <form action="<?php echo base_url().'admin/simpan_post'?>" method="post" enctype="multipart/form-data">
                <input type="text" name="judul" class="form-control" placeholder="Judul berita" required/><br/>
                <textarea id="ckeditor" name="berita" class="form-control" required></textarea><br/>
                <input type="file" name="filefoto" required><br>
                <button class="btn btn-primary btn-lg" type="submit">Post Berita</button>
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