$(document).ready(function() {
  /*  $(".img-l").hide();
  $("h2").click(function() {
    $(this).hide(3000).show(2000);
  });  */
  var numero = 0;
  parametro = {
    "idC": $("#categoria").val()
  };
  $.ajax({
    type: "POST",
    url: "JsonPhp/traeListaPregunta.php",
    data: parametro,
    dataType: "json",
    success: function(data) {
      var valu = eval(data);
      var list = [];
      var op = false;
      if(valu.length>=40){
        for (j = 0; j < 40; j++) {
          op = true;
          while (op) {
            var r = Math.floor((Math.random() * valu.length) + 1);
            if (list.indexOf(valu[r]) < 0 && typeof(valu[r]) != "undefined") {
              list.push(valu[r]);
              traePregunta(valu[r]);
              op = false;
            }
          }
        }
      }else if (valu.length<40) {
        
        for (j = 0; j < valu.length; j++) {
          op = true;
          while (op) {
            var r = Math.floor((Math.random() * valu.length-1) + 1);
            if (list.indexOf(valu[r]) < 0 && typeof(valu[r]) != "undefined") {
              list.push(valu[r]);
              traePregunta(valu[r]);
              op = false;
            }
          }
        }
      }

    }
  });

  function traePregunta(id) {
    para = {
      "id": id
    };
    $.ajax({
      type: "POST",
      url: "JsonPhp/traePreguntasAzar.php",
      data: para,
      dataType: 'json',
      success: function(data1) {
        var val = eval(data1);
        for (var i in val) {
          numero++;
          radio = '<div class="form-check">  <label class="form-check-label">' +
            '<input class="form-check-input" type="radio" name="radiobtn' + String(numero) + '" id="' + val[i].idP + '" value="' +
            val[i].alternativa[0].idA + '"> ' +
            val[i].alternativa[0].desAlternativa + '</label></div>' +
            '<div class="form-check">  <label class="form-check-label">' +
            '<input class="form-check-input" type="radio" name="radiobtn' + String(numero) + '" id="' + val[i].idP + '" value="' +
            val[i].alternativa[1].idA + '"> ' +
            val[i].alternativa[1].desAlternativa + '</label></div>' +
            '<div class="form-check disabled">  <label class="form-check-label">' +
            '<input class="form-check-input" type="radio" name="radiobtn' + String(numero) + '" id="' + val[i].idP + '" value="' +
            val[i].alternativa[2].idA + '"> ' +
            val[i].alternativa[2].desAlternativa + '</label></div>' +
            '<div class="form-check">  <label class="form-check-label">' +
            '<input class="form-check-input" type="radio" name="radiobtn' + String(numero) + '" id="' + val[i].idP + '" value="' +
            val[i].alternativa[3].idA + '"> ' +
            val[i].alternativa[3].desAlternativa + '</label></div>';

          ss = '<div class="row fila' + String(numero) + '">' +
            '<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-lg-offset-2">' +
            '<div class="panel panel-default"> <div class="panel-heading">' +
            '<h4 class="panel-title"><strong>' + val[i].tema + ': </strong></h4>' +
            '</div> <div class="panel-body"><h4>' + numero + '.-' + val[i].pregunta +
            '</h4><div id="radio' + String(numero) + '">' + radio + '</div></div> </div>' +
            '</div><input type="hidden" name="h'+String(numero)+'" value="' + val[i].idP + '"/></div>';
          $(".panels").append(ss);

        }

      },
      error: function(xhr, ajaxOptions, thrownError) {
        console.log("Error al conseguir datos: " + ajaxOptions + " " + thrownError);
      }
    });

  }
  //procedimiento para actualizar el reloj del examen
  setTimeout(Decrement, 1000);

  $('.ok').click(function() {

    $(".img-l").show();
    //Añadimos la imagen de carga en el contenedor
    $('.img-load').html('<h3 >Procesando&hellip;</h3><div><img src="../images/lo.gif" height="50" width="50"/></div>');

    var page = $(this).attr('data');
    var dataString = 'page=' + page;
    var n=0;
    var no=0;
    var preguntas=[];
    var respuestas=[];
    $(".panels input:radio").each(function(index,ass){
      if($(this).is(":checked")){
        respuestas.push($(this).val());
        preguntas.push($(this).attr("id"));
        n++;
      }else{
        no++;
      }
      
    });
    if(n==numero){
       setTimeout('$(".img-l").hide(),$(".formPR").submit();',1000);
       
      /*
      var s=JSON.stringify(preguntas);
      var d=JSON.stringify(respuestas);
      setTimeout("location.href='procesar.php?pregunta="+s+"&respuesta="+d+"'", 2000);
      */
    }else{
      var nue=n*4;
      var t=(160-nue)/4;
      alert("rellenados: "+n+" No rellenados: "+t);
    }
    
    //setTimeout("location.href='resultado.php'", 2000);

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