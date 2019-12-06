<?php include 'db.php';
    include 'footer.php'; ?>
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<table class="table table-hover table-striped" id="presenca">
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
                <tr>
                    <td>
                        <table>
                            <tbody>
                                <td>Cadastro:<?php echo $linha['num_cadastro']; ?></td>
                                <td>Entrega até <?php echo $_POST['data_entregar'];?></td>
                                <tr><td>Responsável:</td>
                                <td><?php echo $linha2['nome']; ?></td>
                                <tr><td>nome:</td>
                                <td><?php echo $linha['nome_dependente']; ?></td>
                                <tr><td>Sexo:</td>
                                <td><?php echo $linha['sexo_dependente']; ?></td>
                                <tr><td>Idade:</td>
                                <td><?php echo $linha['idade_C']; ?></td>
                                <tr><td>Nº Roupa:</td>
                                <td><?php echo $linha['tamanho_roupa']; ?></td>
                                <tr><td>Calçado:</td>
                                <td><?php echo $linha['tamanho_sapato']; ?></td>
                                <tr><td>Brinquedo:</td>
                                <td>Novo</td>
                                <tr><td>Necessidades Especiais:</td>
                                <td><?php echo $linha['deficiencia']; ?></td>
                                <tr><td>Fralda:</td>
                                <td><?php echo $linha['fralda']; ?></td>
                                <tr><td>Caixa de bombom Nestlê, Garoto ou Lacta.</td>
                                <tr><td>obs: Incluir roupa intíma e embalar todos os presentes.</td>
                            </tbody>
                        </table>
                    </td>
                <?php
                $conter = $conter +1;
            }else{
                ?>
                <td>
                        <table>
                            <tbody>
                                <td>Cadastro:<?php echo $linha['num_cadastro']; ?></td>
                                <td>Entrega até <?php echo $_POST['data_entregar'];?></td>
                                <tr><td>Responsável:</td>
                                <td><?php echo $linha2['nome']; ?></td>
                                <tr><td>nome:</td>
                                <td><?php echo $linha['nome_dependente']; ?></td>
                                <tr><td>Sexo:</td>
                                <td><?php echo $linha['sexo_dependente']; ?></td>
                                <tr><td>Idade:</td>
                                <td><?php echo $linha['idade_C']; ?></td>
                                <tr><td>Nº Roupa:</td>
                                <td><?php echo $linha['tamanho_roupa']; ?></td>
                                <tr><td>Calçado:</td>
                                <td><?php echo $linha['tamanho_sapato']; ?></td>
                                <tr><td>Brinquedo:</td>
                                <td>Novo</td>
                                <tr><td>Necessidades Especiais:</td>
                                <td><?php echo $linha['deficiencia']; ?></td>
                                <tr><td>Fralda:</td>
                                <td><?php echo $linha['fralda']; ?></td>
                                <tr><td>Caixa de bombom Nestlê, Garoto ou Lacta.</td>
                                <tr><td>obs: Incluir roupa intíma e embalar todos os presentes.</td>
                            </tbody>
                        </table>
                    </td>
                <?php
                $conter = $conter +1;
            }
        }
      }
    ?>
  </tbody>
  </table>

<?php
echo '<form>
<input type="button" value="Imprimir etiquetas" onClick="window.print()"/>
</form>';
?>

