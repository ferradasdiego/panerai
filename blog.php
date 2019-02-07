<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>PANERAI</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/full-slider.css" rel="stylesheet">

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="./index.php"><img class="pan-logo-img" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKQAAAAUCAYAAAADf5Y0AAAACXBIWXMAAAsSAAALEgHS3X78AAAETklEQVRo3u1bzXGbUBD+7NFdmqEAiQqkXLiKVGB1IFKB6cCkAzowrsC4AknHcMINBOkeZlAFycEPZ7V5SO9PKP7ZGR94Fojd/d633y7o6tfPHyHMrPH8oISF1VXBv3vr+cHW8FozACPba9VVMQEwIUul5wdNx2dHAGZwY53xlMSp1zydiLPx9SXxawYAVhY3BwBPAFLPD9aa50YA7tnyBoBp8FMAc3K8r6siNAhWBOCOHH8F0OXbzCZ+Gr6vLEHU5inz/CC3uM5ExGLI1n1DIuHx21w7COQNgFVdFWuBeNWdkUr+NRdAdWFDAGuxoz/tJU+PdVWUqnmSWMLBSMjAiQ34LvX8IFQAUwhgAWBJwQQgE+s6ju0BlITd0roq8q4yaQjK0GXZOsZyp+LX53cIRosAxCTeUwC5biUSsmHJGL3N2Y2I8drWOW2G9Pyg8fwg9/wgAvBFAArkxmYKGuSW7a6EgSh2mMAPy5SeH2w9P0gk8ZwbxIOy4LPYFDuylrm452tLh0vJjYQaju2I/nwi63did9vYt09QvuYpY+ABa0xU9P6ULMWk0rU2rqsiuSgg285I1dG6Khas8UhIaea7OHOQBBkoJ/iYZiSBJHp/05ZmCdBjC33qDJC8CVkrOrYTDr2WFwAPrKyEZwBlbhu0t2YijpTh9hp6jzcy8ZH8D20bnIHlPCoFMFZ0NGafjTqcX5AAZDicCRqBUow97omobxudxnHuJ4Zla0s3pyMQts1nyDR7V+y7miJ67gNvDj0/WNdVQRucZV0VmWmDMzAIaChAMlZgS+pYLKN9LsLrqkjxdw44rqsiEcL8LYByjMMZpnLnrCFR5nVV/Dbt0AHEGhMHek97phk5kazYcegCkDYBTY7sipTRfnKi6aFjiriuitQWOD2Bsh1h6VovIym8DMaVvkui99Ou4beEJed1VUQmrD+wCGgj9GJ+bEov9MsN32kCHKpjm1S1zFwYlGUPc0gA+K74uRmJ/bzV5WJkpzPmAYDFCU3PdbnRPHnQQ0BTCcDmmtew0iUSUE5IJTinpjzXGEdZwghfS1JxlgIo+ZFzEokkm2re5lBUwtgGkK67u5g58qwxfhixc1M4epHB84NEJGrJQfneOmyhyyMAj5Tt8PK0RkXv68qQGQH/rZBb24sDUnR5CXNMi4XqqigJKKemuqQjUZEo3wegRPeLFG8ZlDmTSBONMU+k80KGYNc71hgpb/TrM8bhn0bGoCTGEl0ycpioCIezz6lkRPJebHNE71G9v2TTkNwg73s2FVionnwWhhQzSurYzvOD1AAwvHsz0iWaTGljI5uy70IjK9pUUe8nBj40Qqrds+sqAftcDJmeYDoblrx1/fhPwpQ2iV5Z/J3TtpKxDj2OGFCfTDeI5JGi8nNu54AUjs0taZ86V0rAkrm+b4eg/F+Ngytr5U/H+6m2VYifH6sQyRX7CUPT03uDn6a3ycMLlfbe7Q9s1kQKuWOQ8gAAAABJRU5ErkJggg==" alt="officine Panerai"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                <a class="nav-link" href="./index.php" >Home
                    <span class="sr-only">(current)</span>
                </a>
                </li>
                <li class="nav-item">
                <div class="dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" style="color:#bd8a4b">Productos</a>
                <ul class="dropdown-menu" style="background-color:#343a40;">

                <!-- *************************Productos************************** -->
                <!-- Pegar todos los productos desde bd -->
                <?php

                    $host = "localhost";
                    $user = "redoctober";
                    $pass = "redoctober";
                    $db   = "panerai";

                    $ms = mysqli_connect($host, $user, $pass);
                    if (!$ms){
                    $mensaje = 'ERROR: No pude conectar al servidor MySQL';
                    }else{
                    
                    if (mysqli_select_db($ms, $db)){
                    $q = "SELECT * FROM `relojes`";
                    $r = mysqli_query($ms, $q);
                        
                        if(mysqli_num_rows($r)>0){  //si tiene resultados
                            while($resultado=mysqli_fetch_assoc($r)){
                            echo'<hr>';
                            echo '<li><a href="./productos.php?producto='.$resultado["id"].'" style="color:#bd8a4b">&#8226'.utf8_encode($resultado["nombre"]).'</a></li>';
                            
                            }
                        }
                    }
                }
                ?>
                <!-- ******************************************** -->

                </ul>
            </div>
                </li>
                <li class="nav-item">
                <div class="dropdown">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" style="color:#bd8a4b">Blog</a>
                <ul class="dropdown-menu" style="background-color:#343a40;">

                <!-- ******************BLOG******************** -->
                <!-- Pegar todos los entradas del blog desde bd -->
                <?php

                    if (!$ms){
                    $mensaje = 'ERROR: No pude conectar al servidor MySQL';
                    }else{
                    
                        if (mysqli_select_db($ms, $db)){
                        $q = "SELECT * FROM `blog`";
                        $r = mysqli_query($ms, $q);
                            
                            if(mysqli_num_rows($r)>0){  //si tiene resultados
                                while($resultado=mysqli_fetch_assoc($r)){
                                echo'<hr>';
                                echo '<li><a href="./blog.php?blog='.$resultado["id"].'" style="color:#bd8a4b">&#8226'.utf8_encode($resultado["titulo"]).'</a></li>';
                                }
                            }
                        }
                    }
                ?>
                <!-- ******************************************** -->
                
                </ul>
            </div>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="./contacto.php" style="color:#bd8a4b">Contacto</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <!-- Post Content Column -->
        <div class="col-lg-12">
          <?php
            if(isset($_GET["blog"])){

                if (!$ms){
                    $mensaje = 'ERROR: No pude conectar al servidor MySQL';
                }else{
                    
                    if (mysqli_select_db($ms, $db)){
                    $q = "SELECT * FROM `blog` WHERE `id`= '".$_GET["blog"]."'";
                    $r = mysqli_query($ms, $q);
                        
                        if(mysqli_num_rows($r)>0){  //si tiene resultados
                            // utf8 decode o encode para pillar lo de los acentos
                            // encode para leer de la bdd y decode para escribir en la bdd
                            while($resultado=mysqli_fetch_assoc($r)){
                              echo '<h1 class="mt-4">'.utf8_encode($resultado["titulo"]).'</h1>
                                    <p class="lead">
                                    by
                                    <a href="#">'.utf8_encode($resultado["autor"]).'</a>
                                    </p>
                                    <hr>
                                    <p>Posteado el '.utf8_encode($resultado["fecha"]).'</p>
                                    <hr>
                                    <img class="img-fluid rounded" src="'.utf8_encode($resultado["imagen"]).'" alt="">
                                    <hr>
                                    <p class="lead">'.utf8_encode($resultado["cuerpo"]).'</p>';                        
                            }
                        }
                    }
                }
            }
          ?>
          <hr>
        </div>
      </div>


        <!-- sugerencias -->
<h3 class="my-4">También te puede interesar...</h3>

<div class="row">

  <?php

    if (!$ms) {
      $mensaje = 'ERROR: No pude conectar al servidor MySQL';
    } else {
      if (mysqli_select_db($ms, $db)) {
        $q = "SELECT * FROM `blog` WHERE `id` != '".$_GET["blog"]."' LIMIT 4";
        $r = mysqli_query($ms, $q);

        if(mysqli_num_rows($r)>0){  //si tiene resultados
          // utf8 decode o encode para pillar lo de los acentos
          while($resultado=mysqli_fetch_assoc($r)){
            echo "<div class='col-md-3 col-sm-6 mb-4'>
                    <p>".$resultado['titulo']."</p>
                    <a href='./blog.php?blog=".$resultado['id']."'>
                      <img class='img-fluid' src='".$resultado['imagen']."'>
                    </a>
                  </div>
                  <br>";
          }
        }
      }
    }
  ?>

</div>
<!-- /.row -->


    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
