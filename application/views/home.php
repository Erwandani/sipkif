<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>SIPKIF</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css -->
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/jcarousel.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/flexslider.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper">
  <!-- start header -->
  <header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo site_url() ?>"><img src="<?php echo base_url('assets/img/logo.jpg')?>" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo site_url() ?>">Home</a></li> 
            <li><a href="<?php echo site_url('modif/about') ?>">About Us</a></li>
            <li><a href="<?php echo site_url('modif/services') ?>">Services</a></li>
                        <li><a href="<?php echo site_url('modif/portfolio') ?>">Portfolio</a></li>
                        <li><a href="<?php echo site_url('modif/Daftarlaporan') ?>">Daftar laporan</a></li>
                        <li><a href="<?php echo site_url('modif/lapor') ?>">Lapor</a></li>
                        <li><a href="<?php echo site_url('modif/login') ?>">login</a></li>
                        <li><a href="<?php echo site_url('modif/registrasi') ?>">registrasi</a></li>
                    </ul>
                </div>
            </div>
        </div>
  </header>
  <!-- end header -->
  <section id="featured">
   
  <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="<?php echo base_url('assets/img/slides/1.jpg')?>" alt="" />
                <div class="flex-caption">
                   <div class="item_introtext"> 
          <strong>Elegance</strong>
          <p>Go through our website for more</p> </div>
                </div>
              </li>
              <li>
                <img src="<?php echo base_url('assets/img/slides/2.jpg')?>" alt="" />
                <div class="flex-caption">
                     <div class="item_introtext"> 
          <strong>Bootstrap</strong>
          <p>Go through our website for more</p> </div>
                </div>
              </li>
              <li>
                <img src="<?php echo base_url('assets/img/slides/3.jpg')?>" alt="" />
                <div class="flex-caption">
                     <div class="item_introtext"> 
          <strong>Responsiveness</strong>
          <p>Go through our website for more</p> </div>
                </div>
              </li>
            </ul>
        </div>
  <!-- end slider -->
 </section>
  <section class="heroText">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div><h1>Services</h1><span class="clear spacer_responsive_hide_mobile " style="height:13px;display:block;"></span> </div>
      </div>
    </div>
  </div>
  
  <div class="container">
      <div class="row">
    <div class="skill-home"> <div class="skill-home-solid clearfix"> 
    <div class="col-md-3">
    <span class="icons c1"><i class="fa fa-trophy"></i></span> <div class="box-area">
    <h3>Cepat</h3> <p>Laporan yang dikirim akan langsung diterima kepada pihak terkait, tanpa melalui perantara pihak lain.</p></div>
    </div>
    <div class="col-md-3"> 
    <span class="icons c2"><i class="fa fa-picture-o"></i></span> <div class="box-area">
    <h3>Tanggap</h3> <p>Laporan yang diterima oleh pihak terkait, akan langsung di proses.</p></div>
    </div>
    <div class="col-md-3"> 
    <span class="icons c3"><i class="fa fa-desktop"></i></span> <div class="box-area">
    <h3>Responsive</h3> <p>Design web kami yang dibuat, memungkinkan semua kalangan pengguna bisa menggunakannya.</p></div>
    </div>
    <div class="col-md-3"> 
    <span class="icons c4"><i class="fa fa-globe"></i></span> <div class="box-area">
    <h3>Support</h3> <p>Web kami support di semua platform browser.</p>
    </div></div>
    </div></div>
    </div> 
    

  </div>
  </section>
  <section id="content">
   <div class="container">
  <!-- Portfolio Projects -->
    <div class="row">
      <div class="col-lg-12">
        <h4 class="heading">Recent Works</h4>
        <div class="row">
          <section id="projects">
          <ul id="thumbs" class="portfolio">
            <!-- Item Project and Filter Name -->
            <li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="web">
            <!-- Fancybox - Gallery Enabled - Title - Full Image -->
            <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="<?php echo base_url('assets/img/works/1.png')?>">
            <span class="overlay-img"></span>
            <span class="overlay-img-thumb">
             
            <h5>Project</h5> <p>Sed ut perspiciaatis unde omnis</p> <i class="icon-info-blocks fa fa-search"></i>  
             
            </span>
            </a>
            <!-- Thumb Image and Description -->
            <img src="<?php echo base_url('assets/img/works/1.png')?>" alt="">
            </li>
            <!-- End Item Project -->
            <!-- Item Project and Filter Name -->
            <li class="item-thumbs col-lg-3 design" data-id="id-1" data-type="icon">
            <!-- Fancybox - Gallery Enabled - Title - Full Image -->
            <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="<?php echo base_url('assets/img/works/2.png')?>">
            <span class="overlay-img"></span>
            <span class="overlay-img-thumb"><h5>Project</h5> <p>Sed ut perspiciaatis unde omnis</p> <i class="icon-info-blocks fa fa-search"></i></span>
            </a>
            <!-- Thumb Image and Description -->
            <img src="<?php echo base_url('assets/img/works/2.png')?>" alt="">
            </li>
            <!-- End Item Project -->
            <!-- Item Project and Filter Name -->
            <li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="graphic">
            <!-- Fancybox - Gallery Enabled - Title - Full Image -->
            <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="<?php echo base_url('assets/img/works/3.png')?>">
            <span class="overlay-img"></span>
            <span class="overlay-img-thumb"><h5>Project</h5> <p>Sed ut perspiciaatis unde omnis</p> <i class="icon-info-blocks fa fa-search"></i></span>
            </a>
            <!-- Thumb Image and Description -->
            <img src="<?php echo base_url('assets/img/works/3.png')?>" alt="">
            </li>
            <li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="web">
            <!-- Fancybox - Gallery Enabled - Title - Full Image -->
            <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="<?php echo base_url('assets/img/works/4.png')?>">
            <span class="overlay-img"></span>
            <span class="overlay-img-thumb"><h5>Project</h5> <p>Sed ut perspiciaatis unde omnis</p> <i class="icon-info-blocks fa fa-search"></i></span>
            </a>
            <!-- Thumb Image and Description -->
            <img src="<?php echo base_url('assets/img/works/4.png')?>" alt="">
            </li>
          </ul>
          </section>
        </div>
      </div>
      </div>
    </div>
  
  </section>
  <div class="testimonial-area">
    <div class="testimonial-solid">
        <div class="container">
            <div class="testi-icon-area">
                <div class="quote">
                    <i class="fa fa-microphone"></i>
                </div>
            </div>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="">
                        <a href="#"></a>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class="">
                        <a href="#"></a>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class="active">
                        <a href="#"></a>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="3" class="">
                        <a href="#"></a>
                    </li>
                </ol>
                <div class="carousel-inner">
                    <div class="item">
                        <p>"As you grow older, you will discover that you have two hands, one for helping yourself, the other for helping others".</p>
                        <p>
                            <b>- Audrey Hepburn -</b>
                        </p>
                    </div>
                    <div class="item">
                        <p>Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p>
                        <p>
                            <b>- Jaison Warner -</b>
                        </p>
                    </div>
                    <div class="item active">
                        <p>Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p>
                        <p>
                            <b>- Tony Antonio -</b>
                        </p>
                    </div>
                    <div class="item">
                        <p>Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p>
                        <p>
                            <b>- Leena Doe -</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  
  
    <footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="widget">
          <h5 class="widgetheading">Kontak Kami</h5>
          <address>
          <strong>UII (Universitas Islam Indonesia) </strong><br>
          Jalan Kaliurang Km. 14,5, Yogyakarta, Krawitan, Umbulmartani, Ngemplak, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55584<br>
           Indonesia.</address>
          <p>
            <i class="icon-phone"></i> (+68) -3333 - 4444-1111 <br>
            <i class="icon-envelope-alt"></i> email@sipkif.com
          </p>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="widget">
          <h5 class="widgetheading">Tautan Langsung</h5>
          <ul class="link-list">
            <li><a href="#">Acara terakhir</a></li>
            <li><a href="#">Syarat dan ketentuan</a></li>
            <li><a href="#">Rahasia pribadi</a></li>
            <li><a href="#"></a></li>
            <li><a href="#">Hubungi kami</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="widget">
          <h5 class="widgetheading">Posting terbaru</h5>
          <ul class="link-list">
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3">
          <div class="widget">
          <h5 class="widgetheading">Berita Baru</h5>
          <ul class="link-list">
            <li><a href="#">.</a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div id="sub-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="copyright">
            <p>
              <span>&copy; Central Site All right reserved. Template By </span><a href="http://webthemez.com" target="_blank">WebThemez</a>
            </p>
          </div>
        </div>
        <div class="col-lg-6">
          <ul class="social-network">
            <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
            <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  </footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.easing.1.3.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.fancybox.pack.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.fancybox-media.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/portfolio/jquery.quicksand.js"></script>
<script src="<?php echo base_url(); ?>assets/js/portfolio/setting.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.flexslider.js"></script>
<script src="<?php echo base_url(); ?>assets/js/animate.js"></script>
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
<script src="<?php echo base_url(); ?>assets/js/owl-carousel/owl.carousel.js"></script>
</body>
</html>