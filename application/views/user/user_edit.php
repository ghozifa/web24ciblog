<!DOCTYPE html>
<html>
<head>
	<title>USER EDIT</title>
</head>
<body>
<center><h3>Tambah data baru</h3></center>
<?php foreach($user as $u){ ?>

<form action="<?php echo base_url().'user/update';?>" method="post">
<table style="margin:20px auto;">
	<tr>
		<td>Nama</td>
		<td><input value="<?php echo $u->nama ?>" type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input value="<?php echo $u->email ?>" type="text" name="email"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input value="<?php echo $u->password ?>" type="password" name="password"></td>
	</tr>
	<input type="hidden" name="id" value="<?php echo $u->id ?>">
	
	<tr>
	<td><input type="Submit" value="Edit"></td>
</tr>
</form>
</table>
<?php } ?>

</body>
</html>