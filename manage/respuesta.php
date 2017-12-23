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
                <th>Editar</th>
                <th>Eliminar</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Codigo</th>
                <th>Codigo Pregunta</th>
                <th>Codigo Alternativa</th>
                <th>Fundamento</th>
                <th>Editar</th>
                <th>Eliminar</th>
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
<!-- Button trigger modal -->
<input type="hidden" value="" id="campIdRe" />
<input type="hidden" value="" id="campCRe" />
<input type="hidden" value="" id="campTabRe" />
<!-- Modal -->
<div class="modal fade" id="elimRe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Respustas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Desea eliminar esta Respuesta?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" id="btnAcpRe" class="btn btn-primary">Aceptar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade " id="editRe" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="myLargeModalLabel">Editar Respuesta</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-10">
            <label for="nomCat">Fundamento</label>
            <input class="form-control" id="funEdRe" name="funEdRe" type="text" aria-describedby="nameHelp" placeholder="Fundamento" required>
          </div>
        </div>
      </div> 
      
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <label for="nomCat">Codigo Pregunta</label>
            <select class="form-control" id="codPregEd" name="codPregEd" required>
              
              </select>
          </div>
          
        </div>
      </div>
      
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <label for="nomCat">Codigo Alternativa</label>
            <select class="form-control" id="altRespEd" name="altRespEd" required>
              
              </select>
          </div>
          
        </div>
      </div>
      
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      <button type="button" id="btnEdAl" class="btn btn-primary">Aceptar</button>
    </div>
  </div>
</div>
</div>