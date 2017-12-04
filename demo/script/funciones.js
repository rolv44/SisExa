$(document).ready(function() {
  $(".img-l").hide();
  $("h2").click(function() {
    $(this).hide(3000).show(2000);

  });
  $.ajax({
      type: "POST",
      url: "JsonPhp/traePreguntasAzar.php",
      dataType: 'json',
      success: function(data) {
        var val=eval(data);  
        for(var i in val){
          var j=parseInt(i)+1;
          radio='<div class="form-check">  <label class="form-check-label">'+
          '<input class="form-check-input" type="radio" name="radiobtn'+String(i)+'" id="rd'+String(i)+'1" value="'+
          val[i].alternativa[0].idA+'"> '+
          val[i].alternativa[0].desAlternativa+'</label></div>'+
          '<div class="form-check">  <label class="form-check-label">'+
          '<input class="form-check-input" type="radio" name="radiobtn'+String(i)+'" id="rd'+String(i)+'2" value="'+
          val[i].alternativa[1].idA+'"> '+
          val[i].alternativa[1].desAlternativa+'</label></div>'+
          '<div class="form-check disabled">  <label class="form-check-label">'+
          '<input class="form-check-input" type="radio" name="radiobtn'+String(i)+'" id="rd'+String(i)+'3" value="'+
          val[i].alternativa[2].idA+'"> '+
          val[i].alternativa[2].desAlternativa+'</label></div>'+
          '<div class="form-check">  <label class="form-check-label">'+
          '<input class="form-check-input" type="radio" name="radiobtn'+String(i)+'" id="rd'+String(i)+'4" value="'+
          val[i].alternativa[3].idA+'"> '+
          val[i].alternativa[3].desAlternativa+'</label></div>';
             
          ss = '<div class="row fila' + String(i) + '">'+
          '<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-lg-offset-2">' +
            '<div class="panel panel-default"> <div class="panel-heading">'+
            '<h4 class="panel-title"><strong>'+val[i].tema+': </strong></h4>' +         
            '</div> <div class="panel-body"><h4>' +j+ '.-'+val[i].pregunta+
            '</h4><div id="radio'+String(i)+'">'+radio+'</div></div> </div>' +
            '</div></div>';
          $(".panels").append(ss);
          
        } 
        
      }
  });


  $('.ok').click(function() {

    $(".img-l").show();
    //Añadimos la imagen de carga en el contenedor
    $('.img-load').html('<div><img src="../images/lo.gif" height="50" width="50"/></div>');

    var page = $(this).attr('data');
    var dataString = 'page=' + page;
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