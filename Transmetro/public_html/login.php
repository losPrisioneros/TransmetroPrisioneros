<html> 
<head> 
	<title>Autentificación PHP</title> 
</head> 
<body> 
	<h1 align= "center">Autentificación de la Empresa mas Importante</h1> 
		<form action="valida_usuario.php" method="POST"> 
		<table align="center" width="225" border="1"> 
			<tr> 
			<td colspan="2" align="center">
				<?php 
					if (isset($_GET["errorusuario"])=="si")
					{
				?> 
					<b>Datos incorrectos</b> 
				<?php
					}
					else
					{
				?> 
					Introduca sus claves de acceso 
				<?php 
					}
				?>
			</td> 
		</tr> 
		<tr> 
			<td align="right">
				Cédula:
			</td> 
			<td>
				<input type="Text" name="cedula" size="8" maxlength="50">
			</td> 
		</tr> 
		<tr> 
			<td align="right">
				Usuario:
			</td> 
			<td>
				<input type="Text" name="usuario" size="8" maxlength="50">
			</td> 
		</tr> 
		<tr> 
			<td align="right">
				Clave:
			</td> 
			<td>
				<input type="password" name="clave" size="8" maxlength="50">
			</td> 
		</tr> 
		<tr> 
			<td colspan="2" align="center">
				<input type="Submit" value="ENTRAR">
			</td> 
		</tr> 
	</table> 
	</form> 
</body> 
</html> 
