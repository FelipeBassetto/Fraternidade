<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="jquery.mask.min.js"></script>
<script type="text/javascript" src="css/style.css"></script>  


<form method="post" action="processadependente.php">
    <h1 class='titulo'>Cadastro de dependentes.</h1>
    <input type="hidden" name="id_dependente" id='id' value="<?php echo $_GET['cadastro'];?>">  
    <div class="form-group">
        <label class="badge badge-secondary">Nome:</label>
        <input type="text" class="form-control" name="nome_D" placeholder="Digite o nome do dependende">
    </div>
    <div class="form-group">
        <label class="badge badge-secondary">Data de Nascimento:</label>
        <input type="text" class="form-control" name="data" placeholder="Digite a data de nascimento dependente" id="data_nascimentoD">
    </div>
    <div class="form-group">
        <label class="badge badge-secondary">Sexo:</label>
        <input type="text" class="form-control" name="sexo" placeholder="Digite o seu sexo">
    </div>
    <div class="form-group">
        <label class="badge badge-secondary">Rg:</label>
        <input type="text" class="form-control" name="rg_D" placeholder="Rg dependente" id='rg_D'>
    </div>
    <div class="form-group">
        <label class="badge badge-secondary">Grau de parentesco:</label>
        <input type="text" class="form-control" name="grau_parentenco" placeholder="Digite o grau de parentesco">
    </div>
    <div class="form-group">
        <input type="checkbox" onclick="chamacria()" id="botaocria" name="botaocria">  Sou criança
    </div>

    <div class="form-group">
        <input type="checkbox" onclick="chamadata()" id="botaogravida" name="botaogravida">  Estou Gravida
    </div>
    <div class="form-group">
        <input type="checkbox" onclick="chamadef()" id="botaodef">  Sou Deficiente
    </div>
    <div class="form-group">
        <input type="checkbox" onclick="chamafralda()" id="botaofralda">  Preciso de fraldas
    </div>

    <script>
        function chamacria() {
        if($("#botaocria").is(":checked")){
            $('#criança').css("display","block");
        } else {
            $('#criança').css("display","none");
        }
        }
        function chamadata() {
        if($("#botaogravida").is(":checked")){
            $('#gravida').css("display","block");
        } else {
            $('#gravida').css("display","none");
        }
        }
        function chamadef() {
        if($("#botaodef").is(":checked")){
            $('#deficiente').css("display","block");
        } else {
            $('#deficiente').css("display","none");
        }
        }
        function chamafralda() {
        if($("#botaofralda").is(":checked")){
            $('#fraldas').css("display","block");
        } else {
            $('#fraldas').css("display","none");
        }
        }
    </script>
    <div style="display:none" id="criança">
    <div class="form-group">
        <label class="badge badge-secondary">Tamanho do Sapato:</label>
        <input type="text" class="form-control" name="sapato" placeholder="Digite o numero de calçados">
    </div>
    <div class="form-group">
        <label class="badge badge-secondary">Tamanho da Roupa:</label>
        <input type="text" class="form-control" name="roupa" placeholder="Digite o tamanho da roupa">
    </div>
    </div>
    <div style="display:none" id="gravida">
    <div class="form-group">
        <label class="badge badge-secondary">Data de Nascimento da Bebe:</label>
        <input type="text" class="form-control" name="data_nascimentoD" placeholder="Digite a data de nascimento dependente" id="nasc_bb">
    </div>
    </div>
    <div style="display:none" id="deficiente">
    <div class="form-group">
        <label class="badge badge-secondary">Deficiencia:</label>
        <input type="text" class="form-control" name="deficiencia" placeholder="deficiencia" id="deficiencia" >
    </div>
    </div>
    <div style="display:none" id="fraldas">
    <div class="form-group">
        <label class="badge badge-secondary">Fralda:</label>
        <input type="text" class="form-control" name="fralda" placeholder="fralda" id="fralda">
    </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Cadastrar Dependente" >
    <br/>
</form>
<!--Mascaras dependente-->

<script>
    $('#data_nascimentoD').mask('00/00/0000');
    $('#rg_D').mask('00.000.000-0');
  </script>
