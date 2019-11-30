<?php
    $b=$data->row_array();
?>
<!DOCTYPE html>
<head>
    <title><?php echo $b['berita_judul'];?></title>
</head>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<body>
 <div id="main_content">
                <style type="text/css" media="screen">
        .item_news{
            border-radius: 0px;
        }
        .item_news img{
            border-radius: 0px !important;
        }
        
    </style>
    <section id="news_banner_detail">
        <div class="">
            <img src="<?php echo base_url().'assets/images_news/'.$b['berita_image'];?>" class="w-100">
        </div>
        
    </section>
    <section id="news_detail_page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center news_author mt-4 text-uppercase text-dark">
                    By Argo dwi renaldi | <?php echo $b['berita_tanggal'];?>
                </div>
                <div class="col-md-12 text-center news_title">
                    
                     <?php echo $b['berita_judul'];?>
                     
                </div>
                <div class="col-md-12 news_content">

                    <?php echo $b['berita_isi'];?>

                    
                </div>
                <div class="col-md-12 news_share">
                    <h5>Share :</h5>
                    <ul class="nav list_sosmed">
                        <li class="nav-item ">
                            <a class="nav-link" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url().'home/view/'.$b['berita_id'];?>" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url().'home/view/'.$b['berita_id'];?>"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://api.whatsapp.com/send?phone=91XXXXXXXXXX&text=<?php echo base_url().'home/view/'.$b['berita_id'];?>" target="_blank"><i class="fa fa-whatsapp"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</body>
</html>