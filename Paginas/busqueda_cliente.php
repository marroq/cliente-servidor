<?php
	include("../BD/conexioni.php");
	include("global/header.php");
?>
<div align='center' class="container">
	<font size='4'><b>Busqueda Clientes</b></font>
	<br><br>
	<form class="form-horizontal" name='datos' method='post' action='resultado_cliente.php'>
		<div class="form-group">
    		<label class="col-sm-4 control-label">Nombre</label>
    		<div class="col-sm-5">
    			<input type="text" name="nombre" class="form-control" placeholder="Nombre">
    		</div>
    	</div>

    	<div class="form-group">
    		<label class="col-sm-4 control-label">Pais</label>
			<div class="col-sm-5">
			<select name="pais" class="form-control">
			<option value="-1" selected></option>
			<?PHP
				$sql = "select paisid, nombre from Pais";
				$sql = $sql . " order by nombre";
				$result = mysql_query($sql);
				while($row = mysql_fetch_array($result))
				{
					echo "<option value='" . $row["paisid"] . "'>";
					echo $row["nombre"] . "</option>";
				}
			?>
		</select>
		</div>
		</div>
		<br>
		
		<button type="submit" class="btn btn-primary" onClick="window.location='resultado_cliente.php';">Busqueda</button>
		<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
		<button type="button" class="btn btn-primary" onClick="window.location='ingreso_cliente.php';">Nuevo</button>
	</form>
	</div>
</body>
</html>
<?PHP
	include("../BD/conexionf.php");
?>
