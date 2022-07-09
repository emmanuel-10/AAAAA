
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body class="container center red">



    
    <?php
    session_start();
   
    if(isset($_SESSION['cliente'])) { ?>

    <div class="centrar">
        
            <h1 class="card-panel" class="yellow-text">Cuenta bloqueada</h1>
            
            <?php
                header( "refresh:1;url=salir.php"); 
            ?>
        
    </div>

            

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