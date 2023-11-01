<!-- ESTE DOCUMENTO TENDRÁ DOS PARTES
UNA DODE ESTARÁ UN PEQUEÑO PHP Y OTRA
DONDE ESTARÁ EL HTML DE BIENVENIDA. -->

<?php
// ESTE PHP SE HIZO PARA PROTEGER LAS PÁGINAS SIN ANTES INICIAR SESIÓN

session_start();

//!: SI NO isset: EXISTE LA VARIABLE SESIÓN usuario HAZ LO SOGUIENTE
if (!isset($_SESSION['usuario'])) {
  //ECHO ES MENSAJE
  echo '
      <script>
        alert("Por favor, debes iniciar sesión");
        window.location = "index.php";
      </script>
      ';
  // DESTRUIR CUALQUIER SESIÓN QUE EXISTA
  session_destroy();
  // CON DIE, EL CÓDIGO SE MUERE, SE DETIENE.
  die();
}

// AQUÍ SÍ ES MUY NECESARIO CERRAR EL CÓDIGO PHP CON ? Y >
// YA QUE LUEGO SEGUIRÁ CON EL HTML
?>

<!-- --------------------------------------------------------------------------------------- -->
<!-- CÓDIGO HML BIENVENIDA -->
<!DOCTYPE html>
<html>

<head>
  <title>Bienvenido(a)F </title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: linear-gradient(to bottom, #e8f1f8, #bed4e6);
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 40px;
      text-align: center;
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: #892929;
    }

    h1 {
      font-size: 48px;
      color: #892929;
      margin-bottom: 20px;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    p {
      font-size: 24px;
      color: #666666;
      margin-bottom: 30px;
    }

    .btn {
      display: inline-block;
      padding: 12px 24px;
      font-size: 18px;
      color: #ffffff;
      background-color: #892929;
      border-radius: 4px;
      text-decoration: none;
      transition: background-color 0.3;
    }

    .btn:hover {
      background-color: #23527c;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Bienvenido</h1>
    <p>SOLUCIONES TECNOLÓGICAS</p>


    <br>
    <img src="../subp/datos/act.jpg" alt="">
    <br>
    <h2>¡Regístrate y Mantén tus Datos Actualizados!</h2>
    <p>Ingresa al siguiente enlace: </p>

    <button onclick="window.location.href='../subp/datos/indexd.html'" class="btn">Registro & actualización de
      datos</button>
    <br>
    <br>
    <br>
    <h2>¿Buscas algún programa?</h2>
    <p>Visita nuestra sección de programas y
      <br>¡Obtén lo último en software!
    </p>
    <img src="../subp/datos/prog.webp" alt="" width="500" height="300">

    <br>
    <br>
    <button onclick="window.location.href='../subp/Prog/indexlp.html'" class="btn">Sección de programas</button>
    <br>
    <br>
    <br>

    <h2>¿Necesitas realizar un pago?</h2>
    <img src="../subp/p1.jpg" alt="" width="500" height="300">
    <br>
    <br>
    <button onclick="window.location.href='../subp/PAGOS/indexsp.html'" class="btn">Pagos</button>

    <br>
    <br>
    <br>

    <h2>Navega por nuestra web y descubre todas nuestras herramientras</h2>

    <img src="../LOGOS/cr.png">
    <br>
    <br>

    <!-- BOTÓN: VOLVER AL INICIO -->

    <button onclick="window.location.href='../index.html'" class="btn">Volver al inicio</button>

    <button onclick="window.location.href='php/cerrar_sesion.php'" class="btn">Cerrar Sesión</button>

    <h3>Nota:Cerrar sesión implica tener que volver a abrirla
      <br>
      para continuar en la página.
    </h3>
    <br>
    <br>
    <br>
    <p>Gracias por visitarnos</p>

    <p>Derechos reservados, Francisco Quiñones Maldonado,
      <br>Soluciones Tecnológicas
    </p>

  </div>



</body>

</html>

<!-- FINALIZACIÓN DEL CÓDIGO PHP
POR: FRANCISCO QUIÑONES MALDONADO -->