<link rel="stylesheet" href="estilos.css">


<h2>Listagem de Cadastros</h2>

<?php

	include_once "conexao.php";

  $solicitante = $_POST['busca'];
  
  //comando SQL de cadastro
  			 $select = $conectar->query("SELECT * FROM solicitacoes ORDER BY solicitante")->fetchAll();
 
   // atribuindo a quantidade de linhas retornadas
   		$count = count($select);
 
  

    
   try{

	//execução da instrução sql

			$consulta = $conectar->query("SELECT * FROM solicitacoes");

	echo "<table id=titulo><tr><td>Solicitante</td><td>Data</td><td>Prioridade</td><td>Previsão de execução</td><td>Bairro</td><td>Rua</td><td>Nº/Compl</td><td>Referência</td><td>Falar com</td><td>Contato</td><td>Descrição da Solicitação</td><td>Data</td><td>Providência</td><td>Responsável</td><td>Data</td><td>Resultado Final</td><td>Responsável</td><td>Informações Complementares</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ações</td></tr> </table>";


	while($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {

		$data_timestamp1 = strtotime($linha[data_1]);
		$linha[data_1] = date("d/m/Y", $data_timestamp1);

		$data_timestamp2 = strtotime($linha[data_2]);
		$linha[data_2] = date("d/m/Y", $data_timestamp2);

		$data_timestamp3 = strtotime($linha[data_3]);
		$linha[data_3] = date("d/m/Y", $data_timestamp3);

		 echo "<table id=corpo><tr><td>$linha[solicitante]</td><td>$linha[data_1]</td><td>$linha[prioridade]</td><td>$linha[previ_exec]</td><td>$linha[bairro]</td><td>$linha[Rua]</td><td>$linha[num_compl]</td><td>$linha[referencia]</td><td>$linha[falar]</td><td>$linha[contato]</td><td>$linha[desc_solic]</td><td>$linha[data_2]</td><td>$linha[providencia]</td><td>$linha[responsavel_1]</td><td>$linha[data_3]</td><td>$linha[resultado_final]</td><td>$linha[responsavel_2]</td><td>$linha[info_complementares]</td><td><button id=botaoEditar><a href='formEditar.php?id_registro=$linha[id_registro]'>Editar</a></button><button id=botaoExcluir><a href='excluir.php?id_registro=$linha[id_registro]'>Excluir</a></button></td></tr>";
	}


	echo "</table>";

	echo $consulta->rowCount() . " Registros Exibidos" . "<br>";


}catch(PDOException $e){

	echo $e->getMessage();

}
?>

<br>
<button><a href="formCadastro.php">Novo Cadastro</a> </button>

<div id="botao-consulta">
    <button><a href="consulta.php">Consultar Registro</a> </button>
</div>   


