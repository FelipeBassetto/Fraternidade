<h1 class='titulo'>Selecione oque deseja imprimir.</h1>
<form method="post" action="processadependente.php">
    <div class="form-group">
        <input type="checkbox" onclick="chamasacolinhas()" id="botaosacolinhas">  Cartões das pessoas.
    </div>
    <div class="form-group">
        <input type="checkbox" onclick="chamaetiqueta()" id="botaoetiqueta">  Etiquetas.
    </div>
    <div class="form-group">
        <input type="checkbox" onclick="chamasacolinhas()" id="botaosacolinhas">  Lista das Sacolinhas.
    </div>
    <div class="form-group">
        <input type="checkbox" onclick="chamasacolinhas()" id="botaosacolinhas">  Lista de presença.
    </div>
    <input type="submit" class="btn btn-primary" value="Cadastrar Dependente" >
    <br/>
</form>
