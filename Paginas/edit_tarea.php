<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<?PHP
    $sql = "select tareaid,nombre,estadoid from Tarea";
    $sql = $sql . " where tareaid= " . $_POST["id"];
    $result = mysql_query($sql);
    while($row = mysql_fetch_array($result))
    {
        $nombre = $row["nombre"];
        $estado = $row["estadoid"];
    }
?>
<div align='center'>
    <font size="4"><b>Modificar Tarea</b></font>
    <br><br>
    <form class="form-horizontal" name='datos' method='post' action='update_tarea.php'>
        <input type="hidden" name="tarea" value="<?PHP echo $_POST["id"];?>"><br>

        <div class="form-group">
            <label class="col-sm-4 control-label">Nombre</label>
            <div class="col-sm-5">
                <input type="text" name="nombre" value="<?PHP echo $nombre; ?>" class="form-control" placeholder="Nombre">
            </div>
            </div>
        
        <div class="form-group">
            <label class="col-sm-4 control-label">Estado</label>
            <div class="col-sm-5">
        <select name="estado" class="form-control">
            <?PHP
                $sql = "select estadoid, nombre from Estado";
                $sql = $sql . " order by nombre";
                $result = mysql_query($sql);
                while($row = mysql_fetch_array($result))
                {
                    $texto = "";
                    if ($estado == $row["estadoid"])
                    {
                        $texto = " selected";
                    }
                    echo "<option value='" . $row["estadoid"] . "'" . $texto . ">";
                    echo $row["nombre"] . "</option>";
                }
            ?>
        </select></div></div>

        <input type='submit' class="btn btn-success" value='Grabar'> <br><br>
        <button type="button" class="btn btn-default" onClick="window.location='menu.php';">Menu</button>
    </form>
</div>
</body>
</html>
<?PHP
    include("../BD/conexionf.php");
?>
