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
        <title>Autentificación PHP</title> 
    </head> 
    <body> 
        <form action="valida_usuario.php" method="POST"> 

            <?php
            if (isset($_GET["errorusuario"]) == "si") {
                ?> 
                <b>Datos incorrectos</b> 
                <?php
            } else {
                ?> 
                <div>Introduca sus claves de acceso</div> 
                <?php
            }
            ?>
            <label id="usuario">Nombre:</label>

            <input type="Text" name="usuario" size="8" maxlength="50">


           <label id="usuario">Contraseña:</label>

            <input type="password" name="clave" size="8" maxlength="50">


            <input type="Submit" value="ENTRAR">


        </form> 
    </body> 
</html> 
