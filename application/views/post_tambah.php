<!DOCTYPE html>
<html>
<head>Post Tambah</title>
</head>
<body>
<center><h3>Tambah data baru</h3></center>
<form action="<?php echo base_url().'post/tambah_aksi';?>" method="post">
<table style="margin:20px auto;">
	<tr>
		<td>Judul</td>
		<td><input type="text" name="judul"></td>
	</tr>
	<tr>
		<td>Konten</td>
		<td><input type="text" name="email"></td>
	</tr>
	<tr>
		<td>Tanggal Post</td>
		<td><input type="date" nama="tgl_post"></td>
	</tr>
	<tr>
	<td><input type="Submit" value="Tambah"></td>
</tr>
</table>
</form>

</body>
</html>