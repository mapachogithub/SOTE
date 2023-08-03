<!-- "conexion_be.php" SIGINIFICA:
CONEXIÓN BACKEND = BE
SÓLO PARA IDENTIFICARLO. -->

<!-- CON EL SIGUIENTE COMANDO DE INDICAMOS 
QUE VAMOS A TRABAJAR CON PHP  -->

<?php

    // EL SIGUIENTE COMANDO ES PARA ALMACENAR LA CONEXIÓN
    // EN UNA VARIABLE: CON EL SÍMBOLO DE PESO.
    // 1- localhost: Porque estamos utilziando un servidor local 
    // 2 - root: porque es el nombre de usuario de mysql por defecto 
    // 3 - contraseña: si está en blanco en el servidor se dejan las comillas y ya 
    //     Ahora vamos a "abrir la caja fuerte": el servidor y los "cuadernos": tablas 
    // 4 - la base de datos: login_register_db
    $conexion = mysqli_connect("localhost", "root", "", "login_register_db");

    // CONDICIONAL PARA COMRPOBAR CONEXIÓN:
/*/    
    if ($conexion) {
        // ECHO: ALERT / MENSAJE
        echo "Conectado existosamente a la Base de Datos";
    }else{
        echo "No se ha podido conectar a la Base de Datos";
    }
// ESTA ES LA LLAVE PARA QUE PODAMOS ABRIR EL SERVIDOR (LA CAJA FUERTE Y SUS CUADERNOS)
// ____________________________________________________________________________

// SE UTILIZA O UTILIZABA PARA CERRAR EL CÓDIGO
?>

// FINALIZACIÓN DEL CÓDIGO PHP
// POR: FRANCISCO QUIÑONES MALDONADO
*/