<h1 class='titulo'>Selecione oque deseja imprimir.</h1>
<form method="post" action="processadependente.php">
    <div class="form-group">
        <input type="radio" onclick="chamacartao()" id="impressao">  Cartões das pessoas.
    </div>
    <div class="form-group">
        <input type="radio" onclick="chamaetiqueta()" id="impressao">  Etiquetas.
    </div>
    <div class="form-group">
        <input type="radio" onclick="chamasacolinhas()" id="impressao">  Lista das Sacolinhas.
    </div>
    <div class="form-group">
        <input type="radio" onclick="chamapresenca()" id="impressao">  Lista de presença.
    </div>
    <input type="submit" class="btn btn-primary" value="Gerar impressão" >
    <br/>
</form>
