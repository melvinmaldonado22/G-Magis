var imgSelect = "";
$("#slc-imagen").change(function(){
	$.ajax({
		url:"peticion-img.php",
		dataType:"json",
		success:function(respuesta){
			for (var i=0;i<respuesta.length;i++){
				if($("#slc-imagen").val()==respuesta[i].img){
                    imgSelect = respuesta[i].img;
				}
			  }	
			},
			error:function(error){
				console.log(error);
			}
		});
});

$("#sidebar").click(function () {
    $('#contenido').toggleClass('span12 span9');
    $('#barra').toggleClass('span0 span3');
});

$("#camara").click(function(){
  console.log("holaaa");
  $("#modal-detalle").modal("show");
})

$("#post").click(function(){
  $("#modal-detalle").modal("hide");
    var parametros ="imagen="+imgSelect+"&"+"titulo="+$("#txt-titulo").val()+"&"+"descripcion="+
                    $("#txt-comentario").val()+"&"+"nombre=Melvin";
    console.log("se enviaran estos parametros" , parametros);
    $.ajax({
        url:"./post.php",
        method:"POST",
        data: parametros,
        dataType:"json",
        success:function(respuesta2){
            console.log(respuesta2.mensaje);
        },
        error:function(error){
            console.log(error);
        }
})
})

$("#comentario").click(function(){
  console.log("holaaa");
  $("#modal-detalle").modal("show");
}) 

var cuenta = 1;
$("#1").click(function(){
    $("#h6").html(
        `${cuenta++}`
    );
})
