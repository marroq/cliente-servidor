<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
<div align='center' class="container">
	<br><br>
	<font size='4'><b>Empresas</b></font>
	<br><br>
	<table class="table table-striped">
		<tr>
			<td><b>ID</b></td>
			<td><b>Nombre</b></td> 
			<td><b>Telefono</b></td> 
			<td><b>Direccion</b></td>
			<td><b>Departamentos</b></td> 
			<td><b>Modificar</b></td> 
			<td><b>Eliminar</b></td>
		 </tr>
		 <?PHP
			$sql = "select empresaid, nombre, telefono, direccion from Empresa";
			$sql = $sql . " where nombre like '%" . $_POST["nombre"] . "%'";
			$sql = $sql . " and direccion like '%" . $_POST["direccion"] . "%'";
			$sql = $sql . " and telefono like '%" . $_POST["telefono"] . "%'";
			$sql = $sql . " order by nombre";
			$result = mysql_query($sql);
			while($row = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>";
				echo $row["empresaid"];
				echo "</td>";
				echo "<td>";
				echo $row["nombre"];
				echo "</td>";
				echo "<td>";
				echo $row["telefono"];
				echo "</td>";
				echo "<td>";
				echo $row["direccion"];
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:buscar(" . $row["empresaid"] . ");'><img height='40' width='40' src='../Imagenes/search.png'></a>";
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:idmodificar(" . $row["empresaid"] . ");'><img height='40' width='40' src='../Imagenes/Lapiz.png'></a>";
				echo "</td>";
				echo "<td>";
				echo "<a href='javascript:idborrar(" . $row["empresaid"] . ");'><img height='40' width='40' src='../Imagenes/recycle.png'></a>";
				echo "</td>";
				echo "</tr>";
			}
		?>
	</table>
	<form name='datos' method='post' action='edit_empresa.php'>
		<input type='hidden' value="" name="id">
	</form>
	<form name='datos2' method='post' action='delete_empresa.php'>
		<input type='hidden' value="" name="id">
	</form>
	<form name='datos3' method='post' action='busqueda_empresa_depto.php'>
		<input type='hidden' value="" name="id">
	</form>
	<button type="button" class="btn btn-primary" onClick="window.location='busqueda_empresa.php';">Busqueda</button>
	<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
	<button type="button" class="btn btn-primary" onClick="window.location='ingreso_empresa.php';">Nuevo</button>
 </body>
 </html>
<?PHP
	include("../BD/conexionf.php");
?>
