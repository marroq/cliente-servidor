<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
<div align='center'>
		<br><br>
		<?PHP
			$sql="insert into Proyecto(Nombre,FechaInicio,FechaFin,ClienteId,EstadoId) ";
			$sql = $sql . " values ('" . $_POST["nombre"] . "', STR_TO_DATE('" . $_POST["fechaI"] . "', '%d/%m/%Y'), STR_TO_DATE('" . $_POST["fechaF"] . "', '%d/%m/%Y'), " . $_POST["cliente"] . " , " . $_POST["estado"] . ")";
			$result = mysql_query($sql);

			$sql = "select LAST_INSERT_ID() as id";
			$result2 = mysql_query($sql);

			while ($row = mysql_fetch_array($result2))
			{
				$id = $row["id"];
			}
			if (isset($_POST['tarea']))
			{
				foreach ($_POST['tarea'] as $tarea) 
				{
					$sql = "insert into Proyecto_Tarea(proyectoid,tareaid)";
					$sql = $sql . " values(" . $id . ", " . $tarea . ")";
					$result = mysql_query($sql);
				}
			}
		?>
		<br><br>Proceso Realizado con Exito<br><br>
		<a href='busqueda_proyecto.php'>Continuar</a>
		</div>
	</body>
</html>
<?PHP
	include("../BD/conexionf.php");
?>
