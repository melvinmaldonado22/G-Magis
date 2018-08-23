$("#btn-login").click(function(){
    $("#div-login").css("display","none");
    $("#div-login2").fadeIn(800);
})


$("#btn2-login").click(function(){
    var parametros = "correo="+$("#txt-correo").val()+"&password="+$("#txt-password").val();
    console.log("Informacion a enviar: " + parametros);
    $.ajax({
        url:"ajax/ProcesarLogin.php",
        method:"POST",
        data: parametros,
        dataType:"json",
        success:function(respuesta){
            if(respuesta.codigo == 1){
                console.log(respuesta.mensaje);
            }else if(respuesta.codigo == 2){
                console.log(respuesta.mensaje);
            }
        },
        error:function(error){
            console.log(error);
        }
    });
})

