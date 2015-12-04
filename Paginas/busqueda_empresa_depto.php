<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
<div align='center' class="col-sm-offset-4 col-sm-5">
	<font size='4'><b>Departamentos</b></font>
	<br><br>
	<table class="table table-striped">
		<tr>
			<td><b>Empresa</b></td> 
			<td><b>Departamento</b></td> 
		 </tr>
		 <?PHP
			$sql = "select e.nombre as nombree, d.nombre as nombred from Empresa e, Departamento d, Empresa_Departamento ed";
			$sql = $sql . " where e.empresaid=ed.empresaid and d.deptoid=ed.deptoid";
			$sql = $sql . " and ed.empresaid=" . $_POST["id"];
			$sql = $sql . " order by d.nombre";
			$result = mysql_query($sql);
			while($row = mysql_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>";
				echo $row["nombree"];
				echo "</td>";
				echo "<td>";
				echo $row["nombred"];
				echo "</td>";
			}
		?>
	</table>
	<button type="button" class="btn btn-primary" onClick="window.location='busqueda_empresa.php';">Busqueda</button>
	<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
 </body>
 </html>
<?PHP
	include("../BD/conexionf.php");
?>
