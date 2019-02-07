<!DOCTYPE html>
<html>
<title>ADMINISTRACION PANERAI</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
    .entrada{
        width:300px;
        margin-left:100px;
    }

    .entrada2{
        width:300px;
        margin-left:100px;
    }

    .w3-container{
        display:flex;
        flex-direction:column;
    }
</style>
<body>
    <!-- *************************Barra lateral************************* -->
    <div class="w3-sidebar w3-bar-block w3-light-grey w3-card" style="width:30%">
        <a class="btn btn-info" href="./administracion.php" style="width:100%">Inicio</a>

        <!-- desplegable productos -->
        <div class="w3-dropdown-hover">
            <button class="w3-button">Productos
            <i class="fa fa-caret-down"></i>
            </button>
            <div class="w3-dropdown-content w3-bar-block">
                <br>
                <a href="#" class="w3-bar-item w3-button" id="nuevoProducto"> + Añadir Producto</a>
                <hr>
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
                                echo '<a href="#" class="w3-bar-item w3-button producto" id="'.$resultado["id"].'">'.utf8_encode($resultado["nombre"]).'</a>';
                                }
                            }
                        }
                    }
                ?>

            </div>
        </div> 

        <!-- desplegable Blog -->
        <div class="w3-dropdown-hover">
            <button class="w3-button">Entradas del Blog
            <i class="fa fa-caret-down"></i>
            </button>
            <div class="w3-dropdown-content w3-bar-block">
                <br>
                <a href="#" class="w3-bar-item w3-button" id="nuevaEntrada"> + Añadir Entrada de Blog</a>
                <hr>    
                <?php
                    if (!$ms){
                    $mensaje = 'ERROR: No pude conectar al servidor MySQL';
                    }else{
                    
                        if (mysqli_select_db($ms, $db)){
                        $q = "SELECT * FROM `blog`";
                        $r = mysqli_query($ms, $q);
                            
                            if(mysqli_num_rows($r)>0){  //si tiene resultados
                                while($resultado=mysqli_fetch_assoc($r)){
                                echo '<a href="#" class="w3-bar-item w3-button entrada" id="'.$resultado["id"].'"style="margin-left:0px;">'.utf8_encode($resultado["titulo"]).'</a>';
                                }
                            }
                        }
                    }
                ?>

            </div>
        </div> 

        <!-- desplegable SLIDERS -->
        <div class="w3-dropdown-hover">
            <button class="w3-button">Sliders
            <i class="fa fa-caret-down"></i>
            </button>
            <div class="w3-dropdown-content w3-bar-block">
                <br>
                <a href="#" class="w3-bar-item w3-button" id="nuevoSlider"> + Añadir Slider</a>
                <hr>
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
                        $q = "SELECT * FROM `home`";
                        $r = mysqli_query($ms, $q);
                            
                            if(mysqli_num_rows($r)>0){  //si tiene resultados
                                while($resultado=mysqli_fetch_assoc($r)){
                                echo '<a href="#" class="w3-bar-item w3-button slider" id="'.$resultado["id"].'">'.utf8_encode($resultado["titulo"]).'</a>';
                                }
                            }
                        }
                    }
                ?>

            </div>
        </div> 


        </div>

        <div style="margin-left:30%">

        <div class="w3-container">

                    <?php
                    // ******************************PRODUCTOS*************************************

                        //pintar producto en la ficha para editarlo
                        if(isset($_GET["producto"])){
                            if (!$ms){
                                $mensaje = 'ERROR: No pude conectar al servidor MySQL';
                            }else{
                        
                                if (mysqli_select_db($ms, $db)){
                                $q = "SELECT * FROM `relojes` WHERE `id`= '".$_GET["producto"]."'";
                                $r = mysqli_query($ms, $q);
                                    
                                    if(mysqli_num_rows($r)>0){  //si tiene resultados
                                        while($resultado=mysqli_fetch_assoc($r)){
                                            echo '<h2>Modificar Producto</h2><br><form id="modificarProducto" action="./administracion.php" method="get" style="margin-right:50%"><br>Nombre:<input type="text" class="entrada2" name="productoNombreEditar" value="'.utf8_encode($resultado["nombre"]).'"><br> Descripción: <input type="text" name="productoDescripcionEditar" class="entrada2" value="'.utf8_encode($resultado["descripcion"]).'"><br>Imagen: <input type="text" class="entrada2" name="productoImagenEditar"  value="'.utf8_encode($resultado["imagen"]).'"><br>Precio: <input type="text" class="entrada2" name="productoPrecioEditar"  value="'.$resultado["precio"].'"><br><hr><input type="hidden" name="id" value="'.$resultado["id"].'"><input class="btn btn-primary" type="submit" value="Actualizar"></form><button class="btn btn-danger productoBorrar" id="'.$resultado["id"].'">Eliminar Producto</button>';
                                        }
                                    }
                                }
                            }  
                        }

                        //modificar producto
                        if(isset($_GET["productoNombreEditar"])){
                            echo "console.log('hola')";
                            if (!$ms){
                                $mensaje = 'ERROR: No pude conectar al servidor MySQL';
                            }else{
                        
                                if (mysqli_select_db($ms, $db)){
                                $q = "UPDATE `relojes` SET `nombre`= '".utf8_decode($_GET["productoNombreEditar"])."' , `descripcion`= '".utf8_decode($_GET["productoDescripcionEditar"])."' , `imagen`= '".utf8_decode($_GET["productoImagenEditar"])."' , `precio`= '".$_GET["productoPrecioEditar"]."' WHERE `id`= '".$_GET["id"]."'";
                                $r = mysqli_query($ms, $q);
                                
                                header('Location: ./administracion.php');
                                }
                            }  
                        }

                        //Borrar un producto
                        if(isset($_GET["productoBorrar"])){
                            if (!$ms){
                                $mensaje = 'ERROR: No pude conectar al servidor MySQL';
                            }else{
                        
                                if (mysqli_select_db($ms, $db)){
                                $q = "DELETE FROM `relojes` WHERE `id`= '".$_GET["productoBorrar"]."'";
                                $r = mysqli_query($ms, $q);
                                
                                //después de borrar redirijo a la pagina principal
                                header('Location: ./administracion.php');
                                }
                            }  
                        }

                        // Añadir producto
                        if(isset($_GET["crearProducto"])){
                            if (!$ms){
                                $mensaje = 'ERROR: No pude conectar al servidor MySQL';
                            }else{
                        
                                if (mysqli_select_db($ms, $db)){
                                $q = "INSERT INTO `relojes` (`nombre`,`descripcion`,`imagen`,`precio`) VALUES ('".utf8_decode($_GET["nombre"])."','".utf8_decode($_GET["descripcion"])."','".utf8_decode($_GET["imagen"])."','".$_GET["precio"]."')";
                                $r = mysqli_query($ms, $q);
                                
                                if(!$r){
                                    echo"error en consulta";
                                }
                                //después de borrar redirijo a la pagina principal
                                header('Location: ./administracion.php');
                                }
                            }  
                        }

                    // *************************************BLOG****************************************
                        //pintar entrada en la ficha para editarlo
                        if(isset($_GET["entrada"])){
                            if (!$ms){
                                $mensaje = 'ERROR: No pude conectar al servidor MySQL';
                            }else{
                        
                                if (mysqli_select_db($ms, $db)){
                                $q = "SELECT * FROM `blog` WHERE `id`= '".$_GET["entrada"]."'";
                                $r = mysqli_query($ms, $q);
                                    
                                    if(mysqli_num_rows($r)>0){  //si tiene resultados
                                        while($resultado=mysqli_fetch_assoc($r)){
                                            echo '<h2>Modificar Entrada del Blog</h2><br><form id="modificarEntrada" action="./administracion.php" method="get" style="margin-right:50%"><br>Titulo: <input type="text" class="entrada2" name="titulo" value="'.utf8_encode($resultado["titulo"]).'"><br>Autor:<input type="text" class="entrada2" name="autor" value="'.utf8_encode($resultado["autor"]).'"><br>Fecha:<input type="text" class="entrada2" name="fecha" value="'.utf8_encode($resultado["fecha"]).'"><br> Cuerpo: <input type="text" name="cuerpo" class="entrada2" value="'.utf8_encode($resultado["cuerpo"]).'"><br>Imagen: <input type="text" name="imagen" class="entrada2" value="'.utf8_encode($resultado["imagen"]).'"><input type="hidden" name="id" value="'.$resultado["id"].'"><input type="hidden" name="editarEntrada" value="'.$resultado["id"].'"><hr><br><input class="btn btn-primary" type="submit" value="Editar Entrada"></form><button class="btn btn-danger entradaBorrar" id="'.$resultado["id"].'">Eliminar Entrada</button>';
                                        }
                                    }
                                }
                            }  
                        }

                        //Modificar una entrada
                        if(isset($_GET["editarEntrada"])){
                            echo "console.log('hola')";
                            if (!$ms){
                                $mensaje = 'ERROR: No pude conectar al servidor MySQL';
                            }else{
                        
                                if (mysqli_select_db($ms, $db)){
                                $q = "UPDATE `blog` SET `titulo`= '".utf8_decode($_GET["titulo"])."' , `autor`= '".utf8_decode($_GET["autor"])."' , `fecha`= '".utf8_decode($_GET["fecha"])."' , `cuerpo`= '".utf8_decode($_GET["cuerpo"])."' , `imagen`= '".utf8_decode($_GET["imagen"])."'  WHERE `id`= '".$_GET["id"]."'";
                                $r = mysqli_query($ms, $q);
                                
                                header('Location: ./administracion.php');
                                }
                            }  
                        }

                        //Borrar una entrada
                        if(isset($_GET["entradaBorrar"])){
                            if (!$ms){
                                $mensaje = 'ERROR: No pude conectar al servidor MySQL';
                            }else{
                        
                                if (mysqli_select_db($ms, $db)){
                                $q = "DELETE FROM `blog` WHERE `id`= '".$_GET["entradaBorrar"]."'";
                                $r = mysqli_query($ms, $q);
                                    
                                //después de borrar redirijo a la pagina principal
                                header('Location: ./administracion.php');
                                }
                            }  
                        }

                        //Añadir una entrada
                        if(isset($_GET["crearEntrada"])){
                            if (!$ms){
                                $mensaje = 'ERROR: No pude conectar al servidor MySQL';
                            }else{
                        
                                if (mysqli_select_db($ms, $db)){
                                $q = "INSERT INTO `blog` (`titulo`,`autor`,`fecha`,`cuerpo`,`imagen`) VALUES ('".utf8_decode($_GET["titulo"])."','".utf8_decode($_GET["autor"])."','".utf8_decode($_GET["fecha"])."','".utf8_decode($_GET["cuerpo"])."','".utf8_decode($_GET["imagen"])."')";
                                $r = mysqli_query($ms, $q);
                                
                                if(!$r){
                                    echo"error en consulta";
                                }
                                //después de añadir redirijo a la pagina principal
                                header('Location: ./administracion.php');
                                }
                            }  
                        }

                        // ******************************SLIDERS*************************************
                        //pintar slider en la ficha para editarlo
                        if(isset($_GET["slider"])){
                            if (!$ms){
                                $mensaje = 'ERROR: No pude conectar al servidor MySQL';
                            }else{
                        
                                if (mysqli_select_db($ms, $db)){
                                $q = "SELECT * FROM `home` WHERE `id`= '".$_GET["slider"]."'";
                                $r = mysqli_query($ms, $q);
                                    
                                    if(mysqli_num_rows($r)>0){  //si tiene resultados
                                        while($resultado=mysqli_fetch_assoc($r)){
                                            echo '<h2>Modificar Slider</h2><br><form id="modificarProducto" action="./administracion.php" method="get" style="margin-right:50%"><br>Titulo:<input type="text" class="entrada2" name="sliderTituloEditar" value="'.utf8_encode($resultado["titulo"]).'"><br> Descripción: <input type="text" name="sliderDescripcionEditar" class="entrada2" value="'.utf8_encode($resultado["descripcion"]).'"><br>Imagen: <input type="text" class="entrada2" name="sliderImagenEditar"  value="'.utf8_encode($resultado["imagen"]).'"><br><hr><input type="hidden" name="id" value="'.$resultado["id"].'"><input class="btn btn-primary" type="submit" value="Actualizar"></form><button class="btn btn-danger sliderBorrar" id="'.$resultado["id"].'">Eliminar Slider</button>';
                                        }
                                    }
                                }
                            }  
                        }

                        //modificar Slider
                        if(isset($_GET["sliderTituloEditar"])){
                            if (!$ms){
                                $mensaje = 'ERROR: No pude conectar al servidor MySQL';
                            }else{
                        
                                if (mysqli_select_db($ms, $db)){
                                $q = "UPDATE `home` SET `titulo`= '".utf8_decode($_GET["sliderTituloEditar"])."' , `descripcion`= '".utf8_decode($_GET["sliderDescripcionEditar"])."' , `imagen`= '".utf8_decode($_GET["sliderImagenEditar"])."' WHERE `id`= '".$_GET["id"]."'";
                                $r = mysqli_query($ms, $q);
                                
                                header('Location: ./administracion.php');
                                }
                            }  
                        }

                        //Borrar un Slider
                        if(isset($_GET["sliderBorrar"])){
                            if (!$ms){
                                $mensaje = 'ERROR: No pude conectar al servidor MySQL';
                            }else{
                        
                                if (mysqli_select_db($ms, $db)){
                                $q = "DELETE FROM `home` WHERE `id`= '".$_GET["sliderBorrar"]."'";
                                $r = mysqli_query($ms, $q);
                                
                                //después de borrar redirijo a la pagina principal
                                header('Location: ./administracion.php');
                                }
                            }  
                        }

                        // Añadir Slider
                        if(isset($_GET["crearSlider"])){
                            if (!$ms){
                                $mensaje = 'ERROR: No pude conectar al servidor MySQL';
                            }else{
                        
                                if (mysqli_select_db($ms, $db)){
                                $q = "INSERT INTO `home` (`titulo`,`descripcion`,`clase`,`imagen`) VALUES ('".utf8_decode($_GET["titulo"])."','".utf8_decode($_GET["descripcion"])."','carousel-item','".utf8_decode($_GET["imagen"])."')";
                                $r = mysqli_query($ms, $q);
                                
                                if(!$r){
                                    echo"error en consulta";
                                }
                                //después de borrar redirijo a la pagina principal
                                header('Location: ./administracion.php');
                                }
                            }  
                        }
                        
                    ?>
        </div>

    </div>

    <script>

        $(document).ready(function(){

            //****************************Productos*******************************
            //Cargar plantilla Nuevo producto
            $("#nuevoProducto").click(function(){   //tenian class="producto"
                var formulario='<h2>Nuevo Producto</h2><br><form action="./administracion.php" method="get" style="margin-right:50%"><br>Nombre:<input name="nombre" type="text" class="entrada" placeholder="Introduce el nombre del reloj"><br> Descripción: <input type="text" name="descripcion" class="entrada" placeholder="Introduce la descripción del reloj"><br>Imagen: <input type="text" class="entrada" name="imagen" placeholder="Introduce la url de una imagen"><br>Precio: <input type="text" name="precio" class="entrada" placeholder="Introduce el precio del reloj"><input type="hidden" name="crearProducto" value="nuevo"><hr><br><input class="btn btn-success" type="submit" value="Añadir Producto"></form>';
                $(".w3-container").html(formulario);
            })

            //Cargar plantilla producto existente
            $(".producto").click(function(){
                var id=$(this).attr("id")
                window.location.assign("./administracion.php?producto="+id)
            })

            //Borrar producto
            $(".productoBorrar").click(function(){
                var id=$(this).attr("id")
                window.location.assign("./administracion.php?productoBorrar="+id)
            })


            //************************Blog*******************************
            //Cargar plantilla Nueva entrada
            $("#nuevaEntrada").click(function(){
                var formulario='<h2>Nueva Entrada del Blog</h2><br><form action="./administracion.php" method="get" style="margin-right:50%"><br>Titulo: <input type="text" name="titulo" class="entrada" placeholder="Introduce el titulo de la entrada"><br>Autor:<input type="text" placeholder="Introduce el nombre del autor" class="entrada" name="autor"><br>Fecha:<input type="text" placeholder="Introduce la fecha de publicación" class="entrada" name="fecha" >Cuerpo: <input type="text" name="cuerpo" class="entrada" placeholder="Introduce el cuerpo de la entrada"><br>Imagen: <input type="text" name="imagen" class="entrada" placeholder="Introduce la url de una imagen"><input type="hidden" name="crearEntrada" value="nueva"><hr><br><input class="btn btn-success" type="submit" value="Añadir Entrada"></form>';
                $(".w3-container").html(formulario);
            })

            //cargar plantilla Entrada Blog existente
            $(".entrada").click(function(){
                var id=$(this).attr("id")
                window.location.assign("./administracion.php?entrada="+id)
            })

            //Borrar Entrada
            $(".entradaBorrar").click(function(){
                var id=$(this).attr("id")
                window.location.assign("./administracion.php?entradaBorrar="+id)
            })



            //****************************Sliders*******************************
            //Cargar plantilla Nuevo Slider
            $("#nuevoSlider").click(function(){
                var formulario='<h2>Nuevo Slider</h2><br><form action="./administracion.php" method="get" style="margin-right:50%"><br>Titulo:<input name="titulo" type="text" class="entrada" placeholder="Introduce el titulo del slider"><br> Descripción: <input type="text" name="descripcion" class="entrada" placeholder="Introduce la descripción del slider"><br>Imagen: <input type="text" class="entrada" name="imagen" placeholder="Introduce la url de una imagen"><br><input type="hidden" name="crearSlider" value="nuevo"><hr><br><input class="btn btn-success" type="submit" value="Añadir Slider"></form>';
                $(".w3-container").html(formulario);
            })

            //Cargar plantilla Slider existente
            $(".slider").click(function(){
                var id=$(this).attr("id")
                window.location.assign("./administracion.php?slider="+id)
            })

            //Borrar Slider
            $(".sliderBorrar").click(function(){
                var id=$(this).attr("id")
                window.location.assign("./administracion.php?sliderBorrar="+id)
            })

        })

    </script>

</body>
</html>