<?php
function printMessage($message) {
   if ($message=='success-create')
      //return '<span class="text-success">Cadastro realizado com sucesso!</span>';
      return '<div class="alert alert-success alert-dismissible fade show" role="alert">
                  Cadastro realizado com sucesso!
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';

   if ($message=='error-create')
      //return '<span class="text-error">Erro ao realizar cadastro.</span>';
      return '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                 Erro ao realizar cadastro.
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';

   if ($message=='success-remove')
      //return '<span class="text-success">Registro removido com sucesso!</span>';
      return '<div class="alert alert-success alert-dismissible fade show" role="alert">
                  Registro removido com sucesso!
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';

   if ($message=='error-remove')
      //return '<span class="text-error">Erro ao remover registro.</span>';
      return '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                 Erro ao remover registro.
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';

   if ($message=='success-update')
      //return '<span class="text-success">Registro atualizado com sucesso!</span>';
      return '<div class="alert alert-success alert-dismissible fade show" role="alert">
                  Registro atualizado com sucesso!
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
      
   if ($message=='error-update')
      //return '<span class="text-error">Erro ao atualizar registro.</span>';
      return '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                 Erro ao atualizar registro.
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
}
?>