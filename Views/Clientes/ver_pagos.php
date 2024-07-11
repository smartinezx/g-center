<?php include "Views/Templates/headerAdmin.php"; ?>

<!-- body area: mini navbar (breadcrumb)-->
<div class="px-xl-4 px-sm-2 px-0 py-3">
    <div class="container-fluid">
        <div class="row g-3 align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb border-0">
                    <li class="breadcrumb-item"><a href="<?php echo base_url; ?>administracion/home">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url; ?>clientes/plan">Plan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Ver pagos</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- body area: page body -->
<div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0 mt-lg-3">
    <div class="container-fluid">

        <div class="row g-3 mb-4">
            <h4 class="mb-3">Historial de pagos</h4>
            <div class="col-12">                
                <table id="tbl" class="table dataTable custom-table align-middle table-bordered mb-0" style="width: 100%;">
                    <thead>
                        <tr>
                            <th class="header-sorting rounded-start" rowspan="1">#</th>
                            <th class="header-sorting" rowspan="1">Miembro</th>
                            <th class="header-sorting" rowspan="1">Membresia</th>
                            <th class="header-sorting" rowspan="1">Precio</th>
                            <th class="header-sorting" rowspan="1">Fecha de pago</th>
                            <th class="header-sorting" rowspan="1">Hora</th>
                            <th class="header-sorting" rowspan="1">Mes y Año</th>
                            <th class="header-sorting rounded-end" rowspan="1">Reporte</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['pagos'] as $row) { ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['nombre']; ?></td>
                                <td><?php echo $row['plan']; ?></td>
                                <td><?php echo $row['precio_plan']; ?></td>
                                <td><?php echo $row['fecha']; ?></td>
                                <td><?php echo $row['hora']; ?></td>
                                <td><?php echo date("M.Y", strtotime($row['fecha'])); ?></td>
                                <td><a class="btn btn-danger" target="_blank" href="<?php echo base_url; ?>clientes/pdfPagos/<?php echo $row['id_cliente']; ?>"><i class="fas fa-file-pdf"></i></a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include "Views/Templates/footer.php"; ?>