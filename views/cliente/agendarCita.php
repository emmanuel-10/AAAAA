<?php

use models\CitaModel as CitaModel;


session_start();
require_once("../../models/CitaModel.php");
if (isset($_SESSION['cliente'])) {
    $model = new CitaModel;
    $citas = $model->allCitas($_SESSION['cliente']['rut']);
    $servicios = $model->allServicios();
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


            
            <div class="container" >
            <div class="card-panel center" style="background: radial-gradient(ellipse,#ba68c8 20%, #4a148c);" >

                        <div>
                            <h1>Agendar una cita</h1>
                        </div>


                        <form action="../../controllers/RegistroCita.php" method="POST">


                            <div class="input-field" >
                                <input  id="fecha" type="text" name="fecha"  class="datepicker" autofocus="autofocus">
                                <label  for="fecha">FECHA</label>
                            </div>


                            <input type="hidden" name="cliente" value="<?=$_SESSION['cliente']['rut'] ?>">
                            
                            <select name="servicio" id="servicio" >
                           
                                <option disabled selected>Selecciona el tipo de servicio</option>
                                <?php  foreach($servicios as $serv ) { ?>

                                <option   name="servicio" id="servicio" value="<?= $serv['id']?>"><?= $serv['tipo'] ?></option>

                                 <?php }?>  
                            </select>

                            <select  name="hora" id="hora" >
                           
                                
                                <option  name="servicio" id="servicio" value="10 AM">10 AM</option>
                                <option  name="servicio" id="servicio" value="11 AM">11 AM</option>
                                <option  name="servicio" id="servicio" value="12 PM">12 PM</option>        
                                <option  name="servicio" id="servicio" value="1 PM">1 PM</option>
                                <option  name="servicio" id="servicio" value="2 PM">2 PM</option>
                                <option  name="servicio" id="servicio" value="3 PM">3 PM</option>
                                <option  name="servicio" id="servicio" value="4 PM">4 PM</option>
                                <option  name="servicio" id="servicio" value="5 PM">5 PM</option>
                                <option  name="servicio" id="servicio" value="6 PM">6 PM</option>        
                                <option  name="servicio" id="servicio" value="7 PM">7 PM</option>
                                <option  name="servicio" id="servicio" value="8 PM">8 PM</option>
                                <option  name="servicio" id="servicio" value="9 PM">9 PM</option>

                                
                            </select>

                            <br>
                            <div>
                            <button class="btn" style="background-color: #ff00dd;">Registrar</button>
                            </div>
                                  
                        </form>


                        <p class="red-text">
                            
                            <?php     
                            if(isset($_SESSION['error'])){
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                            }
                            ?>
                        </p>

                        <p class="red-text" >
                            <?php     
            
                            if(isset($_SESSION['error2'])){
                            echo $_SESSION['error2'];
                            unset($_SESSION['error2']);
                            }
                            ?>
                        </p>

                        <p class="green-text">
                            <?php     
            
                            if(isset($_SESSION['respuesta'])){
                            echo $_SESSION['respuesta'];
                            unset($_SESSION['respuesta']);
                            }
                            ?>
                        </p>
            </div>
            </div>
            <div class="container">
            <div class="card-panel center" style="background: radial-gradient(ellipse,#ba68c8 20%, #4a148c);" >
                <h1>Mis citas</h1>
            
                <table>
                    <tr style="color: white;">
                        <th>Id</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>RUT Cliente</th>
                        <th>Servicio</th>
                    </tr>
                    <?php foreach ($citas as $c) { ?>
                    <tr style="color: white;">
                        <td><?= $c['id'] ?></td>
                        <td><?= $c['fecha'] ?></td>
                        <td><?= $c['hora'] ?></td>
                        <td><?= $c['cliente'] ?></td>
                        <td>
                            <?php
                                if($c['servicio'] == 1){
                                    $aux = "Corte de pelo";
                                }elseif($c['servicio'] == 2){
                                    $aux = "Alisado";
                                }
                            ?>
                            <p><?=$aux?></p>
                        </td>

                        
                    </tr>
                    <?php } ?>
                </table>
                   
               
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
                        <h5>Direcci??n:</h5>
                        <h6>Av. Bernardo O'Higgins 054, c, San Fernando, Chile</h6>
                        <h5>Email:</h5>
                        <h6>salonmixstylos@gmail.com</h6>
                        <h5>Tel??fono Y Whatsapp</h5>
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


    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems);});

        document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.datepicker');
        var instances = M.Datepicker.init(elems,{
            format: 'yyyy-mm-dd',
            autoClose: true
        });
         });
    </script>
    
</body>
</html>