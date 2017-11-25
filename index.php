<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/indexCss.css">
    <title>BIENVENIDO</title>
  </head>
  <body>
    <div class="container">
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
        <!--<a class="navbar-brand" href="">Simulador</a> -->
      </div>
      <div class="collapse navbar-collapse" id="navbar-1">  
        <ul class="nav navbar-nav navbar-left">
          <img class="img-responsive" src="img/minp.png" width="150" height="40" alt="Ministerio del Perú">
        </ul>
        <ul class="nav navbar-nav navbar-right ulin" >
          <li role="presentation"><a href="#"><h4>BIENVENIDO: DEMO</h4></a></li> 
          <li role="presentation"><a href="manage/sesion.php"><h4>ACCEDER</h4></a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</header>
      
      <div class="container">
             <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-lg-offset-1">
            <div class="sheet"> 
              
              <div class="container-fluid">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
                <h3 id="tit"><strong>SIMULACRO DE PREGUNTAS PARA LA EVALUACIÓN DE 
                  CONOCIMIENTOS EN LA CONDUCCIÓN PARA POSTULANTES A LICENCIAS DE CONDUCIR</strong></h3>
                  <br>
                <strong>Estimados Usuarios:</strong>
                <br>
                <br>
                   <p id="p1">
          Ante todo felicitarlos por ingresar a nuestro simulador de entrenamiento. El examen contiene 40 preguntas y tiene una duración de 40 minutos, y para su aprobación, el postulante deberá de acertar por lo menos treinta y cinco (35) respuestas de las cuarenta (40) preguntas. Es importante realizar este examen en completo silencio para evitar distracciones.
          Los componentes de este examen son temas de: Obligaciones del Conductor en materia de tránsito, Inspección Técnica Vehicular, Reglamento Nacional de Vehículos, Reglamento Nacional de Responsabilidad Civil y Seguros Obligatorios de Accidentes de Tránsito, Reglamento de Placa Única Nacional de Rodaje y Primeros Auxilios, en caso de accidentes de tránsito.
          Acabada la prueba, deseamos que lean los comentarios de todos e identifiquen el tema que les falta reforzar, con miras a estar aptos para el examen de Licencia de Conducir.
          El examen estará activo las 24 horas para que puedan resolver la prueba de conocimientos, según la categoría a la que postulan. Acabada la prueba, los resultados se podrán visualizar.
          Selecciona la categoria a postular: </p>
              </div>
              </div>
            </div>
            <div class="container-fluid">
              <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-lg-offset-2">
                      <div class="btn-toolbar" role="toolbar" aria-label="...">
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-11 btnc">
                <div class="btn-group" role="group" aria-label="...">
                  <button type="button" name="button" class="btn btn-info" onclick="tipoEx('Categoria A-I',1)" data-toggle="modal" data-target="#adv1">Categoria A-I</button>
                  <button type="button" name="button" class="btn btn-info" onclick="tipoEx('Categoria BII-A',2)" data-toggle="modal" data-target="#adv1">Categoria BII-A</button>
                  <button type="button" name="button" class="btn btn-info" onclick="tipoEx('Categoria BII-B',3)" data-toggle="modal" data-target="#adv1">Categoria BII-B</button>
                  <button type="button" name="button" class="btn btn-info" onclick="tipoEx('Categoria AII-A',4)" data-toggle="modal" data-target="#adv1">Categoria AII-A</button>
                </div>
                </div>
                <br>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-11 btnc">
                  <div class="btn-group" role="group" aria-label="...">
                    <button type="button" name="button" class="btn btn-info" onclick="tipoEx('Categoria AII-B',5)" data-toggle="modal" data-target="#adv1">Categoria AII-B</button>
                    <button type="button" name="button" class="btn btn-info" onclick="tipoEx('Categoria AIII-A',6)" data-toggle="modal" data-target="#adv1">Categoria AIII-A</button>
                    <button type="button" name="button" class="btn btn-info" onclick="tipoEx('Categoria AIII-B',7)" data-toggle="modal" data-target="#adv1">Categoria AIII-B</button>
                    <button type="button" name="button" class="btn btn-info" onclick="tipoEx('Categoria AIII-C',8)" data-toggle="modal" data-target="#adv1">Categoria AIII-C</button>
                  </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-8 col-lg-11 btnc">
                    <div class="btn-group" role="group" aria-label="...">
                      <button type="button" name="button" class="btn btn-info" onclick="tipoEx('Categoria BII-C',9)" data-toggle="modal" data-target="#adv1">Categoria BII-C</button>
                    
                </div>
              </div>
                    </div>
                    </div>
              </div>
            </div>
            <br>
        </div>
        </div>
        </div>
        <?php include"modal.php";?>
      </div>
      
    </div>
    
    <div class="footer">
    <div class="frame container">
       
        <h4 align="center">Todos los derechos reservados</h4>
      
    </div>
    </div>
  </body>
</html>
<script type="text/javascript">
  function tipoEx(tipo,num){
    document.getElementById('tt1').innerHTML="¿Está seguro que desea comenzar el simulacro | "+tipo+" ?";
    var tt=tipo.substr(10);
    document.getElementById('rdr1').href="demo/demo.php?id="+tt;
  }
</script>