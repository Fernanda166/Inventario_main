
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicar Sesion</title>
    <link rel="shortcut icon" href="https://e7.pngegg.com/pngimages/357/141/png-clipart-computer-icons-management-e-commerce-inventory-web-application-icon-angle-rectangle.png">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../../css/login.css?v=<?php echo time(); ?>"/>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body class="fondobody" >
<form  action="validar.php" method="POST">
<div class="fondobody" id="login" >
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post"><br><br>
                            <h3 class="text-center">¡Bienvenido a Inventario MRD!</h3>
                            <h4 class="text-center">Inicia sesion</h4>
                            <img class="logo_prin" src="../../img/logo.png" alt="logo">
                            <div class="form-group">
                                <label for="username">Correo electronico:</label><br>
                                <input type="text" name="Correo" placeholder=" Ingresa correo electronico"  id="correo" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña:</label><br>
                                <input type="password" placeholder=" Ingresa contraseña" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                             <br>
                                <input type="submit"class="btn btn-success btn-md space" value="Ingresar">
                                <div id="register-link" class="text-right">
                                    <br>
                                <a href="registros.php"><input type="button"  class="btn btn-primary space" value="Registrarse"></a>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>
</html>