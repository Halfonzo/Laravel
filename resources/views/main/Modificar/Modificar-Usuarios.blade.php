@extends ('Principal')
@section ('Contenido')
<!-- Contenido Principal -->
<main class="main">
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Acceso</li>
        <li class="breadcrumb-item">Usuarios</li>
        <li class="breadcrumb-item active">Modificar Usuarios</li>
    </ol>
    <div class="container-fluid"><!-- ------------------------------INICIA EL CONTENIDO -->
      <!-- ---------------------------------------------------------TARGETA -->
      <div class="card">
            <div class="card-header">
                Actualización de Usuarios
            </div>
            <div class="card-body">
              <div class="form-group row">
                    <div class="col-md-6">
                          <input type="text" name="nombre" class="form-control" placeholder="Nombre Completo">
                          <br>
                          <input type="text" name="rol" class="form-control" placeholder="Rol">
                          <br>
                          <input type="text" name="clave" class="form-control" placeholder="Clave">
                          <br>
                          <input type="text" name="condicion" class="form-control" placeholder="Condición">
                          <br>
                          <div class="input-group">
                            <button type="button" onclick='window.location.href = "/Usuarios";' class="btn btn-secundary" data-toggle="modal" data-target="#modalNuevo">
                              <i class="icon-plus"></i>&nbsp;Cancelar
                            </button>
                            &nbsp;&nbsp;
                            <button type="button" onclick='window.location.href = "/Usuarios";' class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
                              <i class="icon-plus"></i>&nbsp;Actualizar
                            </button>
                          </div>
                    </div>
              </div>
            </div>
      </div>
    </div>
</main>
@endsection