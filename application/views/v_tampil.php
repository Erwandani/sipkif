<!DOCTYPE html>
<html>
<head>
  <title> SIPKIF </title>
    
 <!-- css -->
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/jcarousel.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/css/flexslider.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />

</head>
<body>
<div class="index-title">
  <center><h1>DATA</h1></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Daftar laporan</h2>
			</div>
		</div>
	</div>
	<section id="content">
	<div class="container">	 
		<!-- end divider -->
		<div class="row"> 
			<div class="col-lg-12">
				<div class="pricing-box-item">
					<div class="pricing-heading">
						<center>
						<table  border="1">
						    <tr bgcolor="black">
						      <th>NIK</th>
						      <th>Nama</th>
						      <th>Subject</th>
						      <th>Alamat</th>
						      <th>Pesan</th>
						      <th>Action</th>
						    </tr>
						    <?php 
						    
						    foreach($laporan as $u){ 
						    ?>
						    <tr bgcolor="black">
						      <td><?php echo $u->nik ?></td>
						      <td><?php echo $u->nama ?></td>
						      <td><?php echo $u->subjek ?></td>
						      <td><?php echo $u->alamat ?></td>
						      <td><?php echo $u->pesan ?></td>
						      <td>
						            <?php echo anchor('crud/edit/'.$u->id,'Edit'); ?>
						                              <?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>
						      </td>
						    </tr>
						    <?php } ?>

						  </table>
						  </center>
					</div>
	

  <!--- End of modal -->

</body>
</html>




