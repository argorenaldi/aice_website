<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aice | Have an Aice Day</title>
    <link rel="stylesheet" href="<?=base_url()?>assets/css/aice.css">
    <link rel="shortcut icon" href="<?=base_url()?>assets/img/aice.png" type="image/x-icon">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body class="bg-light">
</header>

    <!-- CONTAINER -->
    <div id="main_content">        	
	<div class="radius_bg"></div>	
	<section id="news_banner_section" >
		<div class="container-fluid">
			<div class="">
				<div class="text-center text-white">
					<h4 class="section_title text-white">News</h4>
					<p>Cari Tahu Semua Berita Terupdate Tentang Aice di Sini!</p>	
				</div>
			</div>
		</div>
	</section>
	<div class="wave_home"></div>
	<section id="news_page">
		<div class="container-fluid">
	        <h4 class="text-center section_title">All News</h4>
			<div class=" row" id="myList">
			 <?php
            function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }
            foreach ($data->result_array() as $i) :
                $id=$i['berita_id'];
                $judul=$i['berita_judul'];
                $image=$i['berita_image'];
                $isi=$i['berita_isi'];
                $tgl =$i['berita_tanggal']
        ?>
	        <div class="card item_news col-md-4 mb-3">
	        <a href="<?php echo base_url().'home/view/'.$id;?>">
	        	<div class="card-img-top img_news" style="background-image: url('<?php echo base_url().'assets/images_news/'.$image;?>')"></div>

	        </a>
	        <div class="col-md-12 card-body bg-white">
	        	<h6 class="tanggal"><?php echo $tgl;?></h6>
	        	<a href="<?php echo base_url().'home/view/'.$id;?>">
	        		<h5 class="judul"><?php echo $judul;?></h5>
            	</a>
            	<p class="isi"><p><?php echo limit_words($isi,20);?>....</p>
	        </div>
	        <div class="card-footer bg-white text-center">
	            <a href="<?php echo base_url().'home/view/'.$id;?>" class="btn btn_secondary">Read More</a>
	        </div>
	    </div>
	        <?php endforeach;?>

	  
</section>

    
</body>
</html>