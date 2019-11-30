
<!DOCTYPE html>
<html lang="en">
    <head>

    </head>
    <body>
        <div id="main_content">
            	<div class="radius_bg"></div>
	<section id="product_banner_top">
		<div class="container">
			<div class="">
				<div class="media">
                    <div class=" row" id="myList">
        <?php             
        foreach ($data->result_array() as $i) :
                $id=$i['id'];
                $nama=$i['nama'];
                $image=$i['image_produk'];
                $deskripsi=$i['deskripsi'];
                
        ?>
            
            <div class="card item_news col-md-4 mb-3">
            <a href="">
                <div class="card-img-top img_news" style="background-image: url('<?php echo base_url().'assets/images_produk/'.$image;?>')"></div>

            </a>
            <div class="col-md-12 card-body bg-white">
               
                <a href="">
                    <h5 class="judul"><?php echo $nama;?></h5>
                </a>
                <p class="isi"><p><?php echo $deskripsi;?>
           
        </div>		
				</div>
         <?php endforeach;?>
                </div>
                
			</div>
		</div>
    </div>
	</section>

        </div>
    

        <script src="https://www.aice.co.id/assets_admin/plugins/jquery/jquery.min.js "></script>
        <script src="https://www.aice.co.id/assets_admin/plugins/bootstrap/js/popper.min.js "></script>
        <script src="https://www.aice.co.id/assets_admin/plugins/bootstrap/js/bootstrap.min.js "></script>
        <script src="https://www.aice.co.id/assets/plugins/bootstrap-4.2.1/dist/js/bootstrap.min.js"></script>
        <script src="https://www.aice.co.id/assets/plugins/slick-1.8.1/slick/slick.min.js"></script>
        <script src="https://www.aice.co.id/assets/plugins/magnific/dist/jquery.magnific-popup.min.js"></script>
        <script src="https://www.aice.co.id/assets/plugins/flipster/dist/jquery.flipster.min.js"></script>