<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<?PHP
    $sql = "select nombre,fechainicio,fechafin,clienteid,estadoid from Proyecto";
    $sql = $sql . " where proyectoid= " . $_POST["id"];
    $result = mysql_query($sql);
    while($row = mysql_fetch_array($result))
    {
        $nombre = $row["nombre"];
        $fechainicio = $row["fechainicio"];
        $fechafin = $row["fechafin"];
        $cliente = $row["clienteid"];
        $estado = $row["estadoid"];
    }
?>
<div align='center'>
    <font size="4"><b>Modificar Proyecto</b></font>
    <br><br>
    <form class="form-horizontal" name='datos' method='post' action='update_proyecto.php'>
        <input type="hidden" name="proyecto" value="<?PHP echo $_POST["id"];?>"><br>

        <div class="form-group">
            <label class="col-sm-4 control-label">Nombre</label>
            <div class="col-sm-5">
                <input type="text" name="nombre" value="<?PHP echo $nombre; ?>" class="form-control" placeholder="Nombre">
            </div>
            </div>
        
        <div class="form-group">
            <label class="col-sm-4 control-label">Fecha Inicio</label>
            <div class="col-sm-5">
                <input type="text" name="fechai" value="<?PHP echo $fechainicio; ?>" class="form-control" placeholder="Fecha Inicio">
            </div>
            </div>
        
            <div class="form-group">
            <label class="col-sm-4 control-label">Fecha Entrega</label>
            <div class="col-sm-5">
                <input type="text" name="fechaf" value="<?PHP echo $fechafin; ?>" class="form-control" placeholder="Fecha Entrega">
            </div>
            </div>


        <div class="form-group">
            <label class="col-sm-4 control-label">Cliente</label>
            <div class="col-sm-5">
        <select name="cliente" class="form-control">
            <?PHP
                $sql = "select clienteid, nombre from Cliente";
                $sql = $sql . " order by nombre";
                $result = mysql_query($sql);
                while($row = mysql_fetch_array($result))
                {
                    $texto = "";
                    if ($cliente == $row["clienteid"])
                    {
                        $texto = " selected";
                    }
                    echo "<option value='" . $row["clienteid"] . "'" . $texto . ">";
                    echo $row["nombre"] . "</option>";
                }
            ?>
        </select></div></div>

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

        <table>
        <tr><td><b>Tareas</b></td>
        <td>
        <?PHP
            $sql = "select t.tareaid, t.nombre, pt.proyectoid as tareaid2 from Tarea t left outer join Proyecto_Tarea pt";
            $sql = $sql . " on t.tareaid = pt.tareaid";
            $sql = $sql . " and pt.proyectoid= " . $_POST["id"];
            $sql = $sql . " order by t.nombre";
            $result = mysql_query($sql);
            while($row = mysql_fetch_array($result))
            {
                $texto="";
                if (!is_null($row["tareaid2"]))
                {
                    $texto = "checked";
                }
                echo "<input type='checkbox' name='tarea[]' value='" . $row["tareaid"] . "' " . $texto .">";
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