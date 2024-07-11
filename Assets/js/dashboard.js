document.addEventListener('DOMContentLoaded', function () {
    let editaModal = document.getElementById('edit_members');
    let eliminaModal = document.getElementById('confirmDeleteModal')


    editaModal.addEventListener('hidden.bs.modal', event => {
        editaModal.querySelector('.modal-body #nombre').value = "";
        editaModal.querySelector('.modal-body #apellido').value = "";
        editaModal.querySelector('.modal-body #tipo_memb').value = "";
        editaModal.querySelector('.modal-body #fechaInicio').value = "";
        editaModal.querySelector('.modal-body #fechaFin').value = "";
        editaModal.querySelector('.modal-body #estado').value = "";
        editaModal.querySelector('.modal-body #memberImage').src = "";
        editaModal.querySelector('.modal-body #member__img').value = ""
    });

    editaModal.addEventListener('shown.bs.modal', event => {
        let button = event.relatedTarget;
        let id = button.getAttribute('data-bs-id');

        let inputId = editaModal.querySelector('.modal-body #id');
        let inputNombre = editaModal.querySelector('.modal-body #nombre');
        let inputApellido = editaModal.querySelector('.modal-body #apellido');
        let selectMembresia = editaModal.querySelector('.modal-body #tipo_memb');
        let inputFechaInicio = editaModal.querySelector('.modal-body #fechaInicio');
        let inputFechaFin = editaModal.querySelector('.modal-body #fechaFin');
        let selectEstado = editaModal.querySelector('.modal-body #estado');
        let imageProfile = editaModal.querySelector('.modal-body #memberImage');

        let url = "../../model/editar/getMiembro.php";
        let formData = new FormData();
        formData.append('id', id);

        fetch(url, {
            method: "POST",
            body: formData,
            headers: {
                'Accept': 'application/json',
            }
        })
            .then(response => response.json())
            .then(data => {
                inputId.value = data.id;
                inputNombre.value = data.nombre;
                inputApellido.value = data.apellido
                selectMembresia.value = data.membresia;
                inputFechaInicio.value = data.inic_membresia;
                inputFechaFin.value = data.fin_membresia;
                selectEstado.value = data.estado;
                imageProfile.src = '<?= $dir ?>' + data.id + '.jpg';
            })
            .catch(err => console.error(err));
    });

    eliminaModal.addEventListener('shown.bs.modal', event => {
        let button = event.relatedTarget;
        let id = button.getAttribute('data-bs-id');
        eliminaModal.querySelector('.modal-footer #id').value = id;
    });
});