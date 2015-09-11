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
            <div class="login-head">

                <?php
                if (isset($_GET["errorusuario"]) == "si") {
                    ?> 
                <div><b>Datos incorrectos</b> </div>
                    <?php
                } else {
                    ?> 
                    <div>Login</div> 
                    <?php
                }
                ?>
            </div>
            <div class="login-body">
                <form action="42cda.php" method="POST"> 

                    <label id="usuario">Nombre de Usuario:</label>

                    <div class="item"><input type="Text" name="usuario" class="input" ></div>


                    <label id="usuario">Contraseña:</label>

                    <div class="item"><input type="password" name="pass" class="input" ></div>

                    <h6>
                        <a href="http://www.facebook.com">¿Olvidaste tu contraseña?</a>
                    </h6>

                    <div> <input type="Submit" value="ENTRAR"></div>
                </form> 
            </div>

        </div>
    </body> 
</html> 
