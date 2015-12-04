<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
<div align='center' class="container">
	<br><br>
	<font size='4'><b>Proyectos</b></font>
	<br><br>
	<table class="table table-striped">
		<tr>
			<td><b>ID</b></td>
			<td><b>Nombre</b></td>
			<td><b>Fecha Inicio</b></td>
			<td><b>Fecha Fin</b></td>
			<td><b>Cliente</b></td>
			<td><b>Estado</b></td>
			<td><b>Tareas</b></td>
			<td><b>Modificar</b></td> 
			<td><b>Eliminar</b></td> 
		 </tr>
		 <?PHP
			$sql = "select p.proyectoid, p.nombre as nomproyecto, p.fechainicio, p.fechafin, c.nombre as nomcliente, s.nombre as nomstatus from Cliente c, Estado s, Proyecto p";
			$sql = $sql . " where p.clienteid=c.clienteid and s.estadoid=p.estadoid and p.nombre like '%" . $_POST["nombre"] . "%'";
			if ($_POST["fechai"] != "")
			{
				if ($_POST["fechaf"] != "") {
					$sql = $sql . " and  p.FechaInicio between STR_TO_DATE('" . $_POST["fechai"] . "', '%Y-%m-%d') and STR_TO_DATE('" . $_POST["fechaf"] . "', '%Y-%m-%d')";
					$sql = $sql . " and  p.FechaFin between STR_TO_DATE('" . $_POST["fechai"] . "', '%Y-%m-%d') and STR_TO_DATE('" . $_POST["fechaf"] . "', '%Y-%m-%d')";

				}
			}
			if ($_POST["cliente"] != "-1")
			{
				$sql = $sql . " and c.clienteid = " . $_POST["cliente"];
			}
			if ($_POST["estado"] != "-1")
			{
				$sql = $sql . " and s.estadoid = " . $_POST["estado"];
			}
			$sql = $sql . " order by p.nombre";
			$result = mysql_query($sql);
			while($row = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>";
				echo $row["proyectoid"];
				echo "</td>";
				echo "<td>";
				echo $row["nomproyecto"];
				echo "</td>";
				echo "<td>";
				echo $row["fechainicio"];
				echo "</td>";
				echo "<td>";
				echo $row["fechafin"];
				echo "</td>";
				echo "<td>";
				echo $row["nomcliente"];
				echo "</td>";
				echo "<td>";
				echo $row["nomstatus"];
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:buscar(" . $row["proyectoid"] . ");'><img height='40' width='40' src='../Imagenes/search.png'></a>";
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:idmodificar(" . $row["proyectoid"] . ");'><img height='40' width='40' src='../Imagenes/Lapiz.png'></a>";
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:idborrar(" . $row["proyectoid"] . ");'><img height='40' width='40' src='../Imagenes/recycle.png'></a>";
				echo "</td>";
				echo "</tr>";
			}
		?>
	</table>
	<form name='datos' method='post' action='edit_proyecto.php'>
		<input type='hidden' value="" name="id">
	</form>
	<form name='datos2' method='post' action='delete_proyecto.php'>
		<input type='hidden' value="" name="id">
	</form>
	<form name='datos3' method='post' action='busqueda_proyecto_tarea.php'>
		<input type='hidden' value="" name="id">
	</form>

	<button type="button" class="btn btn-primary" onClick="window.location='busqueda_proyecto.php';">Busqueda</button>
	<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
	<button type="button" class="btn btn-primary" onClick="window.location='ingreso_proyecto.php';">Nuevo</button>
 </body>
 </html>
<?PHP
	include("../BD/conexionf.php");
?>
