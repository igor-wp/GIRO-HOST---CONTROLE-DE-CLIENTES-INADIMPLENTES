<!-- https://www.youtube.com/watch?v=QOeDE7nPDq0&list=PLSHNk_yA5fNjoIRNHV-3FprsN3NWPcnnK&index=3 -->




<?php
	if(isset($_POST['submit'])){


		include_once('config.php');

		$dominio = $_POST['dominio'];
		$nome = $_POST['nome'];
		$telefone = $_POST['telefone'];
		$email = $_POST['email'];
		$ultimo_pagamento = $_POST['ultimo_pagamento'];
		$valor = $_POST['valor'];

		$result = mysqli_query($conexao, "INSERT INTO usuarios(dominio, nome, telefone, email, ultimo_pagamento, valor) VALUES ('$dominio', '$nome', '$telefone', '$email', '$ultimo_pagamento', '$valor')");
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
<body>
	<div class="conteudo" id="conteudo">
		<div class="wrap">
			<form class="formulario" id="formulario" method="POST" action="formulario.php"><br>
				<fieldset>
					<legend><b>CONTROLE DE CLIENTES INADIMPLENTES</b></legend>
					<br>
					<div class="inputbox">
						<input type="text" name="nome" placeholder="" id="nome" class="inputuser" required>	
						<label for="nome" class="labelinput">NOME DO CLIENTE</label>
					</div>
					<br><br>

					<div class="inputbox">
						<input type="text" name="dominio" placeholder="" id="dominio" class="inputuser" required>	
						<label for="dominio" class="labelinput">DOMÍNIO COMPLETO</label>
					</div>
					<br><br>

					<div class="inputbox">
						<input type="text" name="telefone" placeholder="" id="telefone" class="inputuser" required>
						<label for="telefone" class="labelinput">TELEFONE</label>
					</div>
					<br><br>

					<div class="inputbox">
						<input type="text" name="email" placeholder="" id="email" class="inputuser" required>	
						<label for="email" class="labelinput">E-MAIL</label>
					</div>
					<br><br>

					
						<label for="ultimo_pagamento"><b>ÚLTIMO PAGAMENTO</b></label>
						<input type="date" name="ultimo_pagamento" placeholder="" id="ultimo_pagamento" class="" required>
					
					<br><br>

					<div class="inputbox">
						<input type="text" name="valor" placeholder="" id="valor" class="inputuser" required>
						<label for="valor" class="labelinput">VALOR</label>
					</div>
					<br><br>

					<input type="submit" name="submit" id="submit" value="enviar">
				</fieldset>
				
			</form>
		</div>
	</div>

</body>
</html>