<div id="myModal" class="modal fade" aria-labelledby="ModalLabel" tabindex="1" aria-hidden="true" role="dialog">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title">Agregar nuevo miembro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6 class="fw-bold">Información básica</h6>
                <form class="row g-3" id="frmCliente" onsubmit="registrarCli(event);" enctype="multipart/form-data">
                    <input type="hidden" id="id" name="id">
                    <!-- input: documento de identidad -->
                    <div class="form-floating col-md-6">
                        <input type="text" class="focus-none form-control" id="dni" name="dni" autofocus="autofocus">
                        <label for="dni" class="mx-2">Documento de identidad</label>
                    </div>
                    <!-- input: nombre completo -->
                    <div class="form-floating col-md-6">
                        <input type="text" class="focus-none form-control" id="nombre" name="nombre"
                            autofocus="autofocus">
                        <label for="nombre" class="mx-2">Nombre completo</label>
                    </div>
                    <!-- input: seleccionar imagen -->
                    <!-- <div class="col-md-4">
                        <img id="memberImage" class="rounded-circle" style="width: 130px; height: 120px;">
                    </div>
                    <div class="col-md-8 d-flex justify-content-center flex-column">
                        <label for="member__img" class="form-label fw-bolder fs-5 m-0">Selecciona una nueva imagen</label>
                        <span class="small mb-2">JPG o PNG que no exceda los 5MB</span>
                        <input class="form-control" type="file" id="memberImage" name="memberImage" accept="image/jpeg">
                    </div> -->
                    <!-- select: tipo de membresia -->
                    <div class="form-floating col-md-6">
                        <select class="form-select" id="tipo_memb" name="membresia"
                            aria-label="Floating label select example">
                            <option value="Basica">Basica</option>
                            <option value="Estandar">Estandar</option>
                            <option selected value="Premium">Premium</option>
                        </select>
                        <label for="membresia" class="mx-2">Tipo de membresia</label>
                    </div>
                    <!-- input: telefono -->
                    <div class="form-floating col-md-6">
                        <input type="text" class="focus-none form-control" id="telefono" name="telefono"
                            autofocus="autofocus">
                        <label for="telefono" class="mx-2">Telefono</label>
                    </div>
                    <!-- input: direccion -->
                    <div class="form-floating col-md-12">
                        <input type="text" class="focus-none form-control" id="direccion" name="direccion"
                            autofocus="autofocus">
                        <label for="direccion" class="mx-2">Direccion</label>
                    </div>
                    <!-- modal footer -->
                    <div class="d-flex justify-content-end pt2">
                        <button class="btn btn-secondary me-1" type="button" data-dismiss="modal">Cancelar</button>
                        <button class="btn btn-primary" type="submit" id="btnAccion">Agregar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>