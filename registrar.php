<?php

include("db.php");

if(isset($_POST['register'])){

    if(
        strlen($_POST['user']) >= 1 && 
        strlen($_POST['email']) >= 1 && 
        strlen($_POST['password']) >= 1 && 
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['full']) >= 1) {

            $user = trim($_POST['user']);
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            $name = trim($_POST['name']);
            $full = trim($_POST['full']);
            $consulta = "INSERT INTO usuarios(Usuario, Correo, Contraseña, Nombre, Apellido) VALUES ('$user','$email','$password','$name','$full')";
            $resultado =mysqli_query($conexion,$consulta);

                if ($resultado){
                    ?>
                    <h3 class="ok">Te has inscrito correctamente</h3>
                    <?php

                } else {
                    ?>
                    <h3 class="bad">Ups, ha ocurrido un error</h3>
                    <?php
        }

    } else {
        ?>
        <h3 class="bad">Por favor complete los campos</h3>
        <?php
    }
}        
           
?>