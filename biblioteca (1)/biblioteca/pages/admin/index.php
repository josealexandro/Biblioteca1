<?php
session_start();
if (!isset($_SESSION['current_session'])) {
   header('Location: login.php');
}

//$actionMessage = isset($_SESSION["message"]) ? $_SESSION["message"] : null;

require_once($_SERVER['DOCUMENT_ROOT'] . '/pages/partials/sidebar.php');
?>
         <div class="container-fluid">
            <div class="row">
               <div class="col">
                  <h2 class="mt-2">Autoras</h2>
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <div class="card" style="width: 18rem;">
                     <div class="card-body">
                        <h2 class="card-title">50</h2>
                        <h6 class="card-subtitle mb-2 text-muted">Autoras</h6>
                        <a href="./autoras/index.php" class="card-link">Acessar</a>
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div class="card  " style="width: 18rem;">
                     <div class="card-body">
                        <h2 class="card-title">100</h2>
                        <h6 class="card-subtitle mb-2 text-muted text-white">Obras</h6>
                        <a href="obras/listar.php" class="card-link">Acessar</a>
                     </div>
                  </div>
               </div>
               <div class="col">
                  <div class="card" style="width: 18rem;">
                     <div class="card-body">
                        <h2 class="card-title">10</h2>
                        <h6 class="card-subtitle mb-2 text-muted">Usuários</h6>
                        <a href="#" class="card-link">Acessar</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </main>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
      <script src="/assets/js/sidebars.js"></script>
   </body>
</html>