<!DOCTYPE html>
<html>
<head>
	<title>Simple Siakad</title>
</head>
<body>
	<center>
		<h1>Selamat Datang di Simple Siakad</h1>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url(). 'index.php/siswa/tambahsiswa'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Kelamin</td>
				<td><input type="text" name="kelamin"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>