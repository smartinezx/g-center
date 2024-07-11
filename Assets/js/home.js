//events section - mouseEvent
document.addEventListener("DOMContentLoaded", function () {
  function applyStyles(
    imgElement,
    eventBgElement,
    eventNameElement,
    descriptionElements
  ) {
    imgElement.style.opacity = "1";
    imgElement.style.transform =
      "translate3d(1em, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)";
    imgElement.style.transformStyle = "preserve-3d";
    imgElement.style.transition = "opacity 0.5s, transform 0.5s";

    eventBgElement.style.height = "103%";
    eventNameElement.style.transform =
      "translate3d(4%, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)";

    for (var i = 0; i < descriptionElements.length; i++) {
      descriptionElements[i].style.opacity = "1";
    }
  }

  function resetStyles(
    imgElement,
    eventBgElement,
    eventNameElement,
    descriptionElements
  ) {
    imgElement.style.opacity = "";
    imgElement.style.transform = "";
    imgElement.style.transformStyle = "";
    imgElement.style.transition = "";

    eventBgElement.style.height = "";
    eventNameElement.style.transform = "";

    for (var i = 0; i < descriptionElements.length; i++) {
      descriptionElements[i].style.opacity = "";
    }
  }

  var event1Element = document.getElementById("event1");
  var img1Element = document.querySelector(".img1");
  var eventBg1Element = document.querySelector(".event-bg1");
  var eventName1Element = event1Element.querySelector(".event-name-txt._1");
  var description1Elements = event1Element.querySelectorAll(
    ".description-wrapper"
  );

  var event2Element = document.getElementById("event2");
  var img2Element = document.querySelector(".img2");
  var eventBg2Element = document.querySelector(".event-bg2");
  var eventName2Element = event2Element.querySelector(".event-name-txt._2");
  var description2Elements = event2Element.querySelectorAll(
    ".description-wrapper"
  );

  var event3Element = document.getElementById("event3");
  var img3Element = document.querySelector(".img3");
  var eventBg3Element = document.querySelector(".event-bg3");
  var eventName3Element = event3Element.querySelector(".event-name-txt._3");
  var description3Elements = event3Element.querySelectorAll(
    ".description-wrapper"
  );

  var event4Element = document.getElementById("event4");
  var img4Element = document.querySelector(".img4");
  var eventBg4Element = document.querySelector(".event-bg4");
  var eventName4Element = event4Element.querySelector(".event-name-txt._4");
  var description4Elements = event4Element.querySelectorAll(
    ".description-wrapper"
  );

  var event5Element = document.getElementById("event5");
  var img5Element = document.querySelector(".img5");
  var eventBg5Element = document.querySelector(".event-bg5");
  var eventName5Element = event5Element.querySelector(".event-name-txt._5");
  var description5Elements = event5Element.querySelectorAll(
    ".description-wrapper"
  );

  var event6Element = document.getElementById("event6");
  var img6Element = document.querySelector(".img6");
  var eventBg6Element = document.querySelector(".event-bg6");
  var eventName6Element = event6Element.querySelector(".event-name-txt._6");
  var description6Elements = event6Element.querySelectorAll(
    ".description-wrapper"
  );

  var event7Element = document.getElementById("event7");
  var img7Element = document.querySelector(".img7");
  var eventBg7Element = document.querySelector(".event-bg7");
  var eventName7Element = event7Element.querySelector(".event-name-txt._7");
  var description7Elements = event7Element.querySelectorAll(
    ".description-wrapper"
  );

  var event8Element = document.getElementById("event8");
  var img8Element = document.querySelector(".img8");
  var eventBg8Element = document.querySelector(".event-bg8");
  var eventName8Element = event8Element.querySelector(".event-name-txt._8");
  var description8Elements = event8Element.querySelectorAll(
    ".description-wrapper"
  );

  event1Element.addEventListener("mouseenter", function () {
    applyStyles(
      img1Element,
      eventBg1Element,
      eventName1Element,
      description1Elements
    );
  });

  event1Element.addEventListener("mouseleave", function () {
    resetStyles(
      img1Element,
      eventBg1Element,
      eventName1Element,
      description1Elements
    );
  });

  event2Element.addEventListener("mouseenter", function () {
    applyStyles(
      img2Element,
      eventBg2Element,
      eventName2Element,
      description2Elements
    );
  });

  event2Element.addEventListener("mouseleave", function () {
    resetStyles(
      img2Element,
      eventBg2Element,
      eventName2Element,
      description2Elements
    );
  });

  event3Element.addEventListener("mouseenter", function () {
    applyStyles(
      img3Element,
      eventBg3Element,
      eventName3Element,
      description3Elements
    );
  });

  event3Element.addEventListener("mouseleave", function () {
    resetStyles(
      img3Element,
      eventBg3Element,
      eventName3Element,
      description3Elements
    );
  });

  event4Element.addEventListener("mouseenter", function () {
    applyStyles(
      img4Element,
      eventBg4Element,
      eventName4Element,
      description4Elements
    );
  });

  event4Element.addEventListener("mouseleave", function () {
    resetStyles(
      img4Element,
      eventBg4Element,
      eventName4Element,
      description4Elements
    );
  });

  event5Element.addEventListener("mouseenter", function () {
    applyStyles(
      img5Element,
      eventBg5Element,
      eventName5Element,
      description5Elements
    );
  });

  event5Element.addEventListener("mouseleave", function () {
    resetStyles(
      img5Element,
      eventBg5Element,
      eventName5Element,
      description5Elements
    );
  });

  event6Element.addEventListener("mouseenter", function () {
    applyStyles(
      img6Element,
      eventBg6Element,
      eventName6Element,
      description6Elements
    );
  });

  event6Element.addEventListener("mouseleave", function () {
    resetStyles(
      img6Element,
      eventBg6Element,
      eventName6Element,
      description6Elements
    );
  });

  event7Element.addEventListener("mouseenter", function () {
    applyStyles(
      img7Element,
      eventBg7Element,
      eventName7Element,
      description7Elements
    );
  });

  event7Element.addEventListener("mouseleave", function () {
    resetStyles(
      img7Element,
      eventBg7Element,
      eventName7Element,
      description7Elements
    );
  });

  event8Element.addEventListener("mouseenter", function () {
    applyStyles(
      img8Element,
      eventBg8Element,
      eventName8Element,
      description8Elements
    );
  });

  event8Element.addEventListener("mouseleave", function () {
    resetStyles(
      img8Element,
      eventBg8Element,
      eventName8Element,
      description8Elements
    );
  });
});

/* document.addEventListener("DOMContentLoaded", function () {
  var trxElement = document.getElementById("trx");
  var flyElement = document.getElementById("fly");
  var imgWrapper = document.getElementById("imgWrapper");
  var holaElement = document.getElementById("hola");
  var descriptionWrappers = document.querySelectorAll(".description-wrapper");
  var eventBgElement = document.getElementById("event-bg");
  var imgWrapperImg2 = document.querySelector("#imgWrapper.imgWrapper.img2");

  // Función para restablecer estilos
  function resetStyles() {
    imgWrapper.style.opacity = 0;
    imgWrapper.style.transform =
      "translate3d(0em, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)";
    holaElement.style.transform =
      "translate3d(0%, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)";
    descriptionWrappers.forEach(function (wrapper) {
      wrapper.style.opacity = 0;
    });
    eventBgElement.style.height = "0%";
    hideImg2();
  }

  // Función para mostrar imgWrapper img2 al pasar el cursor
  function showImg2() {
    imgWrapperImg2.style.opacity = 1;
    imgWrapperImg2.style.visibility = "visible";
  }

  // Función para ocultar imgWrapper img2 al quitar el cursor
  function hideImg2() {
    imgWrapperImg2.style.opacity = 0;
    imgWrapperImg2.style.visibility = "hidden";
  }

  // Llamada a la función para restablecer estilos
  resetStyles();

  // Agregar eventos de mouseenter y mouseleave a trxElement
  trxElement.addEventListener("mouseenter", function () {
    imgWrapper.style.opacity = 1;
    imgWrapper.style.transform =
      "translate3d(1em, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)";
    holaElement.style.transform =
      "translate3d(4%, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)";
    descriptionWrappers.forEach(function (wrapper) {
      wrapper.style.opacity = 1;
    });
    eventBgElement.style.height = "103%";
  });

  trxElement.addEventListener("mouseleave", function () {
    resetStyles(); // Llamar a la función para restablecer estilos
  });

  // Agregar eventos de mouseenter y mouseleave a flyElement
  flyElement.addEventListener("mouseenter", function () {
    showImg2();
  });

  flyElement.addEventListener("mouseleave", function () {
    hideImg2();
  });
}); */

document.addEventListener("DOMContentLoaded", function () {
  const openMenuButton = document.getElementById("open-menu");
  const closeMenuButton = document.getElementById("close-menu");
  const fullScreenMenu = document.getElementById("full-screen-menu");

  openMenuButton.addEventListener("click", function () {
    fullScreenMenu.style.display = "grid";
  });

  closeMenuButton.addEventListener("click", function () {
    fullScreenMenu.style.display = "none";
  });
});

// modal: select your plan
function abrirModal() {
  var modal = document.getElementById("pricing-modal");
  modal.style.display = "grid";
  setTimeout(function () {
    modal.style.opacity = "1";
  }, 10);
  document.body.style.overflow = "hidden";
}

function cerrarModal() {
  var modal = document.getElementById("pricing-modal");
  modal.style.opacity = "0";
  setTimeout(function () {
    modal.style.display = "none";
  }, 300);
  document.body.style.overflow = "auto";
}

document.addEventListener("keydown", function (event) {
  if (event.key === "Escape") {
    cerrarModal();
  }
});

// Obtén todos los elementos con el mismo ID "modal-pricing-open"
const elementosAbrirModal = document.querySelectorAll("#modal-pricing-open");

// Agrega un evento clic a cada uno de los elementos
elementosAbrirModal.forEach((elemento) => {
  elemento.addEventListener("click", abrirModal);
});

document
  .getElementById("modal-pricing-close")
  .addEventListener("click", cerrarModal);
document
  .getElementById("modal-pricing-close-1")
  .addEventListener("click", cerrarModal);

/* 
document.getElementById('dropbtn').addEventListener('click', function () {
    var dropdown = document.getElementById('dropdown-wrapper');
    dropdown.style.display = (dropdown.style.display === 'none' || dropdown.style.display === '') ? 'block' : 'none';
});

// También puedes cerrar el formulario cuando se hace clic fuera de él
document.addEventListener('click', function (event) {
    var dropdown = document.getElementById('dropdown-wrapper');
    if (!event.target.matches('#dropbtn') && !event.target.matches('#dropdown-wrapper')) {
        dropdown.style.display = 'none';
    }
});

// Agrega el código necesario para manejar el envío del formulario, por ejemplo, mediante AJAX
document.getElementById('login-form').addEventListener('submit', function (event) {
    event.preventDefault();
    // Agrega el código para procesar el formulario, por ejemplo, con AJAX
}); */
