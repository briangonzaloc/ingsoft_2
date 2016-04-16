<html>
	<head>
			<title>Couch Inn</title>
			<link type="text/css" rel="stylesheet" href="estilos.css">

	</head>
	
	<body>
		<?php
			include ("menucouch.php");
		?>
	
	<fieldset class="buscar" name="input" action="listado.php" method="get"></br>
	<form action="listado.php">
		Provincia:<select>
			<option value="buenosaires"> Buenos Aires</option>
			<option value="cordoba"> Cordoba</option>
			<option value="mendoza">Mendoza</option>
			<option value="rionegro">Rio Negro</option>
			<option value="neuquen">Neuquen</option>
		</select>
			Fecha desde: <input type="date" name="llegada">
			Fecha hasta: <input type="date" name="llegada">
			
			Cantidad de viajeros:<select>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
		</select></br>
			Tipo de Couch: <select>
			<option value="cama"> Cama</option>
			<option value="sillon">Sillon</option>
			<option value="carpa">Carpa</option>
			<option value="bolsa">Bolsa de dormir</option>
		</select></br>
		<input class="input2" type="submit" value="Buscar">
	</form>
	</fieldset>
	</body>
</html>