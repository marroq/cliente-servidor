<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<?PHP
    $sql = "select nombre1,nombre2,apellido1,apellido2,puestoid from Empleado";
    $sql = $sql . " where empleadoid= " . $_POST["id"];
    $result = mysql_query($sql);
    while($row = mysql_fetch_array($result))
    {
        $nombre1 = $row["nombre1"];
        $nombre2 = $row["nombre2"];
        $apellido1 = $row["apellido1"];
        $apellido2 = $row["apellido2"];
        $puesto = $row["puestoid"];
    }
?>
<div align='center'>
    <font size="4"><b>Modificar Empleado</b></font>
    <br><br>
    <form class="form-horizontal" name='datos' method='post' action='update_empleado.php'>
        <input type="hidden" name="empleado" value="<?PHP echo $_POST["id"];?>"><br>

        <div class="form-group">
            <label class="col-sm-4 control-label">Primer Nombre</label>
            <div class="col-sm-5">
                <input type="text" name="nombre1" value="<?PHP echo $nombre1; ?>" class="form-control" placeholder="Primer Nombre">
        </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-4 control-label">Segundo Nombre</label>
            <div class="col-sm-5">
                <input type="text" name="nombre2" value="<?PHP echo $nombre2; ?>" class="form-control" placeholder="Segundo Nombre">
        </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-4 control-label">Primer Apellido</label>
            <div class="col-sm-5">
                <input type="text" name="apellido1" value="<?PHP echo $apellido1; ?>" class="form-control" placeholder="Primer Apellido">
        </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Segundo Apellido</label>
            <div class="col-sm-5">
                <input type="text" name="apellido2" value="<?PHP echo $apellido2; ?>" class="form-control" placeholder="Segundo Apellido">
        </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Puesto</label>
            <div class="col-sm-5">
        <select name="puesto" class="form-control">
            <?PHP
                $sql = "select puestoid, nombre from Puesto";
                $sql = $sql . " order by nombre";
                $result = mysql_query($sql);
                while($row = mysql_fetch_array($result))
                {
                    $texto = "";
                    if ($puesto == $row["puestoid"])
                    {
                        $texto = " selected";
                    }
                    echo "<option value='" . $row["puestoid"] . "'" . $texto . ">";
                    echo $row["nombre"] . "</option>";
                }
            ?>
        </select></div></div>

        <table>
        <tr><td><b>Empresas</b></td>
        <td>
        <?PHP
            $sql = "select e.empresaid, e.nombre, ee.empresaid as empresaid2 from Empresa e left outer join Empresa_Empleado ee";
            $sql = $sql . " on e.empresaid = ee.empresaid";
            $sql = $sql . " and ee.empleadoid= " . $_POST["id"];
            $sql = $sql . " order by e.nombre";
            $result = mysql_query($sql);
            while($row = mysql_fetch_array($result))
            {
                $texto="";
                if (!is_null($row["empresaid2"]))
                {
                    $texto = "checked";
                }
                echo "<input type='checkbox' name='empresa[]' value='" . $row["empresaid"] . "' " . $texto .">";
                echo $row["nombre"] . "<br>";
            }
        ?>
        <br>
        </td>
        </tr>

        <tr><td><b>Departamentos</b></td>
        <td>
        <?PHP
            $sql = "select d.deptoid, d.nombre, ed.deptoid as deptoid2 from Departamento d left outer join Empleado_Departamento ed";
            $sql = $sql . " on d.deptoid = ed.deptoid";
            $sql = $sql . " and ed.empleadoid= " . $_POST["id"];
            $sql = $sql . " order by d.nombre";
            $result = mysql_query($sql);
            while($row = mysql_fetch_array($result))
            {
                $texto="";
                if (!is_null($row["deptoid2"]))
                {
                    $texto = "checked";
                }
                echo "<input type='checkbox' name='depto[]' value='" . $row["deptoid"] . "' " . $texto .">";
                echo $row["nombre"] . "<br>";
            }
        ?>
        <br>
        </td>
        </tr>

        <tr><td><b>Proyectos</b></td>
        <td>
        <?PHP
            $sql = "select p.proyectoid, p.nombre, ep.proyectoid as proyectoid2 from Proyecto p left outer join Empleado_Proyecto ep";
            $sql = $sql . " on p.proyectoid = ep.proyectoid";
            $sql = $sql . " and ep.empleadoid= " . $_POST["id"];
            $sql = $sql . " order by p.nombre";
            $result = mysql_query($sql);
            while($row = mysql_fetch_array($result))
            {
                $texto="";
                if (!is_null($row["proyectoid2"]))
                {
                    $texto = "checked";
                }
                echo "<input type='checkbox' name='proyecto[]' value='" . $row["proyectoid"] . "' " . $texto .">";
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