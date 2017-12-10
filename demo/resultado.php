<?php
include("conexion.php");
$cn=new conexion();
$con=$cn->conectar();
$lista=array();
$listaIdP=array();
$listaGrupo=array();
$op=true;
$i=1;
while($op){
  $n="radiobtn".$i;
  $ni="h".$i;
  if(isset($_POST[$n])){
    array_push($lista,$_POST[$n]);
    $resultado1=mysqli_query($con,"select idTema as id from pregunta where idPregunta='".$_POST[$ni]."'")or die(mysqli_error($con));
    $m=mysqli_fetch_array($resultado1);
    $idT=$m['id'];
    if(!in_array($idT,$listaGrupo)){
      array_push($listaGrupo,$idT);
    }
    array_push($listaIdP,$_POST[$ni]);
  }else{
    $op=false;
  }
  $i++;
}
$ok=0;
$error=0;
$total=0;
$te=0;
$to=0;
$funda=array();
$porcentaje=array();
for($v=0;$v<count($listaGrupo);$v++){
  for($b=0;$b<count($listaIdP);$b++){
    //echo "<script>console.log('".$b."Preguntas: ".$listaIdP[$b]."--Respuestas: ".$lista[$b]."')</script>";
    $resultado3=mysqli_query($con,"select p.idTema,r.idAlternativa,r.fundamento from pregunta p inner join respuesta r on r.idPregunta=p.idPregunta where p.idPregunta='".$listaIdP[$b]."'")or die(mysqli_error($con));
    $row=mysqli_fetch_array($resultado3);
    if($listaGrupo[$v]==$row[0]){
      //  echo"<script>alert(".$lista[$b].");</script>";
      if($lista[$b]==$row[1]){
        $ok++;
      }else{
        $error++;
      }
      $total++;
      
    }    
  }
  $te=$te+$error;
  $to=$to+$ok;
  $por=ceil(($ok*100)/$total);
  $resultado2=mysqli_query($con,"select abreviacion as tema, desTema as t from tema where idTema='".$listaGrupo[$v]."'")or die(mysqli_error($con));
  $tr=mysqli_fetch_array($resultado2);
  array_push($porcentaje,array("tema"=>$tr['tema'],"porcentaje"=>$por,"ok"=>$ok,"err"=>$error,"des"=>$tr['t']));
  $error=0;
  $ok=0;
  $total=0;
}

for ($i=0; $i < count($listaIdP); $i++) {
  $resultado6=mysqli_query($con,"select r.idAlternativa,r.fundamento,a.desAlternativa from respuesta r inner join pregunta p on p.idPregunta=r.idPregunta inner join alternativa a on a.idAlternativa=r.idAlternativa where p.idPregunta='".$listaIdP[$i]."'")or die(mysqli_error($con)); 
  $as=mysqli_fetch_array($resultado6);
  if($lista[$i]==$as[0]){
    echo "<script>console.log('".$listaIdP[$i]."--".$lista[$i]."')</script>";
    array_push($funda,array("f"=>$as[1],"re"=>'<div class="alert alert-success" role="alert">Correcto! La respuesta es: '.$as[2].'</div>'));
  }else{
    array_push($funda,array("f"=>$as[1],"re"=>'<div class="alert alert-danger" role="alert">Incorrecto! La respuesta fue: '.$as[2].'</div>'));
  }
  
}


/*
for($j=0;$j<count($listaIdP);$j++){
echo $listaIdP[$j]."<br>";
}
for($z=0;$z<count($listaGrupo);$z++){
echo $listaGrupo[$z]."<br>";
}
*/
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Resultados</title>
  <link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script src="../bootstrap-3.3.7-dist/js/bootstrap.js"></script>
  <link rel="stylesheet" href="../css/resulCss.css">
  <link rel="stylesheet" href="../css/circle.css">
  <link rel="stylesheet" href="../css/circular.css">
  <link rel="stylesheet" href="circlejQ/css/jquery.circliful.css">
  <link rel="stylesheet" href="../css/resultadoCss.css">
  <script src="circlejQ/js/jquery.circliful.min.js" charset="utf-8"></script>
</head>
<body>
  <header>
    <nav class="navbar navbar-default navbar-fixed-top" role="banner">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="unavbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1" aria-expanded="false">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
        <div class="collapse navbar-collapse" id="navbar-1">  
          <ul class="nav navbar-nav navbar-left">
            <img class="img-responsive" src="../img/minp.png" width="150" height="40" alt="Ministerio del Perú">
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li role="presentation"><a href="#"><h4>BIENVENIDO: DEMO</h4></a></li> 
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </header>
  <div class="">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
          <br>
          <h2>Resultados</h2>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Porcentaje de Preguntas acertadas por tema</h3>
            </div>
            <div class="panel-body">
              <div class="container-fluid">
                <div class="row" id="fila">
                  
                </div>
              </div>
              
              <!-- 
              
              <div class="row">
              <div class="col-lg-2">
              <div id="test-circle"></div>
            </div>
          </div>
          
          <div class="row">
          <div class="col-lg-2">
          <div id="your-circle"></div>
        </div>
      </div> -->
      
    </div>
  </div>
  <div class="container-fluid">
    <div class="row" id="fila2">
      
    </div>
  </div>
  
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3">
        <div class="panel panel-success">
          <div class="panel-heading" align="center"><strong>TOTAL</strong></div>
          <div class="panel-body">
            <div class="thumbnail">
              <img src="img/photo.png" alt="demo" height="150" width="150">
              <div class="caption">
                <h3>Alumno: Demo</h3>
                <p>Total Correctos: <?= $to?></p>
                <p>Total Incorrectos: <?= $te?></p>
                <p><a href="#" id="ver" class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal" role="button">Verificar Respuestas</a> </p>
                <p><h4>En esta seccion podrá ver las respuestas comentadas por la DGTT</h4></p>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <div class="car-alert">
                  
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <div class="car-alert">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>    
    </div>
  </div>
  
</div>
</div>
</div>


</div>    
<?php include"modalResultado.php";?>
<div class="footer">
  <div class="frame container">
    <a class="" href="#">
      Todos los derechos reservados
    </a>
  </div>
</div>
</body>
</html>
<script type="text/javascript">
var fun=<?= json_encode($funda)?>;
$( document ).ready(function() {
  var ar=<?= json_encode($porcentaje)?>;
  
  for(var i in ar){
    var ss='<div class="col-xs-6 col-sm-4 col-md-2 col-lg-2">'+
    '   <div class=""> <h4 >'+ar[i].tema+'</h4><div class="p'+ar[i].porcentaje+' c100  green"> <span>'+ar[i].porcentaje+'%</span>'+
    '    <div class="slice"> <div class="bar"></div>  <div class="fill"></div>'+
    '    </div> </div> </div> </div>';
    $(".panel-body #fila").append(ss);
    
  }
  for(var j in ar){
    var rr='<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3"><div class="panel panel-info" style="height:320px"><div class="panel-heading">Detalle por tema: '+ar[j].des+'</div><div class="panel-body" >'+
    '<div class="progress-circle p'+ar[j].porcentaje+'">'+
    '<span>'+ar[j].porcentaje+'%</span> <div class="left-half-clipper">'+
    ' <div class="first50-bar"></div>'+
    ' <div class="value-bar"></div>  </div></div><h4>Correctas: '+ar[j].ok+'</h4><h4>Incorrectas: '+ar[j].err+'</h4></div>';
    $("#fila2").append(rr);
  }
  $("#ver").click(function(){
    $(".car-icon").append('<i class="fa fa-spinner fa-pulse fa-5x fa-fw"></i><span class="sr-only">Cargando...</span>');
    $(".car-alert").append(' <div id="alerta" class="alert alert-primary" role="alert">Cargando datos al sistema!</div>');
    var pre=<?= json_encode($listaIdP)?>;
    for (var g in pre) {
       traePregunta(pre[g]);
       
    }
  });
  
  $("#test-circle").circliful({
    animation: 1,  
    animationStep: 10,
    foregroundBorderWidth: 5,
    backgroundColor: "none",
    fillColor: '#eee',
    percent: 75,
    iconColor: '#3498DB',
    icon: 'f206',
    iconSize: '40',
    iconPosition: 'middle',
    start:50,
    showPercent:1,
    target:0
  }, function(){
    alert('done !');
  });
  $("#your-circle").circliful({
    animationStep: 5,
    foregroundBorderWidth: 5,
    backgroundBorderWidth: 15,
    percent: 75
  }); 
  
});
var numero = 0;
function traePregunta(id) {
  para = {
    "id": id
  };
  $.ajax({
    type: "POST",
    url: "JsonPhp/traePreguntasAzar.php",
    data: para,
    dataType: 'json',
    async:false,
    success: function(data1) {
      var val = eval(data1);
      for (var i in val) {
        numero++;
        var h=numero-1;
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
          '<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 ">' +
          '<div class="panel panel-default"> <div class="panel-heading">' +
          '<h4 class="panel-title"><strong>' + val[i].tema + ': </strong></h4>' +
          '</div> <div class="panel-body"><h4>' + numero + '.-' + val[i].pregunta +
          '</h4><div id="radio' + String(numero) + '">' + radio + '</div><div>'+fun[h].re+'</div><div class="alert alert-info" role="alert">'+fun[h].f+'</div></div> </div>' +
          '</div><input type="hidden" name="h'+String(numero)+'" value="' + val[i].idP + '"/></div>';
        $(".modalR").append(ss);

      }

    },
    error: function(xhr, ajaxOptions, thrownError) {
      console.log("Error al conseguir datos: " + ajaxOptions + " " + thrownError);
    }
  });

}

</script>