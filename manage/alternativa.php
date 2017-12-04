<div class="content-wrapper rapero-alte">
  <div class="container-fluid vA">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Panel de Control</a>
      </li>
      <li class="breadcrumb-item active">Alternativa</li>
    </ol>
    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i>Tabla de Alternativas</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="tablaAlte" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Codigo</th>
                <th>Descripción</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Codigo</th>
                <th>Descripción</th>
              </tr>
            </tfoot>
            <tbody id="bodyAlte">
              
            </tbody>
          </table>
        </div>
        
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
  </div>
  
    <div class="container-fluid  rA">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Registrar Alternativa</div>
        <div class="card-body">
          <form id="formRegAlt">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-10">
                  <label for="nomCat">Descripcion Alternativa</label>
                  <input class="form-control" id="desAlte" name="desAlte" type="text" aria-describedby="nameHelp" placeholder="Descripcion" required>
                </div>
                
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="btn-regCat">Registrar</button>
          </form>
          
        </div>
      </div>
    </div>
</div>