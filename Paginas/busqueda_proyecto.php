<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
<div align='center'>
	<br><br>
	<font size='4'><b>Busqueda Proyectos</b></font>
	<br><br>
	<form class="form-horizontal" name='datos' method='post' action='resultado_proyecto.php'>
		<div class="form-group">
    		<label class="col-sm-4 control-label">Nombre</label>
    		<div class="col-sm-5">
    			<input type="text" name="nombre" class="form-control" placeholder="Nombre">
    		</div>
    	</div>

		<div class="form-group">
    		<label class="col-sm-4 control-label">Fecha Inicio</label>
    		<div class="col-sm-5">
    			<input type="text" name="fechai" class="form-control" placeholder="YYYY-mm-dd">
    		</div>
    	</div>

		<div class="form-group">
    		<label class="col-sm-4 control-label">Fecha Entrega</label>
    		<div class="col-sm-5">
    			<input type="text" name="fechaf" class="form-control" placeholder="YYYY-mm-dd">
    		</div>
    	</div>


		<div class="form-group">
    		<label class="col-sm-4 control-label">Cliente</label>
			<div class="col-sm-5">
			<select name="cliente" class="form-control">
				<option value="-1" selected></option>
				<?PHP
					$sql = "select clienteid, nombre from Cliente";
					$sql = $sql . " order by nombre";
					$result = mysql_query($sql);
					while($row = mysql_fetch_array($result))
					{
						echo "<option value='" . $row["clienteid"] . "'>";
						echo $row["nombre"] . "</option>";
					}
				?>
			</select>
			</div>
			</div>

			<div class="form-group">
    		<label class="col-sm-4 control-label">Estado</label>
			<div class="col-sm-5">
			<select name="estado" class="form-control">
				<option value="-1" selected></option>
				<?PHP
					$sql = "select estadoid, nombre from Estado";
					$sql = $sql . " order by nombre";
					$result = mysql_query($sql);
					while($row = mysql_fetch_array($result))
					{
						echo "<option value='" . $row["estadoid"] . "'>";
						echo $row["nombre"] . "</option>";
					}
				?>
			</select>
			</div>
			</div>
		
		<button type="submit" class="btn btn-primary" onClick="window.location='resultado_proyecto.php';">Busqueda</button>
		<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
		<button type="button" class="btn btn-primary" onClick="window.location='ingreso_proyecto.php';">Nuevo</button>
	</form>
	</div>
</body>
</html>
<?PHP
	include("../BD/conexionf.php");
?>
