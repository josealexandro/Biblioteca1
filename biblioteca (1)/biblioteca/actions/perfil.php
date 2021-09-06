<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/database/perfil.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/modules/messages.php');

function buscarPerfilAction($cod_perfil) {
   return buscarPerfilDb($cod_perfil);
}

function obterPerfisAction() {
   return obterPerfisDb();
}

function criarPerfilAction($descricao) {
   $descricao = trim($descricao);
   
   $criarPerfilDb = criarPerfilDb($descricao);
   
   $_SESSION["message"] = ($criarPerfilDb == true ? 'success-create' : 'error-create');
	return header("Location: " . $_SERVER["PHP_SELF"]);
}

function alterarPerfilAction($cod_perfil, $descricao) {
   $descricao = trim($descricao);
   
   $alterarPerfilDb = alterarPerfilDb($cod_perfil, $descricao);
   
   $_SESSION["message"] = ($alterarPerfilDb == true ? 'success-create' : 'error-create');
	return header("Location: " . $_SERVER["PHP_SELF"]);
}

function deletarPerfilAction($cod_perfil) {
   $deletarPerfilDb = deletarPerfilDb($cod_perfil);
   
   $_SESSION["message"] = ($deletarPerfilDb == true ? 'success-remove' : 'error-remove');
	return header("Location: " . $_SERVER["PHP_SELF"]);
}
?>