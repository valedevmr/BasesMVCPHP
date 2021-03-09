<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="public/css/bootstrap.min.css">
        <link rel="stylesheet" href="public/css/index.css">
    </head>
    <body>

    <?php
        include "views/modulos/navegacion.php";
     ?>
     <?php

        $enlacesContenidos = new Controller();
        $enlacesContenidos-> enlacesC();
      ?>

      <footer class="">
          <p>
              Derechos de Autor Y más
          </p>
      </footer>
    <script type="text/javascript" src="public/js/index.js">
    </script>
    <script type="text/javascript" src="public/js/jquery-3.5.1.min.js"> </script>
    <script type="text/javascript" src="public/js/bootstrap.bundle.min.js">

    </script>
    </body>
</html>
