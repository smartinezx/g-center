<?php include "Views/Templates/headerAdmin.php"; ?>

<!-- body area: mini navbar (breadcrumb)-->
<div class="px-xl-4 px-sm-2 px-0 py-3">
    <div class="container-fluid">
        <div class="row g-3 align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb border-0">
                    <li class="breadcrumb-item"><a href="<?php echo base_url; ?>administracion/home">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pagos</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- body area: page body -->
<div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0 mt-lg-3">
    <div class="container-fluid">
        <div class="row g-3 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <label class="mb-3" for="">Desde</label>
                            <input class="form-control" id="min" type="date" name="pagos_min">
                        </div>
                        <div class="col-md-4">
                            <label class="mb-3" for="">Hasta</label>
                            <input class="form-control" id="max" type="date" name="pagos_max">
                        </div>
                        <div class="col-md-4">
                            <div class="d-grid">
                                <label class="mb-3">Acción</label>
                                <button class="btn btn-outline-primary" type="button" name="pagos" onclick="mostrarTodo(event)">Limpiar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-3 mb-4">
            <div class="col-12 table-responsive">
                <table id="tblPago" class="table dataTable nowrap custom-table align-middle table-bordered mb-0" style="width: 100%;">
                    <thead>
                        <tr>
                            <th class="header-sorting rounded-start">Id</th>
                            <th class="header-sorting" rowspan="1">Fecha de Pago</th>
                            <th class="header-sorting" rowspan="1">Miembro</th>
                            <th class="header-sorting" rowspan="1">Plan</th>
                            <th class="header-sorting" rowspan="1">Precio</th>
                            <th class="header-sorting" rowspan="1">Estado</th>
                            <th class="header-sorting rounded-end">Reporte</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php include "Views/Templates/footer.php"; ?>