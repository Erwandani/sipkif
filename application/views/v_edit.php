<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
		<h1></h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($laporan as $u){ ?>;
	<form action="<?php echo base_url(). 'crud/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>NIK</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" name="nik" value="<?php echo $u->nik ?>">
				</td>
			</tr>
			<tr>
				<td>Subject</td>
				<td><input type="text" name="subjek" value="<?php echo $u->subjek ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $u->alamat ?>"></td>
			</tr>
			<tr>
				<td>Pesan</td>
				<td><input type="text" name="pesan" value="<?php echo $u->pesan ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>