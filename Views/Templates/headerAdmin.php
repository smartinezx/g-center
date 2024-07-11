<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo title . ' - ' .  $data['title']; ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url; ?>Assets/vendors/iconfonts/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url; ?>Assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="<?php echo base_url; ?>Assets/vendors/css/vendor.bundle.addons.css">
    <link rel="stylesheet" href="<?php echo base_url; ?>Assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url; ?>Assets/scss/styles.css">
    <link rel="stylesheet" href="<?php echo base_url; ?>Assets/css/snackbar.min.css">

    <link href="<?php echo base_url; ?>Assets/css/jquery-ui.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?php echo base_url; ?>Assets/css/dashboard.css">
    <title><?php echo title . ' - ' .  $data['title']; ?></title>
</head>

<body class="body-wrapper">
    <!-- sidebar -->
    <div id="sidebar" class="sidebar-mini d-flex">
        <div class="container-fluid d-flex h-100 flex-md-column p-0">
            <!-- sidebar: tittle -->
            <div class="title-text d-flex align-items-center mb-5 mt-1">
                <h4 class="sidebar-title mb-0 flex-grow-1">
                    <img src="<?php echo base_url; ?>Assets/images/g-center_logo.png" alt="" width="46" height="44">
                </h4>
            </div>
            <!-- sidebar: navbar menu -->
            <nav class="main-menu flex-grow-1 flex-md-column">
                <ul class="menu-list">
                    <!-- inicio -->
                    <li>
                        <a href="<?php echo base_url . 'administracion/home'; ?>" class="m-link" data-toggle="tooltip" data-bs-placement="right" title="Inicio">
                            <img src="<?php echo base_url; ?>Assets/svg/house-door-fill.svg" alt="">
                        </a>
                    </li>
                    <!-- usuarios -->
                    <li>
                        <a href="<?php echo base_url; ?>usuarios" class="m-link" data-toggle="tooltip" data-bs-placement="right" title="Usuarios">
                            <img src="<?php echo base_url; ?>Assets/svg/person-fill-black.svg" alt="">
                        </a>
                    </li>
                    <!-- membresias -->
                    <li>
                        <a href="<?php echo base_url; ?>planes" class="m-link" data-toggle="tooltip" data-bs-placement="right" title="Membresias">
                            <img src="<?php echo base_url; ?>Assets/svg/credit-card-2-front-fill.svg" alt="">
                        </a>
                    </li>
                    <!-- miembros -->
                    <li class="active">
                        <a href="<?php echo base_url; ?>clientes" class="m-link" data-toggle="tooltip" data-bs-placement="right" title="Miembros">
                            <img src="<?php echo base_url; ?>Assets/svg/person-vcard-fill.svg" alt="">
                        </a>
                    </li>
                    <!-- pagos -->
                    <li>
                        <a href="<?php echo base_url; ?>clientes/pagos" class="m-link" data-toggle="tooltip" data-bs-placement="right" title="Pagos">
                            <img src="<?php echo base_url; ?>Assets/svg/cash-coin.svg" alt="">
                        </a>
                    </li>
                    <!-- plan -->
                    <li>
                        <a href="<?php echo base_url; ?>clientes/plan" class="m-link" data-toggle="tooltip" data-bs-placement="right" title="Plan">
                            <img src="<?php echo base_url; ?>Assets/icons/person-bounding-box.svg" alt="">
                        </a>
                    </li>
                    <!-- visitas -->
                    <li>
                        <a href="<?php echo base_url; ?>asistencias" class="m-link" data-toggle="tooltip" data-bs-placement="right" title="Visitas">
                            <img src="<?php echo base_url; ?>Assets/svg/calendar-fill.svg" alt="">
                        </a>
                    </li>
                    <!-- rutinas -->
                    <li>
                        <a href="<?php echo base_url; ?>rutinas" class="m-link" data-toggle="tooltip" data-bs-placement="right" title="Rutinas">
                            <img src="<?php echo base_url; ?>Assets/svg/card-checklist.svg" alt="">
                        </a>
                    </li>
                    <!-- entrenadores -->
                    <li>
                        <a href="<?php echo base_url; ?>entrenador" class="m-link" data-toggle="tooltip" data-bs-placement="right" title="Entrenadores">
                            <img src="<?php echo base_url; ?>Assets/svg/people-fill.svg" alt="">
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- sidebar -->

    <!-- body area -->
    <div class="wrapper">
        <!-- body area: page header -->
        <header class="page-header sticky-top px-xl-4 px-sm-2 px-0 py-lg-2 py-1">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg navbar-expand-md">
                    <!-- toggle btn -->
                    <div class="d-flex">
                        <i class="bi bi-arrow-bar-right" style="font-size: 25px;"></i>
                    </div>
                    <!-- header: header right tools -->
                    <ul class="header-right justify-content-between d-flex align-items-center p-0 mb-0 w-100">
                        <h5 class="mb-0">G-Center</h5>
                        <!-- user menu -->
                        <li>
                            <div class="dropdown mx-lg-3 mx-2">
                                <a href="" class="nav-link rounded-circle p-0">
                                    <img src="<?php echo base_url; ?>Assets/images/dashboard/roberto-h-qToVxSYXPYU-unsplash.jpg" alt="" class="avatar rounded-circle" width="">
                                </a>
                                <!-- user dropdown menu -->
                                <div class="dropdown-menu border-0 rounded-4 shadow p-0">
                                    <div class="card border-0 w240">
                                        <div class="card-body border-bottom d-flex">
                                            <img class="avatar rounded-circle" src="<?php echo base_url; ?>Assets/images/dashboard/roberto-h-qToVxSYXPYU-unsplash.jpg" alt="">
                                            <div class="flex-fill ms-3">
                                                <h6 class="card-title mb-0"><?php echo $_SESSION['nombre']; ?></h6>
                                                <span class="text-small"><?php echo $_SESSION['usuario']; ?></span>
                                            </div>
                                        </div>


                                        <div class="list-group m-2 mb-3">
                                            <a href="<?php echo base_url; ?>usuarios/perfil" class="list-group-item list-group-item-action border-0">
                                                <img src="<?php echo base_url; ?>Assets/svg/person-fill-black.svg" alt="" class="me-3">
                                                <span>Mi perfil</span>
                                            </a>

                                            <a href="<?php echo base_url; ?>administracion" class="list-group-item list-group-item-action border-0">
                                                <img src="<?php echo base_url; ?>Assets/svg/gear-fill.svg" alt="" class="me-3">
                                                <span>Configuración</span>
                                            </a>
                                        </div>

                                        <a class="btn bg-danger text-light text-uppercase rounded-top-0 " href="<?php echo base_url; ?>usuarios/salir">Cerrarsesión</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>        