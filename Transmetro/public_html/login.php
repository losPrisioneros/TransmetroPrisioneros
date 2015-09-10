<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html> 
    <head> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/styleForm.css" rel="stylesheet"/> 
        <title>Autentificación PHP</title> 
        
    </head> 
    <body> 
        <div class="login">
            <form action="valida_usuario.php" method="POST"> 
                <div class="login-head">

                    <?php
                    if (isset($_GET["errorusuario"]) == "si") {
                        ?> 
                        <b>Datos incorrectos</b> 
                        <?php
                    } else {
                        ?> 
                        <div>Login</div> 
                        <?php
                    }
                    ?>
                </div>
                <div class="login-body">
                    <label id="usuario">Nombre:</label>

                    <input type="Text" name="usuario" size="8" maxlength="50">


                    <label id="usuario">Contraseña:</label>

                    <input type="password" name="clave" size="8" maxlength="50">


                    <input type="Submit" value="ENTRAR">

                </div>
            </form> 
        </div>
    </body> 
</html> 
