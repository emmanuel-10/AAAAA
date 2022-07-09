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
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    
</head>
<body class="container"> 

    <?php

    if(isset($_SESSION['admin'])) { ?>

    <header class="header">
        <div class="logo-nav-container">
            <a href="#" class="logo">SALON MS</a>
            <span class="menu-icon">Ver Menu</span>
            
            <div class="navigation">
                <ul>
                    <li><a href="index.php">Clientes</a></li>
                    <li><a href="productoAdmin.php">Productos</a></li>
                    <li><a href="salir.php">Cerrar Sesion</a></li>
                </ul>
            </div>
        </div>
    </header>

    
        <div class="main">
             <div class="card-panel center">
                <h1>Lista de Productos</h1>
                <h2>Bienvenido a la gestion de Productos</h2>
            </div>
        </div>



        <div class="card-panel center">
                <div>
                    <h1>Agregar producto</h1>
                </div>

                <div>
                <form action="../../controllers/RegistroProducto.php" method="POST">

                    <div class="input">
                        <input id="codigo" type="number" name="codigo" placeholder="CODIGO">
                        
                    </div>

                    <div class="input">
                        <input id="valor" type="number" name="valor" placeholder="VALOR">
                    </div>

                    <div class="input">
                        <input id="nombre" type="text" name="nombre" placeholder="NOMBRE">
                    </div>

                    <div class="input">
                        <input id="descripcion" type="text" name="descripcion" placeholder="DESCRIPCION">
                    </div>

                    <br> 

                    <div>
                        <button class="btn black">Registrar</button>
                    </div>


                    <p class="red-text">
                        <?php     
        
                        if(isset($_SESSION['error_ed'])){
                        echo $_SESSION['error_ed'];
                        unset($_SESSION['error_ed']);
                        }
                        ?>
                    </p>

                    <p class="green-text">
                        <?php     
                       
                        if(isset($_SESSION['ok_edit'])){
                        echo $_SESSION['ok_edit'];
                        unset($_SESSION['ok_edit']);
                        }
                        ?>
                    </p>
                    
                    <p class="red-text">
                        <?php     
        
                        if(isset($_SESSION['error'])){
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
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
                </form>
            </div>
            </div>




        <div class="card-panel center">
            <div class="row">
                <?php foreach($productos as $pro) { ?>
                <form action="../../controllers/ControlProducto.php" method="POST">
                <div class="col l6 m6 s12"> 
                    <div class="blue-grey darken-1">
                        <div class="card-content white-text">
                             <span class="card-title"> <?=$pro['codigo'] ?></span>
                            <hr>
                            <span class="card-title"> <?=$pro['nombre'] ?></span>
                            <p><?=$pro['descripcion'] ?></p>
                            <hr>
                            <div class="card-panel blue">
                            <?=$pro['valor']?>
                            </div>
                            <div >
                                <button name="bt_edit" value="<?= $pro['codigo'] ?>" class="btn orange">
                                    <i class="material-icons">edit</i>
                                </button>
                                
                                <button name="bt_delete" value="<?= $pro['codigo'] ?>" class="btn red">
                                    <i class="material-icons">delete</i>
                                </button>
                            </div>
                            
                            <hr>
                        </div>
                        
                    </div>
                </div>
                </form>
                <?php } ?>
            </div>
        </div>

            

        <?php if(!isset($_SESSION['editar'])) { ?>

           
            

           
                    
        
       
        <?php  } else {?>

            <div class="card-panel center">

        
            <div>
                <h1>Editar producto</h1>
            </div>

            <div>
                <form action="../../controllers/ControlEditProducto.php" method="POST">

                <input type="hidden" name="codigo" value="<?= $_SESSION['prod']['codigo']?>">

                    <div class="input-field">
                        <input autofocus="autofocus" id="valor" type="number" name="valor" value="<?= $_SESSION['prod']['valor']?>" >
                        <label for="valor">Valor</label>
                    </div>

                    <div class="input-field">
                        <input id="nombre" type="text" name="nombre" value="<?= $_SESSION['prod']['nombre']?>">
                        <label for="nombre">Nombre</label>
                    </div>

                    <div class="input-field">
                        <input id="descripcion" type="text" name="descripcion" value="<?= $_SESSION['prod']['descripcion']?>">
                        <label for="descripcion">Descripcion</label>
                    </div>


                    <div>
                        <button class="btn orange">Editar</button>
                    </div>
                    
                </form>


                

            </div>
                    
            </div>

                    
        
        
        <?php unset($_SESSION['editar']);  } ?>


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