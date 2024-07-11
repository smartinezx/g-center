<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url; ?>Assets/css/home.css">
    <title><?php echo title . ' - ' .  $data['title']; ?></title>
</head>

<body>
    <div class="login-container">
        <div id="dropdown-wrapper" class="dropdown-wrapper">
            <div class="dropdown-container-box">
                <div class="dropdown-box-content">
                    <div class="dropdown-form-container">
                        <div class="login-header-container">
                            <div class="login-logo-container">
                                <img src="<?php echo base_url; ?>Assets/images/g-center_logo.png" alt="">
                            </div>
                            <div class="login-title-container">
                                <h1 class="login-title">Crear cuenta</h1>
                                <span>Por favor ingresa los siguientes datos</span>
                            </div>
                        </div>
                        <form action="<?php echo base_url; ?>usuarios/newUser" method="POST">
                            <div class="form-content">
                                <div class="form-row">
                                    <!-- nombre de usuario -->
                                    <div class="form-item">
                                        <label for="usuario" class="form-label">Nombre de usuario</label>
                                        <input type="text" name="usuario" id="usuario" class="form-input" placeholder="usuario">
                                    </div>
                                    <!-- correo electronio -->
                                    <div class="form-item">
                                        <label for="correo" class="form-label">Correo electronico</label>
                                        <input type="text" name="correo" id="correo" class="form-input" placeholder="nombre@ejemplo.com">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <!-- nombre completo -->
                                    <div class="form-item">
                                        <label for="nombre" class="form-label">Nombre completo</label>
                                        <input type="text" name="nombre" id="nombre" class="form-input" placeholder="nombre completo">
                                    </div>
                                    <!-- telefono -->
                                    <div class="form-item">
                                        <label for="telefono" class="form-label">Telefono</label>
                                        <input type="text" name="telefono" id="telefono" class="form-input" placeholder="nombre@ejemplo.com">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <!-- contraseña -->
                                    <div class="form-item">
                                        <label for="clave" class="form-label">Contraseña</label>
                                        <input type="password" name="clave" id="clave" class="form-input" placeholder="contraseña segura">
                                    </div>
                                    <!-- confirmar contraseña -->
                                    <div class="form-item">
                                        <label for="confirmar" class="form-label">Confirmar contraseña</label>
                                        <input type="password" name="confirmar" id="confirmar" class="form-input" placeholder="contraseña segura">
                                    </div>
                                </div>
                            </div>
                            <div class="submit-btn-container">
                                <button class="form-input submit-btn" type="submit" id="">CREAR CUENTA</button>
                            </div>
                            <div class="create-account-container">
                                <span class="create-account-text">¿Ya tienes cuenta?</span>
                                <a href="<?php echo base_url; ?>home/login" class="form-helpItem">Iniciar sesion</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>