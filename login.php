<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleLog.css" />
    <link rel="stylesheet" 
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,600,0,0" />
    <title>LOPE</title>
</head>

<body>
    <form action="validar.php" method="post">
        <div class="container">
            <div class="login-left">
                <div class="login-header">
                    <h1>Bienvenido a nuestra página</h1>
                    <p>Por favor, inicie sesión para utilizar la plataforma</p>
                </div>
                <form class="login-form" autocomplete="off">
                    <div class="login-form-content">
                        <div class="form-item">
                            <label for="emailForm">Introduzca su correo electrónico</label>
                            <input type="text" id="emailForm" name="correo">
                        </div>
                        <div class="form-item">
                            <label for="passwordForm">Introduzca su contraseña</label>
                            <input type="password" id="passwordForm" name="contraseña">
                        </div>
                        <div class="form-item">
                        
                        </div>
                        <button type="submit">Iniciar Sesión</button>
                        <div class="registrase">¿Necesitas una cuenta? <a href="createacount.php" class="RegistrateButon">Regístrate</a></div>
                    </div>
            </form>
        </div>
        <div class="login-right">
            <img src="./image.svg" alt="image">
            </div>
        </div>
    </form>

</body>
</html>