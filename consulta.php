<link rel="stylesheet" href="estilos.css">

<form method="post" action="consulta.php">
  <input type="text" name="busca" placeholder="Digite o nome para pesquisa" />
  <input type="submit" value="Buscar" />
</form> 

<?php 

include_once "conexao.php";
   try{

  $solicitante = $_POST['busca'];

  $consulta = $conectar->query("SELECT solicitante, data_1, prioridade, previ_exec, bairro, Rua, num_compl, referencia, falar, contato, formFile, data_2, providencia, responsavel_1, data_3, resultado_final, responsavel_2, info_complementares, desc_solic FROM solicitacoes WHERE solicitante like '$solicitante%'");


echo "<table id=titulo><tr><td>Solicitante</td><td>Data</td><td>Prioridade</td><td>Previsão de execução</td><td>Bairro</td><td>Rua</td><td>Nº/Compl</td><td>Referência</td><td>Falar com</td><td>Contato</td><td>Descrição da Solicitação</td><td>Imagem</td><td>Data</td><td>Providência</td><td>Responsável</td><td>Data</td><td>Resultado Final</td><td>Responsável</td><td>Informações Complementares</td></tr> </table>";


	while($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {

		$data_timestamp1 = strtotime($linha[data_1]);
		$linha[data_1] = date("d/m/Y", $data_timestamp1);

		$data_timestamp2 = strtotime($linha[data_2]);
		$linha[data_2] = date("d/m/Y", $data_timestamp2);

		$data_timestamp3 = strtotime($linha[data_3]);
		$linha[data_3] = date("d/m/Y", $data_timestamp3);

		 echo "<table id=corpo><tr><td>$linha[solicitante]</td><td>$linha[data_1]</td><td>$linha[prioridade]</td><td>$linha[previ_exec]</td><td>$linha[bairro]</td><td>$linha[Rua]</td><td>$linha[num_compl]</td><td>$linha[referencia]</td><td>$linha[falar]</td><td>$linha[contato]</td><td>$linha[desc_solic]</td><td>$linha[formFile]</td><td>$linha[data_2]</td><td>$linha[providencia]</td><td>$linha[responsavel_1]</td><td>$linha[data_3]</td><td>$linha[resultado_final]</td><td>$linha[responsavel_2]</td><td>$linha[info_complementares]</td></tr>";
	}


	echo "</table>";

	echo $consulta->rowCount() . " Registros Exibidos" . "<br>";


}catch(PDOException $e){

	echo $e->getMessage();

}

?>

    <button><a href="index.php">Voltar</a> </button>




