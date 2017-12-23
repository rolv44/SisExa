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
                <th>Editar</th>
                <th>Eliminar</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Codigo</th>
                <th>Categoria</th>
                <th>Tema</th>
                <th>Descripción</th>
                <th>Editar</th>
                <th>Eliminar</th>
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
<!-- Button trigger modal -->
<input type="hidden" value="" id="campoIdPr" />
<input type="hidden" value="" id="campoCPr" />
<input type="hidden" value="" id="campoTabPr" />
<!-- Modal -->
<div class="modal fade" id="elimPre" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Pregunta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Desea eliminar esta Pregunta?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" id="btnAcpPr" class="btn btn-primary">Aceptar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade " id="editPr" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="myLargeModalLabel">Editar Pregunta</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-10">
            <label for="nomCat">Descripcion</label>
            <input class="form-control" id="desEdPr" name="desEdPr" type="text" aria-describedby="nameHelp" placeholder="Descripcion" required>
          </div>
        </div>
      </div>
      
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <label for="nomCat">Categoria Al Que Pertenece</label>
            <select class="form-control" id="CatPregEd" name="CatPregEd[]" multiple required>
              
              </select>
          </div>
          
        </div>
      </div>
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <label for="nomCat">Tema Al Que Pertenece</label>
            <select class="form-control" id="temaPregEd" name="temaPregEd" required>
              
              </select>
          </div>
        </div>
      </div>
      
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      <button type="button" id="btnEdPr" class="btn btn-primary">Aceptar</button>
    </div>
  </div>
</div>
</div>