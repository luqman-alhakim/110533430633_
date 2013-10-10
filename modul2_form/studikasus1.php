<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Data Seleksi</title>
</head>

<body>

	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
	Memilih bulan
	<select name="bulan">
		<option value="Januari">Januari
		<Option value="Februari">Februari
		<option value="Maret">Maret
		<option value="April">April
		<option value="Mei">Mei
		<option value="Juni">Juni
		<option value="Juli">Juli
		<option value="Agustus">Agustus
		<option value="September">September
		<option value="Oktober">Oktober
		<option value="November">November
		<option value="Desember">Desember
		
	</select> <br />
	
	<input type="submit" value="ok" />
	</form>
<?php
if (isset($_POST['bulan'])) {
	echo $_POST['bulan'];
}
?>

</body>
</html>