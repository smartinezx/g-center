<?php include "Views/Templates/headerAdmin.php"; ?>

<!-- body area: mini navbar (breadcrumb)-->
<div class="px-xl-4 px-sm-2 px-0 py-3">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col">
                <ol class="breadcrumb border-0">
                    <li class="breadcrumb-item">
                        <a class="text-secondary" href="#">Inicio</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- body area: page body -->
<div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0 mt-lg-3">
    <div class="container-fluid">
        <!-- card img -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="welcome-card rounded-3">
                    <img src="<?php echo base_url; ?>Assets/images/dashboard/victor-freitas-JbI04nYfaJk-unsplash.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- ========== card widget ========== -->
        <div class="row mb-4">
            <!-- card widget: miembros -->
            <div class="col-xl-3 col-lg-6">
                <div class="card mb-4 mb-xl-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Miembros</h5>
                                <span class="h2 font-weight-bold mb-0"><?php echo $data['clientes']['total']; ?></span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                    <img src="<?php echo base_url; ?>Assets/svg/person-fill-white.svg" alt="">
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="card-footer bg-light border-light">
                        <p class="mb-0 text-muted text-sm text-uppercase">
                            <a href="<?php echo base_url; ?>clientes" class="card-text text-nowrap">Ver mas <i class="bi bi-arrow-right"></i></a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- card widget: usuarios -->
            <div class="col-xl-3 col-lg-6">
                <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Miembros</h5>
                                <span class="h2 font-weight-bold mb-0"><?php echo $data['usuarios']['total']; ?></span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                    <img src="<?php echo base_url; ?>Assets/svg/person-vcard-fill-white.svg" alt="">
                                </div>
                            </div>
                        </div>                       
                    </div>
                    <div class="card-footer bg-light border-light">
                        <p class="mb-0 text-muted text-sm text-uppercase">
                            <a href="<?php echo base_url; ?>usuarios" class="card-text text-nowrap">Ver mas <i class="bi bi-arrow-right"></i></a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- card widget: pagos -->
            <div class="col-xl-3 col-lg-6">
                <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Membresias</h5>
                                <span class="h2 font-weight-bold mb-0"><?php echo $data['planes']['total']; ?></span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                                    <img src="<?php echo base_url; ?>Assets/svg/credit-card-2-front-fill-white.svg" alt="">
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div class="card-footer bg-light border-light">
                        <p class="mb-0 text-muted text-sm text-uppercase">
                            <a href="<?php echo base_url; ?>planes" class="card-text text-nowrap">Ver mas <i class="bi bi-arrow-right"></i></a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- card widget: visitas -->
            <div class="col-xl-3 col-lg-6">
                <div class="card card-stats mb-4 mb-xl-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Entrenadores</h5>
                                <span class="h2 font-weight-bold mb-0"><?php echo $data['entrenador']['total']; ?></span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                    <img src="<?php echo base_url; ?>Assets/svg/people-fill-white.svg" alt="">
                                </div>
                            </div>
                        </div>                       
                    </div>
                    <div class="card-footer bg-light border-light">
                        <p class="mb-0 text-muted text-sm text-uppercase">
                            <a href="<?php echo base_url; ?>entrenador" class="card-text text-nowrap">Ver mas <i class="bi bi-arrow-right"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-3 mb-5 row-deck">
            <!-- card: miembros recientes -->
            <div class="col-lg-12 col-md-12">
                <div class="row g-3">
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h6>Reporte grafico de ingreso por mes
                                        <select id="year" class="float-end" onchange="actualizarGrafico()">
                                            <?php
                                            $fecha = date('Y');
                                            for ($i = 2021; $i <= $fecha; $i++) { ?>
                                                <option value="<?php echo $i; ?>" <?php echo ($i == $fecha) ? 'selected' : ''; ?>><?php echo $i; ?></option>
                                            <?php } ?>
                                        </select>
                                    </h6>
                                </div>
                                <canvas id="ProductosVendidos"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h6>Ingreso por día</h6>
                                </div>
                                <canvas id="ventaDia"></canvas>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php include "Views/Templates/footer.php"; ?>