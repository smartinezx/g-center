<?php require_once 'Views/Templates/headerHome.php'; ?>

<!-- 
        main sections
     -->
<main class="main">
    <!-- 
            hero section
         -->
    <section id="home" class="hero-section">
        <div class="overlay-text">
            <div class="hero-section-container">
                <h2 class="overlay-text__title">Transforma tu cuerpo, eleva tu mente</h2>
                <div class="overlay-text__rte">
                    <p>G-center</p>
                </div>
            </div>
        </div>
        <div class="video-container">
            <video autoplay muted loop src="<?php echo base_url; ?>Assets/video/training-compilation_v.mp4"></video>
        </div>
    </section>

    <!-- 
        about section
     -->
    <section id="about" class="card-list__wrapper padding-global">
        <div class="card-lists">
            <div class="card-list__intro">
                <h2 class="card-list__intro-title">Sobre Nosotros</h2>
                <p class="card-list__intro-text">Nuestra misión es proporcionar un ambiente inspirador y motivador donde nuestros miembros puedan alcanzar sus metas de salud y bienestar.</p>
                <p class="card-list__intro-text">En G-center estamos dedicados a su éxito y bienestar. Únase a nosotros en nuestro viaje hacia una vida más saludable y activa.</p>
            </div>
            <div class="card-list__cards">
                <!-- card #1 -->
                <div class="card-list__card" style="translate: none; rotate: none; scale: none; transform: translate3d(0px, 0px, 0px);">
                    <div class="card-list__card-content">
                        <h3 class="card-list__card-title">Enfoque Holístico</h3>
                        <p class="card-list__card-text">Creemos en abordar la salud y el fitness de manera integral, considerando tanto el cuerpo como la mente. Nuestros programas están diseñados para mejorar la condición física, la nutrición y el bienestar emocional de nuestros miembros.</p>
                    </div>
                </div>
                <!-- card #2 -->
                <div class="card-list__card" style="translate: none; rotate: none; scale: none; transform: translate3d(0px, 0px, 0px);">
                    <div class="card-list__card-content">
                        <h3 class="card-list__card-title">Personalización Integral</h3>
                        <p class="card-list__card-text">Reconocemos que cada individuo tiene necesidades. Por eso, ofrecemos clases, equipos y servicios para satisfacer las diversas preferencias y niveles de condición física de nuestros miembros.</p>
                    </div>
                </div>
                <!-- card #3 -->
                <div class="card-list__card" style="translate: none; rotate: none; scale: none; transform: translate3d(0px, 0px, 0px);">
                    <div class="card-list__card-content">
                        <h3 class="card-list__card-title">Experticia Profesional</h3>
                        <p class="card-list__card-text">Nuestro equipo de entrenadores están disponibles para ofrecer orientación experta, apoyo y motivación en cada paso del camino.</p>
                    </div>
                </div>
                <!-- card #4 -->
                <div class="card-list__card" style="translate: none; rotate: none; scale: none; transform: translate3d(0px, 0px, 0px);">
                    <div class="card-list__card-content">
                        <h3 class="card-list__card-title">Servicio excepcional</h3>
                        <p class="card-list__card-text">Estamos aquí para escuchar, responder preguntas y garantizar que su experiencia en nuestro gimnasio sea positiva y gratificante.</p>
                    </div>
                </div>
                <!-- card #5 -->
                <div class="card-list__card" style="translate: none; rotate: none; scale: none; transform: translate3d(0px, 0px, 0px);">
                    <div class="card-list__card-content">
                        <h3 class="card-list__card-title">Honestidad</h3>
                        <p class="card-list__card-text">Nos comprometemos a ser transparentes y honestos en todas nuestras interacciones, brindándole la información y el apoyo que necesita para tomar decisiones informadas.</p>
                    </div>
                </div>
                <!-- card #6 -->
                <div class="card-list__card" style="translate: none; rotate: none; scale: none; transform: translate3d(0px, 0px, 0px);">
                    <div class="card-list__card-content">
                        <h3 class="card-list__card-title">Comunidad inclusiva</h3>
                        <p class="card-list__card-text">Fomentamos un ambiente acogedor y de apoyo donde todos se sientan bienvenidos y valorados.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 
        pricing section
    -->
    <div class="pricing-box-container" id="pricing">
        <div class="cards">
            <div class="card shadow">
                <ul class="card-list">
                    <li>Básico</li>
                    <li id="basic" class="price">&dollar;60.000</li>
                    <li>Entrenamiento sin asesoria</li>
                    <a href="<?php echo base_url; ?>pasarela/basico" class="btn">Obtener basico</a>
                    <!-- <li id="modal-pricing-open" class="btn">Obtener básico</li> -->
                    <li class="bottom-bar--dark"><img src="<?php echo base_url; ?>Assets/icons/check-circle-fill-black.svg">Acceso a todas las zonas</li>
                    <li class="bottom-bar--dark"><img src="<?php echo base_url; ?>Assets/icons/check-circle-fill-black.svg">Plan de entrenamiento</li>
                    <li class="bottom-bar--dark"><img src="<?php echo base_url; ?>Assets/icons/check-circle-fill-black.svg">Sin cargo por cancelación</li>
                    <li class="bottom-bar--dark"><img src="<?php echo base_url; ?>Assets/icons/x-circle-fill.svg">Seguimiento de objetivos </li>
                    <li class="bottom-bar--dark"><img src="<?php echo base_url; ?>Assets/icons/x-circle-fill.svg">Valoración físico funcional</li>
                    <li class="bottom-bar--dark"><img src="<?php echo base_url; ?>Assets/icons/x-circle-fill.svg">Entrenador personalizado</li>
                    <li class="bottom-bar--dark"><img src="<?php echo base_url; ?>Assets/icons/x-circle-fill.svg">Asesoría básica nutricional</li>
                    <li class="card-paragraph">Dirigido a usuarios experimentados en entrenamiento físico</li>
                </ul>
            </div>
            <div class="card active">
                <ul class="card-list">
                    <li>Premium</li>
                    <li id="basic" class="price">&dollar;250.000</li>
                    <li>Entrenamiento personalizado</li>
                    <a href="<?php echo base_url; ?>pasarela/premium" class="btn active-btn">Obtener premium</a>
                    <!-- <li id="modal-pricing-open" class="btn active-btn">Obtener premium</li> -->
                    <li class="bottom-bar--light"><img src="<?php echo base_url; ?>Assets/icons/check-circle-fill-withe.svg">Acceso a todas las zonas</li>
                    <li class="bottom-bar--light"><img src="<?php echo base_url; ?>Assets/icons/check-circle-fill-withe.svg">Plan de entrenamiento</li>
                    <li class="bottom-bar--light"><img src="<?php echo base_url; ?>Assets/icons/check-circle-fill-withe.svg">Sin cargo por cancelación</li>
                    <li class="bottom-bar--light"><img src="<?php echo base_url; ?>Assets/icons/check-circle-fill-withe.svg">Seguimiento de objetivos</li>
                    <li class="bottom-bar--light"><img src="<?php echo base_url; ?>Assets/icons/check-circle-fill-withe.svg">Valoración físico funcional</li>
                    <li class="bottom-bar--light"><img src="<?php echo base_url; ?>Assets/icons/check-circle-fill-withe.svg">Entrenador personalizado</li>
                    <li class="bottom-bar--light"><img src="<?php echo base_url; ?>Assets/icons/check-circle-fill-withe.svg">Asesoría básica nutricional</li>
                    <li class="card-paragraph">Dirigido a usuarios que deseen prontos resultados y una atención mas personal</li>
                </ul>
            </div>
            <div class="card shadow">
                <ul class="card-list">
                    <li>Estándar</li>
                    <li id="basic" class="price">&dollar;75.000</li>
                    <li>Entrenamiento semipersonalizado</li>
                    <a href="<?php echo base_url; ?>pasarela/estandar" class="btn">Obtener estandar</a>
                    <!-- <li id="modal-pricing-open" class="btn">Obtener estándar</li> -->
                    <li class="bottom-bar--dark"><img src="<?php echo base_url; ?>Assets/icons/check-circle-fill-black.svg">Acceso a todas las zonas</li>
                    <li class="bottom-bar--dark"><img src="<?php echo base_url; ?>Assets/icons/check-circle-fill-black.svg">Plan de entrenamiento</li>
                    <li class="bottom-bar--dark"><img src="<?php echo base_url; ?>Assets/icons/check-circle-fill-black.svg">Sin cargo por cancelación</li>
                    <li class="bottom-bar--dark"><img src="<?php echo base_url; ?>Assets/icons/check-circle-fill-black.svg">Seguimiento de objetivos</li>
                    <li class="bottom-bar--dark"><img src="<?php echo base_url; ?>Assets/icons/check-circle-fill-black.svg">Valoración físico funcional</li>
                    <li class="bottom-bar--dark"><img src="<?php echo base_url; ?>/Assets/icons/x-circle-fill.svg">Entrenador personalizado</li>
                    <li class="bottom-bar--dark"><img src="<?php echo base_url; ?>/Assets/icons/x-circle-fill.svg">Asesoría básica nutricional</li>
                    <li class="card-paragraph">Dirigido a usuarios sin experiencia en entrenamiento físico</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- 
        seccion de instalaciones
     -->
    <section id="facilities" class="new-home-v4-experience">
        <div class="new-home-v4-section-title">
            <div class="new-home-v4-section-title__content">
                <h2 class="new-home-v4-section-title__title">
                    Nuestras instalaciones en <span>G-center:</span> ofrecen equipos de última generación y espacios amplios para que puedas disfrutar de tus entrenamientos con comodidad.
                </h2>
            </div>
        </div>
        <ul class="new-home-v4-experience-list">
            <li class="new-home-v4-experience-item">
                <figure class="new-home-v4-experience-figure">
                    <img src="<?php echo base_url; ?>Assets/images/anastase-maragos-YVz1LxVJqoA-unsplash.jpg" alt="" loading="lazy">
                    <figcaption class="product-info">
                        <div class="product-block__title">Equipos de alto nivel</div>
                    </figcaption>
                </figure>
            </li>
            <li class="new-home-v4-experience-item">
                <figure class="new-home-v4-experience-figure">
                    <img src="<?php echo base_url; ?>Assets/images/anastase-maragos-YVz1LxVJqoA-unsplash.jpg" alt="" loading="lazy">
                    <figcaption class="product-info">
                        <div class="product-block__title">Equipos de alto nivel</div>
                    </figcaption>
                </figure>
            </li>
            <li class="new-home-v4-experience-item">
                <figure class="new-home-v4-experience-figure">
                    <img src="<?php echo base_url; ?>Assets/images/anastase-maragos-YVz1LxVJqoA-unsplash.jpg" alt="" loading="lazy">
                    <figcaption class="product-info">
                        <div class="product-block__title">Equipos de alto nivel</div>
                    </figcaption>
                </figure>
            </li>
            <li class="new-home-v4-experience-item">
                <figure class="new-home-v4-experience-figure">
                    <img src="<?php echo base_url; ?>Assets/images/anastase-maragos-YVz1LxVJqoA-unsplash.jpg" alt="" loading="lazy">
                    <figcaption class="product-info">
                        <div class="product-block__title">Equipos de alto nivel</div>
                    </figcaption>
                </figure>
            </li>
        </ul>    
    </section>

    <!-- 
        eventos y clases
     -->
    <section id="classes" class="events-sec">
        <div class="container-wrapper-events">
            <div class="events-content-wrapper">
                <div class="events-left-column">
                    <!-- bodycombat -->
                    <figure class="imgWrapper img1">
                        <img src="Assets/images/nuevos-gimnasios.webp" alt="" loading="lazy" class="img-event">
                        <ul class="schedule-list text-utilities">
                            <li class="schedule-item">
                                <span class="schedule-txt">lunes</span>
                                <span class="schedule-txt-small">05:00 pm</span>
                            </li>
                            <li class="schedule-item">
                                <span class="schedule-txt">miercoles</span>
                                <span class="schedule-txt-small">06:00 pm</span>
                            </li>
                            <li class="schedule-item">
                                <span class="schedule-txt">viernes</span>
                                <span class="schedule-txt-small">06:00 pm</span>
                            </li>
                        </ul>
                    </figure>
                    <!-- levantamiento de pesas -->
                    <figure class="imgWrapper img2">
                        <img src="Assets/images/SF_NOV19_BLOG_DIA_04.webp" alt="" loading="lazy" class="img-event">
                        <ul class="schedule-list text-utilities">
                            <li class="schedule-item">
                                <span class="schedule-txt">mayo</span>
                                <span class="schedule-txt-small">sabado</span>
                            </li>
                            <li class="schedule-item">
                                <span class="schedule-txt">noviembre</span>
                                <span class="schedule-txt-small">sabado</span>
                            </li>
                        </ul>
                    </figure>
                    <!-- spinning -->
                    <figure class="imgWrapper img3">
                        <img src="Assets/images/SF_NOV19_BLOG_DIA_04.webp" alt="" loading="lazy" class="img-event">
                        <ul class="schedule-list text-utilities">
                            <li class="schedule-item">
                                <span class="schedule-txt">lunes</span>
                                <span class="schedule-txt-small border--right">05:15 am</span>
                                <span class="schedule-txt-small border--right">08:00 am</span>
                                <span class="schedule-txt-small">06:00 pm</span>
                            </li>
                            <li class="schedule-item">
                                <span class="schedule-txt">martes</span>
                                <span class="schedule-txt-small border--right">07:00 am</span>
                                <span class="schedule-txt-small">06:00 pm</span>
                            </li>
                            <li class="schedule-item">
                                <span class="schedule-txt">miercoles</span>
                                <span class="schedule-txt-small border--right">05:15 am</span>
                                <span class="schedule-txt-small border--right">08:00 am</span>
                                <span class="schedule-txt-small">06:00 pm</span>
                            </li>
                            <li class="schedule-item">
                                <span class="schedule-txt">jueves</span>
                                <span class="schedule-txt-small border--right">06:00 am</span>
                                <span class="schedule-txt-small border--right">07:00 am</span>
                                <span class="schedule-txt-small">06:00 pm</span>
                            </li>
                            <li class="schedule-item">
                                <span class="schedule-txt">viernes</span>
                                <span class="schedule-txt-small border--right">05:15 am</span>
                                <span class="schedule-txt-small border--right">07:00 am</span>
                                <span class="schedule-txt-small">08:00 am</span>
                            </li>
                            <li class="schedule-item">
                                <span class="schedule-txt">sabado</span>
                                <span class="schedule-txt-small border--right">09:00 am</span>
                                <span class="schedule-txt-small">10:00 am</span>
                            </li>
                        </ul>
                    </figure>
                    <!-- stretching -->
                    <figure class="imgWrapper img4">
                        <img src="Assets/images/SF_NOV19_BLOG_DIA_04.webp" alt="" loading="lazy" class="img-event">
                        <ul class="schedule-list text-utilities">
                            <li class="schedule-item">
                                <span class="schedule-txt">lunes</span>
                                <span class="schedule-txt-small border--right">02:00 pm</span>
                                <span class="schedule-txt-small">05:00 pm</span>
                            </li>
                            <li class="schedule-item">
                                <span class="schedule-txt">miercoles</span>
                                <span class="schedule-txt-small border--right">09:00 am</span>
                                <span class="schedule-txt-small">07:00 pm</span>
                            </li>
                        </ul>
                    </figure>
                    <!-- rumba -->
                    <figure class="imgWrapper img5">
                        <img src="Assets/images/SF_NOV19_BLOG_DIA_04.webp" alt="" loading="lazy" class="img-event">
                        <ul class="schedule-list text-utilities">
                            <li class="schedule-item">
                                <span class="schedule-txt">lunes</span>
                                <span class="schedule-txt-small">07:00 am</span>
                            </li>
                            <li class="schedule-item">
                                <span class="schedule-txt">martes</span>
                                <span class="schedule-txt-small">07:00 pm</span>
                            </li>
                            <li class="schedule-item">
                                <span class="schedule-txt">jueves</span>
                                <span class="schedule-txt-small">06:00 pm</span>
                            </li>
                            <li class="schedule-item">
                                <span class="schedule-txt">sabado</span>
                                <span class="schedule-txt-small">11:30 am</span>
                            </li>
                        </ul>
                    </figure>
                    <!-- aerobicos -->
                    <figure class="imgWrapper img6">
                        <img src="Assets/images/SF_NOV19_BLOG_DIA_04.webp" alt="" loading="lazy" class="img-event">
                        <ul class="schedule-list text-utilities">
                            <li class="schedule-item">
                                <span class="schedule-txt">martes</span>
                                <span class="schedule-txt-small border--right">08:00 am</span>
                                <span class="schedule-txt-small">05:00 pm</span>
                            </li>
                            <li class="schedule-item">
                                <span class="schedule-txt">jueves</span>
                                <span class="schedule-txt-small border--right">08:00 am</span>
                                <span class="schedule-txt-small border--right">10:00 am</span>
                                <span class="schedule-txt-small">03:00 pm</span>
                            </li>
                        </ul>
                    </figure>
                    <!-- pilates -->
                    <figure class="imgWrapper img7">
                        <img src="Assets/images/SF_NOV19_BLOG_DIA_04.webp" alt="" loading="lazy" class="img-event">
                        <ul class="schedule-list text-utilities">
                            <li class="schedule-item">
                                <span class="schedule-txt">viernes</span>
                                <span class="schedule-txt-small">08:00 am</span>
                            </li>
                        </ul>
                    </figure>
                    <!-- tabata x5 -->
                    <figure class="imgWrapper img8">
                        <img src="Assets/images/SF_NOV19_BLOG_DIA_04.webp" alt="" loading="lazy" class="img-event">
                        <ul class="schedule-list text-utilities">
                            <li class="schedule-item">
                                <span class="schedule-txt">miercoles</span>
                                <span class="schedule-txt-small">08:00 am</span>
                            </li>
                        </ul>
                    </figure>
                </div>
                <div class="events-right-column">
                    <div class="events-title-wrapper">
                        <div class="text-utilities caps">Eventos</div>
                    </div>
                    <a href="#" id="event1" class="events-info-wrapper w-inline-block">
                        <div id="event1-title" class="event-name-txt _1">Bodycombat</div>
                        <div class="description-wrapper">
                            <div class="text-utilities caps opacity">objetivo</div>
                            <div class="text-utilities caps small">resistencia cardiovascular</div>
                        </div>
                        <div class="description-wrapper">
                            <div class="text-utilities caps opacity">duración</div>
                            <div class="text-utilities caps small">50 minutos</div>
                        </div>
                        <div class="description-wrapper">
                            <div class="text-utilities caps opacity">costo</div>
                            <div class="text-utilities caps small">&dollar; 10.000</div>
                        </div>
                        <div id="event-bg" class="event-bg event-bg1"></div>
                        <div class="small-line"></div>
                    </a>
                    <a href="#" id="event2" class="events-info-wrapper w-inline-block">
                        <div id="event2-title" class="event-name-txt _2">Levantamiento de pesas</div>
                        <div class="description-wrapper">
                            <div class="text-utilities caps opacity">objetivo</div>
                            <div class="text-utilities caps small">mostrar habilidades</div>
                        </div>
                        <div class="description-wrapper">
                            <div class="text-utilities caps opacity">duración</div>
                            <div class="text-utilities caps small">1 dia</div>
                        </div>
                        <div class="description-wrapper">
                            <div class="text-utilities caps opacity">costo</div>
                            <div class="text-utilities caps small">&dollar; 10.000</div>
                        </div>
                        <div id="event-bg" class="event-bg event-bg2" style="height: 0%;width: 100%;"></div>
                        <div class="small-line"></div>
                    </a>
                    <div class="events-title-wrapper">
                        <div class="text-utilities caps">Clases</div>
                    </div>
                    <!-- clase #1 -->
                    <a href="#" id="event3" class="events-info-wrapper w-inline-block">
                        <div id="event3-title" class="event-name-txt _3">Spinning</div>
                        <div class="description-wrapper">
                            <div class="text-utilities caps opacity">objetivo</div>
                            <div class="text-utilities caps small">resistencia cardiovascular</div>
                        </div>
                        <div class="description-wrapper">
                            <div class="text-utilities caps opacity">duración</div>
                            <div class="text-utilities caps small">45 minutos</div>
                        </div>
                        <div class="description-wrapper">
                            <div class="text-utilities caps opacity">costo</div>
                            <div class="text-utilities caps small">sin costo adicional</div>
                        </div>
                        <div id="event-bg" class="event-bg event-bg3" style="height: 0%;width: 100%;"></div>
                        <div class="small-line"></div>
                    </a>
                    <!-- clase #3 -->
                    <a href="#" id="event5" class="events-info-wrapper w-inline-block">
                        <div id="event5-title" class="event-name-txt _5">rumba</div>
                        <div class="description-wrapper">
                            <div class="text-utilities caps opacity">objetivo</div>
                            <div class="text-utilities caps small">coordinación y agilidad</div>
                        </div>
                        <div class="description-wrapper">
                            <div class="text-utilities caps opacity">duración</div>
                            <div class="text-utilities caps small">45 minutos</div>
                        </div>
                        <div class="description-wrapper">
                            <div class="text-utilities caps opacity">costo</div>
                            <div class="text-utilities caps small">sin costo adicional</div>
                        </div>
                        <div id="event-bg" class="event-bg event-bg5" style="height: 0%;width: 100%;"></div>
                        <div class="small-line"></div>
                    </a>
                    <!-- clase #2 -->
                    <a href="#" id="event4" class="events-info-wrapper w-inline-block">
                        <div id="event4-title" class="event-name-txt _4">stretching</div>
                        <div class="description-wrapper">
                            <div class="text-utilities caps opacity">objetivo</div>
                            <div class="text-utilities caps small">mejorar flexibilidad</div>
                        </div>
                        <div class="description-wrapper">
                            <div class="text-utilities caps opacity">duración</div>
                            <div class="text-utilities caps small">30 minutos</div>
                        </div>
                        <div class="description-wrapper">
                            <div class="text-utilities caps opacity">costo</div>
                            <div class="text-utilities caps small">sin costo adicional</div>
                        </div>
                        <div id="event-bg" class="event-bg event-bg4" style="height: 0%;width: 100%;"></div>
                        <div class="small-line"></div>
                    </a>
                    <!-- clase #4 -->
                    <a href="#" id="event6" class="events-info-wrapper w-inline-block">
                        <div id="event6-title" class="event-name-txt _6">aeróbicos</div>
                        <div class="description-wrapper">
                            <div class="text-utilities caps opacity">objetivo</div>
                            <div class="text-utilities caps small">resistencia cardiovascular</div>
                        </div>
                        <div class="description-wrapper">
                            <div class="text-utilities caps opacity">duración</div>
                            <div class="text-utilities caps small">30 minutos</div>
                        </div>
                        <div class="description-wrapper">
                            <div class="text-utilities caps opacity">costo</div>
                            <div class="text-utilities caps small">sin costo adicional</div>
                        </div>
                        <div id="event-bg" class="event-bg event-bg6" style="height: 0%;width: 100%;"></div>
                        <div class="small-line"></div>
                    </a>
                    <!-- clase #5 -->
                    <a href="#" id="event7" class="events-info-wrapper w-inline-block">
                        <div id="event7-title" class="event-name-txt _7">pilates</div>
                        <div class="description-wrapper">
                            <div class="text-utilities caps opacity">objetivo</div>
                            <div class="text-utilities caps small">mejorar postura corporal</div>
                        </div>
                        <div class="description-wrapper">
                            <div class="text-utilities caps opacity">duración</div>
                            <div class="text-utilities caps small">1 hora</div>
                        </div>
                        <div class="description-wrapper">
                            <div class="text-utilities caps opacity">costo</div>
                            <div class="text-utilities caps small">sin costo adicional</div>
                        </div>
                        <div id="event-bg" class="event-bg event-bg7" style="height: 0%;width: 100%;"></div>
                        <div class="small-line"></div>
                    </a>
                    <!-- clase #6 -->
                    <a href="#" id="event8" class="events-info-wrapper w-inline-block">
                        <div id="event8-title" class="event-name-txt _8">tabata x5</div>
                        <div class="description-wrapper">
                            <div class="text-utilities caps opacity">objetivo</div>
                            <div class="text-utilities caps small">quemar calorias</div>
                        </div>
                        <div class="description-wrapper">
                            <div class="text-utilities caps opacity">duración</div>
                            <div class="text-utilities caps small">25 minutos</div>
                        </div>
                        <div class="description-wrapper">
                            <div class="text-utilities caps opacity">costo</div>
                            <div class="text-utilities caps small">sin costo adicional</div>
                        </div>
                        <div id="event-bg" class="event-bg event-bg8" style="height: 0%;width: 100%;"></div>
                        <div class="small-line"></div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 
        infinity marquee
    -->
    <div class="loop-text_wrapper">
        <div class="text-marquee slow-animation-speed">
            <h2>IMPULSA LA EXPERIENCIA DE TU ENTRENAMIENTO</h2>
        </div>
        <div class="text-marquee slow-animation-speed">
            <h2>IMPULSA LA EXPERIENCIA DE TU ENTRENAMIENTO</h2>
        </div>
        <div class="text-marquee slow-animation-speed">
            <h2>IMPULSA LA EXPERIENCIA DE TU ENTRENAMIENTO</h2>
        </div>
        <div class="text-marquee slow-animation-speed">
            <h2>IMPULSA LA EXPERIENCIA DE TU ENTRENAMIENTO</h2>
        </div>
        <div class="text-marquee slow-animation-speed">
            <h2>IMPULSA LA EXPERIENCIA DE TU ENTRENAMIENTO</h2>
        </div>
    </div>

    <!-- 
        otra seccion
     -->
    <div class="tech-slider__wrapper">
        <div class="padding-global">
            <div class="tech-slider">
                <div class="tech-slider__intro">
                    <p class="tech-slider__desc">Ofrecemos instalaciones de primera clase, entrenadores dedicados y una comunidad de apoyo. Desde sesiones de entrenamiento personalizadas hasta clases grupales</p>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide tech-slider__slide swiper-slide-active">
                        <div class="tech-slider__slide-card">
                            <div class="tech-slider__slide-bg">
                                <img src="<?php echo base_url; ?>Assets/images/anastase-maragos-YVz1LxVJqoA-unsplash.jpg" alt="" class="tech-slider__slide-media" loading="lazy">
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-block__title">Equipos de alto nivel</div>
                        </div>
                    </div>
                    <div class="swiper-slide tech-slider__slide swiper-slide-active">
                        <div class="tech-slider__slide-card">
                            <div class="tech-slider__slide-bg">
                                <img src="<?php echo base_url; ?>Assets/images/anastase-maragos-HyvE5SiKMUs-unsplash.jpg" alt="" class="tech-slider__slide-media" loading="lazy">
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-block__title">Equipos de alto nivel</div>
                        </div>
                    </div>
                    <div class="swiper-slide tech-slider__slide swiper-slide-active">
                        <div class="tech-slider__slide-card">
                            <div class="tech-slider__slide-bg">
                                <img src="<?php echo base_url; ?>Assets/images/anastase-maragos-YVz1LxVJqoA-unsplash.jpg" alt="" class="tech-slider__slide-media" loading="lazy">
                            </div>
                        </div>
                        <div class="product-info">
                            <div class="product-block__title">Equipos de alto nivel</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<!-- 
        info bottom bar
     -->
<div class="info-bar">
    <div class="info-bar-container">
        <!-- 
                schedule
             -->
        <div class="navbar-services-wrapper">
            <div class="services-components gap--0">
                <div class="text-utilities border--right text--blue">Lunes a viernes</div>
                <div class="navbar-list gap--0">
                    <div class="text-utilities border--right">5am</div>
                    <div class="text-utilities border--right">9pm</div>
                </div>
                <div class="text-utilities border--right text--blue">Sábado</div>
                <div class="navbar-list gap--0">
                    <div class="text-utilities border--right">6am</div>
                    <div class="text-utilities border--right">4pm</div>
                </div>
            </div>
        </div>
        <!-- 
                info bar infinity marquee
             -->
        <div class="info-bar-marquee text-utilities">
            <div class="text-marquee medium-animation-speed"><span>Gran lanzamiento - BODYCOMBAT</span></div>
            <div class="text-marquee medium-animation-speed"><span>Gran lanzamiento - BODYCOMBAT</span></div>
            <div class="text-marquee medium-animation-speed"><span>Gran lanzamiento - BODYCOMBAT</span></div>
            <div class="text-marquee medium-animation-speed"><span>Gran lanzamiento - BODYCOMBAT</span></div>
            <div class="text-marquee medium-animation-speed"><span>Gran lanzamiento - BODYCOMBAT</span></div>
            <div class="text-marquee medium-animation-speed"><span>Gran lanzamiento - BODYCOMBAT</span></div>
        </div>
    </div>
</div>

<script>
    const base_url = '<?php echo base_url; ?>';
</script>
<script src="<?php echo base_url; ?>Assets/js/login.js"></script>

<?php require_once 'Views/Templates/footerHome.php'; ?>