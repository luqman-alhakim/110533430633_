<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="text/html,IE=edge,chrome=1; charset=utf-8" />
  <title>Login Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>LOGIN</h1>
	  <script type="text/javascript">
		function validasi_input(form){
			pola_username=/^[a-zA]{1,100}$/;
			if (form.username.value == "" || form.password.value == ""){
				alert("Username atau password masih kosong!");
				form.username.focus();
			return (false);
			}
			if (!pola_username.test(form.username.value)){
				alert ('Username hanya boleh Huruf');
				form.username.focus();
			return (false);
			}
		return (true);
		}
	</script>
      <form method="post" action="<?php $_SERVER['PHP_SELF'];?>" onsubmit="return validasi_input(this)">
        <p><input type="text" name="username" value="" placeholder="Username"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
    </div>
	
  </section>

  <?php
	$user = "luqman";
	$pass = "hakim";
		if($_POST['username'] == "" && $_POST['password'] == ""){
			echo 'Belum Login';
		}elseif($_POST['username'] == $user && $_POST['password'] == $pass) {
			echo 'Selamat Datang'.'<br>'.$_POST['username'].'<br>'.'Inputan berupa '.gettype($user);
		}
		else{
			echo 'Login Gagal! Coba lagi';
		}
	?>
</body>
</html>
