<?php

//1RO TOCA ABRIR LA CAJA FUERTE

    include "conexion_be.php";

// LO PRIMERO QUE LE VAMOS A DECIR ES QUE NECEISTAMOS 
// EXTRAER LOS DATOS QUE TENEMOS EN LOS CAMPOS (QUE SON VARIBALES
// PARA QUE DE ESA MANERA LO PODAMOS ALMACENAR)

// CREAMOS LA VARIBALE PARA ALMACENAR LOS DATOS DE CADA RECUADRO
$nombre_completo = $_POST["nombre_completo"];
$correo = $_POST["correo"];
$usuario = $_POST ["usuario"];
$contrasena = $_POST ["contrasena"];

//PARA ENCTRIPTAR LAS CONTRASEÑAS (QUEDARÁ COMENTADO)
//SI SE DESCOMENTA, LAS CONTRASEÑAS QUEDARÁN ENCRIPTADAS, PERO IGUAL FUNCIONARÁN.
// $contrasena = hash('sha512', $contrasena);

// AHORA VAMOS A CREAR UNA QUERY PARA QUE LOS DATOS SE ALAMACENEN 
// EN LA TABLA

// CON INSER INTO LE DECIMOS QUE VAMOS A INSERTAR DATOS EN UNA TABLA, LUEGO EN QUÉ TABLA,y (qué datos, sepatados con coma y espacio)
// LUEGO EL VALUES Y ('ENTRE COMILLAS SIMPLES', ''XXX)"; 
// Y SIEMPRE EN EL MISMO ORDEN.
// libro: usuarios
$query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contrasena) 
        -- CON COMILLAS SIMPLES SIEMPRE
        VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena')";
 
// VERIFICACIÓN PARA QUE NO SE REPITAN LOS DATOS EN LA BASE DE DATOS

// VERIFICACIÓN DE CORREO PARA QUE NO SE REPITA
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' ");
if(mysqli_num_rows ($verificar_correo) > 0 ){
    echo '
        <script>
            alert("Este correo ya se encuentra registrado, inténtalo con otro.");
            window.location = "../index.php";
        </script>
    ';
    exit();
}
//----------------------------------------------------------------------------------------------------------
// VERIFICACIÓN DE NOMBRE DE USUARIO PARA QUE NO SE REPITA

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' ");
if(mysqli_num_rows ($verificar_usuario) > 0 ){
    echo '
        <script>
            alert("Este usuario ya se encuentra registrado, inténtalo con otro.");
            window.location = "../index.php";
        </script>
    ';
    exit();
}
//----------------------------------------------------------------------------------------------------------
// VERIFICACIÓN DE NOMBRE DE NOMBRE COMPLETO PARA QUE NO SE REPITA
$verificar_nombre_completo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombre_completo = '$nombre_completo' ");
if(mysqli_num_rows ($verificar_nombre_completo) > 0 ){
    echo '
        <script>
            alert("Este nombre y apellidos ya se encuentran registrados, inténtalo con otros.");
            window.location = "../index.php";
        </script>
    ';
    exit();
}
//----------------------------------------------------------------------------------------------------------

// AHORA VAMOS A EJECUTAR EL QUERY

// primero abrimos la caja fuerte con la llave, que es la variable $conexion
// y luego tomamos el libro $query
$ejecutar = mysqli_query($conexion, $query);

// CONDICIONAL IF PARA DECIRLE QUE MUESTTRE UN MENSAJE
// AL HABER INGRESADO LOS DATOS CORRECTAMENTE Y VUELVA AL INICIO

// FUNCIÓN: window.location = "../index.php"; Es para volver a abrir la página principal luego de.
if($ejecutar){
    echo '
        <script>
            alert("Usuario almacenado exitosamente");
            window.location = "../index.php";
        </script>
    ';
}else{
    echo '
        <script>
            alert("Inténtelo nuevamente, usuario no almacenado");
            window.location = "../index.php";
        </script>
    ';
}

// PARA CERRAR LA CONEXIÓN
mysqli_close($conexion);


// FINALIZACIÓN DEL CÓDIGO PHP
// POR: FRANCISCO QUIÑONES MALDONADO
