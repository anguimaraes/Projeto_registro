<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Registro e acompanhamento de solicitações de serviços</title>

	<link rel="stylesheet" href="estilos.css">

    <script>
        
        /* Máscaras ER */
function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
function mtel(v){
    v=v.replace(/\D/g,""); //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}
function id( el ){
    return document.getElementById( el );
}
window.onload = function(){
    id('contato').onkeyup = function(){
        mascara( this, mtel );
    }
}

    </script>
</head>
<body>
<form action="cadastrar.php" method="post">
    <h3>Registro e acompanhamento de solicitações de serviços</h3>

<div class="direita">
        <label for="solicitante">Solicitante:</label>
        <input type="text" name="solicitante" id="solicitante" autofocus="true" />
    </div>


<div class="esquerda">
        <label for="data_1">Data:</label>
        <input type="date" name="data_1" id="data_1" /> 
    </div>

    <div class="esquerda">
        <label for="prioridade">Prioridade:</label>
        <input type="text" name="prioridade" id="prioridade" />
    </div>

    <div class="direita">
        <label for="exec">Previsão de execução:</label>
        <input type="text" name="previ_exec" id="previ_exec" />
    </div>

    <div class="esquerda">
        <label for="bairro">Bairro:</label>
        <input type="text" name="bairro" id="bairro" />
    </div>

    <div class="direita">
        <label for="Rua">Rua:</label>
        <input type="text" name="Rua" id="Rua" />
    </div>

      <div class="esquerda">
        <label for="num">Nº / Compl:</label>
        <input type="text" name="num_compl" id="num_compl" />
    </div>

     <div class="direita">
        <label for="referencia">Referência:</label>
        <input type="text" name="referencia" id="referencia" />
    </div>

      <div class="esquerda">
        <label for="falar">Falar com:</label>
        <input type="text" name="falar" id="falar" />
    </div>

    <div class="direita">
        <label for="contato">Contato:</label>
        <input type="text" placeholder="Digite um número de telefone" maxlength="15" name="contato" id="contato" />
    </div>

<h3>Descrição da solicitação:</h3>


    <div>
        <label for="desc_solic"></label>
        <textarea  name="desc_solic" id="desc_solic"></textarea>
    </div>

    <h3>Acompanhamento:</h3>

     <div class="esquerda">
        <label for="data_2">Data:</label>
        <input type="date" name="data_2" id="data_2" />
    </div>

     <div class="direita">
        <label for="providencia">Providência:</label>
        <input type="text" name="providencia" id="providencia" />
    </div>

    <div class="esquerda">
        <label for="responsavel_1">Responsável:</label>
        <input type="text" name="responsavel_1" id="responsavel_1" />
    </div>

    <h3>Conclusão:</h3>

    <div class="esquerda">
        <label for="data_3">Data:</label>
        <input type="date" name="data_3" id="data_3" />
    </div>

     <div class="direita">
        <label for="resultado_final">Resultado Final:</label>
        <input type="text" name="resultado_final" id="resultado_final" />
    </div>

     <div class="esquerda">
        <label for="responsavel_2">Responsável:</label>
        <input type="text" name="responsavel_2" id="responsavel_2" />
    </div>

    <h3>Informações complementares e observações:</h3>

     <div>
        <label for="info_complementares"></label>
        <textarea  name="info_complementares" id="info_complementares"></textarea>
        <p> </p>
    </div>

    <div id="botao-cadastrar">
    <button type="submit">Cadastrar</button>
    <button><a href="index.php">Cancelar</a> </button>
    </div>
</form> 



</body>
</html>