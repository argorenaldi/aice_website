 <div id="main_content">
 <div class="radius_img"></div>
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-interval="8000">
          <img src="http://aice.co.id/upload/slider/20191016151829.jpg" class="w-100">
        </div>
        <div class="carousel-item" data-interval="8000">
          <img src="http://aice.co.id/upload/slider/20190731115755.jpg" class="w-100">
        </div>
        <div class="carousel-item" data-interval="8000">
          <img src="http://aice.co.id/upload/slider/20190731114241.jpg" class="w-100">
        </div>
        <div class="carousel-item" data-interval="8000">
          <img src="http://aice.co.id/upload/slider/20190523181706.png" class="w-100">
        </div>
        <div class="carousel-item" data-interval="8000">
            <img src="http://aice.co.id/upload/slider/20190528141222.png" class="w-100">
        </div>
        <div class="carousel-item" data-interval="8000">
            <img src="http://aice.co.id/upload/slider/20190523181810.png" class="w-100">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
<div class="wave_home"></div>
<section id="news_home" >
    <div class="container-fluid">
        <h4 class="text-center section_title">All News</h4>
        <div class="row">
            <div class="col-md-12">
                <div class="card-deck">
                    <?php
            function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }
            foreach (array_slice($data->result_array(), 0, 3) as $i) :
                $id=$i['berita_id'];
                $judul=$i['berita_judul'];
                $image=$i['berita_image'];
                $isi=$i['berita_isi'];
                $tgl =$i['berita_tanggal']
        ?>
                                            <div class="card item_news">
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
                                           
                                           
                      </div>
            </div>
            <div class="col-md-12 text-center mt-5">
                <a href="<?= base_url(); ?>home/news" class="btn btn_secondary">See All News</a>
            </div>
                
        </div>
    </div>
</section>
<section id="about_home">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card-deck">
                    <div class="card about_history">
                        <div class="card-body ">
                            <h6>Histori</h6>
                            <h4>Our story</h4>
                            <p>Aice adalah perusahaan yang berlisensi dari Singapura dan<br> memiliki tim yang sudah berpengalaman 20 tahun <br>di industri es krim.</p>
                        </div>
                        <div class="card-footer ">
                            <a href="<?= base_url(); ?>home/about" class="btn btn_main">See More</a>
                        </div>
                    </div>
                    <div class="card about_product">
                        <div class="card-body ">
                            <h6>Produk</h6>
                            <h4>Ice Cream</h4>
                            <p>Nikmati kesegaran dan kelembutan dari Aice ice cream<br> yang hadir dengan berbagai varian rasa.</p>
                           
                        </div>
                        <div class="card-footer">
                            <a href="<?= base_url(); ?>home/product" class="btn btn_main">Semua Produk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            
            <div class="col-md-6 info_stat">
                <div class="media">
                    <img src="http://www.aice.co.id/assets/images/icon_experience.png" class="align-self-center" >
                    <div class="media-body align-self-center">
                        <h5>20</h5>
                        <h6>Year experiences</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-6 info_stat">
                <div class="media">
                    <img src="http://www.aice.co.id/assets/images/icon_award.png" class="align-self-center" >
                    <div class="media-body align-self-center">
                        <h5>5</h5>
                        <h6>Awards</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
        </div