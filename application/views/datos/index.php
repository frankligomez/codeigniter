<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bienvenido a Codeigniter</title>
	
</head>
<body>

<h4><?php echo $titulo; ?></h4>

    <form id="datos" name="datos" method="post" action="<?php echo base_url(); ?>index.php/datos/registrar">

		Nombre: <input name="nombre" type="text" /><br/>
		Telefono: <input name="telefono" type="text" /><br/>
		Correo electronico: <input name="email" type="text" /><br/>

		<br/>
		<input type="submit" value="Registrar" />

	</form>

</body>
</html>