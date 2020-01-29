<?php include 'db.php'; ?>
<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<h3 class="titulo">Lista das sacolinhas</h3><br>
<table class="table-lista" id="presenca">
    <thead class="thead-lista">
        <tr class="tr-lista">
            <th class="th-lista" style="width: 1;">Entregue</th>
            <th class="th-lista" style="width: 1;">Cadastro</th>
            <th class="th-lista" style="width: 1;">Nº</th>
            <th class="th-lista">Criança</th>
            <th class="th-lista" style="width: 1;">Data Nascimento</th>
            <th class="th-lista">Retirado por:</th>
            <th class="th-lista" style="width: 1;">Whatsapp</th>
            <th class="th-lista" style="width: 1;">Telefone</th>
            <th class="th-lista" style="width: 1;">Assinatura</th>
        </tr>
    </thead>
    <tbody>
        <?php
    $consulta_sacolinha = mysqli_query($conexao,  "SELECT * FROM dependentes WHERE idade_C <=".$_POST['idade_sacolinha']);
      while($linha = mysqli_fetch_array($consulta_sacolinha)){
        echo '<tr class="tr-lista"><td class="td-lista"></td>';
        echo '<td class="td-lista">'.$linha['num_cadastro'].'</td>';
        echo '<td class="td-lista">'.$linha['num_crianca'].'</td>';
        echo '<td class="td-lista">'.$linha['nome_dependente'].'</td>';
        $data=$linha['data_nascimento_dependente'];
        $mes_nasc = (int) substr(($data),5,7);
        $dia_nasc = (int) substr(($data),8,10);
        $ano_nasc = (int) substr(($data),0,4);
        $data_process_nasc = mktime(00,00,00,$mes_nasc,$dia_nasc,$ano_nasc);
        $data_nasc = date('d/m/Y',$data_process_nasc);
        echo '<td class="td-lista">'.$data_nasc.'</td>';
        echo '<td class="td-lista"></td>';
        echo '<td class="td-lista"></td>';
        echo '<td class="td-lista"></td>';
        echo '<td class="td-lista"></td>';
      }
    ?>
    </tbody>
</table>

<?php
echo '<form>
<input type="button" value="Imprimir Lista" onClick="print()"/>
</form>';
?>