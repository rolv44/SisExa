function validar(){
    var nombre=document.getElementById('nombre').value;
    var pass=document.getElementById('password').value;
    var parametros={
        "nombre":nombre,
        "password":pass
    }
    $.ajax({
        type:'POST',
        url:'ajax/TraeUsuario.php',
        data:parametros,
        dataType:'json',
        success: function(data){
            var valor=eval(data);
            var v=new Array();
            var cont=0;
            for(var v in valor){
                cont++;
            }
            if(cont>0){
               if(valor[0].nombre==nombre){
               $(".alert").hide();
               location.href="index.php";
               }
               }else{
                   $(".alert").show();
               }
        },
         error: function (xhr, ajaxOptions, thrownError) {
               alert("Error al conseguir datos: "+ajaxOptions+" "+thrownError);
           }
    });
}