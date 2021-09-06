<?php
session_start();
if (!isset($_SESSION['current_session'])) {
   header('Location: login.php');
}

$actionMessage = isset($_SESSION["message"]) ? $_SESSION["message"] : null;

require_once($_SERVER['DOCUMENT_ROOT'] . '/pages/partials/sidebar.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/actions/editora.php');

if (isset($_POST["deletar"])) {
   deletarEditoraAction($_POST["cod_editora"]);
}

$editoras = obterEditorasAction();
?>
         <div class="container-fluid">
            <!-- INICIO CONTEUDO -->
            <?php 
               if (isset($actionMessage)) {
                  echo printMessage($actionMessage);
                  unset($_SESSION["message"], $actionMessage);
               }
            ?>
            <div class="row" style="overflow-y: auto; height:100vh;">
               <div class="col" > 
                  <h1>Editoras</h1>
                  <input class="form-control mr-sm-2 mb-2" type="search" placeholder="Pesquisar..." id="pesquisa" onkeyup="filterTable()" autofocus>
                  <table id="registros" class="table table-hover">
                     <thead>
                        <tr>
                           <th scope="col">Nome</th>
                           <th scope="col">Ações</th>
                        </tr>
                     </thead>
                     <tbody>
<?php foreach($editoras as $index => $row): ?>
                        <tr>
                           <td><?=htmlspecialchars($row['nome'])?></td>
                           <td width=140px>
                              <form action="<?=htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST" >
                                 <div class="btn-group">
                                    <a href='detalhes.php?id=<?=$row['cod_editora']?>' class="btn btn-outline-secondary">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-binoculars-fill" viewBox="0 0 16 16">
                                          <path d="M4.5 1A1.5 1.5 0 0 0 3 2.5V3h4v-.5A1.5 1.5 0 0 0 5.5 1h-1zM7 4v1h2V4h4v.882a.5.5 0 0 0 .276.447l.895.447A1.5 1.5 0 0 1 15 7.118V13H9v-1.5a.5.5 0 0 1 .146-.354l.854-.853V9.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v.793l.854.853A.5.5 0 0 1 7 11.5V13H1V7.118a1.5 1.5 0 0 1 .83-1.342l.894-.447A.5.5 0 0 0 3 4.882V4h4zM1 14v.5A1.5 1.5 0 0 0 2.5 16h3A1.5 1.5 0 0 0 7 14.5V14H1zm8 0v.5a1.5 1.5 0 0 0 1.5 1.5h3a1.5 1.5 0 0 0 1.5-1.5V14H9zm4-11H9v-.5A1.5 1.5 0 0 1 10.5 1h1A1.5 1.5 0 0 1 13 2.5V3z"></path>
                                       </svg>
                                       <span class="visually-hidden">Button</span>
                                    </a>
                                    <a href='cadastro.php?id=<?=$row['cod_editora']?>' class="btn btn-outline-secondary">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                          <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"></path>
                                       </svg>
                                       <span class="visually-hidden">Button</span>
                                    </a>
                                    <button type="submit" class="btn btn-outline-danger" name="deletar" id="deletar" onclick="return confirm('Deseja mesmo excluir o registro?');">
                                       <input type="hidden" name="cod_editora" id="cod_editora" value="<?=$row['cod_editora']?>" />
                                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                          <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"></path>
                                       </svg>
                                       <span class="visually-hidden">Button</span>
                                    </button>
                                 </div>
                              </form>
                           </td>
                        </tr>
<?php endforeach; ?>
                     </tbody>
                  </table>
                  <a href='cadastro.php' class='btn btn-success'>Novo cadastro</a>
               </div>
            </div>
         <!-- FIM CONTEUDO-->
         </div>
      </main>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
      <script src="/assets/js/sidebars.js"></script>
      <script src="/assets/js/filter-table.js"></script>
   </body>
</html>