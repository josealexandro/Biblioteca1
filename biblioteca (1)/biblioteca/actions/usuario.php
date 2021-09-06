<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/database/usuario.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/modules/messages.php');

function buscarUsuarioAction($cod_editora) {
   return buscarUsuarioDb($cod_editora);
}

function obterUsuariosAction() {
   return obterUsuariosDb();
}

function criarUsuarioAction($nome, $email, $senha, $perfil_usuario) {
   $nome = trim($nome);
   $email = trim($email);
   $senha = trim($senha);
   $perfil_usuario = trim($perfil_usuario);
   
   $criarUsuarioDb = criarUsuarioDb($nome, $email, $senha, $perfil_usuario);
   
   $_SESSION["message"] = ($criarUsuarioDb == true ? 'success-create' : 'error-create');
	return header("Location: " . $_SERVER["PHP_SELF"]);
}

function alterarUsuarioAction($cod_usuario, $nome, $email, $senha, $perfil_usuario) {
   $nome = trim($nome);
   $email = trim($email);
   $senha = trim($senha);
   $perfil_usuario = trim($perfil_usuario);
   
   $alterarUsuarioDb = alterarUsuarioDb($cod_usuario, $nome, $email, $senha, $perfil_usuario);
   
   $_SESSION["message"] = ($alterarUsuarioDb == true ? 'success-create' : 'error-create');
	return header("Location: " . $_SERVER["PHP_SELF"]);
}

function deletarUsuarioAction($cod_usuario) {
   $deletarUsuarioDb = deletarUsuarioDb($cod_usuario);
   
   $_SESSION["message"] = ($deletarUsuarioDb == true ? 'success-remove' : 'error-remove');
	return header("Location: " . $_SERVER["PHP_SELF"]);
}
?>