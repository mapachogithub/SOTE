<?php

//DOCUMENTO LOGIN - INICIAR SESIÓN
//PARA LA VALIDACIÓN DE LOS DATOS INGRESADOS EN REGISTRO

//CON ESTE CÓDIGO LE DECIMOS QUE VAMOS A TRABAJAR CON SESIONES
session_start();

//1RO TOCA ABRIR LA CAJA FUERTE
include 'conexion_be.php';

// CREAMOS LA VARIBALE PARA ALMACENAR LOS DATOS DE CADA RECUADRO
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// CONTRASEÑAS ENCRYPTADAS

//  NOTA: MIENTAS ESTÉN DESHABILITADAS, NO SE PODRÁ INICIAR SESIÓN CON LAS ENCRIPTADAS.
//  LO SIGUIENTE ES PARA QUE LAS CONTRASEÑAS QUE ESTÁN ENCRIPTADAS FUNCIONEN
//...PERO QUEDA COMENTADO PORQUE COMO NO SE ESTÁN ENCRIPTANDO LAS CONTRASEÑAS, NO SE NECESITA.
//  PARA DESENCRIPTAR LAS CONTRASEÑAS: PASO 1: DESCOMENTAR: reistro_usuario_be.php línea 19
//...PASO 2: DESCOMENTAR LA SIGUIENTE LÍNEA DE ESTA PÁGINA Linea 21 $contrasena = hash('sha512', $contrasena);
//...Y GUARDAR, REFRESCAR Y LISTO.
// $contrasena = hash('sha512', $contrasena);

// CREAMOS LA VARIBALE PARA VALIDAR EL LOGIN
// aquí se valida el usuario y la contraseña
$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE 
correo='$correo' and contrasena='$contrasena'");

if (mysqli_num_rows($validar_login) > 0) {
    // VAMOS A CREAR LA SESIÓN PARA QUE NO QUEDEN ABIERTAS TODAS LAS PÁGINAS Y DESPROTEGIDAS OJO CON EL PUNTO Y COMA
    $_SESSION['usuario'] = $correo;

    header("location: ../bienvenida.php");
    // POSTERIORMENTE ESTA PÁGINA DE BIENVENIDA SERÁ CAMBIADA POR UN MENÚ DE OPCIONES 
    // PARA NAVEGAR POR LA PÁGINA WEB O LA APLICACIÓN.
    exit;
} else {
    echo '
    <script>
        alert("El usuario intruducido no existe, por favor verfique los datos");
        window.location = "../index.php";
    </script>
';
    exit;
}

// FINALIZACIÓN DEL CÓDIGO PHP
// POR: FRANCISCO QUIÑONES MALDONADO
