<?php include("./connect.php");
include("./functions.php");
$email = $_POST['email'];
$senha = $_POST['senha'];
$usuario = buscaUsuario($connect, $email, $senha);

if($usuario['categoria'] == 'cliente' )
{
    header("Location: ./home.php?usuario=".$usuario['nome']."");
}
else if($usuario == null) 
{
	echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos!');window.location.href='./login.php';</script>";
} 
else 
{
    echo"<script language='javascript' type='text/javascript'>alert('Redirecione o usuário para seu sistema!');window.location.href='./login.php';</script>";
}
die();