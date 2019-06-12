@extends ('Principal')
@section ('Contenido')
<!-- Contenido Principal -->
<main class="main">
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Acceso</li>
        <li class="breadcrumb-item">Personas</li>
        <li class="breadcrumb-item active">Agregar Persona</li>
    </ol>
    <div class="container-fluid"><!-- ------------------------------INICIA EL CONTENIDO -->
      <!-- ---------------------------------------------------------TARGETA -->
      <div class="card">
            <div class="card-header">
                Registro de Personas
            </div>
            <div class="card-body">
              <div class="form-group row">
                    <div class="col-md-6">
                          <input type="text" name="nombre" class="form-control" placeholder="Nombre Completo">
                          <br>
                          <input type="text" name="tipo" class="form-control" placeholder="Tipo de Documento">
                          <br>
                          <input type="text" name="numero" class="form-control" placeholder="Número de Documento">
                          <br>
                          <input type="text" name="direccion" class="form-control" placeholder="Calle - Colonia - #">
                          <br>
                          <div class="input-group">
                            <button type="button" onclick='window.location.href = "/Personas";' class="btn btn-secundary" data-toggle="modal" data-target="#modalNuevo">
                              <i class="icon-plus"></i>&nbsp;Cancelar
                            </button>
                            &nbsp;&nbsp;
                            <button type="button" onclick='window.location.href = "/Personas";' class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
                              <i class="icon-plus"></i>&nbsp;Registrar
                            </button>
                          </div>
                    </div>
              </div>
            </div>
      </div>
    </div>
</main>
@endsection