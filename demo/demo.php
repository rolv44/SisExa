<?php
$tipo=$_GET['id'];

if($tipo=="A-I"){
  $veh="M1, M2 y N1";
}elseif ($tipo=="BII-A") {
  $veh="L1, L2";
}elseif ($tipo=="BII-B") {
  $veh="L3, L4";
}elseif ($tipo=="AII-A") {
  $veh="M1 - SERVICIO DE TRANSPORTE";
}elseif ($tipo=="AII-B") {
  $veh="M2, M3 y N2";
}elseif ($tipo=="AIII-A") {
  $veh="M3 > 6T";
}elseif ($tipo=="AIII-B") {
  $veh="N3";
}elseif ($tipo=="AIII-C") {
  $veh="M3 y N3";
}elseif ($tipo=="BII-C") {
  $veh="L5";
}


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="../bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="../css/demoCss.css">
    <title>BIENVENIDO</title>
    
  </head>
  <body>
    <header>
      <nav class="navbar navbar-default navbar-fixed-top" role="banner">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1" aria-expanded="false">
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
<div class="hora container-fluid">
  <div class="frame-hora">
    <h2 id="timer" align="center">Tiempo Restante: 0:0</h2>
  </div>
</div>
<br>
<br>
<br>
<br>
<div class="container panels">
  <div class="row">
    <div class="tit col-xs-12 col-sm-12 col-md-8 col-lg-10 col-lg-offset-1">
      <h4 align="center">EVALUACION DE CONOCIMIENTOS EN LA CONDUCCION PARA
         POSTULANTES A LICENCIAS DE CONDUCIR DE CLASE <?=$tipo?> (VEHÍCULOS DE LA CATEGORÍA <?=$veh?> )</h4>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-xs-12 colsm-12 col-md-4 col-lg-4 col-lg-offset-4 col-md-offset-4 ">
      <button class="btn btn-primary btn-block" type="button" name="button">
        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Simulacro Completo</button>
    </div>
  </div>
</div>
<br>
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
  var mins = 45;  //Set the number of minutes you need
  var secs = mins * 60;
  var currentSeconds = 0;
  var currentMinutes = 0;
window.onload=function(){
    /* 
     * The following line has been commented out due to a suggestion left in the comments. The line below it has not been tested. 
     * setTimeout('Decrement()',1000);
     */
    setTimeout(Decrement,1000); 
}

  function Decrement() {
      currentMinutes = Math.floor(secs / 60);
      currentSeconds = secs % 60;
      if(currentSeconds <= 9) currentSeconds = "0" + currentSeconds;
      secs--;
      document.getElementById("timer").innerHTML ="Tiempo Restante: "+ currentMinutes + ":" + currentSeconds; //Set the element id you need the time put into.
      if(secs<0){
        alert("tiempo fuera!!");
      }
      if(secs !== -1) setTimeout('Decrement()',1000);
      else if (secs<0) {
        
      }
  }
  $(document).ready(function(){
    $("h2").click(function(){
        $(this).hide(3000).show(2000);
        
    });
    for(var i=0;i<40;i++){
      ss='<div class="row fila'+String(i)+'"><div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-lg-offset-2">'
      +'<div class="panel panel-default">  <div class="panel-body">    Basic panel example  </div> </div>'
      +'</div></div>';
      $(".panels").append(ss);
    }
    
    
  });
  
</script>
