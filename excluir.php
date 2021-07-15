<?php 

include_once "conexao.php";

try{

	$id_registro = filter_var($_GET['id_registro'], FILTER_SANITIZE_NUMBER_INT);

	//inserindo os dados
	$delete = $conectar->prepare("DELETE FROM solicitacoes WHERE id_registro = :id_registro");

	$delete->bindParam(':id_registro', $id_registro);
	$delete->execute();

	header("location: index.php");

}catch(PDOException $e){

	echo 'Erro: ' . $e->getMessage();

}

?>