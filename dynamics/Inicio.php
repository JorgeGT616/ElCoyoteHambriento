<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>El Coyote Hambriento</title>
    <link rel="icon" href="../statics/Img/Logo.png">
    <link rel="stylesheet" href="../statics/css/Diseño.css">
  </head>
  <body>
    <?php
      session_name("ElCoyote");
      session_id("3141592653");
      session_start();
      if (isset($_SESSION['nombre'])) {
        header('Location: catalogo.php');
      }
      else {
        echo '
        <form action="Administrador.php" method="post">
          <input type="submit" value="Administrar"> <br>
        </form>
          <fieldset class="aber">
            <legend> <h1>El Coyote Hambriento</h1></legend>
            <table class="transparente1">
              <tr>
                <th><h2>Regístrate</h2></th>
                <th><h2>Inicia Sesión</h2> </th>
              </tr>
              <tr>
                <th>
                  <form action="Registro.php" method="post">
                    <input type="submit" value="Registrate"> <br>
                  </form>
                </th>
                <th>
                  <form action="Inicio Sesion.php" method="post">
                    <input type="submit" value="Iniciar Sesión">
                  </form>
                </th>
              </tr>
            </table>
          </fieldset> <br>
          <img src="../statics/Img/Logo.png" alt="Logo" style="height:70px">
        ';
      }
    ?>
  </body>
</html>
