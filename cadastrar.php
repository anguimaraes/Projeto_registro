<?php 

include_once "conexao.php";

try{

	$solicitante = filter_var($_POST['solicitante']);
	$data_1 = filter_var($_POST['data_1']);
	$prioridade = filter_var($_POST['prioridade']);
	$previ_exec = filter_var($_POST['previ_exec']);
	$bairro = filter_var($_POST['bairro']);
	$Rua = filter_var($_POST['Rua']);
	$num_compl = filter_var($_POST['num_compl']);
	$referencia = filter_var($_POST['referencia']);
	$falar = filter_var($_POST['falar']);
	$contato = filter_var($_POST['contato']);
	$desc_solic = filter_var($_POST['desc_solic']);
	$data_2 = filter_var($_POST['data_2']);
	$providencia = filter_var($_POST['providencia']);
	$responsavel_1 = filter_var($_POST['responsavel_1']);
	$data_3 = filter_var($_POST['data_3']);
	$resultado_final = filter_var($_POST['resultado_final']);
	$responsavel_2 = filter_var($_POST['responsavel_2']);
	$info_complementares = filter_var($_POST['info_complementares']);

	//inserindo os dados
	$insert = $conectar->prepare("INSERT INTO solicitacoes (solicitante, data_1, prioridade,previ_exec, bairro, Rua, num_compl, referencia, falar, contato, desc_solic, data_2, providencia, responsavel_1, data_3, resultado_final, responsavel_2, info_complementares) VALUES (:solicitante, :data_1, :prioridade, :previ_exec, :bairro, :Rua, :num_compl, :referencia, :falar, :contato, :desc_solic, :data_2, :providencia, :responsavel_1, :data_3, :resultado_final, :responsavel_2, :info_complementares)");

	$insert->bindParam(':solicitante', $solicitante);
	$insert->bindParam(':data_1', $data_1);
	$insert->bindParam(':prioridade', $prioridade);
	$insert->bindParam(':previ_exec', $previ_exec);
	$insert->bindParam(':bairro', $bairro);
	$insert->bindParam(':Rua', $Rua);
	$insert->bindParam(':num_compl', $num_compl);
	$insert->bindParam(':referencia', $referencia);
	$insert->bindParam(':falar', $falar);
	$insert->bindParam(':contato', $contato);
	$insert->bindParam(':desc_solic', $desc_solic);
	$insert->bindParam(':data_2', $data_2);
	$insert->bindParam(':providencia', $providencia);
	$insert->bindParam(':responsavel_1', $responsavel_1);
	$insert->bindParam(':data_3', $data_3);
	$insert->bindParam(':resultado_final', $resultado_final);
	$insert->bindParam(':responsavel_2', $responsavel_2);
	$insert->bindParam(':info_complementares', $info_complementares);
	$insert->execute();

	header("location: index.php");

}catch(PDOException $e){

	echo 'Erro: ' . $e->getMessage();

}

?>