@extends ('Principal')
@section ('Contenido')
<!-- Contenido Principal -->
<main class="main">
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Acceso</li>
        <li class="breadcrumb-item active">Roles</li>
    </ol>
    <div class="container-fluid"><!-- ------------------------------INICIA EL CONTENIDO -->
      <!-- ---------------------------------------------------------TARGETA -->
      <form action = "" method = "post">
      <div class="card">
            <div class="card-header">
                <button type="button" onclick='window.location.href = "/Agregar-Roles";' class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
                    <i class="icon-plus"></i>&nbsp;Nuevo Rol
                </button>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <div class="col-md-12">
                      Buscador
                    </div>
                </div>
                <table class="table table-bordered table-striped table-sm">
                  <thead>
                      <tr>
                          <th>Nombre</th>
                          <th>Descripción</th>
                          <th>Estado</th>
                          <th>Controles</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>Jefe</td>
                          <td>El mero mero</td>
                          <td>
                              <span class="badge badge-success">Activo</span>
                          </td>
                          <td>
                              <button type="button" onclick='window.location.href = "/Modificar-Roles";' class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
                                <i class="icon-pencil"></i>
                              </button> &nbsp;
                              <button type="button" onclick='window.location.href = "/Eliminar-Roles";' class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar">
                                <i class="icon-trash"></i>
                              </button>
                          </td>
                      </tr>
                  </tbody>
                </table>
            </div>
      </div>
      </form>
    </div>
</main>
@endsection