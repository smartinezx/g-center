<?php include "Views/Templates/headerAdmin.php"; ?>

<!-- body area: mini navbar (breadcrumb)-->
<div class="px-xl-4 px-sm-2 px-0 py-3">
    <div class="container-fluid">
        <div class="row g-3 align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb border-0">
                    <li class="breadcrumb-item"><a href="<?php echo base_url; ?>administracion/home">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Entrenadores</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- body area: page body -->
<div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0 mt-lg-3">
    <div class="container-fluid">

        <div class="row g-3 mb-4">
            <!-- entrenadores content: botón de agregar miembros -->
            <div class="col-12">
                <div class="input-group justify-content-end mb-2">
                    <button class="btn btn-primary" type="button" onclick="frmEnt();">
                        <i class="fas fa-plus me-2"></i>Nuevo entrenador
                    </button>
                </div>
            </div>

            <!-- entrenadores content: tabla de entrenadores -->
            <div class="col-12">
                <table id="tblEnt" class="table dataTable custom-table align-middle table-bordered mb-0" style="width: 100%;">
                    <thead>
                        <tr>
                            <th class="header-sorting rounded-start" rowspan="1">#</th>
                            <th class="header-sorting" rowspan="1">Nombre</th>
                            <th class="header-sorting" rowspan="1">Apellido</th>
                            <th class="header-sorting" rowspan="1">Teléfono</th>
                            <th class="header-sorting" rowspan="1">Dirección</th>
                            <th class="header-sorting" rowspan="1">Estado</th>
                            <th class="header-sorting rounded-end" rowspan="1">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true" role="dialog">
    <div class="modal-dialog" role="document">
        <form class="modal-content" id="formulario" onsubmit="registrarEnt(event);">
            <input type="hidden" id="id" name="id">
            <div class="modal-header">
                <h5 class="modal-title" id="title">Agregar nuevo entrenador</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6 class="fw-bold">Datos de entrenador</h6>
                <div class="row g-3">
                    <!-- agregar nuevo entrenador:: nombre del entrenador -->
                    <div class="form-floating col-md-6">
                        <input type="text" class="focus-none form-control" name="nombre" id="nombre" placeholder="" required>
                        <label for="nombre" class="mx-2">Nombre</label>
                    </div>
                    <!-- agregar nuevo entrenador:: apellido del entrenador -->
                    <div class="form-floating col-md-6">
                        <input type="text" class="focus-none form-control" name="apellido" id="apellido" placeholder="" required>
                        <label for="apellido" class="mx-2">Apellido</label>
                    </div>
                    <!-- agregar nuevo entrenador:: telefono del entrenador -->
                    <div class="form-floating col-md-6">
                        <input type="text" class="focus-none form-control" name="telefono" id="telefono" placeholder="" required>
                        <label for="telefono" class="mx-2">Telefono</label>
                    </div>
                    <!-- agregar nuevo entrenador:: correo del entrenador -->
                    <div class="form-floating col-md-6">
                        <input type="email" class="focus-none form-control" name="correo" id="correo" placeholder="" required>
                        <label for="correo" class="mx-2">Correo electronico</label>
                    </div>
                    <!-- agregar nuevo entrenador:: direccion del entrenador -->
                    <div class="form-floating col-md-12">
                        <input type="text" class="focus-none form-control" name="direccion" id="direccion" placeholder="" required>
                        <label for="direccion" class="mx-2">Direccion</label>
                    </div>
                </div>
                <div class="modal-footer border-top-0">
                    <button class="btn btn-success" type="submit" id="btnAccion">Agregar</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include "Views/Templates/footer.php"; ?>