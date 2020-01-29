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
        <div>
            <div class="table-etiqueta">
                <div class="div-cadastro background-cadastro">
                    <div class="p-lista">
                        <p>Cadastro: .........
                            <?php echo $linha['num_cadastro']; ?>
                        </p>
                    </div>
                    <div class="p-lista background-data">
                        <p>Entrega até <?php echo $_POST['data_entregar'];?></p>
                    </div>
                </div>
                <div>
                    <div class="p-lista">
                        <p>Responsável:</p>
                    </div>
                    <div class="p-lista">
                        <p><?php echo $linha2['nome']; ?></p>
                    </div>
                </div>
                <div>
                    <div class="p-lista">
                        <p>nome:</p>
                    </div>
                    <div class="p-lista">
                        <p><?php echo $linha['nome_dependente']; ?></p>
                    </div>
                </div>
                <div>
                    <div class="p-lista">
                        <p>Sexo:</p>
                    </div>
                    <div class="p-lista">
                        <p><?php echo $linha['sexo_dependente']; ?></p>
                    </div>
                </div>
                <div>
                    <div class="p-lista">
                        <p>Idade:</p>
                    </div>
                    <div class="p-lista">
                        <p><?php echo $linha['idade_C']; ?></p>
                    </div>
                </div>
                <div>
                    <div class="p-lista">
                        <p>Nº Roupa:</p>
                    </div>
                    <div class="p-lista">
                        <p><?php echo $linha['tamanho_roupa']; ?></p>
                    </div>
                </div>
                <div>
                    <div class="p-lista">
                        <p>Calçado:</p>
                    </div>
                    <div class="p-lista">
                        <p><?php echo $linha['tamanho_sapato']; ?></p>
                    </div>
                </div>
                <div>
                    <div class="p-lista">
                        <p>Brinquedo:</p>
                    </div>
                    <div class="p-lista">
                        <p>Novo</p>
                    </div>
                </div>
                <div>
                    <div class="p-lista">
                        <p>Necessidades Especiais:</p>
                    </div>
                    <div class="p-lista">
                        <p><?php echo $linha['deficiencia']; ?></p>
                    </div>
                </div>
                <div>
                    <div class="p-lista">
                        <p>Fralda:</p>
                    </div>
                    <div class="p-lista">
                        <p><?php echo $linha['fralda']; ?></p>
                    </div>
                </div>
                <div class="p-lista">
                    <p>Caixa de bombom Nestlê, Garoto ou Lacta.</p>
                </div>
                <div class="p-lista">
                    <p>obs: Incluir roupa intíma e embalar todos os presentes.</p>
                </div>
            </div>
            <?php
                $conter = $conter +1;
            }else{
                ?>
            <div class="table-etiqueta">
                <div class="p-lista">
                    <p>Cadastro:<?php echo $linha['num_cadastro']; ?></p>
                </div>
                <div class="p-lista">
                    <p>Entrega até <?php echo $_POST['data_entregar'];?></p>
                </div>
                <div class="p-lista">
                    <p>Responsável:</p>
                </div>
                <div class="p-lista">
                    <p><?php echo $linha2['nome']; ?></p>
                </div>
                <div class="p-lista">
                    <p>nome:</p>
                </div>
                <div class="p-lista">
                    <p><?php echo $linha['nome_dependente']; ?></p>
                </div>
                <div class="p-lista">
                    <p>Sexo:</p>
                </div>
                <div class="p-lista">
                    <p><?php echo $linha['sexo_dependente']; ?></p>
                </div>
                <div class="p-lista">
                    <p>Idade:</p>
                </div>
                <div class="p-lista">
                    <p><?php echo $linha['idade_C']; ?></p>
                </div>
                <div class="p-lista">
                    <p>Nº Roupa:</p>
                </div>
                <div class="p-lista">
                    <p><?php echo $linha['tamanho_roupa']; ?></p>
                </div>
                <div class="p-lista">
                    <p>Calçado:</p>
                </div>
                <div class="p-lista">
                    <p><?php echo $linha['tamanho_sapato']; ?></p>
                </div>
                <div class="p-lista">
                    <p>Brinquedo:</p>
                </div>
                <div class="p-lista">
                    <p>Novo</p>
                </div>
                <div class="p-lista">
                    <p>Necessidades Especiais:</p>
                </div>
                <div class="p-lista">
                    <p><?php echo $linha['deficiencia']; ?></p>
                </div>
                <div class="p-lista">
                    <p>Fralda:</p>
                </div>
                <div class="p-lista">
                    <p><?php echo $linha['fralda']; ?></p>
                </div>
                <div class="p-lista">
                    <p>Caixa de bombom Nestlê, Garoto ou Lacta.</p>
                </div>
                <div class="p-lista">
                    <p>obs: Incluir roupa intíma e embalar todos os presentes.</p>
                </div>
            </div>
        </div>
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