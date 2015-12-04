<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
	<div align='center'>
		<br><br>
		<font size='4'><b>Nuevo Empleado</b></font>
		<br><br>
		<form class="form-horizontal" name='datos' method='post' action='insert_empleado.php'>
			<div class="form-group">
    		<label class="col-sm-4 control-label">Primer Nombre</label>
    		<div class="col-sm-5">
    			<input type="text" name="nombre1" class="form-control" placeholder="Primer Nombre">
    		</div>
    		</div>
		
			<div class="form-group">
    		<label class="col-sm-4 control-label">Segundo Nombre</label>
    		<div class="col-sm-5">
    			<input type="text" name="nombre2" class="form-control" placeholder="Segundo Nombre">
    		</div>
    		</div>
		
			<div class="form-group">
    		<label class="col-sm-4 control-label">Primer Apellido</label>
    		<div class="col-sm-5">
    			<input type="text" name="apellido1" class="form-control" placeholder="Primer Apellido">
    		</div>
    		</div>

			<div class="form-group">
    		<label class="col-sm-4 control-label">Segundo Apellido</label>
    		<div class="col-sm-5">
    			<input type="text" name="apellido2" class="form-control" placeholder="Segundo Apellido">
    		</div>
    		</div>

			<div class="form-group">
    		<label class="col-sm-4 control-label">Puesto</label>
			<div class="col-sm-5">
			<select name="puesto" class="form-control">
				<option value="-1" selected></option>
				<?PHP
					$sql = "select puestoid, nombre from Puesto";
					$sql = $sql . " order by nombre";
					$result = mysql_query($sql);
					while($row = mysql_fetch_array($result))
					{
						echo "<option value='" . $row["puestoid"] . "'>";
						echo $row["nombre"] . "</option>";
					}
				?>
			</select></div></div>

			<table>
			<tr>
			<td>
				<div class="form-group">
    			<label class="col-sm-4 control-label">Empresas</label>
    			</div>
    		</td>
			<td>
			<?PHP
				$sql = "select empresaid, nombre from Empresa";
				$sql = $sql . " order by nombre";
				$result = mysql_query($sql);
				while($row = mysql_fetch_array($result))
				{
					echo "<input type='checkbox' name='empresa[]' value='" . $row["empresaid"] . "'>";
					echo $row["nombre"] . "<br>";
				}
			?>
			<br>
			</td>
			</tr>

			<tr>
			<td>
				<div class="form-group">
    			<label class="col-sm-4 control-label">Departamentos</label>
    			</div>
			</td>
			<td>
			<?PHP
				$sql = "select deptoid, nombre from Departamento";
				$sql = $sql . " order by nombre";
				$result = mysql_query($sql);
				while($row = mysql_fetch_array($result))
				{
					echo "<input type='checkbox' name='depto[]' value='" . $row["deptoid"] . "'>";
					echo $row["nombre"] . "<br>";
				}
			?>
			<br>
			</td>
			</tr>
			<tr>
			<td>
				<div class="form-group">
    			<label class="col-sm-4 control-label">Proyectos</label>
    			</div>
			</td>
			<td>
			<?PHP
				$sql = "select proyectoid, nombre from Proyecto";
				$sql = $sql . " order by nombre";
				$result = mysql_query($sql);
				while($row = mysql_fetch_array($result))
				{
					echo "<input type='checkbox' name='proyecto[]' value='" . $row["proyectoid"] . "'>";
					echo $row["nombre"] . "<br>";
				}
			?>
			<br>
			</td>
			</tr>
			</table>

			<input type='submit' class="btn btn-success" value='Grabar'> <br><br>
			<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
	</form>
	</div>
</body>
</html>
<?PHP
	include("../BD/conexionf.php");
?>
