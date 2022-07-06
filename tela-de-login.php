<?php
	print_r($_REQUEST);
	if(isset($_POST['submit']) && !empty($_POST['user']) && !empty($_POST['pass'])){

	}else{
		// header('Location: tela-de-login.php');
	}
?>

<!DOCTYPE html>
<html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<title>CONTROLE DE CLIENTES INADIPLENTES</title>
</head>
<style type="text/css">
	
</style>
<body>
	<div class="conteudo tela-login">
		<form method="POST" action="tela-de-login.php">
			<fieldset>
				<legend><b>Login</b></legend>
				<br>

				<div class="inputbox">
					<input type="text" placeholder="" id="user" name="user" class="inputuser" required>
					<label for="user" class="labelinput">USUÁRIO</label>
				</div>
				<br><br>
				<div class="inputbox">
					<input type="password" placeholder="" id="pass" name="pass" class="inputuser" required>
					<label for="pass" class="labelinput">SENHA</label>
				</div>
				<br>
				<input type="submit" name="submit" id="submit" value="enviar">
				
			</fieldset>
		</form>
	</div>
</body>
</html>
