<?php include "Views/Templates/headerAdmin.php"; ?>

<!-- body area: mini navbar (breadcrumb)-->
<div class="px-xl-4 px-sm-2 px-0 py-3 ">
    <div class="container-fluid">
        <div class="row g-3 align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb border-0">
                    <li class="breadcrumb-item"><a href="<?php echo base_url; ?>administracion/home">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Membresias</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- body area: page body -->
<div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0 mt-lg-3">
    <div class="container-fluid">
        <div class="row g-3 mb-4">
            <!-- member content: botón de agregar membresia -->
            <div class="col-12">
                <div class="input-group justify-content-end mb-2">
                    <button class="btn btn-primary" type="button" onclick="frmPlan();">
                        <i class="fas fa-plus me-2"></i>
                        Nueva membresia
                    </button>
                </div>
            </div>
            <!-- member content: member table -->
            <div class="col-12 table-responsive">
                <table id="tblPlanes" class="table dataTable nowrap custom-table align-middle table-bordered mb-0" style="width: 100%;">
                    <thead>
                        <tr>
                            <th class="header-sorting rounded-start" rowspan="1">Id</th>
                            <th class="header-sorting" rowspan="1">Plan</th>
                            <th class="header-sorting" rowspan="1">Descripción</th>
                            <th class="header-sorting" rowspan="1">Precio Plan</th>
                            <th class="header-sorting" rowspan="1">Condición</th>
                            <th class="header-sorting" rowspan="1">Estado</th>
                            <th class="header-sorting" rowspan="1">Acciones</th>                          
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- modal: add new membership -->
<div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true" role="dialog">
    <div class="modal-dialog" role="document">
        <form class="modal-content" id="formulario" onsubmit="registrarPlan(event);">
            <input type="hidden" id="id" name="id">
            <div class="modal-header">
                <h5 class="modal-title" id="title">Agregar nueva membresia</h5>
                <button type="button" class="focus-none btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6 class="fw-bold">Datos de membresia</h6>
                <div class="row g-3">
                    <!-- agregar nueva membresia:: nombre de la membresia -->
                    <div class="form-floating col-md-6">
                        <input type="text" class="focus-none form-control" name="nombre" id="nombre" placeholder="" required>
                        <label for="nombre" class="mx-2">Nombre de membresia</label>
                    </div>
                    <!-- agregar nueva membresia:: precio de la membrecia -->
                    <div class="form-floating col-md-6">
                        <input type="text" class="focus-none form-control" name="precio_plan" id="precio_plan" placeholder="" required>
                        <label for="precio_plan" class="mx-2">Precio de membresia</label>
                    </div>
                    <!-- agregar nueva membresia:: condicion de pago -->
                    <div class="form-floating col-md-12">
                        <select class="focus-none form-select" id="condicion" name="condicion" aria-label="Floating label select example" required>
                            <option value="MENSUAL">MENSUAL</option>
                            <option value="ANUAL">ANUAL</option>
                        </select>
                        <label for="condicion" class="mx-2">Condicion de pago</label>
                    </div>
                    <!-- agregar nueva membresia:: detalles de la membresia -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="mb-2" for="descripcion">Detalles de membresia</label>
                            <textarea id="descripcion" class="focus-none form-control" name="descripcion" placeholder="Escribe aqui los detalles de la membresia" rows="4" required></textarea>
                        </div>
                    </div>
                    <div class="col-md-6 d-none">
                        <div class="form-group">
                            <label><i class="fas fa-camera"></i> Foto (Opcional)</label>
                            <input id="imagen" class="form-control" type="file" name="imagen">
                        </div>
                        <input type="hidden" id="foto_actual" name="foto_actual">
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