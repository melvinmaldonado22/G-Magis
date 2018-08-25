$("#btn-login").click(function(){
    $("#div-login").css("display","none");
    $("#slc-correo").append(
        `<option value="1">${$("#txt-correo").val()}</option>
         <option value="2">Otra cuenta</option>`
    );
    $("#div-login2").fadeIn(800);
    
})


$("#btn2-login").click(function(){
    var parametros = "correo="+$("#txt-correo").val()+"&password="+$("#txt-password").val();
    console.log("Informacion a enviar: " + parametros);
    $.ajax({
        url:"ProcesarLogin.php",
        method:"POST",
        data: parametros,
        dataType:"json",
        success:function(respuesta){
            if(respuesta.codigo == 1){
                window.location = "PaginaPrincipal.php";
            }else if(respuesta.codigo == 2){
                window.location = "Home.php";
            }
        },
        error:function(error){
            console.log(error);
        }
    });
})

