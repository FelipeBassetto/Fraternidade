<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="jquery.mask.min.js"></script>
<h1 class='titulo'>Selecione oque deseja imprimir.</h1>
<div class="form-group">
    <input type="radio" value="cartao" name='impressao' id='cartao' onclick="verifica()" >  Cartões das pessoas.
</div>
<div class="form-group">
    <input type="radio" value="etiqueta" name='impressao' id='etiqueta' onclick="verifica()">  Etiquetas.
</div>
<div class="form-group">
    <input type="radio" value="sacolinhas" name='impressao' id='sacolinha' onclick="verifica()">  Lista das Sacolinhas.
</div>
<div class="form-group">
    <input type="radio" value="presenca" name='impressao' id='presenca' onclick="verifica()">  Lista de presença.
</div>

<!--chamar forms-->
<script>
    function verifica() {
    if($("#cartao").is(":checked")){
        $('#formcartao').css("display","block");
        $('#formetiqueta').css("display","none");
        $('#formsacolinha').css("display","none");
        $('#formpresenca').css("display","none");
    } else if($("#etiqueta").is(":checked")){
        $('#formetiqueta').css("display","block");
        $('#formcartao').css("display","none");
        $('#formsacolinha').css("display","none");
        $('#formpresenca').css("display","none");
    } else if($("#sacolinha").is(":checked")){
        $('#formsacolinha').css("display","block");
        $('#formcartao').css("display","none");
        $('#formetiqueta').css("display","none");
        $('#formpresenca').css("display","none");
    } else if($("#presenca").is(":checked")){
        $('#formpresenca').css("display","block");
        $('#formcartao').css("display","none");
        $('#formetiqueta').css("display","none");
        $('#formsacolinha').css("display","none");
    } else{
        $('#formcartao').css("display","none");
        $('#formetiqueta').css("display","none");
        $('#formsacolinha').css("display","none");
        $('#formpresenca').css("display","none");
    }
    }
</script>
<form method="post" action="cartao.php" target="_blank" id="formcartao" style="display:none">
    <input type="submit" class="btn btn-primary" value="Gerar cartões" >
    <br/>
</form>
<form method="post" action="etiqueta.php" target="_blank" id="formetiqueta" style="display:none">
    <input type="submit" class="btn btn-primary" value="Gerar Etiquetas" >
    <br/>
</form>
<form method="post" action="sacolinhas.php" target="_blank" id="formsacolinha" style="display:none">
    <input type="submit" class="btn btn-primary" value="Gerar Lista" >
    <br/>
</form>
<form method="post" action="presenca.php" target="_blank" id="formpresenca" style="display:none">
<label class="badge badge-secondary">Data da Entrega:</label>
    <input type="text" class="form-control" name="data_entrega" placeholder="Digite a data da entrega" id="data_entrega">
    <br/>
    <input type="submit" class="btn btn-primary" value="Gerar Lista" >
    <br/>
</form>
<script>
    $('#data_entrega').mask('00/00/0000');
</script>
