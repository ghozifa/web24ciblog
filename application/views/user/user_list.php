<!DOCTYPE html>
<html>
<head>
	<title>KUMPULAN USER</title>
</head>
<body>
<center><h1>KUMPULAN USER</h1></center>

<?php echo anchor('user/tambah', 'Tambah Data'); ?>
<table style="margin:20px auto;" border="1">
<tr>
<th>ID</th>
<th>Nama</th>
<th>Email</th>
</tr>	

<?php foreach ($user as $u) { ?>
	
<tr>
	<td><?php echo $u->id ?></td>
	<td><?php echo $u->nama ?></td>
	<td><?php echo $u->email ?></td>
<td>
<?php echo anchor('user/edit/' .$u->id, 'Edit'); ?>
<?php echo anchor('user/hapus/' .$u->id, 'Hapus'); ?>

</td>
</tr>
<?php } ?>
</table>
</body>
</html>