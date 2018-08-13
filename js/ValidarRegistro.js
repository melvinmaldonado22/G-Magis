function Validar(){

    validarCampoVacio("txt-nombre");
    validarCampoVacio("txt-apellidos");
    validarCampoVacio("txt-correo");
    validarCampoVacio("txt-contraseña");
    validarCampoVacio("txt-confirmar-contraseña");
}

function validarCampoVacio(id){
    if(document.getElementById(id).value == ""){
        document.getElementById(id).classList.remove("is-valid");
        document.getElementById(id).classList.add("is-invalid");
        return false;
    }else{
        document.getElementById(id).classList.remove("is-invalid");
        document.getElementById(id).classList.add("is-valid");
        return true;
    }
}

function validarEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (re.test(email)){
        //console.log("Correo valido " + email); 
        document.getElementById("txt-correo").classList.remove("is-invalid");
        document.getElementById("txt-correo").classList.add("is-valid");
    }
    else{
        //console.log("Correo invalido " + email);
        document.getElementById("txt-correo").classList.remove("is-valid");
        document.getElementById("txt-correo").classList.add("is-invalid");
    }
}