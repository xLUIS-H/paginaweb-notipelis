// function inicioSesion() {
//     if (document.getElementById('usuarioLogin').value == 'luis' && document.getElementById('passwordLogin').value == 'luis') {
//         return true;
//     } else {
//         document.getElementById('errorLogin').style.display = 'block';
//         return false;
//     }
// }

function mostrarErrorDiferentePassword() {
    if (document.getElementById('passwordRegistro').value != document.getElementById('passwordVerify').value) {
        document.getElementById('errorPassword').style.display = 'block';
    } else {
        ocultarErrorDiferentePassword();
    }
}

function ocultarErrorDiferentePassword() {
    document.getElementById('errorPassword').style.display = 'none';
}

function ocultarErrorLogin() {
    document.getElementById('errorLogin').style.display = 'none';
}

function errorSubmit() {
    if (document.getElementById('passwordRegistro').value != document.getElementById('passwordVerify').value) {
        return false;
    }
}

function mostrarPassword() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function valideKeyNumeros(evt) {
    // code is the decimal ASCII representation of the pressed key.
    var code = (evt.which) ? evt.which : evt.keyCode;
    if (code == 8) { // backspace.
        return false;
    } else if (code >= 48 && code <= 57) { // is a number.
        return true;
    } else { // other keys.
        return false;
    }
}

function valideKeyLetras(evt) {
    // code is the decimal ASCII representation of the pressed key.
    var code = (evt.which) ? evt.which : evt.keyCode;
    if (code == 32 || code >= 65 && code <= 90 || code >= 97 && code <= 122) { //space, letter
        return true;
    } else { // other keys.
        return false;
    }
}

function valideKeyLetrasNumeros(evt) {
    var code = (evt.which) ? evt.which : evt.keyCode;
    if (code == 32 || code >= 48 && code <= 57 || code >= 65 && code <= 90 || code >= 97 && code <= 122) {
        return true;
    } else {
        return false;
    }
}

function valideUsuario(evt) {
    var code = (evt.which) ? evt.which : evt.keyCode;
    if (code >= 48 && code <= 57 || code >= 65 && code <= 90 || code >= 97 && code <= 122) {
        return true;
    } else {
        return false;
    }
}

function asignarClaseActivoAdmin() {
    // var ob = document.getElementById("menuNavAdmin").className = "active";
    
    if (document.location.href == "http://localhost/practicas/Proyecto_Blog_Noticias/administracion/administradores.php") {
        alert("administradores");
        document.getElementById("menuNavAdmin").addClass('active');
    }
}


function verificarUsuario() {
    if (document.getElementById('usuarioRegistro').value == 'luis') {
        alert('iguales');
    }
}