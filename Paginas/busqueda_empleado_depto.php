<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
<div align='center' class="col-sm-offset-4 col-sm-5">
	<font size='4'><b>Departamentos</b></font>
	<br><br>
	<table class="table table-striped">
		<tr>
			<td><b>Empleado</b></td> 
			<td><b>Departamento</b></td> 
		 </tr>
		 <?PHP
			$sql = "select e.nombre1, e.nombre2, d.nombre as nombre from Empleado e, Departamento d, Empleado_Departamento ed";
			$sql = $sql . " where e.empleadoid=ed.empleadoid and d.deptoid=ed.deptoid";
			$sql = $sql . " and ed.empleadoid=" . $_POST["id"];
			$sql = $sql . " order by d.nombre";
			$result = mysql_query($sql);
			while($row = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>";
				echo $row["nombre1"] . " " . $row["nombre2"];
				echo "</td>";
				echo "<td>";
				echo $row["nombre"];
				echo "</td>";
			}
		?>
	</table>
	<button type="button" class="btn btn-primary" onClick="window.location='busqueda_empleado.php';">Busqueda</button>
	<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
 </body>
 </html>
<?PHP
	include("../BD/conexionf.php");
?>
