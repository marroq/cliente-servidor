<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
<div align='center' class="container">
	<br><br>
	<font size='4'><b>Empleados</b></font>
	<br><br>
	<table class="table table-striped">
		<tr>
			<td><b>ID</b></td>
			<td><b>Primer Nombre</b></td>
			<td><b>Segundo Nombre</b></td>
			<td><b>Primer Apellido</b></td>
			<td><b>Segundo Apellido</b></td>
			<td><b>Puesto</b></td>
			<td><b>Empresas</b></td>
			<td><b>Departamentos</b></td>
			<td><b>Proyectos</b></td>
			<td><b>Modificar</b></td>
			<td><b>Eliminar</b></td> 
		 </tr>
		 <?PHP
			$sql = "select e.empleadoid, e.nombre1, e.nombre2, e.apellido1, e.apellido2, p.nombre as puesto from Empleado e, Puesto p";
			$sql = $sql . " where e.puestoid=p.puestoid and (e.nombre1 like '%" . $_POST["nombre"] . "%'";
			$sql = $sql . " or e.nombre2 like '%" . $_POST["nombre"] . "%')";
			$sql = $sql . " and (e.apellido1 like '%" . $_POST["apellido"] . "%'";
			$sql = $sql . " or e.apellido2 like '%" . $_POST["apellido"] . "%')";
			if ($_POST["puesto"] != "-1")
			{
				$sql = $sql . " and p.puestoid=" . $_POST["puesto"];
			}
			$sql = $sql . " order by nombre";
			$result = mysql_query($sql);
			while($row = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>";
				echo $row["empleadoid"];
				echo "</td>";
				echo "<td>";
				echo $row["nombre1"];
				echo "</td>";
				echo "<td>";
				echo $row["nombre2"];
				echo "</td>";
				echo "<td>";
				echo $row["apellido1"];
				echo "</td>";
				echo "<td>";
				echo $row["apellido2"];
				echo "</td>";
				echo "<td>";
				echo $row["puesto"];
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:buscar(" . $row["empleadoid"] . ");'><img height='40' width='40' src='../Imagenes/search.png'></a>";
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:buscar2(" . $row["empleadoid"] . ");'><img height='40' width='40' src='../Imagenes/search.png'></a>";
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:buscar3(" . $row["empleadoid"] . ");'><img height='40' width='40' src='../Imagenes/search.png'></a>";
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:idmodificar(" . $row["empleadoid"] . ");'><img height='40' width='40' src='../Imagenes/Lapiz.png'></a>";
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:idborrar(" . $row["empleadoid"] . ");'><img height='40' width='40' src='../Imagenes/recycle.png'></a>";
				echo "</td>";
				echo "</tr>";
			}
		?>
	</table>
	<form name='datos' method='post' action='edit_empleado.php'>
		<input type='hidden' value="" name="id">
	</form>
	<form name='datos2' method='post' action='delete_empleado.php'>
		<input type='hidden' value="" name="id">
	</form>
	<form name='datos3' method='post' action='busqueda_empleado_empresa.php'>
		<input type='hidden' value="" name="id">
	</form>
	<form name='datos4' method='post' action='busqueda_empleado_depto.php'>
		<input type='hidden' value="" name="id">
	</form>
	<form name='datos5' method='post' action='busqueda_empleado_proyecto.php'>
		<input type='hidden' value="" name="id">
	</form>

	<button type="button" class="btn btn-primary" onClick="window.location='busqueda_empleado.php';">Busqueda</button>
	<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
	<button type="button" class="btn btn-primary" onClick="window.location='ingreso_empleado.php';">Nuevo</button>
 </body>
 </html>
<?PHP
	include("../BD/conexionf.php");
?>
