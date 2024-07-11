<?php include "Views/Templates/headerAdmin.php"; ?>

<!-- body area: mini navbar (breadcrumb)-->
<div class="px-xl-4 px-sm-2 px-0 py-3">
    <div class="container-fluid">
        <div class="row g-3 align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb border-0">
                    <li class="breadcrumb-item"><a href="<?php echo base_url; ?>administracion/home">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Rutinas</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- body area: page body -->
<div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0 mt-lg-3">
    <div class="container-fluid">

        <div class="row g-3 mb-4">
            <!-- rutinas content: botón de agregar miembros -->
            <div class="col-12">
                <div class="input-group justify-content-end mb-2">
                    <button class="btn btn-primary" type="button" onclick="frmRutina();">
                        <i class="fas fa-plus me-2"></i>Nueva rutina
                    </button>
                </div>
            </div>

            <!-- rutinas content: tabla de rutinas -->
            <div class="col-12 table-responsive">
                <table id="tblRutinas" class="table dataTable custom-table align-middle table-bordered mb-0" style="width: 100%;">
                    <thead>
                        <tr>
                            <!-- <th class="header-sorting rounded-start" rowspan="1">#</th> -->
                            <th class="header-sorting rounded-start" rowspan="1">Nombre de rutina</th>
                            <th class="header-sorting" rowspan="1">Descripción</th>
                            <!-- <th class="header-sorting" rowspan="1">Estado</th> -->
                            <th class="header-sorting rounded-end w-auto" rowspan="1">Acciones</th>
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
        <form class="modal-content" id="formulario" onsubmit="registrarRutina(event);">
            <input type="hidden" id="id" name="id">
            <div class="modal-header">
                <h5 class="modal-title" id="title">Agregar nueva rutina</h5>
                <button type="button" class="focus-none btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6 class="fw-bold">Datos de rutina</h6>
                <div class="row g-3">
                    <!-- agregar nuevo rutina:: dia de rutina -->
                    <div class="form-floating col-md-12">
                        <input type="text" class="focus-none form-control" name="dia" id="dia" placeholder="" required>
                        <label for="dia" class="mx-2">Nombre de rutina</label>
                    </div>
                    <!-- agregar nuevo rutina:: descripcion de rutina -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <textarea id="descripcion" class="form-control" name="descripcion" placeholder="Descripción" rows="4" required></textarea>
                        </div>
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