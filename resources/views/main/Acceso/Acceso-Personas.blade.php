@extends ('Principal')
@section ('Contenido')
<!-- Contenido Principal -->
<main class="main">
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Acceso</li>
        <li class="breadcrumb-item active">Persona</li>
    </ol>
    <div class="container-fluid"><!-- ------------------------------INICIA EL CONTENIDO -->
      <!-- ---------------------------------------------------------TARGETA -->
      <form action = "" method = "post">
      <div class="card">
            <div class="card-header">
                <button type="button" onclick='window.location.href = "/Agregar-Personas";' class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
                    <i class="icon-plus"></i>&nbsp;Nueva Persona
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
                          <th>Tipo</th>
                          <th>Número</th>
                          <th>Dirección</th>
                          <th>Telefono</th>
                          <th>E-Mail</th>
                          <th>Controles</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>Halfonso</td>
                          <td>
                              <span class="badge badge-success">1</span>
                          </td>
                          <td>45</td>
                          <td>Calle 1 Colonia 2</td>
                          <td>8342325999</td>
                          <td>1630065@upv.edu.mx</td>
                          <td>
                              <button type="button" onclick='window.location.href = "/Modificar-Personas";' class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
                                <i class="icon-pencil"></i>
                              </button> &nbsp;
                              <button type="button" onclick='window.location.href = "/Eliminar-Personas";' class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar">
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