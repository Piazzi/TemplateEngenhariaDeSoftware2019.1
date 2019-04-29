<?php include("./connect.php");
 include("./functions.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$categoria = $_POST['categoria'];

$usuario = buscaLogin($connect, $email);
if($email != $usuario['email'] && cadastraUsuario($connect, $nome, $email, $senha, $categoria)) {
  header("Location: home.php?cadastrado=1");
}
else {
  header("Location: registrar-cliente.php?cadastrado=0");
}
?>