<?php include "Views/Templates/headerAdmin.php"; ?>

<!-- body area: mini navbar (breadcrumb)-->
<div class="px-xl-4 px-sm-2 px-0 py-3">
    <div class="container-fluid">
        <div class="row g-3 align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb border-0">
                    <li class="breadcrumb-item"><a href="<?php echo base_url; ?>administracion/home">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- body area: page body -->
<div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0 mt-lg-3">
    <div class="container-fluid">
        <div class="row g-3 mb-4">
            <!-- member content: botón de agregar usuarios -->
            <div class="col-12">
                <div class="input-group justify-content-end mb-2">
                    <button class="btn btn-primary" type="button" onclick="frmUsuario();">
                        <i class="fas fa-plus me-2"></i>
                        Nuevo usuario
                    </button>
                </div>
            </div>
            <div class="col-12 table-responsive">
                <table id="tblUsuarios" class="table dataTable nowrap custom-table align-middle table-bordered mb-0" style="width: 100%;">
                    <thead>
                        <tr>
                            <th class="header-sorting rounded-start">Id</th>
                            <th class="header-sorting" rowspan="1">Usuario</th>
                            <th class="header-sorting" rowspan="1">Nombre</th>
                            <th class="header-sorting" rowspan="1">Correo</th>
                            <th class="header-sorting" rowspan="1">Rol</th>
                            <th class="header-sorting" rowspan="1">Estado</th>
                            <th class="header-sorting rounded-end">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>

        </div>
        <!-- modal: add new user -->
        <div id="myModal" class="modal fade" aria-labelledby="ModalLabel" aria-modal="true" role="dialog">
            <div class="modal-dialog modal-dialog-scrollable">
                <form class="modal-content" id="frmUsuario" onsubmit="registrarUser(event);">
                    <div class="modal-header">
                        <h5 class="modal-title" id="title">Agregar nuevo usuario</h5>
                        <button type="button" class="focus-none btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h6 class="fw-bold">Datos personales</h6>
                        <div class="row g-3">
                            <!-- agregar nuevo usuario:: usuario -->
                            <div class="form-floating col-md-6">
                                <input type="hidden" id="id" name="id">
                                <input type="text" class="focus-none form-control" name="usuario" id="usuario" placeholder="" required>
                                <label for="usuario" class="mx-2">Usuario</label>
                            </div>
                            <!-- agregar nuevo usuario:: nombre completo -->
                            <div class="form-floating col-md-6">
                                <input type="text" class="focus-none form-control" name="nombre" id="nombre" placeholder="" required>
                                <label for="nombre" class="mx-2">Nombre completo</label>
                            </div>
                            <!-- agregar nuevo usuario:: correo electronico -->
                            <div class="form-floating col-md-6">
                                <input type="text" class="focus-none form-control" name="correo" id="correo" placeholder="" required>
                                <label for="correo" class="mx-2">Correo electrónico</label>
                            </div>
                            <!-- agregar nuevo usuario:: telefono -->
                            <div class="form-floating col-md-6">
                                <input type="text" class="focus-none form-control" name="telefono" id="telefono" placeholder="" required>
                                <label for="telefono" class="mx-2">Telefono</label>
                            </div>
                            <!-- agregar nuevo usuario:: contraseña -->
                            <div class="col-md-12" id="claves">
                                <div class="row">
                                    <div class="form-floating col-md-6">
                                        <input type="password" class="focus-none form-control" name="clave" id="clave" placeholder="">
                                        <label for="clave" class="mx-2">Contraseña</label>
                                    </div>
                                    <!-- confirmar contraseña -->
                                    <div class="form-floating col-md-6">
                                        <input type="password" class="focus-none form-control" name="confirmar" id="confirmar" placeholder="" required>
                                        <label for="confirmar" class="mx-2">Confirmar contraseña</label>
                                    </div>
                                </div>
                            </div>
                            <!-- agregar nuevo usuario:: rol -->
                            <div class="form-floating col-md-12">
                                <select class="focus-none form-select" id="rol" name="rol" aria-label="Floating label select example" required>
                                    <option value="1">Administrador</option>
                                    <option value="2">Empleado</option>
                                </select>
                                <label for="rol" class="mx-2">Rol</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer border-top-0">
                        <button type="submit" class="btn btn-success" id="btnAccion">Agregar</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "Views/Templates/footer.php"; ?>