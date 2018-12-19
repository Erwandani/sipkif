<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>SIPKIF</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css -->
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/jcarousel.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/css/flexslider.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<header class="page">
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                  <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/img/logo.jpg" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li> 
						<li><a href="<?php echo base_url(); ?>modif/about">About Us</a></li>
						<li><a href="<?php echo base_url(); ?>modif/services">Services</a></li>
                        <li><a href="<?php echo base_url(); ?>modif/portfolio">Portfolio</a></li>
                        <li><a href="<?php echo base_url(); ?>modif/Daftarlaporan">Daftar laporan</a></li>
                        <li class="active"><a href="<?php echo base_url(); ?>modif/lapor">lapor</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header><!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Lapor</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	
	<div class="container">
	<div class="row">
 <div class="col-md-12">
							 

<!-- Menyisipkan library Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>

    <script>
        // fungsi initialize untuk mempersiapkan peta
        function initialize() {
        var propertiPeta = {
            center:new google.maps.LatLng(-8.5830695,116.3202515),
            zoom:9,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        
        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        }

        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <div id="googleMap" style="width:100%;height:380px;"></div>
								</div>
</div>


	<div class="row">
								<div class="col-md-6">
									<br>
									<div class="alert alert-success hidden" id="contactSuccess">
										<strong>Success!</strong> Your message has been sent to us.
									</div>
									<div class="alert alert-error hidden" id="contactError">
										<strong>Error!</strong> There was an error sending your message.
									</div>
									<div class="contact-form">
										<form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post" id="contact-form" role="form" novalidate="novalidate">
											<div class="form-group has-feedback">
												<label for="nik">NIK*</label>
												<input type="nik" class="form-control" id="nik" name="nik" placeholder="">
												<i class="fa fa-user form-control-feedback"></i>
											</div>
											<div class="form-group has-feedback">
												<label for="nama">NAMA*</label>
												<input type="nama" class="form-control" id="nama" name="nama" placeholder="">
												<i class="fa fa-envelope form-control-feedback"></i>
											</div>
											<div class="form-group has-feedback">
												<label for="subjek">SUBJECT*</label>
												<input type="text" class="form-control" id="subjek" name="subjek" placeholder="">
												<i class="fa fa-navicon form-control-feedback"></i>
											</div>
											<div class="form-group has-feedback">
												<label for="alamat">MASUKAN ALAMAT*</label>
												<input type="text" class="form-control" id="alamat" name="alamat" placeholder="">
												<i class="fa fa-navicon form-control-feedback"></i>
											</div>
											<div class="form-group has-feedback">
												<label for="pesan">MESSAGE*</label>
												<textarea class="form-control" id="pesan" name="pesan" placeholder=""></textarea>
												<i class="fa fa-pencil form-control-feedback"></i>
											</div>
											<input type="submit" value="Lapor" class="btn btn-default">
										</form>
									</div>
								</div>
								<div class="col-md-6">
								
<div class="span4"><div class="title-box clearfix "><h3 class="title-box_primary"></h3></div> 
<h5>.</h5>
<p>.<br>
</p><address>
<strong>.<br>
<br>
</strong><br>
<br>
<br>
 <a href="#"</a><br>
</address> </div> 
								</div>
							</div>
	</div>
 
	</section>
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
<script src="<?php echo base_url(); ?>assets/js/validate.js"></script>
</body>
</html>