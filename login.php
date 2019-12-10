
<link rel="stylesheet" type="text/css" media="screen" href="css/login.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="screen" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<div class="row">
    <div class="col-md-7 homeEsquerda">
        <img src="img/logo_fundo.jpeg" alt="logo da fraternidade imma maria">
    </div>
    <div class="col-md-5 homeDireita">
        <form method="post" action="validacao.php">
            <h1 class='titulo'>Login.</h1>
            <div class="form-group">
                <label class="badge badge-secondary">Usuário:</label>
                <input type="text" class="login" name="user" placeholder="Digite o usuário">
            </div>
            <div class="form-group">
                <label class="badge badge-secondary">Senha:</label>
                <input type="password" class="login" name="password" placeholder="Digite a senha">
            </div>
            <input type="submit" class="btn btn-primary" value="Entrar" >
        </form>
    </div>
</div>

