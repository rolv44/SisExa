
<?php include_once"diseño/cabecera.php";?>

  <div class="content-wrapper rapero-panel">            
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb bread-cu">
        <li class="breadcrumb-item">
          <a href="#">Bienvenido al Sistema</a>
        </li>
        <li class="breadcrumb-item active">Inicio</li>
      </ol>
      <!-- Icon Cards-->
      <?php include"graficos.php"; ?>
      <!-- Area Chart Example-->
      
      <!-- Example DataTables Card-->
    </div>
    
    <?php include_once"diseño/pie.php";?>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
    <script src="script/funciones.js"></script>
  </div>
  
  <?php include"usuario.php";?>
  <?php include"importar.php";?>
  <?php include"categoria.php";?>
  <?php include"tema.php";?>
  <?php include"pregunta.php";?>
  <?php include"alternativa.php";?>
  <?php include"respuesta.php";?>
  
</body>

</html>


