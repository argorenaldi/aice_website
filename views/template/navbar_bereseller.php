 <!--Dibuat oleh ARGO DWI RENALDI NIM: 1303174098 -->
 <link rel="stylesheet" href="<?= base_url(); ?>assets/css/aice.css">
<header id="header" class="">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
                <div class="container-fluid">
                    <a class="#"><img src="https://www.aice.co.id/upload/website/20190424115327logo.png" class="logo_header"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_navbar" aria-controls="main_navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="main_navbar">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#">news</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#">product</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#">gallery</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="<?= base_url(); ?>home/contact_us">Contact Us</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link nav_btn" href="<?= base_url(); ?>home/bereseller">Be-reseller</a>
                            </li>

                            
                            
                            <li class="nav-item d-none d-sm-none d-md-none d-lg-block">
                                <a type="button" class="nav-link" data-toggle="modal" id="btn_search" data-target="#modal_search"><i class="fa fa-search"></i></a>
                            </li>
                            <li class="nav-item d-block d-sm-block d-md-block d-lg-none">
                                <form action="https://www.aice.co.id/search" method="POST" role="form">
                                    <input type="hidden" name="_token" value="YaOW96aRfaXqCJbMMCrAR0k9Y0T8gvZouqIJfWgC">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="title" placeholder="Search" aria-label="Search" aria-describedby="button-addon2" required="">
                                        <div class="input-group-append">
                                            <button class="btn btn_submit_search" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                    
            </nav>
        </header>