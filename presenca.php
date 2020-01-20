<?php include 'db.php'; ?>
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<h3 class="titulo">Lista de Presença Mensal</h3><br>
<table class="table-lista" id="presenca">
  <thead class="thead-lista">
    <tr class="tr-lista">
      <th class="th-lista">Fralda</th>
      <th class="th-lista">Gestante</th>
      <th class="th-lista">Cadastro</th>
      <th class="th-lista">Nome</th>
      <th class="th-lista">Rg</th>
      <th class="th-lista">Autorizado</th>
      <th class="th-lista">Data</th>
      <th class="th-lista">Assinatura</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      while($linha = mysqli_fetch_array($consulta_pessoas_ativas)){
        $id = $linha['id'];
        $consulta_dp = mysqli_query($conexao,  "SELECT * FROM dependentes WHERE num_cadastro = '$id' ");
        $fraldas="";
        $gest = '';
        while($linha2 = mysqli_fetch_array($consulta_dp)){
            if($linha2['data_nascimentoBB']!= '1111-11-11'){
                $gest = '<td class="td-lista">X</td>';
            }
            else{
                $gest = '<td class="td-lista"> </td>';
            }
            if($linha2['fralda']!='não tem'){
              $fraldas = '<td class="td-lista">X</td>';
            }
            else{
              $fraldas = '<td class="td-lista"> </td>';
            }
        }
        echo '<tr class="tr-lista">'.$fraldas;
        echo $gest;
        echo '<td class="td-lista">'.$linha['id'].'</td>';
        echo '<td class="td-lista">'.$linha['nome'].'</td>';
        echo '<td class="td-lista">'.$linha['rg'].'</td>';
        echo '<td class="td-lista">'.$linha['nome_pa'].'</td>';
        echo '<td class="td-lista">'.$_POST['data_entrega'].'</td>';
        echo '<td class="td-lista"></td>';
      }
    ?>
  </tbody>
</table>

<?php
echo '<form>
<input type="button" value="Imprimir Lista" onClick="window.print()"/>
</form>';
?>
