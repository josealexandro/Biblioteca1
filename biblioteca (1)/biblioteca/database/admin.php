<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/config/database.php');

function buscarUsuarioDb(string $email) {
   $dbConnection = getConnection();
   $email = mysqli_real_escape_string($dbConnection, $email);

   $sqlQuery = "SELECT nome, email, senha, perfil_usuario FROM usuarios WHERE email = ? LIMIT 0,1";
   $statement = mysqli_stmt_init($dbConnection);

   if (!mysqli_stmt_prepare($statement, $sqlQuery)) {
      exit('Erro SQL');
   }

   mysqli_stmt_bind_param($statement, 's', $email);
   mysqli_stmt_execute($statement);

   $result = mysqli_fetch_assoc(mysqli_stmt_get_result($statement));
   mysqli_close($dbConnection);

   return $result;
}
?>