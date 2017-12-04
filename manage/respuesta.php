<div class="content-wrapper rapero-resp">
  <div class="container-fluid vRp">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Panel de Control</a>
      </li>
      <li class="breadcrumb-item active">Respuesta</li>
    </ol>
    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i>Tabla de Respuestas</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="tablaResp" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Codigo</th>
                <th>Codigo Pregunta</th>
                <th>Codigo Alternativa</th>
                <th>Fundamento</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Codigo</th>
                <th>Codigo Pregunta</th>
                <th>Codigo Alternativa</th>
                <th>Fundamento</th>
              </tr>
            </tfoot>
            <tbody id="bodyResp">
              
            </tbody>
          </table>
        </div>
        
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
  </div>
  
    <div class="container-fluid  rRp">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Registrar Respuesta</div>
        <div class="card-body">
          <form id="formRegResp">
            
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <label for="nomCat">Codigo Pregunta</label>
                  <select class="form-control" id="codPreg" name="codPreg" required>
                    
                    </select>
                </div>
                
              </div>
            </div>
            
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <label for="nomCat">Codigo Alternativa</label>
                  <select class="form-control" id="altResp" name="altResp" required>
                    
                    </select>
                </div>
                
              </div>
            </div>
            
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <label for="nomCat">Fundamento</label>
                  <input class="form-control" type="text" name="fund" id="fund" placeholder="Fundamento" required>
                </div>
                
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="btn-regCat">Registrar</button>
          </form>
          
        </div>
      </div>
    </div>
</div>