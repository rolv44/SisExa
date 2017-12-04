
$(document).ready(function(){
  $(".img-l").hide();
  $("h2").click(function(){
      $(this).hide(3000).show(2000);
      
  });
  for(var i=0;i<40;i++){
    ss='<div class="row fila'+String(i)+'"><div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-lg-offset-2">'
    +'<div class="panel panel-default"> <div class="panel-heading"><h3 class="panel-title">Tema: </h3>'+
'</div> <div class="panel-body">'+String(i+1)+'.- Basic panel example  </div> </div>'
    +'</div></div>';
    $(".panels").append(ss);
  }
  
  $('.ok').click(function(){

      $(".img-l").show(); 
      //Añadimos la imagen de carga en el contenedor
      $('.img-load').html('<div><img src="../images/lo.gif" height="50" width="50"/></div>');

      var page = $(this).attr('data');        
      var dataString = 'page='+page;
      setTimeout("location.href='resultado.php'", 2000);

      /*$.ajax({
          type: "GET",
          url: "includes/archivo.php",
          data: dataString,
          success: function(data) {
              //Cargamos finalmente el contenido deseado
              $('#content').fadeIn(1000).html(data);
          }
      });*/
  });
  
  
  
});