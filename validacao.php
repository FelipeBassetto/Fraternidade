
  $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = md5($_POST['senha']);
  
 
$servername = "mysql.hostinger.com";
$database = "u1789_loj";
$username = "u17_za";
$password = "tur7";

// Create connection

$mysqli = new mysqli($servername, $username, $password, $database);

// Caso algo tenha dado errado, exibe uma mensagem de erro
    if (mysqli_connect_errno())
        trigger_error(mysqli_connect_error());
  
  $db = mysqli_select_db('u1789_loj');
    if (isset($entrar)) {
     
         
      $verifica = mysqli_query("SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die("erro ao conectar com o banco de dados!");
      
$rowcount = mysqli_num_rows($verifica);

if (mysqli_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
          die();
        }else{
          setcookie("login",$login);
          header("Location:index.php");
        }
    }