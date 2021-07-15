<?php 

	include_once "conexao.php";

	//Garantindo que só vai aceitar se o id for um número inteiro
	$id_registro = filter_var($_GET['id_registro'], FILTER_SANITIZE_NUMBER_INT);

	$consulta = $conectar->query("SELECT * FROM solicitacoes WHERE id_registro = '$id_registro'");
	$linha = $consulta->fetch(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Registro e acompanhamento de solicitações de serviços</title>

	<link rel="stylesheet" href="estilos.css">
</head>
<body>
<form action="editar.php" method="post">
    <h3>Registro e acompanhamento de solicitações de serviços</h3>

<div class="direita">
        <label for="solicitante">Solicitante:</label>
        <input type="text" name="solicitante" value="<?php echo $linha['solicitante']?>" id="solicitante" autofocus="true" />
    </div>


<div class="esquerda">
        <label for="data_1">Data:</label>
        <input type="date" name="data_1" value="<?php echo $linha['data_1']?>" id="data_1" /> 
    </div>

    <div class="esquerda">
        <label for="prioridade">Prioridade:</label>
        <input type="text" name="prioridade" value="<?php echo $linha['prioridade']?>" id="prioridade" />
    </div>

    <div class="direita">
        <label for="exec">Previsão de execução:</label>
        <input type="text" name="previ_exec" value="<?php echo $linha['previ_exec']?>" id="previ_exec" />
    </div>

    <div class="esquerda">
        <label for="bairro">Bairro:</label>
        <input type="text" name="bairro" value="<?php echo $linha['bairro']?>" id="bairro" />
    </div>

    <div class="direita">
        <label for="Rua">Rua:</label>
        <input type="text" name="Rua" value="<?php echo $linha['Rua']?>" id="Rua" />
    </div>

      <div class="esquerda">
        <label for="num">Nº / Compl:</label>
        <input type="text" name="num_compl" value="<?php echo $linha['num_compl']?>" id="num_compl" />
    </div>

     <div class="direita">
        <label for="referencia">Referência:</label>
        <input type="text" name="referencia" value="<?php echo $linha['referencia']?>" id="referencia" />
    </div>

      <div class="esquerda">
        <label for="falar">Falar com:</label>
        <input type="text" name="falar" value="<?php echo $linha['falar']?>" id="falar" />
    </div>

    <div class="direita">
        <label for="contato">Contato:</label>
        <input type="text" placeholder="(00) 0000-0000" data-mask="(00) 0000-0000" maxlength="15" autocomplete="off" name="contato" value="<?php echo $linha['contato']?>" id="contato" />
    </div>

<h3>Descrição da solicitação (se possível, anexar fotos):</h3>


    <div>
        <label for="desc_solic"></label>
        <textarea  name="desc_solic" value="<?php echo $linha['desc_solic']?>" id="desc_solic"></textarea>
        <p> </p>
        <label for="formFile" class="form-label">Selecione um arquivo</label>
                <input class="form-control" type="file" name="formFile" value="<?php echo $linha['formFile']?>" id="formFile">
    </div>

    <h3>Acompanhamento:</h3>

     <div class="esquerda">
        <label for="data_2">Data:</label>
        <input type="date" name="data_2" value="<?php echo $linha['data_2']?>" id="data_2" />
    </div>

     <div class="direita">
        <label for="providencia">Providência:</label>
        <input type="text" name="providencia" value="<?php echo $linha['providencia']?>" id="providencia" />
    </div>

    <div class="esquerda">
        <label for="responsavel_1">Responsável:</label>
        <input type="text" name="responsavel_1" value="<?php echo $linha['responsavel_1']?>" id="responsavel_1" />
    </div>

    <h3>Conclusão:</h3>

    <div class="esquerda">
        <label for="data_3">Data:</label>
        <input type="date" name="data_3" value="<?php echo $linha['data_3']?>" id="data_3" />
    </div>

     <div class="direita">
        <label for="resultado_final">Resultado Final:</label>
        <input type="text" name="resultado_final" value="<?php echo $linha['resultado_final']?>" id="resultado_final" />
    </div>

     <div class="esquerda">
        <label for="responsavel_2">Responsável:</label>
        <input type="text" name="responsavel_2" value="<?php echo $linha['responsavel_2']?>" id="responsavel_2" />
    </div>

    <h3>Informações complementares e observações:</h3>

     <div>
        <label for="info_complementares"></label>
        <textarea  name="info_complementares" value="<?php echo $linha['info_complementares']?>" id="info_complementares"></textarea>
        <p> </p>
    </div>

    <input type="hidden" name="id_registro" value="<?php echo $linha['id_registro']?>" >
    <input type="submit" value="Editar">
    <button><a href="index.php">Cancelar</a> </button>
</form> 



</body>
</html>