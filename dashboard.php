<?php
	include_once('config.php');
	$sql = "SELECT * FROM usuarios ORDER BY id DESC";

	$result = $conexao->query($sql);

	print_r($result);
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<title>CONTROLE DE CLIENTES INADIPLENTES</title>

	<style type="text/css">
		
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container-fluid">
			<a class="navbar-brand" href="">CONTROLE DE CLIENTES INADIPLENTES</a>
			<!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" >Search</button>
			<span class="navbar-toggler-icon"></span> -->
		</div>
		<div class="d-flex">
			<a href="" class="btn btn-danger me-5">SAIR</a>
		</div>
	</nav>
	<br>
	<?php
		echo "<h1>Bem vindo <u>usuario@usuario@gmail.com</u></h1>";
	?>
	<br><br>
	<div class="m-5">
		<table class="table text-white table-bg">
		  	<thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Dominio</th>
			      <th scope="col">Nome</th>
			      <th scope="col">Telefone</th>
			      <th scope="col">E-mail</th>
			      <th scope="col">Ultimo Pagamento</th>
			      <th scope="col">Valor</th>
			      <th scope="col">...</th>
			    </tr>
		  	</thead>
		  	<tbody>
		    	<?php 
		    		while ($user_data = mysqli_fetch_assoc($result)) {
		    			echo "<tr>";
		    			echo "<td>".$user_data['id']."</td>";
		    			echo "<td>".$user_data['dominio']."</td>";
		    			echo "<td>".$user_data['nome']."</td>";
		    			echo "<td>".$user_data['telefone']."</td>";
		    			echo "<td>".$user_data['email']."</td>";
		    			echo "<td>".$user_data['ultimo_pagamento']."</td>";
		    			echo "<td>".$user_data['valor']."</td>";
		    			echo "</tr>";
		    		}
		    	?>
		  	</tbody>
		</table>
	</div>
</body>
</html>