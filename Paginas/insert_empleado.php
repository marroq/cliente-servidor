<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
<div align='center'>
		<br><br>
		<?PHP
			$sql="insert into Empleado(Nombre1,Nombre2,Apellido1,Apellido2,PuestoId) values ('" . $_POST["nombre1"] ."' , '" . $_POST["nombre2"] ."', '" . $_POST["apellido1"] ."' , '" . $_POST["apellido2"] ."' , " . $_POST["puesto"] .")";
			$result = mysql_query($sql);

			$sql = "select LAST_INSERT_ID() as id";
			$result2 = mysql_query($sql);

			while ($row = mysql_fetch_array($result2))
			{
				$id = $row["id"];
			}
			if (isset($_POST['depto']))
			{
				foreach ($_POST['depto'] as $depto) 
				{
					$sql = "insert into Empleado_Departamento(empleadoid,deptoid)";
					$sql = $sql . " values(" . $id . ", " . $depto . ")";
					$result = mysql_query($sql);
				}
			}
			if (isset($_POST['proyecto']))
			{
				foreach ($_POST['proyecto'] as $proyecto) 
				{
					$sql = "insert into Empleado_Proyecto(empleadoid,proyectoid)";
					$sql = $sql . " values(" . $id . ", " . $proyecto . ")";
					$result = mysql_query($sql);
				}
			}
			if (isset($_POST['empresa']))
			{
				foreach ($_POST['empresa'] as $empresa) 
				{
					$sql = "insert into Empresa_Empleado(empresaid,empleadoid)";
					$sql = $sql . " values(" . $empresa . ", " . $id . ")";
					$result = mysql_query($sql);
				}
			}
		?>
		<br><br>Proceso Realizado con Exito<br><br>
		<a href='busqueda_empleado.php'>Continuar</a>
		</div>
	</body>
</html>
<?PHP
	include("../BD/conexionf.php");
?>
