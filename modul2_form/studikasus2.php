<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Studi Kasus 2</title>
</head>

<body>

	<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
	Genre Lagu Kesukaan <br />
	<input type="checkbox" name="genre[]" value="Jazz" checked
		<?php
		if  ($_POST['genre[]'] == 'Jazz') {
			echo 'checked="checked"';
		}
		?>
	/>Jazz <br />
	
	<input type="checkbox" name="genre[]" value="Pop" checked
		<?php
		if  ($_POST['genre[]'] == 'Pop') {
			echo 'checked="checked"';
		}
		?>
	/>Pop <br />
	
	<input type="checkbox" name="genre[]" value="Dangdut"
		<?php
		if  ($_POST['genre[]'] == 'Dangdut') {
			echo 'checked="checked"';
		}
		?>
	/>Dangdut <br />
	
	<input type="checkbox" name="genre[]" value="Punk"
		<?php
		if  ($_POST['genre[]'] == 'Punk') {
			echo 'checked="checked"';
		}
		?>
	/>Punk <br />
	
	<input type="checkbox" name="genre[]" value="Rock" checked
		<?php
		if  ($_POST['genre[]'] == 'Rock') {
			echo 'checked="checked"';
		}
		?>
	/>Rock <br />
	
	<input type="submit" value="ok" />
	</form>
<?php
//Ekstraksi nilai
if (isset($_POST['genre'])) {
	foreach ($_POST['genre'] as $key => $val) {
		echo $_key . ' -> ' .$val . '<br />';
	}
}
?>

</body>
</html>