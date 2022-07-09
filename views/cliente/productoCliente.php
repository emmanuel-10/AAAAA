<?php

use models\ProductoModel as ProductoModel;

session_start();
require_once("../../models/ProductoModel.php");
$modelo = new ProductoModel();
$productos = $modelo->allProductos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciente</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="caja.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/cfc5ab0442.js" crossorigin="anonymous"></script>
</head>
<body background="https://previews.123rf.com/images/maniki81/maniki811708/maniki81170800070/84261568-peluquer%C3%ADa-patr%C3%B3n-de-herramientas-sin-fisuras-vector-dise%C3%B1o-aislado-ilustraci%C3%B3n-esquemas-azules-fond.jpg">

    <?php

    if(isset($_SESSION['cliente'])) { ?>

    <nav>
        <div class="nav-wrapper" style="background: radial-gradient(ellipse,#ba68c8 20%, #4a148c);">
        <a href="#" class="brand-logo" style="margin-left: 15px;">Hola <?= $_SESSION['cliente']['nombre'] ?> </a>
        <ul style="display: flex;"  class="right hide-on-med-and-down">
            <a style="display: flex;" href="index.php"><i class="material-icons">home</i> Inicio</a>
            <a style="display: flex;" href="misCita.php"><i class="material-icons">cloud_done</i>Mis Citas</a>
            <a style="display: flex;" href="agendarCita.php"><i class="material-icons">library_add</i>Agendar Cita</a>
            <a style="display: flex;" href="productoCliente.php"><i class="material-icons">local_grocery_store</i>Productos</a>
            <a style="display: flex;" href="salir.php"><i class="material-icons">settings_power</i>Cerrar Sesion</a>
            
        </ul>
        </div>
    </nav>



      
        <div class="container" style="margin-top: 65px;">
        <div class="card-panel center" style="background: radial-gradient(ellipse,#ba68c8 20%, #4a148c);" >
            <div class="row">
            <h1>Lista de Productos</h1>
                <?php foreach($productos as $pro) { ?>
                <form action="../../controllers/ControlCompra.php" method="POST">
                <div class="col l4 m6 s12"> 
                    <div class="card blue-grey darken-1"style="background: radial-gradient(ellipse,#ba68c8 20%, #4a148c);">
                        <div class="card-content white-text">
                             <span class="card-title"> <?=$pro['codigo'] ?></span>
                            <hr>
                            <span class="card-title"> <?=$pro['nombre'] ?></span>
                            <p><?=$pro['descripcion'] ?></p>
                            <hr>
                            <div class="">
                            <?=$pro['valor']?>
                            </div>
                            <hr>
                            <br>
                            <div >
                            <button class="btn" style="background-color: #ff00dd;" name="bt_buy" value="<?=$pro['codigo']?>">Comprar</button>
                            </div>
                        </div>
                        
                    </div>
                </div>
                </form>
                <?php } ?>
            </div>
        </div>
        </div>
       
        

        <footer class="footer"  style="background: radial-gradient(ellipse,#ba68c8 20%, #4a148c);margin-top: 55px;">
                <div class="center" style="display: grid; grid-template-columns: 1fr 1fr 1fr;" >

                    <div class="">
                        
                        <h2>Mapa del Sitio</h2>
                        <hr>
                        <ul class="" style="color: white;">
                            <li><h6>Inicio</h6></li>
                            
                            <li><h6>Informacion</h6></li>
                            
                            <li><h6>Opciones</h6></li>
                            
                            <li><h6>Footer</h6></li>
                            
                        </ul>
                    </div>

                    <div style="color: white;">
                        <h2>Datos del Contacto</h2>
                        <hr>
                        <h5>Dirección:</h5>
                        <h6>Av. Bernardo O'Higgins 054, c, San Fernando, Chile</h6>
                        <h5>Email:</h5>
                        <h6>salonmixstylos@gmail.com</h6>
                        <h5>Teléfono Y Whatsapp</h5>
                        <h6>+5628642950</h6>
                    </div>

                    <div class="">
                        <h2>Redes Sociales</h2>
                        <hr>
                        
                        <div class="redes" style="margin-left: 25% ;">
                            <a href="https://www.instagram.com/amnesiasanfernando/?hl=es-la"><i
                                    class="fab fa-instagram"></i></a>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-facebook-f"></i>
                         </div>

                    </div>

                </div>
            </footer>

    <?php } else { ?>

        <div class="row">
            <div class="col l4 m4 s12"></div>
            <div class="col l4 m4 s12">
                <div class="card-panel center">
                    <h4 class="center red-text">Acceso Denegado!</h4>
                    <a href="../../index.php">click aqui para iniciar</a>
                </div>
            </div>
        </div>

    <?php } ?>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>