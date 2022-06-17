<?php

	$dbHost = 'Localhost';
	$dbUsername = 'root';
	$dbPassword = '';
	$dbName = 'clientes_inadimplentes';

	$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

	/*
	if($conexao->connect_errno){
		echo "Erro ao conectar ao banco de dados";
	}else{
		echo "Conectado ao banco de dados";
	}
	*/
	
?>