<?php

/**
 * @param $connect
 * @return array
 */
function listaUsuarios($connect) {
	$usuarios = array();
	$result = mysqli_query($connect, "select id, nome, email, categoria, created_at, updated_at from usuarios order by nome asc");
	while($usuario = mysqli_fetch_assoc($result)) {
		array_push($usuarios, $usuario);
	}
	return $usuarios;
}

/**
 * @param $conexao
 * @param $id
 * @return bool|mysqli_result
 */
function excluirUsuario($conexao, $id) {
	$query = "delete from usuarios where id = {$id}";
	return mysqli_query($conexao, $query);
}

/**
 * @param $connect
 * @param $id
 * @return array|null
 */
function buscaUsuarioPeloId($connect, $id){
	$result = mysqli_query($connect, "select * from usuarios where id = '{$id}'");
	return mysqli_fetch_assoc($result);
}

/**
 * @param $connect
 * @param $id
 * @param $nome
 * @param $email
 * @param $categoria
 * @param $createdAt
 * @param $updatedAt
 * @return bool|mysqli_result
 */
function alterarUsuario($connect, $id, $nome, $email, $categoria, $createdAt, $updatedAt) {
	$query = "update usuarios set nome = '{$nome}', email = '{$email}', categoria = '{$categoria}' where id = '{$id}'";
	$result = mysqli_query($connect, $query);
	return $result;
}

/**
 * @param $connect
 * @param $nome
 * @param $email
 * @param $senha
 * @param $categoria
 * @return bool|mysqli_result
 */
function cadastraUsuario($connect, $nome, $email, $senha,  $categoria) {
	$senhaMd5 = md5($senha);
	$query = "insert into usuarios (nome, email, senha, categoria) values ('{$nome}','{$email}', '{$senhaMd5}','{$categoria}')";
	$result = mysqli_query($connect, $query);
	return $result;
}

/**
 * @param $connect
 * @param $email
 * @param $senha
 * @return array|null
 */
function buscaUsuario($connect, $email, $senha) {
	$senhaMd5 = md5($senha);
	$result = mysqli_query($connect, "select * from usuarios where email = '{$email}' and senha = '{$senhaMd5}'");
    $usuario = mysqli_fetch_assoc($result);
    return $usuario;
}

/**
 * @param $connect
 * @param $email
 * @return array|null
 */
function buscaLogin($connect, $email) {
    $result = mysqli_query($connect, "select * from usuarios where email = '{$email}'");
    $usuario = mysqli_fetch_assoc($result);
    return $usuario;
}