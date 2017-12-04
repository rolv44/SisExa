$(document).ready(function() {
  $(".rapero-usu").hide();
  $(".rapero-imp").hide();
  $(".rapero-cate").hide();
  $(".rapero-tema").hide();
  $(".rapero-alte").hide();
  $(".rapero-preg").hide();
  $(".rapero-resp").hide();
  $("#regT").click(function() {
    if (!$(".rapero-tema").hasClass("bg-dark")) {
      $(".rapero-tema").toggleClass("bg-dark");
    }
    /*
    $("#temaCat").empty();
    $.ajax({
  type:'POST',
  url:'ajax/traeCatJson.php',
  dataType:'json',
  success:function(datos){
      var val=eval(datos);
      var con=0;
      for(var i in val){
          con++;
      }
      
  var i=0;  
      while(i<con){ 
      $("#temaCat").append("<option value='"+val[i].id+"'>"+val[i].descripcion+"</option>");
   i++; 
      }
      
  }
});*/
    $("div[class*='rapero']").hide();
    $(".rapero-tema").show(2000);
    $(".rT").show();
    $(".vT").hide();
  });
  $("#regP").click(function() {
    if (!$(".rapero-preg").hasClass("bg-dark")) {
      $(".rapero-preg").toggleClass("bg-dark");
    }
    $("#CatPreg").empty();
    $.ajax({
      type: 'POST',
      url: 'ajax/traeCatJson.php',
      dataType: 'json',
      success: function(datos) {
        var val = eval(datos);
        var con = 0;
        for (var i in val) {
          con++;
        }
        var i = 0;
        while (i < con) {
          $("#CatPreg").append("<option value='" + val[i].id + "'>" + val[i].descripcion + "</option>");
          i++;
        }
      }
    });
    $("#temaPreg").empty();
    $.ajax({
      type: 'POST',
      url: 'ajax/traeTemaJson.php',
      dataType: 'json',
      success: function(datos) {
        var val = eval(datos);
        var con = 0;
        for (var i in val) {
          con++;
        }
        var i = 0;
        while (i < con) {
          $("#temaPreg").append("<option value='" + val[i].id + "'>" + val[i].descripcion + "</option>");
          i++;
        }
      }
    });
    $("div[class*='rapero']").hide();
    $(".rapero-preg").show(2000);
    $(".rP").show();
    $(".vP").hide();
  });
  $("#regA").click(function() {
    if (!$(".rapero-alte").hasClass("bg-dark")) {
      $(".rapero-alte").toggleClass("bg-dark");
    }
    $("div[class*='rapero']").hide();
    $(".rapero-alte").show(2000);
    $(".rA").show();
    $(".vA").hide();
  });
  $("#regRp").click(function() {
    if (!$(".rapero-resp").hasClass("bg-dark")) {
      $(".rapero-resp").toggleClass("bg-dark");
    }
    
    $("#codPreg").empty();
    $.ajax({
      type: 'POST',
      url: 'ajax/traeCodJson.php',
      dataType: 'json',
      success: function(datos) {
        var val = eval(datos);
        var con = 0;
        for (var i in val) {
          $("#codPreg").append("<option value='" + val[i].id + "'>" + val[i].id + "</option>");
        }
        
      }
    });
    $("#altResp").empty();
    $.ajax({
      type: 'POST',
      url: 'ajax/traeAlternativaJson.php',
      dataType: 'json',
      success: function(datos) {
        var val = eval(datos);
        var con = 0;
        for (var i in val) {
          $("#altResp").append("<option value='" + val[i].id + "'>" + val[i].id+ "</option>");
        }
      }
    });
    
    $("div[class*='rapero']").hide();
    $(".rapero-resp").show(2000);
    $(".rRp").show();
    $(".vRp").hide();
  });
  $("#verA").click(function() {
    if ($(".rapero-alte").hasClass("bg-dark")) {
      $(".rapero-alte").toggleClass("bg-dark");
    }
    $("div[class*='rapero']").hide();
    $(".rapero-alte").show(2000);
    $(".rA").hide();
    $(".vA").show();
    $("#bodyAlte").empty();
    $.ajax({
      type: 'POST',
      url: 'ajax/traeAlternativaJson.php',
      dataType: 'json',
      success: function(datos) {
        var val = eval(datos);
        var con = 0;
        for (var i in val) {
          $("#bodyAlte").append("<tr><td>" + val[i].id + "</td><td>" + val[i].descripcion + "</td></tr>");
        }
        $("#tablaAlte").DataTable();
      }
    });
  });
  $("#verRp").click(function() {
    if ($(".rapero-resp").hasClass("bg-dark")) {
      $(".rapero-resp").toggleClass("bg-dark");
    }
    $("div[class*='rapero']").hide();
    $(".rapero-resp").show(2000);
    $(".rRp").hide();
    $(".vRp").show();
    $("#bodyResp").empty();
    $.ajax({
      type: 'POST',
      url: 'ajax/traeRespuestaJson.php',
      dataType: 'json',
      success: function(datos) {
        var val = eval(datos);
        var con = 0;
        for (var i in val) {
          $("#bodyResp").append("<tr><td>" + val[i].id + "</td><td>" + val[i].pregunta + "</td><td>" + val[i].alternativa + "</td><td>" + val[i].fundamento + "</td></tr>");
        }
        $("#tablaResp").DataTable();
      }
    });
  });
  $("#verT").click(function() {
    if ($(".rapero-tema").hasClass("bg-dark")) {
      $(".rapero-tema").toggleClass("bg-dark");
    }
    $("div[class*='rapero']").hide();
    $(".rapero-tema").show(2000);
    $(".rT").hide();
    $(".vT").show();
    $("#bodyTema").empty();
    $.ajax({
      type: 'POST',
      url: 'ajax/traeTemaJson.php',
      dataType: 'json',
      success: function(datos) {
        var val = eval(datos);
        var con = 0;
        for (var i in val) {
          con++;
        }
        var i = 0;
        while (i < con) {
          $("#bodyTema").append("<tr><td>" + val[i].id + "</td><td>" + val[i].descripcion + "</td></tr>");
          i++;
        }
        $("#tablaTema").DataTable();
      }
    });
  });
  $("#verP").click(function() {
    if ($(".rapero-preg").hasClass("bg-dark")) {
      $(".rapero-preg").toggleClass("bg-dark");
    }
    $("div[class*='rapero']").hide();
    $(".rapero-preg").show(2000);
    $(".rP").hide();
    $(".vP").show();
    $("#bodyPreg").empty();
    $.ajax({
      type: 'POST',
      url: 'ajax/traePreguntaJson.php',
      dataType: 'json',
      success: function(datos) {
        var val = eval(datos);
        var con = 0;
        for (var i in val) {
          con++;
        }
        var i = 0;
        while (i < con) {
          $("#bodyPreg").append("<tr><td>" + val[i].id + "</td><td>" + val[i].categoria + "</td><td>" + val[i].tema + "</td><td>" + val[i].descripcion + "</td></tr>");
          i++;
        }
        $("#tablaPreg").DataTable();
      }
    });
  });
  $("#verU").click(function() {
    if ($(".rapero-usu").hasClass("bg-dark")) {
      $(".rapero-usu").toggleClass("bg-dark");
    }
    $("div[class*='rapero']").hide();
    $(".rapero-usu").show(1000);
    $(".rU").hide();
    $(".vU").show();
    $("#bodyUsu").empty();
    $.ajax({
      type: 'POST',
      url: 'ajax/traeUsuJson.php',
      dataType: 'json',
      success: function(datos) {
        var val = eval(datos);
        var con = 0;
        for (var i in val) {
          $("#bodyUsu").append("<tr><td>" + val[i].id + "</td><td>" + val[i].nombre + "</td><td>" + val[i].apellido+ "</td><td>" + val[i].usu+ "</td><td>" + val[i].estado+ "</td></tr>");
        }
        $("#tablaUsu0").DataTable();
      }
    });
  });
  $("#verCat").click(function() {
    if ($(".rapero-cate").hasClass("bg-dark")) {
      $(".rapero-cate").toggleClass("bg-dark");
    }
    $("div[class*='rapero']").hide();
    $(".rapero-cate").show(2000);
    $(".rC").hide();
    $(".vC").show();
    $("#bodyCate").empty();
    $.ajax({
      type: 'POST',
      url: 'ajax/traeCatJson.php',
      dataType: 'json',
      success: function(datos) {
        var val = eval(datos);
        var con = 0;
        for (var i in val) {
          $("#bodyCate").append("<tr><td>" + val[i].id + "</td><td>" + val[i].descripcion + "</td></tr>");
        }
        $("#tablaCate").DataTable();
      }
    });
  });
  $("#regCat").click(function() {
    if (!$(".rapero-cate").hasClass("bg-dark")) {
      $(".rapero-cate").toggleClass("bg-dark");
    }
    $("div[class*='rapero']").hide();
    $(".rapero-cate").show(2000);
    $(".rC").show();
    $(".vC").hide();
  });
  $("#regU").click(function() {
    if (!$(".rapero-usu").hasClass("bg-dark")) {
      $(".rapero-usu").toggleClass("bg-dark");
    }
    $("div[class*='rapero']").hide();
    $(".rapero-usu").show(2000);
    $(".rU").show();
    $(".vU").hide();
  });
  $("#impArc").click(function() {
    $("div[class*='rapero']").hide();
    $(".rapero-imp").show(2000);
    $.ajax({
      type: 'POST',
      url: 'ajax/traeCatJson.php',
      dataType: 'json',
      success: function(datos) {
        var val = eval(datos);
        var con = 0;
        for (var i in val) {
          $("#SelectCate").append("<option value='" + val[i].id + "'>" + val[i].descripcion + "</option>");
        }
      }
    });
  });
  //sobreescribimos el metodo submit para que envie la solicitud por ajax
  $("#form-up").submit(function(e) {
    $(".car-icon").append('<i class="fa fa-spinner fa-pulse fa-5x fa-fw"></i><span class="sr-only">Cargando...</span>');
    $(".car-alert").append(' <div id="alerta" class="alert alert-primary" role="alert">Cargando datos al sistema!</div>');
    //esto evita que se haga la petición común, es decir evita que se refresque la pagina
    e.preventDefault();
    //ruta la cual recibira nuestro archivo
    //url="@Url.Content("~/Archivo/Recibe")"
    //FormData es necesario para el envio de archivo, 
    //y de la siguiente manera capturamos todos los elementos del formulario
    var parametros = new FormData($(this)[0])
    //realizamos la petición ajax con la función de jquery
    $.ajax({
      type: "POST",
      url: "cargaDatos.php",
      data: parametros,
      contentType: false, //importante enviar este parametro en false
      processData: false, //importante enviar este parametro en false
      success: function(data) {
        
        $(".car-icon").empty();
        $("#alerta").toggleClass("alert-primary alert-success");
        $("#alerta").text('El archivo ha sido cargado al sistema!');
      },
      error: function(r) {
        $(".car-icon").empty();
        $("#alerta").toggleClass("alert-primary alert-danger");
        $("#alerta").text('No se ha podido cargar datos al sistema!');
      }
    });
  });
  $("#formRegCat").submit(function(np) {
    np.preventDefault();
    var datos = {
      "dds": $("#nomCat").val()
    };
    $.ajax({
      type: "post",
      url: "ajax/regCat.php",
      data: datos,
      dataType: 'json',
      success: function(data) {
        var val = eval(data);
        if (val[0].respuesta == "OK") {
          alert("se ha registrado con exito!!");
          var bvc = document.getElementById("verCat");
          bvc.click();
        } else {
          alert(val[0].respuesta);
        }
      },
      error: function(r) {
        alert("No se ha podido registrar categoria!!");
      }
    });
  });
  $("#formRegTema").submit(function(np) {
    np.preventDefault();
    var datos = {
      "dds": $("#temanomCat").val(),
    };
    $.ajax({
      type: "post",
      url: "ajax/regTema.php",
      data: datos,
      dataType: 'json',
      success: function(data) {
        var val = eval(data);
        if (val[0].respuesta == "OK") {
          alert("se ha registrado con exito!!");
          var bvc = document.getElementById("verT");
          bvc.click();
        } else {
          alert(val[0].respuesta);
        }
      },
      error: function(r) {
        alert("No se ha podido registrar categoria!!");
      }
    });
  });
  $("#formRegPreg").submit(function(np) {
    np.preventDefault();
    var datos = {
      "dds": $("#nomPreg").val(),
      "cates": $("#CatPreg").val(),
      "tema": $("#temaPreg").val()
    };
    $.ajax({
      type: "post",
      url: "ajax/regPregunta.php",
      data: datos,
      dataType: 'json',
      success: function(data) {
        var val = eval(data);
        if (val[0].respuesta == "OK") {
          alert("se ha registrado con exito!!");
          var bvc = document.getElementById("verP");
          bvc.click();
        } else {
          alert(val[0].respuesta);
        }
      },
      error: function(r) {
        alert("No se ha podido registrar categoria!!");
      }
    });
  });
  $("#formRegAlt").submit(function(np) {
    np.preventDefault();
    var datos = {
      "des": $("#desAlte").val()
    };
    $.ajax({
      type: "post",
      url: "ajax/regAlternativa.php",
      data: datos,
      dataType: 'json',
      success: function(data) {
        var val = eval(data);
        if (val[0].respuesta == "OK") {
          alert("se ha registrado con exito!!");
          var bvc = document.getElementById("verA");
          bvc.click();
        } else {
          alert(val[0].respuesta);
        }
      },
      error: function(r) {
        alert("No se ha podido registrar categoria!!");
      }
    });
  });
  $("#formRegResp").submit(function(np) {
    np.preventDefault();
    var datos = {
      "pregunta": $("#codPreg").val(),
      "alternativa": $("#altResp").val(),
      "fundamento": $("#fund").val()
    };
    $.ajax({
      type: "post",
      url: "ajax/regRespuesta.php",
      data: datos,
      dataType: 'json',
      success: function(data) {
        var val = eval(data);
        if (val[0].respuesta == "OK") {
          alert("se ha registrado con exito!!");
          var bvc = document.getElementById("verRp");
          bvc.click();
        } else {
          alert(val[0].respuesta);
        }
      },
      error: function(r) {
        alert("No se ha podido registrar categoria!!");
      }
    });
  });
  $("#formRegUsu").submit(function(np) {
    np.preventDefault();
    var datos = {
      "dni": $("#dni").val(),
      "nombre": $("#nombre").val(),
      "apellido": $("#apellidos").val(),
      "usuario": $("#nUsu").val(),
      "contra": $("#contra").val()
    };
    $.ajax({
      type: "post",
      url: "ajax/regUsuario.php",
      data: datos,
      dataType: 'json',
      success: function(data) {
        var val = eval(data);
        if (val[0].respuesta == "OK") {
          alert("se ha registrado con exito!!");
          var bvc = document.getElementById("verU");
          bvc.click();
        } else {
          alert(val[0].respuesta);
        }
      },
      error: function(r) {
        alert("No se ha podido registrar categoria!!");
      }
    });
  });
  
     
  //fin de funciones
});
