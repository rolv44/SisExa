<div class="content-wrapper rapero-preg">
  <div class="container-fluid vP">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Panel de Control</a>
      </li>
      <li class="breadcrumb-item active">Pregunta</li>
    </ol>
    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i>Tabla de Preguntas</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="tablaPreg" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Codigo</th>
                <th>Categoria</th>
                <th>Tema</th>
                <th>Descripción</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Codigo</th>
                <th>Categoria</th>
                <th>Tema</th>
                <th>Descripción</th>
              </tr>
            </tfoot>
            <tbody id="bodyPreg">
              
            </tbody>
          </table>
        </div>
        
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
  </div>
  
    <div class="container-fluid  rP ">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Registrar Pregunta</div>
        <div class="card-body">
          <form id="formRegPreg">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-10">
                  <label for="nomCat">Descripcion Pregunta</label>
                  <input class="form-control" id="nomPreg" name="nomPreg" type="text" aria-describedby="nameHelp" placeholder="Descripcion" required>
                </div>
                
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <label for="nomCat">Categoria Al Que Pertenece</label>
                  <select class="form-control" id="CatPreg" name="CatPreg[]" multiple required>
                    
                    </select>
                </div>
                
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <label for="nomCat">Tema Al Que Pertenece</label>
                  <select class="form-control" id="temaPreg" name="temaPreg" required>
                    
                    </select>
                </div>
                
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="btn-regPreg">Registrar</button>
          </form>
        </div>
      </div>
    </div>
</div>