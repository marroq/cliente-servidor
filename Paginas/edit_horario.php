<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<?PHP
    $sql = "select empleadoid,fecha,entrada,salida from Horario";
    $sql = $sql . " where horarioid= " . $_POST["id"];
    $result = mysql_query($sql);
    while($row = mysql_fetch_array($result))
    {
        $empleado = $row["empleadoid"];
        $fecha = $row["fecha"];
        $entrada = $row["entrada"];
        $salida = $row["salida"];
    }
?>
<div align='center'>
    <font size="4"><b>Modificar Horario</b></font>
    <br><br>
    <form class="form-horizontal" name='datos' method='post' action='update_horario.php'>
        <input type="hidden" name="horario" value="<?PHP echo $_POST["id"];?>"><br>

        <div class="form-group">
            <label class="col-sm-4 control-label">Empleado</label>
            <div class="col-sm-5">
        <select name="empleado" class="form-control">
            <?PHP
                $sql = "select empleadoid, nombre1, apellido1 from Empleado";
                $sql = $sql . " order by nombre1";
                $result = mysql_query($sql);
                while($row = mysql_fetch_array($result))
                {
                    $texto = "";
                    if ($empleado == $row["empleadoid"])
                    {
                        $texto = " selected";
                    }
                    echo "<option value='" . $row["empleadoid"] . "'" . $texto . ">";
                    echo $row["nombre1"] . " " . $row["apellido1"] .  "</option>";
                }
            ?>
        </select></div></div>
        
        <div class="form-group">
            <label class="col-sm-4 control-label">Fecha</label>
            <div class="col-sm-5">
                <input type="text" name="fecha" value="<?PHP echo $fecha; ?>" class="form-control" placeholder="YYYY-mm-dd">
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-4 control-label">Hora Entrada</label>
            <div class="col-sm-5">
                <input type="text" name="entrada" value="<?PHP echo $entrada; ?>" class="form-control" placeholder="Hora Entrada">
            </div>
            </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Hora Salida</label>
            <div class="col-sm-5">
                <input type="text" name="salida" value="<?PHP echo $salida; ?>" class="form-control" placeholder="Hora Salida">
            </div>
            </div>
        
        <input type='submit' class="btn btn-success" value='Grabar'> <br><br>
        <button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
    </form>
</div>
</body>
</html>
<?PHP
    include("../BD/conexionf.php");
?>