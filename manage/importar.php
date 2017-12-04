
  <div class="content-wrapper rapero-imp">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Panel de Control</a>
        </li>
        <li class="breadcrumb-item active"> Importar Archivo</li>
      </ol>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-upload" aria-hidden="true">Subir Archivo a la Base de Datos</i>
        </div>
        <div class="card-body">
          <form action="" id="form-up" method="post"  enctype="multipart/form-data">
            <div class="container">
              <div class="row">
                <div class="form-group">
                  <label for="SelectCate">Seleccione la categoria al que pertenece las preguntas: </label>
                     <select class="form-control" id="SelectCate" name="SelectCate">
                       
                     </select>
                   </div>
              </div>
              <div class="row">
                <div class="col-xs-12 ">
                  <div class="form-group">
                      <label for="fil">Buscar Archivo</label>
                      <input type="file" class="form-control-file" name="archivo" id="fil" accept=".xlsx">
                   </div>
                </div>
              </div>
            </div>
             <div class="container">
               <div class="row">
                 <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                   <div class="car-icon">
                     
                   </div>
                 </div>
               </div>
               <div class="row">
                 <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                   <div class="car-alert">
                     
                   </div>
                 </div>
               </div>
               <div class="row">
                 <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                   <button type="submit" class="btn btn-primary btn-block" id="upFile">SUBIR</button>
                 </div>
               </div>
             </div>
          </form>
        </div>
      </div>
    </div>
    
  </div>
