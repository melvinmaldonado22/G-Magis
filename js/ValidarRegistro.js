function Validar(){

    if(
        validarCampoVacio("txt-nombre")==false&&
        validarCampoVacio("txt-apellidos")==false&&
        validarCampoVacio("txt-correo")==false&&
        validarCampoVacio("txt-contraseña")==false&&
        validarCampoVacio("txt-confirmar-contraseña")==false){
        if(document.getElementById("txt-contraseña").value ==document.getElementById("txt-confirmar-contraseña").value){
            //console.log("contraseña coinciden")
            return true;
        }else{
            return false;
        } 
    }else{
        return false;
    }
    
}

function validarCampoVacio(id){
    if(document.getElementById(id).value == ""){
        document.getElementById(id).classList.remove("is-valid");
        document.getElementById(id).classList.add("is-invalid");
        return true;
    }else{
        document.getElementById(id).classList.remove("is-invalid");
        document.getElementById(id).classList.add("is-valid");
        return false;
    }
}

function validarEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (re.test(email)){
       // console.log("Correo valido " + email); 
        document.getElementById("txt-correo").classList.remove("is-invalid");
        document.getElementById("txt-correo").classList.add("is-valid");
        return false;            
    }
    else{
       // console.log("Correo invalido " + email);
        document.getElementById("txt-correo").classList.remove("is-valid");
        document.getElementById("txt-correo").classList.add("is-invalid");
        return true;      
    }
}

function validarContraseña(clave) {
    var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&,./;'0-9#%])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/;
    if (regex.test(clave)){
        //console.log("Contraseña valida " + clave); 
        document.getElementById("txt-contraseña").classList.remove("is-invalid");
        document.getElementById("txt-contraseña").classList.add("is-valid");
        return false;            
    }
    else{
        //console.log("Contraseña no valida " + clave);
        document.getElementById("txt-contraseña").classList.remove("is-valid");
        document.getElementById("txt-contraseña").classList.add("is-invalid");
        return true;      
    }
}

function confirmarContraseña(clave) {
    if (document.getElementById("txt-contraseña").value == clave){
        //console.log("Contraseña valida " + clave); 
        document.getElementById("txt-confirmar-contraseña").classList.remove("is-invalid");
        document.getElementById("txt-confirmar-contraseña").classList.add("is-valid");
        return false;            
    }
    else{
       // console.log("Contraseña no valida " + clave);
        document.getElementById("txt-confirmar-contraseña").classList.remove("is-valid");
        document.getElementById("txt-confirmar-contraseña").classList.add("is-invalid");
        return true;      
    }
}