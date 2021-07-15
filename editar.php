<?php 

include_once "conexao.php";

try{

	$id_registro = filter_var($_POST['id_registro'], FILTER_SANITIZE_NUMBER_INT);
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
	$formFile = filter_var($_POST['formFile']);
	$data_2 = filter_var($_POST['data_2']);
	$providencia = filter_var($_POST['providencia']);
	$responsavel_1 = filter_var($_POST['responsavel_1']);
	$data_3 = filter_var($_POST['data_3']);
	$resultado_final = filter_var($_POST['resultado_final']);
	$responsavel_2 = filter_var($_POST['responsavel_2']);
	$info_complementares = filter_var($_POST['info_complementares']);

	//inserindo os dados
	$update = $conectar->prepare("UPDATE solicitacoes SET solicitante= :solicitante, data_1= :data_1, prioridade= :prioridade, previ_exec= :previ_exec, bairro=:bairro, Rua= :Rua, num_compl= :num_compl, referencia= :referencia, falar= :falar, contato= :contato, desc_solic= :desc_solic, formFile= :formFile, data_2= :data_2, providencia= :providencia, responsavel_1= :responsavel_1, data_3= :data_3, resultado_final= :resultado_final, responsavel_2= :responsavel_2, info_complementares= :info_complementares WHERE id_registro = :id_registro");

	$update->bindParam(':id_registro', $id_registro);
	$update->bindParam(':solicitante', $solicitante);
	$update->bindParam(':data_1', $data_1);
	$update->bindParam(':prioridade', $prioridade);
	$update->bindParam(':previ_exec', $previ_exec);
	$update->bindParam(':bairro', $bairro);
	$update->bindParam(':Rua', $Rua);
	$update->bindParam(':num_compl', $num_compl);
	$update->bindParam(':referencia', $referencia);
	$update->bindParam(':falar', $falar);
	$update->bindParam(':contato', $contato);
	$update->bindParam(':desc_solic', $desc_solic);
	$update->bindParam(':formFile', $formFile);
	$update->bindParam(':data_2', $data_2);
	$update->bindParam(':providencia', $providencia);
	$update->bindParam(':responsavel_1', $responsavel_1);
	$update->bindParam(':data_3', $data_3);
	$update->bindParam(':resultado_final', $resultado_final);
	$update->bindParam(':responsavel_2', $responsavel_2);
	$update->bindParam(':info_complementares', $info_complementares);
	$update->execute();

	header("location: index.php");

}catch(PDOException $e){

	echo 'Erro: ' . $e->getMessage();

}

?>