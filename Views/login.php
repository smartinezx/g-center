<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url; ?>Assets/css/home.css">
    <title><?php echo title . ' - ' .  $data['title']; ?></title>
</head>

<body>
    <!-- 
        dropdown login
     -->
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
                                <h1 class="login-title">Bienvenido de nuevo</h1>
                                <span>Me da gusto que estés de vuelta!</span>
                            </div>
                        </div>
                        <form id="frmLogin" onsubmit="frmLogin(event)" class="form-content">
                            <div class="form-item">
                                <label for="usuario" class="form-label">Nombre de usuario</label>
                                <input type="text" name="usuario" id="usuario" class="form-input" placeholder="usuario">
                            </div>
                            <div class="form-item">
                                <label for="clave" class="form-label">
                                    <span class="password-label-container">
                                        Contraseña
                                        <a href="#" class="form-helpItem">¿Olvidaste tu contraseña</a>
                                    </span>
                                </label>
                                <input type="password" name="clave" id="clave" class="form-input" placeholder="Introduzca su contraseña">
                            </div>
                            <div class="submit-btn-container">
                                <button class="form-input submit-btn" type="submit" id="btnAccion">INICIAR SESION</button>
                            </div>
                            <div class="create-account-container">
                                <span class="create-account-text">¿Aún no tienes cuenta?</span>
                                <a href="<?php echo base_url; ?>signup" class="form-helpItem">Crea una</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url; ?>Assets/js/sweetalert2.all.min.js"></script>
    <script>
        const base_url = '<?php echo base_url; ?>';
    </script>
    <script src="<?php echo base_url; ?>Assets/js/login.js"></script>
</body>

</html>