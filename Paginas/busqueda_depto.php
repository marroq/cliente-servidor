<?php
	include("global/header.php");
?>
<div align='center'>
	<br><br>
	<font size='4'><b>Busqueda Departamentos</b></font>
	<br><br>
	<form class="form-horizontal" name='datos' method='post' action='resultado_deptos.php'>
		<div class="form-group">
    		<label class="col-sm-4 control-label">Nombre</label>
    		<div class="col-sm-5">
    			<input type="text" name="nombre" class="form-control" placeholder="Nombre">
    		</div>
    	</div>

		<button type="submit" class="btn btn-primary" onClick="window.location='resultado_deptos.php';">Busqueda</button>
		<button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
		<button type="button" class="btn btn-primary" onClick="window.location='ingreso_deptos.php';">Nuevo</button>
	</form>
	</div>
</body>
</html>
