<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
<div align='center'>
		<br><br>
		<?PHP
			$sql="insert into Puesto(Nombre) values ('" . $_POST["nombre"] ."')";
			$result = mysql_query($sql);
		?>
		<br><br>Proceso Realizado con Exito<br><br>
		<a href='busqueda_puesto.php'>Continuar</a>
		</div>
	</body>
</html>
<?PHP
	include("../BD/conexionf.php");
?>
