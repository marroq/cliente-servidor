<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
<div align='center' class="container">
	<br><br>
	<font size='4'><b>Horarios</b></font>
	<br><br>
	<table class="table table-striped">
		<tr>
			<td><b>ID</b></td>
			<td><b>Empleado</b></td>
			<td><b>Fecha</b></td>
			<td><b>Hora Entrada</b></td>
			<td><b>Hora Salida</b></td>
			<td><b>Modificar</b></td> 
			<td><b>Eliminar</b></td> 
		 </tr>
		 <?PHP
			$sql = "select h.horarioid, e.nombre1, e.apellido1, h.fecha, h.entrada, h.salida from Empleado e, Horario h";
			$sql = $sql . " where h.empleadoid=e.empleadoid";
			$sql = $sql . " and h.fecha like '%" . $_POST["fecha"] . "%'";
			if ($_POST["empleado"] != "-1")
			{
				$sql = $sql . " and e.empleadoid=" . $_POST["empleado"];
			}
			if ($_POST["hentrada"] != "")
			{
				$sql = $sql . " and h.entrada=" . $_POST["hentrada"];
			}
			if ($_POST["hsalida"] != "")
			{
				$sql = $sql . " and h.salida=" . $_POST["hsalida"];
			}
			$sql = $sql . " order by e.nombre1";
			$result = mysql_query($sql);
			while($row = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>";
				echo $row["horarioid"];
				echo "</td>";
				echo "<td>";
				echo $row["nombre1"] . " " . $row["apellido1"];
				echo "</td>";
				echo "<td>";
				echo $row["fecha"];
				echo "</td>";
				echo "<td>";
				echo $row["entrada"] . ":00 am";
				echo "</td>";
				echo "<td>";
				echo $row["salida"]  . ":00 pm";
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:idmodificar(" . $row["horarioid"] . ");'><img height='40' width='40' src='../Imagenes/Lapiz.png'></a>";
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:idborrar(" . $row["horarioid"] . ");'><img height='40' width='40' src='../Imagenes/recycle.png'></a>";
				echo "</td>";
				echo "</tr>";
			}
		?>
	</table>
	<form name='datos' method='post' action='edit_horario.php'>
		<input type='hidden' value="" name="id">
	</form>
	<form name='datos2' method='post' action='delete_horario.php'>
		<input type='hidden' value="" name="id">
	</form>

	<button type="button" class="btn btn-primary" onClick="window.location='busqueda_horario.php';">Busqueda</button>
	<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
	<button type="button" class="btn btn-primary" onClick="window.location='ingreso_horario.php';">Nuevo</button>
 </body>
 </html>
<?PHP
	include("../BD/conexionf.php");
?>
