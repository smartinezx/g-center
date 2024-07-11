<?php include "Views/Templates/headerAdmin.php"; ?>

<!-- body area: mini navbar (breadcrumb)-->
<div class="px-xl-4 px-sm-2 px-0 py-3">
    <div class="container-fluid">
        <div class="row g-3 align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb border-0">
                    <li class="breadcrumb-item"><a href="<?php echo base_url; ?>administracion/home">Inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Configuración</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- body area: page body -->
<div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0 mt-lg-3">
    <div class="container-fluid">
        <div class="row g-3 mb-4">
            <form id="frmEmpresa" onsubmit="modificarEmpresa(event)" autocomplete="off">
                <div class="card mb-4">
                    <div class="card-header bg-transparent p-3">
                        <h5>Nueva imagen</h5>
                    </div>
                    <div class="card-body p-4">
                        <div class="row mx-2 ">
                            <div class="col-auto">
                                <div class="img-account-profile rounded-4">
                                    <img class="img-thumbnail" src="<?php echo base_url . 'Assets/images/g-center_logo.png'; ?>" alt="G-CENTER LOGO" width="150">
                                    <!-- profile picture upload button-->
                                    <div class="file-input">
                                        <input type="file" class="form-control" id="imagen" name="imagen">
                                        <label for="imagen" class="fas fa-pencil-alt shadow text-muted"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-between align-items-center">
                                <div class="col-md-7">
                                    <span class="h3 font-weight-bold mb-0">Selecciona una imagen</span>
                                    <h6 class="small card-title text-muted mt-2 mb-0">JPG o PNG que no
                                        exceda los 5MB</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header bg-transparent p-3">
                        <h5>Datos del gimnasio</h5>
                    </div>
                    <div class="card-body">
                        <div class="row p-4">
                            <div class="col-md-3">
                                <div class="form-group mb-3">
                                    <input id="id" class="form-control" type="hidden" name="id" value="<?php echo $data['empresa']['id']; ?>" required>
                                    <label class="mb-2" for="ruc"><i class="fas fa-id-card"></i> Ruc</label>
                                    <input id="ruc" class="form-control" type="number" name="ruc" placeholder="Ruc" value="<?php echo $data['empresa']['ruc'] ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="mb-2" for="nombre"><i class="fas fa-list"></i>Nombre del gimnasio</label>
                                    <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Nombre del gimnasio" value="<?php echo $data['empresa']['nombre'] ?>" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group mb-3">
                                    <label class="mb-2" for="telefono"><i class="fas fa-phone"></i>Número de contacto</label>
                                    <input id="telefono" class="form-control" type="text" name="telefono" placeholder="Teléfono" value="<?php echo $data['empresa']['telefono'] ?>" required>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group mb-3">
                                    <label class="mb-2" for="correo"><i class="fas fa-envelope"></i>Correo de contacto</label>
                                    <input id="correo" class="form-control" type="text" name="correo" placeholder="Correo Electrónico" value="<?php echo $data['empresa']['correo'] ?>" required>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group mb-3">
                                    <label class="mb-2" for="direccion"><i class="fas fa-home"></i>Dirección</label>
                                    <input id="direccion" class="form-control" type="text" name="direccion" placeholder="Dirección" value="<?php echo $data['empresa']['direccion'] ?>" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group mb-3">
                                    <label class="mb-2" for="limite"><i class="fas fa-home"></i>Limite</label>
                                    <input id="limite" class="form-control" type="text" name="limite" placeholder="Lmite" value="<?php echo $data['empresa']['limite'] ?>" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="mb-2" for="mensaje">Mensaje</label>
                                    <textarea id="mensaje" class="form-control" name="mensaje" rows="3"><?php echo $data['empresa']['mensaje'] ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 my-3">
                    <div class="input-group justify-content-end mb-2">
                        <button class="btn btn-primary" type="submit" id="btnAccion">Guardar cambios</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include "Views/Templates/footer.php"; ?>