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
  