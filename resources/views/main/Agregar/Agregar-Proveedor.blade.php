@extends ('Principal')
@section ('Contenido')
<!-- Contenido Principal -->
<main class="main">
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Acceso</li>
        <li class="breadcrumb-item">Proveedor</li>
        <li class="breadcrumb-item active">Agregar Proveedor</li>
    </ol>
    <div class="container-fluid"><!-- ------------------------------INICIA EL CONTENIDO -->
      <!-- ---------------------------------------------------------TARGETA -->
      <div class="card">
            <div class="card-header">
                Registro de Proveedores
            </div>
            <div class="card-body">
              <div class="form-group row">
                    <div class="col-md-6">
                          <input type="text" name="nombre" class="form-control" placeholder="Nombre Completo">
                          <br>
                          <input type="text" name="contacto" class="form-control" placeholder="Contacto del Proveedor">
                          <br>
                          <input type="text" name="telefono" class="form-control" placeholder="Telefono del Proveedor">
                          <br>
                          <div class="input-group">
                            <button type="button" onclick='window.location.href = "/Proveedores";' class="btn btn-secundary" data-toggle="modal" data-target="#modalNuevo">
                              <i class="icon-plus"></i>&nbsp;Cancelar
                            </button>
                            &nbsp;&nbsp;
                            <button type="button" onclick='window.location.href = "/Proveedores";' class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
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