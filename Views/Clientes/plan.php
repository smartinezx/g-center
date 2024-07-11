<?php include "Views/Templates/headerAdmin.php"; ?>

<!-- body area: mini navbar (breadcrumb)-->
<div class="px-xl-4 px-sm-2 px-0 py-3">
    <div class="container-fluid">
        <div class="row g-3 align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb border-0">
                    <li class="breadcrumb-item"><a href="<?php echo base_url; ?>administracion/home">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Plan</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- body area: page body -->
<div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0 mt-lg-3">
    <div class="container-fluid">
        <div class="row g-3 mb-4">
            <!-- member content: botón de agregar miembros -->
            <div class="col-12">
                <div class="input-group justify-content-end mb-2">
                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalPago">
                        <i class="fas fa-plus me-2"></i>
                        Agregar Pago
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <form id="formulario" onsubmit="registrarPlanCliente(event)">
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <div class="form-group mb-3">
                                    <label class="mb-2" for="select_cliente">Buscar miembro</label>
                                    <input type="hidden" id="id_cli" name="id_cli" required>
                                    <input type="text" id="select_cliente" placeholder="Buscar..." class="focus-none form-control" required>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="form-group mb-3">
                                    <label class="mb-2" for="buscar_planes">Buscar membresia</label>
                                    <input type="hidden" id="id_plan" name="id_plan" required>
                                    <input type="text" id="buscar_planes" class="focus-none form-control" placeholder="Buscar..." required>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="form-group mb-3">
                                    <label class="mb-2" for="precio_plan">Precio membresia</label>
                                    <input type="text" id="precio_plan" class="focus-none form-control" disabled>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="d-grid gap-2">
                                    <label for="">Accion</label>
                                    <button class="btn btn-outline-primary btn-block" type="submit"><span id="btnAccion">Procesar</span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Agregar pago</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group mb-3">
                                <label for="cliente" class="form-label">Miembro</label>
                                <input class="form-control" id="cliente" type="text" readonly>
                                <input type="hidden" id="id">
                            </div>
                            <div class="form-group mb-3">
                                <label for="plan" class="form-label">Membresia</label>
                                <input class="form-control" id="plan" type="text" readonly>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary" onclick="generarPago();">Pagar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal modal-lg fade" id="modalPago" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Agregar pago</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="frmPago" onsubmit="registrarPago(event)" autocomplete="off">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12 mb-3 px-4">
                                        <label for="nombre_cliente">Buscar Cliente</label>
                                        <input type="hidden" id="id_planCliente" name="id_planCliente" required>
                                        <div class="mt-2 main-search flex-fill input-group">
                                            <input type="text" id="nombre_cliente" class="focus-none form-control" placeholder="Buscar aqui..." required>
                                            <button id="search-button" type="button" class="btn btn-primary">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-4 ps-4">
                                        <div class="form-group mb-3">
                                            <label for="nombre_plan">Membresia</label>
                                            <input type="text" id="nombre_plan" class="mt-2 focus-none form-control" required readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="vencimiento">Fecha de Vencimiento</label>
                                            <input type="text" id="vencimiento" class="mt-2 focus-none form-control" required readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pe-4">
                                        <div class="form-group mb-3">
                                            <label for="precio">Precio de membresia</label>
                                            <input type="text" id="precio" class="mt-2 focus-none form-control" required readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer border-top-0">
                                <button class="btn btn-outline-primary" type="submit">Procesar Pago</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-5">
                            <label class="mb-2" for="">Desde</label>
                            <input class="focus-none form-control" id="min" type="date" name="plan_min">
                        </div>
                        <div class="col-md-5">
                            <label class="mb-2" for="">Hasta</label>
                            <input class="focus-none form-control" id="max" type="date" name="plan_max">
                        </div>
                        <div class="col-md-2">
                            <div class="d-grid">
                                <label class="mb-2">Acción</label>
                                <button class="btn btn-outline-primary" type="button" name="pagos" onclick="mostrarTodo(event)">Limpiar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 table-responsive">
                <table id="tblPlanCli" class="table dataTable nowrap custom-table align-middle table-bordered mb-0">
                    <thead>
                        <tr>
                            <th class="header-sorting rounded-start">#</th>
                            <th class="header-sorting" rowspan="1">Fecha de registro</th>
                            <th class="header-sorting" rowspan="1">Documento</th>
                            <th class="header-sorting" rowspan="1">Miembro</th>
                            <th class="header-sorting" rowspan="1">Membresia</th>
                            <th class="header-sorting" rowspan="1">Precio de membresia</th>
                            <th class="header-sorting" rowspan="1">F. venc</th>
                            <th class="header-sorting" rowspan="1">F. limite</th>
                            <th class="header-sorting" rowspan="1">Estado</th>
                            <th class="header-sorting rounded-end">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <?php include "Views/Templates/footer.php"; ?>