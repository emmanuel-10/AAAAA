<?php

use models\DetalleModel as DetalleModel;

session_start();
require_once("../../models/DetalleModel.php");
if(isset($_SESSION['cliente'])){
    $model = new DetalleModel();
    $compras = $model->allComprasCliente($_SESSION['cliente']['rut']);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="caja.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/cfc5ab0442.js" crossorigin="anonymous"></script>
</head>
<body background="https://previews.123rf.com/images/maniki81/maniki811708/maniki81170800070/84261568-peluquer%C3%ADa-patr%C3%B3n-de-herramientas-sin-fisuras-vector-dise%C3%B1o-aislado-ilustraci%C3%B3n-esquemas-azules-fond.jpg" >
    
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



    
    <div class="container">
    <div class="card-panel center" style="background: radial-gradient(ellipse,#ba68c8 20%, #4a148c);" >
              <h1>Trabajos previos</h1>
           
        <div class="row" style="margin-right:100px ;">

            <div class="col l4 m6 s12">
            <figure> 
                <img src="fotos/foto1.jpg" alt="" />
                <figcaption>
                <h5 style="margin-left: 18px;">Mas Informacion</h5>
                <p>Es un tratamiento capilar regularmente de tres pasos, donde se aplica al cabello, keratina y otros componente que tiene por propósito alisar, controlar el volumen, el frizz y aportar brillo, sedosidad y naturalidad al cabello.</p>
                <button style="background-color: #ff00dd;"><a style="color: yellow ;" href="agendarCita.php">Agendar cita</a></button>
                </figcaption>
            </figure>
            </div>

            <div class="col l4 m6 s12">
            <figure> 
                <img src="fotos/foto2.jpg" alt="" />
                <figcaption>
                <h5 style="margin-left: 18px;">Mas Informacion</h5>
                <p>Aclara todo el pelo. Usando gorra o papel de aluminio, se decoloran los mechones del grosor que se desee y luego se aplica un tono sobre tono, en la línea de los rubios</p>
                <button style="background-color: #ff00dd;"><a style="color: yellow ;" href="agendarCita.php">Agendar cita</a></button>
                </figcaption>
            </figure>
            </div>

            <div class="col l4 m6 s12">
            <figure> 
                <img src="fotos/foto3.jpg" alt="" />
                <figcaption>
                <h5 style="margin-left: 18px;">Mas Informacion</h5>
                <p>Se tratan de rulos que son de un material blando (como, por ejemplo, silicona) y que se colocan enroscados en tu cabello para ofrecerte los rizos u ondulaciones que deseas.</p>
                <button style="background-color: #ff00dd;"><a style="color: yellow ;" href="agendarCita.php">Agendar cita</a></button>
                </figcaption>
            </figure>
            </div>

            <div class="col l4 m6 s12">
            <figure> 
                <img src="fotos/foto4.jpg" alt="" />
                <figcaption>
                <h5 style="margin-left: 18px;">Mas Informacion</h5>
                <p>Se tratan de rulos que son de un material blando (como, por ejemplo, silicona) y que se colocan enroscados en tu cabello para ofrecerte los rizos u ondulaciones que deseas.</p>
                <button style="background-color: #ff00dd;"><a style="color: yellow ;" href="agendarCita.php">Agendar cita</a></button>
                </figcaption>
            </figure>
            </div>

            <div class="col l4 m6 s12">
            <figure> 
                <img src="fotos/foto5.jpg" alt="" />
                <figcaption>
                <h5 style="margin-left: 18px;">Mas Informacion</h5>
                <p>Se tratan de rulos que son de un material blando (como, por ejemplo, silicona) y que se colocan enroscados en tu cabello para ofrecerte los rizos u ondulaciones que deseas.</p>
                <button style="background-color: #ff00dd;"><a style="color: yellow ;" href="agendarCita.php">Agendar cita</a></button>
                </figcaption>
            </figure>
            </div>

            <div class="col l4 m6 s12">
            <figure> 
                <img src="fotos/foto6.jpg" alt="" />
                <figcaption>
                <h5 style="margin-left: 18px;">Mas Informacion</h5>
                <p>Se tratan de rulos que son de un material blando (como, por ejemplo, silicona) y que se colocan enroscados en tu cabello para ofrecerte los rizos u ondulaciones que deseas.</p>
                <button style="background-color: #ff00dd;"><a style="color: yellow ;" href="agendarCita.php">Agendar cita</a></button>
                </figcaption>
            </figure>
            </div>

            <div class="col l4 m6 s12">
            <figure> 
                <img src="fotos/foto7.jpg" alt="" />
                <figcaption>
                <h5 style="margin-left: 18px;">Mas Informacion</h5>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                <button style="background-color: #ff00dd;"><a style="color: yellow ;" style="color: yellow ;" href="agendarCita.php">Agendar cita</a></button>
                </figcaption>
            </figure>
            </div>

            <div class="col l4 m6 s12">
            <figure> 
                <img src="fotos/foto8.jpg" alt="" />
                <figcaption>
                <h5 style="margin-left: 18px;">Mas Informacion</h5>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                <button style="background-color: #ff00dd;"><a style="color: yellow ;" href="agendarCita.php">Agendar cita</a></button>
                </figcaption>
            </figure>
            </div>

            <div class="col l4 m6 s12">
            <figure> 
                <img src="fotos/foto9.jpg" alt="" />
                <figcaption>
                <h5 style="margin-left: 18px;">Mas Informacion</h5>
                <p>Un corte de cabello describe el acortamiento o la modificación del tipo de peinado del cabello, la barba del cuello debemos situarnos frente al espejo, con la cabeza recta, y con un dedo marcar una línea entre una oreja y otra pasando por el cuello y definiendo la zona de la mandíbula.</p>
                <button style="background-color: #ff00dd;"><a style="color: yellow ;" href="agendarCita.php">Agendar cita</a></button>
                </figcaption>
            </figure>
            </div>
        </div>
       
    </div>
    </div>

    <footer class="footer"  style="background: radial-gradient(ellipse,#ba68c8 20%, #4a148c);">
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