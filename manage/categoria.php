<div class="content-wrapper rapero-cate">
  <div class="container-fluid vC">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Panel de Control</a>
      </li>
      <li class="breadcrumb-item active">Categoria</li>
    </ol>
    <!-- Example DataTables Card-->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fa fa-table"></i>Tabla de Categorias</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="tablaCate" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Codigo</th>
                <th>Descripción</th>
                <th>Editar</th>
                <th>Eliminar</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Codigo</th>
                <th>Descripción</th>
                <th>Editar</th>
                <th>Eliminar</th>
              </tr>
            </tfoot>
            <tbody id="bodyCate">
              
            </tbody>
          </table>
        </div>
        
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
  </div>
  
    <div class="container-fluid  rC ">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Registrar Categoria</div>
        <div class="card-body">
          <form id="formRegCat">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <label for="nomCat">Nombre Categoria</label>
                  <input class="form-control" id="nomCat" name="nomCat" type="text" aria-describedby="nameHelp" placeholder="Nombre" required>
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
<input type="hidden" value="" id="campoId" />
<input type="hidden" value="" id="campoC" />
<input type="hidden" value="" id="campoTab" />
<!-- Modal -->
<div class="modal fade" id="elimCat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Desea eliminar esta categoria?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" id="btnAcpE" class="btn btn-primary">Aceptar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade " id="editCa" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="myLargeModalLabel">Editar Categoria</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-10">
            <label for="nomCat">Descripcion</label>
            <input class="form-control" id="desEdCa" name="desEdCa" type="text" aria-describedby="nameHelp" placeholder="Descripcion" required>
          </div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      <button type="button" id="btnEdCa" class="btn btn-primary">Aceptar</button>
    </div>
  </div>
</div>
</div>