<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url; ?>Assets/css/home.css">
    <title><?php echo title . ' - ' .  $data['title']; ?></title>    
</head>

<body>
    <nav id="navbar" class="navbar">
        <div class="navbar-services-wrapper main-components ">
            <div class="services-components main-components">
                <a href="#" class="navbar-logo">
                    <img src="<?php echo base_url; ?>Assets/images/gcenter-logo-white.png" alt="">
                </a>
                <ul class="navbar-list">
                    <li>
                        <a href="#home" class="active text-utilities text-utilities-white">Inicio</a>
                    </li>
                    <div class="navbar-div"></div>
                    <li>
                        <a href="#about" class="text-utilities text-utilities-white">Sobre nosotros</a>
                    </li>
                    <div class="navbar-div"></div>
                    <li>
                        <a href="#pricing" class="text-utilities text-utilities-white">Precios</a>
                    </li>
                    <div class="navbar-div"></div>
                    <li>
                        <a href="#facilities" class="text-utilities text-utilities-white">Instalaciones</a>
                    </li>
                    <div class="navbar-div"></div>
                    <li>
                        <a href="#classes" class="text-utilities text-utilities-white">Eventos y clases</a>
                    </li>
                    <div class="navbar-div"></div>
                    <li>
                        <a href="#footer" class="text-utilities text-utilities-white">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
</body>

</html>