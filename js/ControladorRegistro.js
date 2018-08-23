$("#btn").click(function(){
    if(Validar()==true){
        $("#div1").css("display","none");
        $("#div2").fadeIn(800);
    }else{
        console.log("ERROR CAMPOS VACIOS.!! O CAMPOS INCORRECTOS.!!");
    } 
})

$("#btn2").click(function(){
    var parametros = 
            "nombre="+$("#txt-nombre").val()+"&apellidos="+$("#txt-apellidos").val()+
            "&correo="+$("#txt-correo").val()+"&password="+$("#txt-contraseña").val()+
            "&confirmar_password="+$("#txt-confirmar-contraseña").val()+"&telefono="+$("#txt-telefono").val()+
            "&dia="+$("#txt-dia").val()+"&mes="+$("#txt-mes").val()+"&anio="+$("#txt-año").val();
            console.log("Informacion a enviar: " + parametros);
        
        $.ajax({
            url:"../ajax/ProcesarRegistro.php",
            method:"POST",
            data: parametros,
            dataType: "json",
            success:function(respuesta){
                if(respuesta.codigo == 1){
                   console.log(respuesta.mensaje);
                }
            },
            error:function(error){
                console.log(error);
            }
        })
    $("#div2").css("display","none");
    $("#div3").fadeIn(800);
})