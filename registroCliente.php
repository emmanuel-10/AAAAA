<?php 
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <div class="login-root">
        <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
          <div class="loginbackground box-background--white padding-top--64">
            <div class="loginbackground-gridContainer">
              <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
                <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
                </div>
              </div>
              <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
                <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
              </div>
              <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
                <div class="box-root box-background--blue800" style="flex-grow: 1;"></div>
              </div>
              <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
                <div class="box-root box-background--blue animationLeftRight" style="flex-grow: 1;"></div>
              </div>
              <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
                <div class="box-root box-background--gray100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
              </div>
              <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
                <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
              </div>
              <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
                <div class="box-root box-background--blue animationRightLeft" style="flex-grow: 1;"></div>
              </div>
              <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
                <div class="box-root box-background--gray100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
              </div>
              <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
                <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
              </div>
            </div>
          </div>
          <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
            <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
              <h1><a href="http://blog.stackfindover.com/" rel="dofollow">Salon Mix Stylos</a></h1>
            </div>
            <div class="formbg-outer">
              <div class="formbg">
                <div class="formbg-inner padding-horizontal--48">
                  <span class="padding-bottom--15">Registrate</span>


<form action="controllers/RegistroCliente.php" method="POST">

    <div class="field padding-bottom--24">
        <label for="rut">Rut</label>
        <input id="rut" type="text" name="rut">
    </div>
    <div class="field padding-bottom--24">
        <label for="nombre">Nombre</label>
        <input id="nombre" type="text" name="nombre">
    </div>
    <div class="field padding-bottom--24">
        <label for="correo">Correo</label>
        <input id="correo" type="text" name="correo">
    </div>
    <div class="field padding-bottom--24">
        <label for="clave">Clave</label>
        <input id="clave" type="password" name="clave">
    </div>
    <div class="field padding-bottom--24">
        <label for="edad">Edad</label>
        <input id="edad" type="number" name="edad">
    </div>

    <div class="field padding-bottom--24">
      <input type="submit" name="submit" value="Registrar">
    </div>


    

</form>

    <p>
        <?php     
         
            if(isset($_SESSION['error'])){
            echo $_SESSION['error'];
            unset($_SESSION['error']);
            }
         ?>
    </p>

    <p>
        <?php     
         
            if(isset($_SESSION['respuesta'])){
            echo $_SESSION['respuesta'];
            unset($_SESSION['respuesta']);
            }
         ?>
    </p>

    

</div>
              </div>
              <div class="footer-link padding-top--24">
                <span>No tienes una cuenta? <a href="index.php">Inicia Sesion</a></span>
                <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
                  <span><a href="#">© Stackfindover</a></span>
                  <span><a href="#">Contact</a></span>
                  <span><a href="#">Privacy & terms</a></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
</body>
</html>