// PRUEBA DE CONEXIÓN
// SE DEBE EJECUTAR AL ABRIR LA PÁGINA

// alert("Prueba de conexión")

// PRUEBA EXITOSA

// CODIGO:

//FUNCIÓN AL CLIKC: getElementby: botón registrarse
//addEventListener: para decirle que muestre la caja de registro
// BTN REGISTRARSE: EVENTO UNO DE LA ANIMACIÓN (SE MUEVE INICIALMENTE).
// BTN INICIAR SESIÓN: EVENTO DOS DE LA ANIMACIÓN (SE DEVUELVE).

// EFECTO DOS / EVENTOS DOS
document.getElementById("btn__iniciar-sesion").addEventListener("click", iniciarSesion);
// EFECTO UNO / EVENTO UNO
document.getElementById("btn__registrarse").addEventListener("click", register);

//FUNCIÓN PARA QUE LE REZISIZE SE VAYA HACIENDO EN LA PÁGINA
window.addEventListener("resize", anchoPagina);

// DECLARANDO VARIABLES:
//Contenedor de login y register"
var contenedor_login_register  = document.querySelector(".contenedor__login-register"); // DOBLE GUIÓN SIEMPRE
//formularios login y register
var formulario_login = document.querySelector(".formulario__login");
var formulario_register = document.querySelector(".formulario__register");
//Cajas
var caja_trasera_login = document.querySelector(".caja__trasera-login");
var caja_trasera_register = document.querySelector(".caja__trasera-register");

//AHORA TRABAJAMOS CON LAS VARIABLES ANTERIORMENTE DECLARADAS

function anchoPagina (){
    if(window.innerWidth > 850){
        caja_trasera_login.style.display = "block";
        caja_trasera_register.style.display = "block";
    }else{
        caja_trasera_register.style.display = "block"
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.display = "none";
        formulario_login.style.display = "block";
        formulario_register.style.display = "none";
        contenedor_login_register.style.left = "0px";

    }
}

anchoPagina();

function iniciarSesion(){

    // CONDICIONAL PARA CERRAR EL 100% RESPONSIVE
    if(window.innerWidth > 850){
        formulario_register.style.display = "none";
        contenedor_login_register.style.left ="10px";
        formulario_login.style.display = "block";
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.opacity = "0";
    }else{
        formulario_register.style.display = "none";
        contenedor_login_register.style.left ="0px";
        formulario_login.style.display = "block";
        caja_trasera_register.style.display = "block";
        caja_trasera_login.style.display = "none";
    }    
}

function register(){
    // CONDICIONAL PARA CERRAR EL 100% RESPONSIVE

    if(window.innerWidth > 850){
    //CUANDO LE DEMOS CLICK EN REGISTRARSE EL FORMULARIO REGISTER SE MUESTRE
        formulario_register.style.display = "block";
        contenedor_login_register.style.left ="410px";
        formulario_login.style.display = "none";
        //EFECTO DE OPACIDAD AL TEXTO DE LA CAJA TRASERA PREVIO A TAPARSE
        caja_trasera_register.style.opacity = "0";
        caja_trasera_login.style.opacity = "1";
    }else{
        formulario_register.style.display = "block";
        contenedor_login_register.style.left ="0px";
        formulario_login.style.display = "none";
        caja_trasera_register.style.display = "none";
        caja_trasera_login.style.display = "block";
        caja_trasera_login.style.opacity = "1";
    }
}

// PARA LA ANIMACIÓN DEL MOVIMIENTO SE USÓ EN CSS ANIMAIÓN DE MOVIMIENTO EN EL CONTENEDOR LOGIN Y REGISTER

// FINALIZACIÓN DEL CÓDIGO JS
// POR: FRANCISCO QUIÑONES MALDONADO