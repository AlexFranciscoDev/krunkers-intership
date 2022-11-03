"use strict";

// Afegim un event al botó que dona la opció de mostrar contrasenya
/*
var botonMostrar = document.getElementById("mostrarPasswd");
botonMostrar.addEventListener("click", mostrarPassword);
*/
/**
 * Funció que mostra la contraseña
 */
function mostrarPassword(numInput) {
    let password;
    // Mirem quin input ha clicat el botó per saber quin hem de mostrar
    if (numInput == 1) {
        password = document.getElementById("currentPasswd");
    } else if (numInput == 2) {
        password = document.getElementById("newPasswd");
    } else {
        password = document.getElementById("newPasswd2");
    }
    
    // Mirem si s'està mostrant o no la contraseña i ho canviem
    if (password.type == "password") {
        password.type = "text";
    } else {
        password.type = "password";
    }
}