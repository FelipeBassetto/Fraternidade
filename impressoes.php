<h1 class='titulo'>Selecione oque deseja imprimir.</h1>
<form method="post" action="processadependente.php">
    <div class="form-group">
        <input type="radio" onclick="chamacartao()" value="botaocartao" name='impressao'>  Cartões das pessoas.
    </div>
    <div class="form-group">
        <input type="radio" onclick="chamaetiqueta()" value="botaoetiqueta" name='impressao'>  Etiquetas.
    </div>
    <div class="form-group">
        <input type="radio" onclick="chamasacolinhas()" value="botaosacolinhas" name='impressao'>  Lista das Sacolinhas.
    </div>
    <div class="form-group">
        <input type="radio" onclick="chamapresenca()" value="botaopresenca" name='impressao'>  Lista de presença.
    </div>
    <input type="submit" class="btn btn-primary" value="Gerar impressão" >
    <br/>
</form>
