
<link rel="stylesheet" type="text/css" media="screen" href="css/login.css">

<div class="row">
    <div class="col-md-7 homeEsquerda">
        <img src="img/familia.jpg" alt="logo da fraternidade imma maria">
    </div>
    <div class="col-md-5 homeDireita">
        <form method="post" action="validacao.php">
            <h1 class='titulo'>Cadastro de dependentes.</h1>
            <div class="form-group">
                <label class="badge badge-secondary">Usuário:</label>
                <input type="text" class="form-control" name="user" placeholder="Digite o usuário">
            </div>
            <div class="form-group">
                <label class="badge badge-secondary">Senha:</label>
                <input type="password" class="form-control" name="password" placeholder="Digite a senha">
            </div>
            <input type="submit" class="btn btn-primary" value="Entrar" >
        </form>
    </div>
</div>

