<!DOCTYPE html>
<html>
<head>
	<title>Post Edit</title>
</head>
<body>
<center><h3>Edit Postingan</h3></center>
<form action="<?php echo base_url().'post/update';?>" method="post">
<table style="margin:20px auto;">
	<tr>
		<td>Judul</td>
		<td><input value="<?php echo $p->judul ?>" type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Konten</td>
		<td><textarea name="konten"></textarea></td>
	</tr>
	<tr>
		<td>Tanggal Post</td>
		<td><input value="<?php echo $p->tgl_post ?>" type="password" name="password"></td>
	</tr>
	<tr>
	<td><input type="hidden" name="id" value="<?php echo $p->id_post"></td>
</tr>
</table>
</form>

</body>
</html>