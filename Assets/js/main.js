const botones = document.querySelectorAll(".bEliminar");

botones.forEach(boton => {

    boton.addEventListener("click", function(){
        const id = this.dataset.id;

        const confirm = window.confirm("¿Deseas eliminar al miembro " + id + "?");

        if(confirm){
            // solicitud AJAX
            httpRequest("http://localhost/gcenter/miembros/eliminarMiembro/" + id, function(){
                //console.log(this.responseText);
                document.querySelector("#respuesta").innerHTML = this.responseText;

                const tbody = document.querySelector("#tbody-miembros");
                const fila  = document.querySelector("#fila-" + id);

                tbody.removeChild(fila);
            });
        }

    });
});

function httpRequest(url, callback){
    const http = new XMLHttpRequest();
    http.open("GET", url);
    http.send();

    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            callback.apply(http);
        }
    }
}