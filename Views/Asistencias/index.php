<?php include "Views/Templates/headerAdmin.php"; ?>

<!-- body area: mini navbar (breadcrumb)-->
<div class="px-xl-4 px-sm-2 px-0 py-3">
    <div class="container-fluid">
        <div class="row g-3 align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb border-0">
                    <li class="breadcrumb-item"><a href="<?php echo base_url; ?>administracion/home">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Asistencias</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- body area: page body -->
<div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0 mt-lg-3">
    <div class="container-fluid">

        <div class="row g-3 mb-4">
            <!-- asistencias content: botón de agregar miembros -->
            <div class="col-12">
                <div class="input-group justify-content-end mb-2">
                    <button class="btn btn-primary" type="button" onclick="frmAsistencia();">
                        <i class="fas fa-plus me-2"></i>Nueva asistencia
                    </button>
                </div>
            </div>

            <!-- asistencias content: tabla de asistencias -->
            <div class="col-12 table-responsive">
                <table id="tblAsistencias" class="table dataTable nowrap responsive custom-table align-middle table-bordered mb-0" style="width: 100%;">
                    <thead>
                        <tr>
                            <th class="header-sorting rounded-start" rowspan="1">#</th>
                            <th class="header-sorting" rowspan="1">Fecha</th>
                            <th class="header-sorting" rowspan="1">Entrada</th>
                            <th class="header-sorting" rowspan="1">Salida</th>
                            <th class="header-sorting" rowspan="1">Miembro</th>
                            <th class="header-sorting" rowspan="1">Entrenador</th>
                            <th class="header-sorting" rowspan="1">Rutina</th>
                            <th class="header-sorting" rowspan="1">Estado</th>
                            <th class="header-sorting rounded-end" rowspan="1"></th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formulario" onsubmit="registrarAsistencia(event);" autocomplete="off">
                <input type="hidden" id="id" name="id">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <input type="hidden" id="id_cli" name="id_cli" required>
                                <label for="select_cliente"><i class="fas fa-users"></i> Buscar Cliente</label>
                                <input type="text" id="select_cliente" class="form-control" placeholder="Buscar..." required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="select_entrenador"><i class="fas fa-user"></i> Buscar Entrenador</label>
                                <input type="hidden" id="id_entrenador" name="id_entrenador" required>
                                <input type="text" id="select_entrenador" placeholder="Buscar..." class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="select_rutina"><i class="fas fa-list"></i> Buscar Rutina</label>
                                <input type="hidden" id="id_rutina" name="id_rutina" required>
                                <input type="text" id="select_rutina" placeholder="Buscar..." class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-primary" type="submit" id="btnAccion">Registrar</button>
                    <button class="btn btn-outline-danger" type="button" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include "Views/Templates/footer.php"; ?>