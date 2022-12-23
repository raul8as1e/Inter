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
    <form action="registrar.php" method="post">
        <div class="container">
            <div class="login-left">
                <div class="login-header">
                    <h1>Registrese con nosotros</h1>
                </div>
                <form class="login-form" autocomplete="off">
                    <div class="login-form-content">
                        <div class="form-item">
                            <label for="emailForm">Introduzca un nombre de usuario</label>
                            <input type="text" name="user" placeholder="Usuario">
                        </div>
                        <div class="form-item">
                            <label for="passwordForm">Introduzca sus nombres completos</label>
                            <input type="text" name="name" placeholder="Nombre Completo">
                        </div>
                        <div class="form-item">
                            <label for="emailForm">Introduzca sus apellidos completos</label>
                            <input type="text" name="full" placeholder="Apellido Completo">
                        </div>
                        <div class="form-item">
                            <label for="emailForm">Introduzca correo electrónico</label>
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-item">
                            <label for="emailForm">Introduzca una contraseña</label>
                            <input type="password" name="password" placeholder="Contraseña">
                        </div>
                        
                        <button type="submit" name="register">Registrarse</button>
                        <a href="login.php" class="RegistrateButon">¿Ya tienes una cuenta?</a>
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
