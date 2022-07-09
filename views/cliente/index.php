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
<body background="https://previews.123rf.com/images/maniki81/maniki811708/maniki81170800070/84261568-peluquer%C3%ADa-patr%C3%B3n-de-herramientas-sin-fisuras-vector-dise%C3%B1o-aislado-ilustraci%C3%B3n-esquemas-azules-fond.jpg">
    
    <?php
    session_start();
    if(isset($_SESSION['cliente'])) { ?>

    <nav>
        <div class="nav-wrapper" style="background: radial-gradient(ellipse,#ba68c8 20%, #4a148c);">
        <a href="#" class="brand-logo" style="margin-left: 15px;">Hola <?= $_SESSION['cliente']['nombre'] ?> </a>
        <ul style="display: flex;"  class="right hide-on-med-and-down">
            <a style="display: flex;" href="index.php"><i class="material-icons">home</i> Inicio</a>
            <a style="display: flex;" href="salir.php"><i class="material-icons">settings_power</i>Cerrar Sesion</a>
        </ul>
        </div>
    </nav>


            <div class="card-panel center" style="background: radial-gradient(ellipse,#ba68c8 20%, #4a148c); border-radius: 15px; margin-top: 25px;" >
                <h1>Bienvenido a Nuestro Local</h1>
                <h2>Salon Mix Stylos</h2>
            </div>


<div class="container" style="margin-top: 100px;">

<div class="contenido" >
            
            <div class="titulo" style="background: radial-gradient(ellipse,#ba68c8 20%, #4a148c);" >
                <div class="">
                    <h2>Salon Mix Stylos</h2>
                    <img src="https://us.123rf.com/450wm/john79/john791803/john79180300123/98088188-chica-y-tijeras-de-peluquería-símbolo-para-un-salón-de-belleza-en-color-dorado.jpg?ver=6" alt="">
                    <h2>Salon de Belleza y Peluqueria</h2>
                </div>
            </div>
       
      
        
        <div class="login" style="background: radial-gradient(ellipse,#ba68c8 20%, #4a148c);" >
            <h2>Dirección</h2>
            
            <a
                href="https://www.google.com/maps/place/Amnesia+Multiespacio/@-34.5953269,-70.9865037,14.75z/data=!4m8!1m2!2m1!1sdiscoteca!3m4!1s0x0:0xcdcb12a583568ec8!8m2!3d-34.5962997!4d-70.9875369">
                <p>Av. Bernardo O'Higgins 054, c, San Fernando, Chile</p>
            </a>
            <hr>
            <h2>Horarios</h2>
            <p>
            <ul>
                <li>Lunes de 08:00 hasta las 21:00</li>
                <li>Martes de 08:00 hasta las 21:00</li>
                <li>Miercoles de 08:00 hasta las 21:00</li>
                <li>Jueves de 08:00 hasta las 21:00</li>
                <li>Viernes de 08:00 hasta las 21:00</li>
                <li>Sábado de 08:00 hasta las 21:00</li>
                <li>Domingo-Cerrado</li>
            </ul>
            </p>
            <hr>

            <h2>Encuentranos en nuestras redes oficiales:</h2>
            <div class="redes">
                            <a href="https://www.instagram.com/"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
            </div>


        </div>
    </div>





    












        
        <div class="contenedora">
            <div class="row">

            <div class="col l6 m6 s12">
                  <div class="card-panel center" style="background: radial-gradient(ellipse,#ba68c8 20%, #4a148c); border: 2px solid black; border-radius: 15px;">
                 
                      <div class="div">
                          <h2>Ver productos</h2>
                      </div>

                      <div class="div">
                          <p>En esta seccion podras adquirir productos</p>
                      </div>

                      <div class="div">
                          <a href="productoCliente.php"><button class="btn blue">Ver Productos</button></a>
                      </div>

                  </div>
        
              </div>

              <div class="col l6 m6 s12">

                  <div class="card-panel center" style="background: radial-gradient(ellipse,#ba68c8 20%, #4a148c); border: 2px solid black; border-radius: 15px;">

                      <div class="div">
                          <h2>Agendar Cita</h2>
                      </div>

                      <div class="div">
                          <p>En esta seccion podras Agendar una cita</p>
                      </div>

                      <div class="div">
                          <a href="agendarCita.php"><button class="btn blue">Agendar Cita</button></a>
                      </div>

                  </div>

               </div>

              <div class="col l6 m6 s12">

              <div class="card-panel center" style="background: radial-gradient(ellipse,#ba68c8 20%, #4a148c); border: 2px solid black; border-radius: 15px;">

                      <div class="div">
                          <h2>Ver mis Citas</h2>
                      </div>

                      <div class="div">
                          <p>En esta seccion podras Ver tus citas agendadas</p>
                      </div>

                      <div class="div">
                          <a href="misCita.php"><button class="btn blue">Ver mis Citas</button></a>
                      </div>

                  </div>

              </div>

              <div class="col l6 m6 s12">

                  <div class="card-panel center" style="background: radial-gradient(ellipse,#ba68c8 20%, #4a148c); border: 2px solid black; border-radius: 15px;">

                      <div class="div">
                          <h2>Trabajos previos</h2>
                      </div>

                      <div class="div">
                          <p>En esta seccion podras ver los trabajos previos</p>
                      </div>

                      <div class="div">
                          <a href="trabajosp.php"><button class="btn blue">Ver Trabajos</button></a>
                      </div>

                  </div>

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
                            <a href="https://www.instagram.com/"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
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