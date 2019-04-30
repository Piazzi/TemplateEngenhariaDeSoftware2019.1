<?php include("./connect.php");
 include("./functions.php");

$usuario = verificaEmail($connect, $_POST['email']);
if($_POST['email'] != $usuario['email'] && cadastrarUsuario($connect, $_POST['nome'], $_POST['email'],  $_POST['senha'], $_POST['categoria'])) {
  header("Location: home.php?cadastrado=1");
}
else {
  header("Location: register.php?cadastrado=0");
}
