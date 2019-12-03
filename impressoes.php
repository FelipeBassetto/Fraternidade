<h1 class='titulo'>Selecione oque deseja imprimir.</h1>
<form method="post" action="processadependente.php">
    <div class="form-group">
        <input type="radio" onclick="chamacartao()" id="botaocartao">  Cartões das pessoas.
    </div>
    <div class="form-group">
        <input type="radio" onclick="chamaetiqueta()" id="botaoetiqueta">  Etiquetas.
    </div>
    <div class="form-group">
        <input type="radio" onclick="chamasacolinhas()" id="botaosacolinhas">  Lista das Sacolinhas.
    </div>
    <div class="form-group">
        <input type="radio" onclick="chamapresenca()" id="botaopresenca">  Lista de presença.
    </div>
    <input type="submit" class="btn btn-primary" value="Gerar impressão" >
    <br/>
</form>
