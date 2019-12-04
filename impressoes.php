<h1 class='titulo'>Selecione oque deseja imprimir.</h1>
<form method="post" action="<script>processoimprimir.js</script>">
    <div class="form-group">
        <input type="radio" value="cartao" name='impressao' id='impressao' >  Cartões das pessoas.
    </div>
    <div class="form-group">
        <input type="radio" value="etiqueta" name='impressao' id='impressao'>  Etiquetas.
    </div>
    <div class="form-group">
        <input type="radio" value="sacolinhas" name='impressao' id='impressao'>  Lista das Sacolinhas.
    </div>
    <div class="form-group">
        <input type="radio" value="presenca" name='impressao' id='impressao'>  Lista de presença.
    </div>
    <input type="submit" class="btn btn-primary" value="Gerar impressão" >
    <br/>
</form>
