<!DOCTYPE html>
<html>
<head>
	<title> Simple Siakad</title>
</head>
<body>
	Daftar Nama siswa
	<form action="inputsiswa">
    <input type="submit" value="Go to Google" />
</form>

	<table border="1">
		<tr>
			<th>Nim</th>
			<th>Nama Siswa</th>
			<th>Kelas</th>
			<th>Jurusan</th>
			<th>Dateadd</th>
			<th>Dateupdate</th>

		</tr>
		<?php foreach ($siswa as $u) { ?>
		<tr>
			<td><?php echo $u->nim?></td>
			<td><?php echo $u->nama?></td>
			<td><?php echo $u->kelamin?></td>
			<td><?php echo $u->alamat?></td>
			<td><?php echo $u->date_add?></td>
			<td><?php echo $u->date_update?></td>
			<?php }  ?>
		</tr>
	</table>
</body>
</html>