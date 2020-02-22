<?php include 'db.php'; ?>
<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<table class="table-lista" id="presenca">
    <tbody>
        <?php
    $idade = $_POST['idade'];
    $consulta_etiqueta = mysqli_query($conexao,  "SELECT * FROM dependentes WHERE idade_C <= $idade");
    $conter = 0;
      while($linha = mysqli_fetch_array($consulta_etiqueta)){
        $id = $linha['num_cadastro'];
        $consulta_people = mysqli_query($conexao,  "SELECT * FROM pessoas WHERE id = '$id'");
        $linha2 = mysqli_fetch_array($consulta_people);
        if($linha2['status'=='ativo']){
            if($conter%2==0){
                ?>
        <div class="div-display">
            <div class="table-etiqueta">
                <div class="div-display">
                    <div class="p-lista  background-cadastro alturadiv">
                        <p class="margin-p">Cadastro:
                            <?php echo $linha['num_cadastro']; ?>
                        </p>
                    </div>
                    <div class="p-lista background-data alturadiv">
                        <p class="margin-p">Entrega até <?php echo $_POST['data_entregar'];?></p>
                    </div>
                </div>
                <div class="div-display">
                    <div class="p-lista background-responsavel alturadiv">
                        <p class="margin-p">Responsável:</p>
                    </div>
                    <div class="p-lista background-nomeres alturadiv">
                        <p class="margin-p"><?php echo $linha2['nome']; ?></p>
                    </div>
                </div>
                <div class="div-display">
                    <div class="p-lista background-nome alturadiv">
                        <p class="margin-p">Nome:</p>
                    </div>
                    <div class="p-lista background-crianca alturadiv">
                        <p class="margin-p"><?php echo $linha['nome_dependente']; ?></p>
                    </div>
                </div>
                <div class="div-display">
                    <div class="p-lista background-sexo alturadiv">
                        <p class="margin-p">Sexo:</p>
                    </div>
                    <div class="p-lista background-MF alturadiv">
                        <p class="margin-p"><?php echo $linha['sexo_dependente']; ?></p>
                    </div>
                </div>
                <div class="div-display">
                    <div class="p-lista background-idade alturadiv">
                        <p class="margin-p">Idade:</p>
                    </div>
                    <div class="p-lista background-num alturadiv">
                        <p class="margin-p"><?php echo $linha['idade_C']; ?></p>
                    </div>
                </div>
                <div class="div-display">
                    <div class="p-lista background-roupa alturadiv">
                        <p class="margin-p">Nº Roupa:</p>
                    </div>
                    <div class="p-lista background-tamanhoroupa alturadiv">
                        <p class="margin-p"><?php echo $linha['tamanho_roupa']; ?></p>
                    </div>
                </div>
                <div class="div-display">
                    <div class="p-lista background-sapato alturadiv">
                        <p class="margin-p">Calçado:</p>
                    </div>
                    <div class="p-lista background-tamanhosapato alturadiv">
                        <p class="margin-p"><?php echo $linha['tamanho_sapato']; ?></p>
                    </div>
                </div>
                <div class="div-display">
                    <div class="p-lista background-brinquedo alturadiv">
                        <p class="margin-p">Brinquedo:</p>
                    </div>
                    <div class="p-lista background-estado alturadiv">
                        <p class="margin-p">Novo</p>
                    </div>
                </div>
                <div class="div-display">
                    <div class="p-lista background-nescessidade alturadiv">
                        <p class="margin-p">Ne. Especiais:</p>
                    </div>
                    <div class="p-lista background-especiais alturadiv">
                        <p class="margin-p"><?php echo $linha['deficiencia']; ?></p>
                    </div>
                </div>
                <div class="div-display">
                    <div class="p-lista background-fralda alturadiv">
                        <p class="margin-p">Fralda:</p>
                    </div>
                    <div class="p-lista background-tamanhofralda alturadiv">
                        <p class="margin-p"><?php echo $linha['fralda']; ?></p>
                    </div>
                </div>
                <div class="p-lista caixabombom alturadiv">
                    <p class="margin-p">Caixa de bombom Nestlê, Garoto ou Lacta.</p>
                </div>
                <div class="p-lista obs alturadiv">
                    <p class="margin-p">obs: Incluir roupa intíma e embalar todos os presentes.</p>
                </div>
            </div>
            <br />
            <?php
                $conter = $conter +1;
            }else{
                ?>
            <div class="table-etiqueta alinhadiv">
                <div class="div-display">
                    <div class="p-lista background-cadastro alturadiv">
                        <p class="margin-p">Cadastro:<?php echo $linha['num_cadastro']; ?></p>
                    </div>
                    <div class="p-lista background-data alturadiv">
                        <p class="margin-p">Entrega até <?php echo $_POST['data_entregar'];?></p>
                    </div>
                </div>
                <div class="div-display">
                    <div class="p-lista background-responsavel alturadiv">
                        <p class="margin-p">Responsável:</p>
                    </div>
                    <div class="p-lista background-nomeres alturadiv">
                        <p class="margin-p"><?php echo $linha2['nome']; ?></p>
                    </div>
                </div>
                <div class="div-display">
                    <div class="p-lista background-nome alturadiv">
                        <p class="margin-p">nome:</p>
                    </div>
                    <div class="p-lista background-crianca alturadiv">
                        <p class="margin-p"><?php echo $linha['nome_dependente']; ?></p>
                    </div>
                </div>
                <div class="div-display">
                    <div class="p-lista background-sexo alturadiv">
                        <p class="margin-p">Sexo:</p>
                    </div>
                    <div class="p-lista background-MF alturadiv">
                        <p class="margin-p"><?php echo $linha['sexo_dependente']; ?></p>
                    </div>
                </div>
                <div class="div-display">
                    <div class="p-lista background-idade alturadiv">
                        <p class="margin-p">Idade:</p>
                    </div>
                    <div class="p-lista background-num alturadiv">
                        <p class="margin-p"><?php echo $linha['idade_C']; ?></p>
                    </div>
                </div>
                <div class="div-display">
                    <div class="p-lista background-roupa alturadiv">
                        <p class="margin-p">Nº Roupa:</p>
                    </div>
                    <div class="p-lista background-tamanhoroupa alturadiv">
                        <p class="margin-p"><?php echo $linha['tamanho_roupa']; ?></p>
                    </div>
                </div>
                <div class="div-display">
                    <div class="p-lista background-sapato alturadiv">
                        <p class="margin-p">Calçado:</p>
                    </div>
                    <div class="p-lista background-tamanhosapato alturadiv">
                        <p class="margin-p"><?php echo $linha['tamanho_sapato']; ?></p>
                    </div>
                </div>
                <div class="div-display">
                    <div class="p-lista background-brinquedo alturadiv">
                        <p class="margin-p">Brinquedo:</p>
                    </div>
                    <div class="p-lista background-estado alturadiv">
                        <p class="margin-p">Novo</p>
                    </div>
                </div>
                <div class="div-display">
                    <div class="p-lista background-nescessidade alturadiv">
                        <p class="margin-p">Ne. Especiais:</p>
                    </div>
                    <div class="p-lista background-especiais alturadiv">
                        <p class="margin-p"><?php echo $linha['deficiencia']; ?></p>
                    </div>
                </div>
                <div class="div-display">
                    <div class="p-lista background-fralda alturadiv">
                        <p class="margin-p">Fralda:</p>
                    </div>
                    <div class="p-lista background-tamanhofralda alturadiv">
                        <p class="margin-p"><?php echo $linha['fralda']; ?></p>
                    </div>
                </div>
                <div class="p-lista caixabombom alturadiv">
                    <p class="margin-p">Caixa de bombom Nestlê, Garoto ou Lacta.</p>
                </div>
                <div class="p-lista obs alturadiv">
                    <p class="margin-p">obs: Incluir roupa intíma e embalar todos os presentes.</p>
                </div>
            </div>
        </div>
            </div>
        <br />
        <?php
                $conter = $conter +1;
            }
        }
      }
    ?>

        <?php
echo '<form>
<input type="button" value="Imprimir etiquetas" onClick="window.print()"/>
</form>';
?>