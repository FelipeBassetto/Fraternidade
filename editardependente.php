<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="jquery.mask.min.js"></script>
<script type="text/javascript" src="css/style.css"></script>

<!--Função PHP-->

<?php
  while($linha = mysqli_fetch_array($consulta_dependentes)){
    if($linha['id_dependente'] == $_GET['editar']){
?>
<!--php para datas -->

<?php
$data = $linha['data_nascimento_dependente'];
$mes = (int) substr(($data),5,7);
$dia = (int) substr(($data),8,10);
$ano = (int) substr(($data),0,4);
$data_process = mktime(00,00,00,$mes,$dia,$ano);
$data_nascimento = date('d/m/Y',$data_process);
?>
<!--Editar-->

<h1 class="titulo">Dados dependente</h1>
<form method="post" action="atualizadependente.php">
    <input type="hidden" name="id_edi" id='id_edi' value="<?php echo $linha['id_dependente'];?>">
    <div class="form-group">
        <label class="badge badge-secondary">Numero do cadastro:</label>
        <input type="text" class="form-control" name="num_cadastro" id="num_cadastro" placeholder="Digite o status" value="<?php echo $linha['num_cadastro'];?> " readonly>
    </div>
    <div class="form-group">
        <label class="badge badge-secondary">Numero da Criança:</label>
        <input type="text" class="form-control" name="num_cria" placeholder="" value="<?php echo $linha['num_crianca'];?> " readonly>
    </div>
    <div class="form-group">
        <label class="badge badge-secondary">Nome:</label>
        <input type="text" class="form-control" name="nome_edi" placeholder="" value="<?php echo $linha['nome_dependente'];?> " id="nome_edi">
    </div>
    <div class="form-group">
        <label class="badge badge-secondary">Data de Nascimento:</label>
        <input type="text" class="form-control" name="data_edi" id="data_edi" placeholder="" value="<?php echo $data_nascimento;?> ">
    </div>
    <div class="form-group">
        <label class="badge badge-secondary">Sexo:</label>
        <input type="text" class="form-control" name="sexo" id="sexo" placeholder="" value="<?php echo $linha['sexo_dependente'];?> ">
    </div>
    <div class="form-group">
        <label class="badge badge-secondary">Rg:</label>
        <input type="text" class="form-control" name="rg_depen" id="rg_depen" placeholder="" value="<?php echo $linha['rg_dependente'];?> ">
    </div>
    <div class="form-group">
        <label class="badge badge-secondary">Grau de parentesco:</label>
        <input type="text" class="form-control" name="grau" placeholder="" value="<?php echo $linha['grau_parentenco'];?> ">
    </div>
    <div class="form-group">
        <label class="badge badge-secondary">Idade:</label>
        <input type="text" class="form-control" name="idade" placeholder="" value="<?php echo $linha['idade_C'];?> " readonly>
    </div>

<!-- validação valor -->
    <?php 
    $value = 'não tem';
    if($linha['tamanho_sapato']== $value){?>
    <div class="form-group">
        <input type="checkbox" onclick="chamacria()" id="botaocria" name="botaocria">  Sou criança
    </div>
    <?php 
    $display = 'none';
    }else{?>
    <div class="form-group">
        <input type="checkbox" onclick="chamacria()" id="botaocria" name="botaocria" checked>  Sou criança
    </div>
    <?php 
    $display = 'block';
    }
    $value2 = '1111-11-11';
    if($linha['data_nascimentoBB']== $value2){?>
    <div class="form-group">
        <input type="checkbox" onclick="chamadata()" id="botaogravida" name="botaogravida">  Estou Gravida
    </div>
    <?php 
    $data2 = $linha['data_nascimentoBB'];
    $mes2 = (int) substr(($data2),5,7);
    $dia2 = (int) substr(($data2),8,10);
    $ano2 = (int) substr(($data2),0,4);
    $data_process2 = mktime(00,00,00,$mes2,$dia2,$ano2);
    $data_nascimento_bb = date('d/m/Y',$data_process2);
    $display2 = 'none';
    }else{?>
    <div class="form-group">
        <input type="checkbox" onclick="chamadata()" id="botaogravida" name="botaogravida" checked>  Estou Gravida
    </div>
    <?php
    $data2 = $linha['data_nascimentoBB'];
    $mes2 = (int) substr(($data2),5,7);
    $dia2 = (int) substr(($data2),8,10);
    $ano2 = (int) substr(($data2),0,4);
    $data_process2 = mktime(00,00,00,$mes2,$dia2,$ano2);
    $data_nascimento_bb = date('d/m/Y',$data_process2);
    echo $data_nascimento_bb;
    $display2 = 'block';
    } 
    if($linha['deficiencia']== $value){?>
    <div class="form-group">
        <input type="checkbox" onclick="chamadef()" id="botaodef" name="botaodef">  Sou Deficiente
    </div>
    <?php 
    $display3 = 'none';
    }else{?>
    <div class="form-group">
        <input type="checkbox" onclick="chamadef()" id="botaodef" name="botaodef" checked>  Sou Deficiente
    </div>
    <?php 
    $display3 = 'block';
    }
    if($linha['fralda']== $value){?>
    <div class="form-group">
        <input type="checkbox" onclick="chamafralda()" id="botaofralda" name="botaofralda">  Preciso de fraldas
    </div>
    <?php 
    $display4 = 'none';
    }else{?>
    <div class="form-group">
        <input type="checkbox" onclick="chamafralda()" id="botaofralda" name="botaofralda" checked>  Preciso de fraldas
    </div>
    <?php 
    $display4 = 'block';
    } ?>
    
    
    
<!-- chamar inputs -->

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

<!-- inputs -->
    <div id="criança" style="display:<?php echo $display?>">
    <div class="form-group">
        <label class="badge badge-secondary">Tamanho do Sapato:</label>
        <input type="text" class="form-control" name="sapato_edi" placeholder="Digite o numero de calçados" value="<?php echo $linha['tamanho_sapato'];?> ">
    </div>
    <div class="form-group">
        <label class="badge badge-secondary">Tamanho da Roupa:</label>
        <input type="text" class="form-control" name="roupa_edi" placeholder="Digite o tamanho da roupa" value="<?php echo $linha['tamanho_roupa'];?> ">
    </div>
    </div>
    <div style="display:<?php echo $display2 ?>" id="gravida">
    <div class="form-group">
        <label class="badge badge-secondary">Data de Nascimento da Bebe:</label>
        <input type="text" class="form-control" name="data_nascimento_edi" placeholder="Digite a data de nascimento dependente" id="nasc_bb_edi" value="<?php echo $data_nascimento_bb;?>">
    </div>
    </div>
    <div style="display:<?php echo $display3 ?>" id="deficiente">
    <div class="form-group">
        <label class="badge badge-secondary">Deficiencia:</label>
        <input type="text" class="form-control" name="deficiencia" placeholder="deficiencia" id="deficiencia" value="<?php echo $linha['deficiencia'];?>" >
    </div>
    </div>
    <div style="display:<?php echo $display4 ?>" id="fraldas">
    <div class="form-group">
        <label class="badge badge-secondary">Fralda:</label>
        <input type="text" class="form-control" name="fralda_edi" placeholder="fralda" id="fralda" value='<?php echo $linha['fralda'];?>'>
    </div>
    </div>

    <input type="submit" class="btn btn-primary" value="Editar dependente">
</form>
<?php } } ?>

<!--Mascara editar-->
<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="jquery.mask.min.js"></script>
<script type="text/javascript" src="css/style.css"></script>  
<script>
  $('#data_edi').mask('00/00/0000');
  $('#nasc_bb_edi').mask('00/00/0000');
  $('#rg_depen').mask('00.000.000-0');
</script>