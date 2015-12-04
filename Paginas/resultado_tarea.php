<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
<div align='center' class="container">
	<br><br>
	<font size='4'><b>Tareas</b></font>
	<br><br>
	<table class="table table-striped">
		<tr>
			<td><b>ID</b></td>
			<td><b>Nombre</b></td>
			<td><b>Estado</b></td>
			<td><b>Modificar</b></td> 
			<td><b>Eliminar</b></td> 
		 </tr>
		 <?PHP
			$sql = "select t.tareaid, t.nombre as tnombre, e.nombre as enombre from Estado e, Tarea t";
			$sql = $sql . " where e.estadoid=t.estadoid and t.nombre like '%" . $_POST["nombre"] . "%'";
			if ($_POST["estado"] != "-1")
			{
				$sql = $sql . " and e.estadoid=" . $_POST["estado"];
			}
			$sql = $sql . " order by t.nombre";
			$result = mysql_query($sql);
			while($row = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>";
				echo $row["tareaid"];
				echo "</td>";
				echo "<td>";
				echo $row["tnombre"];
				echo "</td>";
				echo "<td>";
				echo $row["enombre"];
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:idmodificar(" . $row["tareaid"] . ");'><img height='40' width='40' src='../Imagenes/Lapiz.png'></a>";
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:idborrar(" . $row["tareaid"] . ");'><img height='40' width='40' src='../Imagenes/recycle.png'></a>";
				echo "</td>";
				echo "</tr>";
			}
		?>
	</table>
	<form name='datos' method='post' action='edit_tarea.php'>
		<input type='hidden' value="" name="id">
	</form>
	<form name='datos2' method='post' action='delete_tarea.php'>
		<input type='hidden' value="" name="id">
	</form>

	<button type="button" class="btn btn-primary" onClick="window.location='busqueda_tarea.php';">Busqueda</button>
	<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
	<button type="button" class="btn btn-primary" onClick="window.location='ingreso_tarea.php';">Nuevo</button>
 </body>
 </html>
<?PHP
	include("../BD/conexionf.php");
?>
