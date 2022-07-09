<?php

use models\ClienteModel as ClienteModel;

    session_start();
    require_once("../../models/ClienteModel.php");
    $modelo = new ClienteModel();
    $clientes = $modelo->allClientes();    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body class=""> 

    <?php

    if(isset($_SESSION['admin'])) { ?>

    <header class="header">
        <div class="logo-nav-container">
            <a href="index.php" class="logo">SALON MS</a>
            <span class="menu-icon">Ver Menu</span>
            
            <div class="navigation">
                <ul style="display: flex ;">
                <a style="display: flex;margin-right: 20px;" href="index.php"><i class="material-icons">person</i>Clientes</a>
                <a style="display: flex;margin-right: 20px;" href="productoAdmin.php"><i class="material-icons">local_grocery_store</i>Productos</a>
                <a style="display: flex;" href="salir.php"><i class="material-icons">settings_power</i>Cerrar Sesion</a>
                    
                    
                </ul>
            </div>
        </div>
    </header>

    
        <div class="main">
             <div class="card-panel center">
                <h1>Lista de Clientes</h1>
                <h2>Bienvenido a la gestion de usuarios</h2>
            </div>
        </div>
            
        
        <div class="container card-panel center">

            <div class="row">
                <div class="col l12 m12 s12">
            
            <form action="../../controllers/ControlTabla.php" method="POST">
            <table>
                <tr>
                    <th>Rut</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Edad</th>
                    <th>Estado</th>
                </tr>

                <?php foreach($clientes as $cl)  {?>
                <tr>
                    <td>
                        <?= $cl['rut'] ?>
                    </td>
                    <td>
                        <?= $cl['nombre'] ?>
                    </td>
                    <td>
                        <?= $cl['correo'] ?>
                    </td>
                    <td>
                        <?= $cl['edad'] ?>
                    </td>
                    <td> 
                       <?php 
                            if($cl['estado'] == 1){
                            $aux = "Habilitado";
                            $color ="green-text";
                            }else{
                                $aux = "Bloqueado";
                                $color ="red-text";
                            }
                       ?>

                        <div class="<?=$color?>"> <?= $aux?> </div>
                       
                    </td>

                    <td>
                        <button name="bt_edit" value="<?= $cl['rut'] ?>" class="btn orange">
                            <i class="material-icons">edit</i>
                        </button>
                        
                        <button name="bt_delete" value="<?= $cl['rut'] ?>" class="btn red">
                            <i class="material-icons">delete</i>
                        </button>
                    </td>
                    
                </tr>
                <?php } ?>
            </table>
            </form>
            </div>
            </div>
        </div> 
            
            
            <?php if(isset($_SESSION['editar'])) { ?>

            <div class="card-panel center">

                        <h1>Editar Cliente</h1>

                    <form action="../../controllers/ControlEdit.php" method="POST">

                        <input type="hidden" name="rut" value="<?=$_SESSION['client']['rut'] ?>">

                        <div class="input-field">
                            <input disabled autofocus="autofocus" id="nombre" type="text" name="nombre" value="<?=$_SESSION['client']['nombre'] ?>">
                            <label for="nombre">Nombre</label>
                        </div>

                       

                        <select name="estado" id="estado" >
                           
                           <option disabled selected>Selecciona</option>
                           
                           
                           <option  name="estado" id="estado" value="0">Bloqueado</option>
                           <option  name="estado" id="estado" value="1">Habilitado</option>

                           
                       </select>

                        <button class="btn orange">Editar</button>
                        <br><br>

                            
                    </form>
            </div>

            <?php unset($_SESSION['editar']); unset($_SESSION['client']); } ?>
            
            
           
           
            <footer class="footer">
                <div class="">
                    <p>SALON MIX STYLOS</p>
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


    <script src="scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems);});

    </script>
</body>
</html>