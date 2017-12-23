<div class="content-wrapper rapero-usu">
    <div class="container-fluid vU">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Panel de Control</a>
        </li>
        <li class="breadcrumb-item active">Usuario</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Tabla de Usuarios</div>
        <div class="card-body">
          <div class="table-responsive ewq">
            <table class="table table-bordered" id="tablaUsu0" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>DNI</th>
                  <th>Nombre</th>
                  <th>Apellidos</th>
                  <th>Nombre de Usuario</th>
                  <th colspan="3"></th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>DNI</th>
                  <th>Nombre</th>
                  <th>Apellidos</th>
                  <th>Nombre de Usuario</th>
                  <th colspan="3"></th>
                </tr>
              </tfoot>
              <tbody id="bodyUsu">
                
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    
      <div class="container-fluid  rU ">
        <div class="card card-register mx-auto mt-5">
          <div class="card-header">Registrar Usuario</div>
          <div class="card-body">
            <form id="formRegUsu">
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-10">
                    <label for="nomCat">DNI</label>
                    <input class="form-control" id="dni" name="dni" type="text" aria-describedby="nameHelp" placeholder="DNI" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-10">
                    <label for="nomCat">Nombres</label>
                    <input class="form-control" id="nombre" name="nombre" type="text" aria-describedby="nameHelp" placeholder="Nombres" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-10">
                    <label for="nomCat">Apellidos</label>
                    <input class="form-control" id="apellidos" name="apellidos" type="text" aria-describedby="nameHelp" placeholder="Apellidos" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-10">
                    <label for="nomCat">Nombre de Usuario</label>
                    <input class="form-control" id="nUsu" name="nUsu" type="text" aria-describedby="nameHelp" placeholder="Nombre de Usuario" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-10">
                    <label for="nomCat">Contraseña</label>
                    <input class="form-control" id="contra" name="contra" type="password" aria-describedby="nameHelp" placeholder="Contraseña" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-10">
                    <button type="submit" class="btn btn-primary btn-block" name="btn-regCat">Registrar</button>
                  </div>
                </div>
              </div>
              
            </form>
          </div>
        </div>
      </div>
    
  </div>
  <!-- Button trigger modal -->
  <input type="hidden" value="" id="campIdUs" />
  <input type="hidden" value="" id="campCUs" />
  <input type="hidden" value="" id="campTabUs" />
  <!-- Modal -->
  <div class="modal fade" id="elimUs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar Usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ¿Desea eliminar este Usuario?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" id="btnAcpUs" class="btn btn-primary">Aceptar</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="desUs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cambiar estado Usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ¿Desea cambiar el estado de este Usuario?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" id="btnDsUs" class="btn btn-primary">Aceptar</button>
        </div>
      </div>
    </div>
  </div>
  
  <div class="modal fade " id="editUs" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myLargeModalLabel">Editar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <div class="form-row">
            <div class="col-md-10">
              <label for="nomCat">Nombre</label>
              <input class="form-control" id="nomEdUs" name="nomEdUs" type="text" aria-describedby="nameHelp" placeholder="Nombre" required>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-10">
              <label for="nomCat">Apellidos</label>
              <input class="form-control" id="apeEdUs" name="apeEdUs" type="text" aria-describedby="nameHelp" placeholder="Apellidos" required>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-10">
              <label for="nomCat">Nombre de Usuario</label>
              <input class="form-control" id="nomUsEdUs" name="nomUsEdUs" type="text" aria-describedby="nameHelp" placeholder="Apellidos" required>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" id="btnEdUs" class="btn btn-primary">Aceptar</button>
      </div>
    </div>
  </div>
</div>
  