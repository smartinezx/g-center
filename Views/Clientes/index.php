<?php include "Views/Templates/headerAdmin.php"; ?>

<!-- body area: mini navbar (breadcrumb)-->
<div class="px-xl-4 px-sm-2 px-0 py-3">
    <div class="container-fluid">
        <div class="row g-3 align-items-center">
            <nav aria-label="breadcrumb border-0">
                <ol class="breadcrumb border-0">
                    <li class="breadcrumb-item"><a href="<?php echo base_url; ?>administracion/home">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Miembros</li>
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
                    <button class="btn btn-primary" type="button" onclick="frmCliente();">
                        <i class="fas fa-plus me-2"></i>
                        Nuevo miembro
                    </button>                   
                </div>
                <?php include("miembrosModal.php"); ?>
            </div>

            <!-- member content: member table -->
            <div class="col-12">
                <table id="tblClientes" class="table dataTable custom-table align-middle table-bordered mb-0">
                    <thead>
                        <tr>
                            <th class="header-sorting rounded-start" rowspan="1">#</th>
                            <th class="header-sorting" rowspan="1">Documento</th>
                            <th class="header-sorting" rowspan="1">Nombre completo</th>
                            <th class="header-sorting" rowspan="1">Telefono</th>
                            <th class="header-sorting" rowspan="1">Direccion</th>
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

<?php include "Views/Templates/footer.php"; ?>