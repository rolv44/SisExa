$(document).ready(function() {
  $(".rapero-usu").hide();
  $(".rapero-imp").hide();
  $(".rapero-cate").hide();
  $(".rapero-tema").hide();
  $(".rapero-alte").hide();
  $(".rapero-preg").hide();
  $(".rapero-gra").hide();
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
  $("#graf").click(function() {
    $(".bread-cu").hide();
    $("div[class*='rapero']").hide();
    $(".rapero-panel").show();
    $(".rapero-gra").show();
    
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
          $("#bodyAlte").append("<tr><td>" + val[i].id + "</td><td>" + val[i].descripcion + "</td><td><label data-toggle='modal' data-target='#editAl' ><i class='fa fa-pencil-square-o' aria-hidden='true'></i></label></td><td><label onclick='setAl("+val[i].id+",\"idAlternativa\",\"alternativa\");' data-toggle='modal' data-target='#elimAl' ><i class='fa fa-trash-o' aria-hidden='true'></i></label></td></tr>");
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
          $("#bodyResp").append("<tr><td>" + val[i].id + "</td><td>" + val[i].pregunta + "</td><td>" + val[i].alternativa + "</td><td>" + val[i].fundamento + "</td><td><label onclick='reEdiRe();' data-toggle='modal' data-target='#editRe' ><i class='fa fa-pencil-square-o' aria-hidden='true'></i></label></td><td><label onclick='setRe("+val[i].id+",\"idRespuesta\",\"respuesta\");' data-toggle='modal' data-target='#elimRe' ><i class='fa fa-trash-o' aria-hidden='true'></i></label></td></tr>");
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
          $("#bodyTema").append("<tr><td>" + val[i].id + "</td><td>" + val[i].descripcion + "</td><td><label data-toggle='modal' data-target='#editTe'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></label></td><td><label onclick='settem("+val[i].id+",\"idTema\",\"tema\");' data-toggle='modal' data-target='#elimTema' ><i class='fa fa-trash-o' aria-hidden='true'></i></label></td></tr>");
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
          $("#bodyPreg").append("<tr><td>" + val[i].id + "</td><td>" + val[i].categoria + "</td><td>" + val[i].tema + "</td><td>" + val[i].descripcion + "</td><td><label onclick='reEdiPr();' data-toggle='modal' data-target='#editPr'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></label></td><td><label onclick='setpre("+val[i].id+",\"idPregunta\",\"pregunta\");' data-toggle='modal' data-target='#elimPre' ><i class='fa fa-trash-o' aria-hidden='true'></i></label></td></tr>");
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
          var edi="<td><label data-toggle='modal' data-target='#editUs'><span class='fa fa-pencil-square'></span></label></td>";
          if(val[i].estado=="ACTIVO"){
            var desa="<td><label onclick='setUs("+val[i].id+",0,\"usuario\");' data-toggle='modal' data-target='#desUs' ><span class='fa fa-check-square-o'></span></label></td>";
          }else{
            var desa="<td><label onclick='setUs("+val[i].id+",1,\"usuario\");' data-toggle='modal' data-target='#desUs' ><span class='fa fa-square-o'></span></label></td>";
          }
          var del="<td><label onclick='setUs("+val[i].id+",\"idUsuario\",\"usuario\");' data-toggle='modal' data-target='#elimUs' ><span class='fa fa-trash-o'></span></label></td>";
          $("#bodyUsu").append("<tr><td>" + val[i].id + "</td><td>" + val[i].nombre + "</td><td>" + val[i].apellido+ "</td><td>" + val[i].usu+ "</td>"+edi+desa+del+"</tr>");
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
          $("#bodyCate").append("<tr><td>" + val[i].id + "</td><td>" + val[i].descripcion + "</td><td><label data-toggle='modal' data-target='#editCa'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></label></td><td><label onclick='setF("+val[i].id+",\"idCategoria\",\"categoria\");' data-toggle='modal' data-target='#elimCat' ><i class='fa fa-trash-o' aria-hidden='true'></i></label></td></tr>");
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
      "avv": $("#temaavCat").val()
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
        alert("No se ha podido registrar tema!!");
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
  $("#fecha2").change(function(){
    var f=$("#fecha1").val();
    var f2=$("#fecha2").val();
    var parametro = { 
                                 "fecha1" : f,
                                  "fecha2" :f2
                    };
    
    $.ajax({
      type:'POST',
      url:'ajax/resultadoExam.php',
      data:parametro,
      dataType:'json',
      success:function(dato){
        var val= eval(dato);
        var lfecha=new Array();
        var ids=new Array();
        var res=new Array();
        var lv=new Array();
        var cont=0;
        var pc=0;
        for(var j in val){
          ids.push(val[j].id);
          res.push(val[j].correctas);
          var totales=parseInt(val[j].correctas)+parseInt(val[j].fallidas);
          var por=(parseInt(val[j].correctas)*100)/parseInt(totales);
          if(por>=70){
            pc++;
            alert(pc);
          }
          
          if(lfecha.indexOf(val[j].fecha)==-1){
            cont=0;
            lfecha.push(val[j].fecha);
            for(var k in val){
              if(val[j].fecha==val[k].fecha){
                cont++;
              }
            }
            lv.push(cont);
          }
        }
        pc=(pc*100)/parseInt(Object.keys(val).length);
        
        $(".lineaG").html("<canvas id='myAreaChart' width='100%' height='30'></canvas>");
        var ctx = document.getElementById("myAreaChart");
        var myLineChart = new Chart(ctx, {
          type: 'line',
          data: {
            labels: lfecha,
            datasets: [{
              label: "Sessions",
              lineTension: 0.3,
              backgroundColor: "rgba(2,117,216,0.2)",
              borderColor: "rgba(2,117,216,1)",
              pointRadius: 5,
              pointBackgroundColor: "rgba(2,117,216,1)",
              pointBorderColor: "rgba(255,255,255,0.8)",
              pointHoverRadius: 5,
              pointHoverBackgroundColor: "rgba(2,117,216,1)",
              pointHitRadius: 20,
              pointBorderWidth: 2,
              data: lv,
            }],
          },
          options: {
            scales: {
              xAxes: [{
                time: {
                  unit: 'date'
                },
                gridLines: {
                  display: false
                },
                ticks: {
                  maxTicksLimit: 7
                }
              }],
              yAxes: [{
                ticks: {
                  min: 0,
                  max: 10,
                  maxTicksLimit: 5
                },
                gridLines: {
                  color: "rgba(0, 0, 0, .125)",
                }
              }],
            },
            legend: {
              display: false
            }
          }
        });
        // -- Bar Chart Example
        $(".barraG").html("<canvas id='myBarChart' width='100%' height='50'></canvas>");
        var ct = document.getElementById("myBarChart");
        var myLineChart = new Chart(ct, {
          type: 'bar',
          data: {
            labels: ids,
            datasets: [{
              label: "Respuestas correctas",
              backgroundColor: "rgba(2,117,216,1)",
              borderColor: "rgba(2,117,216,1)",
              data: res,
            }],
          },
          options: {
            scales: {
              xAxes: [{
                time: {
                  unit: 'month'
                },
                gridLines: {
                  display: false
                },
                ticks: {
                  maxTicksLimit: 6
                }
              }],
              yAxes: [{
                ticks: {
                  min: 0,
                  max: 100,
                  maxTicksLimit: 5
                },
                gridLines: {
                  display: true
                }
              }],
            },
            legend: {
              display: false
            }
          }
        });
        // -- Pie Chart Example
        $(".pieG").html("<canvas id='myPieChart' width='70%' height='70%'></canvas>");
        var ctx = document.getElementById("myPieChart");
        var myPieChart = new Chart(ctx, {
          type: 'pie',
          data: {
            labels: ["Aprobados", "Desaprobados"],
            datasets: [{
              data: [pc, (100-pc)],
              backgroundColor: ['#007bff', '#dc3545'],
            }],
          },
        });
      },
      error:function(){alert("No se ha podido obtener los datos de los examenes");}
    });
  });
  $("#btnAcpE").click(function(){
    var para={"id":$("#campoId").val(),"campo":$("#campoC").val(),"tabla":$("#campoTab").val()};
    eliminarJ(para,'elimCat');
    $("#verCat").click();
  });   
  $("#btnAcpTe").click(function(){
    var para={"id":$("#campoIdTe").val(),"campo":$("#campoCTe").val(),"tabla":$("#campoTabTe").val()};
    eliminarJ(para,'elimTema');
    $("#verT").click();
  }); 
  $("#btnAcpPr").click(function(){
    var para={"id":$("#campoIdPr").val(),"campo":$("#campoCPr").val(),"tabla":$("#campoTabPr").val()};
    eliminarJ(para,'elimPre');
    $("#verP").click();
  }); 
  $("#btnAcpAl").click(function(){
    var para={"id":$("#campIdAlt").val(),"campo":$("#campCAlt").val(),"tabla":$("#campTabAlt").val()};
    eliminarJ(para,'elimAl');
    $("#verA").click();
  }); 
  $("#btnAcpRe").click(function(){
    var para={"id":$("#campIdRe").val(),"campo":$("#campCRe").val(),"tabla":$("#campTabRe").val()};
    eliminarJ(para,'elimRe');
    $("#verA").click();
  });
  $("#btnAcpUs").click(function(){
    var para={"id":$("#campIdUs").val(),"campo":$("#campCUs").val(),"tabla":$("#campTabUs").val()};
    eliminarJ(para,'elimUs');
    $("#verU").click();
  });
  $("#btnDsUs").click(function(){
    var para={"id":$("#campIdUs").val(),"campo":$("#campCUs").val(),"tabla":$("#campTabUs").val()};
    $.ajax({
      type: "post",
      url: "ajax/desUsuJson.php",
      data: para,
      dataType: 'json',
      success: function(data) {
        var val = eval(data);
        if (val[0].respuesta == "OK") {
          $('#desUs').modal('toggle');
          //alert("se ha eliminado con exito!!");
        } else {
          $('#desUs').modal('toggle');
          //alert(val[0].respuesta);
        }
      },
      error: function(r) {
        $('#elimCat').modal('toggle');
        alert("No se ha podido registrar categoria!!");
      }
    });
    $("#verU").click();
  });
  //fin de funciones
});
function formatear(fecha){
        var d=fecha.split("-");
        var f=d[2]+"-"+d[1]+"-"+d[0];
        return f;
    }
function setF(x,i,t){
  document.getElementById("campoId").value=x;
  document.getElementById("campoC").value=i;
  document.getElementById("campoTab").value=t;
}
function settem(x,i,t){
  document.getElementById("campoIdTe").value=x;
  document.getElementById("campoCTe").value=i;
  document.getElementById("campoTabTe").value=t;
}
function setpre(x,i,t){
  document.getElementById("campoIdPr").value=x;
  document.getElementById("campoCPr").value=i;
  document.getElementById("campoTabPr").value=t;
}
function setAl(x,i,t){
  document.getElementById("campIdAlt").value=x;
  document.getElementById("campCAlt").value=i;
  document.getElementById("campTabAlt").value=t;
}
function setRe(x,i,t){
  document.getElementById("campIdRe").value=x;
  document.getElementById("campCRe").value=i;
  document.getElementById("campTabRe").value=t;
}
function setUs(x,i,t){
  document.getElementById("campIdUs").value=x;
  document.getElementById("campCUs").value=i;
  document.getElementById("campTabUs").value=t;
}
function eliminarJ(para,p){
  $.ajax({
    type: "post",
    url: "ajax/eliminarJson.php",
    data: para,
    dataType: 'json',
    success: function(data) {
      var val = eval(data);
      if (val[0].respuesta == "OK") {
        $('#'+p+'').modal('toggle');
        //alert("se ha eliminado con exito!!");
      } else {
        $('#'+p+'').modal('toggle');
        //alert(val[0].respuesta);
      }
    },
    error: function(r) {
      $('#elimCat').modal('toggle');
      alert("No se ha podido registrar categoria!!");
    }
  });
}
function reEdiPr(){
  $("#CatPregEd").empty();
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
        $("#CatPregEd").append("<option value='" + val[i].id + "'>" + val[i].descripcion + "</option>");
        i++;
      }
    }
  });
  $("#temaPregEd").empty();
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
        $("#temaPregEd").append("<option value='" + val[i].id + "'>" + val[i].descripcion + "</option>");
        i++;
      }
    }
  });
}

function reEdiRe(){
  $("#codPregEd").empty();
  $.ajax({
    type: 'POST',
    url: 'ajax/traeCodJson.php',
    dataType: 'json',
    success: function(datos) {
      var val = eval(datos);
      var con = 0;
      for (var i in val) {
        $("#codPregEd").append("<option value='" + val[i].id + "'>" + val[i].id + "</option>");
      }
      
    }
  });
  $("#altRespEd").empty();
  $.ajax({
    type: 'POST',
    url: 'ajax/traeAlternativaJson.php',
    dataType: 'json',
    success: function(datos) {
      var val = eval(datos);
      var con = 0;
      for (var i in val) {
        $("#altRespEd").append("<option value='" + val[i].id + "'>" + val[i].id+ "</option>");
      }
    }
  });
}