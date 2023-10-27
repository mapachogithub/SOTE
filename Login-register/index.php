<!-- EL SIGUIENTE CÓDIGO SE HAECE PARA QUE SI LA SESIÓN ESTÁ INICIADA
Y SE RECARGA LA PÁGINA DE INICIO DE SESIÓN, LO LLEVE DIRECTO A LA BIENVENIDA. -->

<!-- CAMBIAR ESE BIENVENIDA POR UNA PÁGINA DE SESIÓN INICIADA. -->

<?php

session_start();

if (isset($_SESSION['usuario'])) {
    header("Location: bienvenida.php");
}

?>
<!-- ----------------------------------------------------------------------------------------- -->

<!DOCTYPE html>
<html>

<head>
    <!-- Aquí agregamos el nombre del archivo -->
    <title>Login & Resitstro</title>
    <!-- Unimos los estilos y vinculamos el archivo css-->
    <!-- LETRA ROBOTO TOMADA DE GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Chivo+Mono:ital,wght@1,900&family=Montserrat:wght@400;700&family=Open+Sans:wght@300;400;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <main>

        <!-- Creamos un contenedor para todo ya que es la idea gráfica -->
        <div class="contenedor__todo">

            <!-- CAJA TRASERA LOGIN -->
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Incia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesion</button>

                    <!-- <button id="btn__iniciar-sesion">Iniciar Cerrar Sesión</button>

                    <a href="../PAGINA-ST-C/Login-register/php/cerrar_sesion.php" class="botonR">Cerrar Sesión</a> -->
                </div>
                <!-- CAJA REGISTRO -->
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>

                </div>
            </div>
            <!-- OTRO CONEDENOR DENTRO DEL MISMO PARA EL LOGIN Y EL REGISTRO -->
            <div class="contenedor__login-register">

                <!-- LO CREAMOS CON FOMRULARIOS -->

                <!-- FORMULARIO DE LOGIN -->
                <!-- <form action="" class="formulario__login"> -->

                <form action="php./login_usuario_be.php" method="POST" class="formulario__login">
                    <!-- CAMPOS DE INCIO DE SESIÓN -->
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electrónico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Entrar</button>
                    <br>
                    <br>

                    <!-- <a href="http://localhost/SOTE/" class="botonise">Volver al inicio</a> -->
                    <!-- opcion de live server para mostrar página: -->
                    <a href="http://127.0.0.1:5501/index.html" class="botonise">Volver al inicio</a>



                    <!-- BOTÓN ALTERNO PARA CERRAR SESIÓN: QUEDARÁ COMENTADO  -->
                    <!-- <button id="cerrarSesionBtn">Cerrar Sesión</button>

                            <script>
                            document.getElementById("cerrarSesionBtn").addEventListener("click", function() {
                                // Crear un objeto XMLHttpRequest
                                var xhr = new XMLHttpRequest();

                                // Especificar la solicitud AJAX
                                // Enrutar el archivo php de cerrar sesión 

                                xhr.open("POST", "php/cerrar_sesion.php", true);

                                // Definir el tipo de contenido que se enviará al servidor
                                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                                // Manejar la respuesta de la solicitud AJAX
                                xhr.onreadystatechange = function() {
                                if (xhr.readyState === XMLHttpRequest.DONE) {
                                    if (xhr.status === 200) {
                                    // La solicitud se completó con éxito, puedes realizar acciones adicionales aquí si es necesario
                                    console.log("Sesión cerrada correctamente");
                                    } else {
                                    // Ocurrió un error al realizar la solicitud
                                    console.error("Error al cerrar la sesión");
                                    }
                                }
                                };

                                // Enviar la solicitud AJAX
                                xhr.send();
                            });
                            </script> -->


                    <!-- BOTÓN ALTERNO PARA CERRAR SESIÓN: QUEDARÁ COMENTADO -->

                    <!-- FORMULARIO DE REGISTRO DE USUARIO-->
                </form>


                <!-- CON EL TEXTO ""php./registro_usuario_be.php"
                ESTAMOS ACCEDIENDO AL PHP DONDE SE CONFIGURÓ
                EL GUARDADO DE DATOS EN LA BASE DE DATOS -->
                <!-- Y SE PONE MEDIANTE EL MÉTODO POST PARA QUE NO SE MUESTREN EN LA BARRA
                ESPACIADORA, SINO QUE SE MUESTREN DENTRO DE LA TABLA. -->
                <form action="php./registro_usuario_be.php" method="POST" class="formulario__register">

                    <!-- DESDE "NAME" ES PARA CREAR LA CONEXIÓN CON LA BASE DE DATOS Y LA Ñ NO EXISTE, SÓLO LA N -->
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electrónico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Registrarse</button>

                </form>

            </div>
            <!-- DIV DEL CONTENEDOR DE TODO -->
        </div>

    </main>
    <!-- VINCULAMOS EL ARCHIVO JS  -->
    <script src="script.js"></script>

    <!-- -------------------------------------------------------------------------------------------------- -->

    <!-- BOTONES FLOTANTES -->

    <!-- Botón de Llamada -->
    <a href="tel:310-2685524" target="_blank" class="boton-flotante llamada"
        onclick="mostrarMensaje('Se realizará una llamada con tu operador')">Llámanos</a>

    <!-- Botón de WhatsApp -->
    <a href="https://wa.link/2zmc5d" target="_blank" class="boton-flotante whatsapp"
        onclick="mostrarMensaje('Serás redirigido a tu servidor de WhatssApp')">Whatsapp</a>


    <style>
        /* Estilo para los botones flotantes */
        .boton-flotante {
            position: fixed;
            background-color: #8a0e1d;
            /* Cambia el color de fondo según tus preferencias */
            color: #fff;
            border: none;
            border-radius: 50%;
            padding: 15px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            opacity: 0.5;
            /* Ajusta la opacidad según tus preferencias */
            transition: opacity 0.3s, transform 0.3s;
            z-index: 1000;
            /* Asegura que estén por encima de otros elementos */
        }

        /* Estilo específico para el botón de Llamada */
        .llamada {
            bottom: 20px;
            right: 20px;
            /* Ajusta la posición horizontal */
        }

        /* Estilo específico para el botón de WhatsApp */
        .whatsapp {
            bottom: 80px;
            /* Ajusta la posición vertical */
            right: 20px;
            /* Ajusta la posición horizontal */
        }

        /* Estilo para redondear más los botones */
        .boton-flotante:hover {
            opacity: 0.8;
            /* Ajusta la opacidad al pasar el ratón sobre ellos */
            transform: scale(1.05);
            /* Ajusta la escala para un efecto más llamativo */
        }
    </style>

    <script>
        function mostrarMensaje(mensaje) {
            alert("Se realizará la acción: " + mensaje);
        }
    </script>




    <!-- -------------------------------------------------------------------------------------------------- -->


</body>

</html>

<!-- FINALIZACIÓN DEL CÓDIGO PHP
POR: FRANCISCO QUIÑONES MALDONADO -->