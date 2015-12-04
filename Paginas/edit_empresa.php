<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<?PHP
    $sql = "select nombre,telefono,direccion from Empresa";
    $sql = $sql . " where empresaid= " . $_POST["id"];
    $result = mysql_query($sql);
    while($row = mysql_fetch_array($result))
    {
        $nombre = $row["nombre"];
        $telefono = $row["telefono"];
        $direccion = $row["direccion"];
    }
?>
<div align='center'>
    <font size="4"><b>Modificar Empresa</b></font>
    <br><br>
    <form class="form-horizontal" name='datos' method='post' action='update_empresa.php'>
        <input type="hidden" name="empresa" value="<?PHP echo $_POST["id"];?>"><br>

        <div class="form-group">
            <label class="col-sm-4 control-label">Nombre</label>
            <div class="col-sm-5">
                <input type="text" name="nombre" value="<?PHP echo $nombre; ?>" class="form-control" placeholder="Nombre">
            </div>
            </div>
        
        <div class="form-group">
            <label class="col-sm-4 control-label">Telefono</label>
            <div class="col-sm-5">
                <input type="text" name="telefono" value="<?PHP echo $telefono; ?>" class="form-control" placeholder="Telefono">
            </div>
            </div>
        
            <div class="form-group">
            <label class="col-sm-4 control-label">Direccion</label>
            <div class="col-sm-5">
            <textarea class="form-control" name="direccion" cols='22' row='3'><?PHP echo $direccion;?></textarea>
            </div>
            </div>

        <table>
        <tr><td><b>Departamentos</b></td>
        <td>
        <?PHP
            $sql = "select d.deptoid, d.nombre, ed.deptoid as deptoid2 from Departamento d left outer join Empresa_Departamento ed";
            $sql = $sql . " on d.deptoid = ed.deptoid";
            $sql = $sql . " and ed.empresaid= " . $_POST["id"];
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
        </td>
        </tr>
        <br>
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