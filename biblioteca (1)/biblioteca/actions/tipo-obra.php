<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/database/tipo-obra.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/modules/messages.php');

function buscarTipoAction($cod_tipo) {
   return buscarTipoDb($cod_tipo);
}

function obterTiposAction() {
   return obterTiposDb();
}

function criarTipoAction($descricao) {
   $descricao = trim($descricao);
   
   $criarTipoDb = criarTipoDb($descricao);
   
   $_SESSION["message"] = ($criarTipoDb == true ? 'success-create' : 'error-create');
	return header("Location: " . $_SERVER["PHP_SELF"]);
}

function alterarTipoAction($cod_tipo, $descricao) {
   $descricao = trim($descricao);
   
   $alterarTipoDb = alterarTipoDb($cod_tipo, $descricao);
   
   $_SESSION["message"] = ($alterarTipoDb == true ? 'success-create' : 'error-create');
	return header("Location: " . $_SERVER["PHP_SELF"]);
}

function deletarTipoAction($cod_tipo) {
   $deletarTipoDb = deletarTipoDb($cod_tipo);
   
   $_SESSION["message"] = ($deletarTipoDb == true ? 'success-remove' : 'error-remove');
	return header("Location: " . $_SERVER["PHP_SELF"]);
}
?>