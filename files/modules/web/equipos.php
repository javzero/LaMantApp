<?php
  include('conection.php');
  checkUser();
  include('constant.php');
  $con = selConsult("SELECT * FROM user")
  echo $row['user'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <?php include('../../../files/includes/inc.web.head.php'); ?> <!-- Head -->
</head>
  <body class="ligaMain">
    <?php include('../../../files/includes/inc.web.nav.php'); ?> <!-- Navegation -->
    <header>
      <!-- Page Header -->
      <div class="mainTitle titW"><h1>Liga</h1></div>
        <!-- /Page Header -->
    </header>
    <div class="mainWrapper">

      <!-- Muestra equipos -->
      <div class="container transContainer">
        <div class="row">
          <div class="teamList">
            <h4>Usuarios Activos</h4>


          <?php

          // var_dump($usersQuery);
          while($row=mysql_fetch_array($usersQuery)){
          echo '<div class="col-md-3 col-sm-6">'.$row['user'].'</div>';
          }
          mysql_free_result($usersQuery);
          mysql_close($con);
          // <div class="col-md-3 col-sm-6">'.$row['password'].'</div>
          // <div class="col-md-3 col-sm-6">'.$row['status'].'</div>
          // <div class="col-md-3 col-sm-6">'.$row['creation_date'].'</div>
          // <div class="col-md-3 col-sm-6">'.$row['last_login'].'</div>

         ?>
          </div>
        </div>
      </div>
      <div class="container transContainer">
        <div class="row">
          <div class="teamList">
            HOLA
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="container col-md-8 ligaPartido">
            <form method="post" class="form-horizontal">
              <div class="col-md-6 col-xs-12 partidoResultados">
                <div class="col-md-9">
                  <select name="equipoLoc[]" class="form-control localSelection" id="select">
                    <option>Local</option>
                  </select>
                </div>
                <div class="col-md-3 col-xs-3 partidoResultadosGoles">
                  <input name="golesLoc[]" class="form-control" placeholder="Goles" type="number">
                </div>
                <div class="col-md-12 col-xs-9 transInput partidoExpulsados">
                  <input name="expLoc[]" id="tags_1" type="text" class="tags" value="" />
                  <label>Expulsados Locales</label>
                </div>
              </div>
              <div class="col-md-6 col-xs-12 partidoResultados">
                <div class="col-md-9">
                  <select name="equipoVis[]" class="form-control localSelection" id="select">
                  <option >Local</option>
                  </select>
                </div>
              <div class="col-md-3 col-xs-3 partidoResultadosGoles">
                <input name="golesVis[]" class="form-control" placeholder="Goles" type="number">
              </div>
                <div class="col-md-12 col-xs-9 transInput partidoExpulsados">
                  <input name="expVis[]" id="tags_2" type="text" class="tags" value="" />
                  <label>Expulsados Visitantes</label>
                </div>
              </div>
              <div class="col-md-12">
                <button type="submit" name="anotarResultado" class="btn btn-default">Fin del Partido</button>
              </div>
            </form>
          </div>

          <div class="col-md-4">
            <div class="transContainer">
              <div class="ligaPosiciones">
                <h5>RESULTADOS</h5>
                <h4>Posiciones</h4>
                <hr>
                <ul>
                  <li>Posicion 1</li>
                  <li>Posicion 2</li>
                  <li>Posicion 3</li>
                  <li>Posicion 4</li>
                </ul>
              </div>
            </div>
          </div>
        </div><!-- /1st Row -->
      </div><!-- /1st Container -->
      <!-- 2dn container -->
      <div class="container">
        <div class="row">
          <div class="container col-md-8 pad0">
            <div class="ligaResultados transContainer ">
              <h5>RESULTADOS</h5>
              <hr>
              <ul>
                <li>Posicion 2</li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="transContainer">
              <div class="ligaPosiciones ligaEstadisticas">
                <h5>Goleadores</h5>
                <hr>
                <ul>
                  <li>Posicion 2</li>
                  <li>Posicion 3</li>
                  <li>Posicion 4</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /Container Liga -->


    </div><!-- /Wrapper -->
    <?php include('../../includes/inc.web.footer.php'); ?> <!-- Footer -->
    <?php include('../../includes/inc.web.scripts.php'); ?> <!-- Scripts -->
  </body>
</html>