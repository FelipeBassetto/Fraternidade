<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="jquery.mask.min.js"></script>
<h1 class='titulo'>Selecione oque deseja imprimir.</h1>
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
    if($("#etiqueta").is(":checked")){
        $('#formetiqueta').css("display","block");
        $('#formsacolinha').css("display","none");
        $('#formpresenca').css("display","none");
    } else if($("#sacolinha").is(":checked")){
        $('#formsacolinha').css("display","block");
        $('#formetiqueta').css("display","none");
        $('#formpresenca').css("display","none");
    } else if($("#presenca").is(":checked")){
        $('#formpresenca').css("display","block");
        $('#formetiqueta').css("display","none");
        $('#formsacolinha').css("display","none");
    } else{
        $('#formetiqueta').css("display","none");
        $('#formsacolinha').css("display","none");
        $('#formpresenca').css("display","none");
    }
    }
</script>
<form method="post" action="etiqueta.php" target="_blank" id="formetiqueta" style="display:none">
    <label class="badge badge-secondary">Data de entrega:</label>
    <input type="text" class="form-control" name="data_entregar" placeholder="Digite a data da entrega" id="data_entregar">
    <label class="badge badge-secondary">Idade Maxima:</label> 
    <input type="text" class="form-control" name="idade" placeholder="Digite a idade maxima" id="idade">   
    <br/>
    <input type="submit" class="btn btn-primary" value="Gerar Etiquetas" >
    <br/>
</form>
<form method="post" action="sacolinhas.php" target="_blank" id="formsacolinha" style="display:none">
<label class="badge badge-secondary">Idade Maxima da sacolinha:</label>
    <input type="text" class="form-control" name="idade_sacolinha" placeholder="Digite a idade maxima" id="idade_sacolinha">   
    <br/>
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
    $('#data_entregar').mask('00/00/0000');
</script>
