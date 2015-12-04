<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<div align='center'>
<font size='4'><b>Empleado Modificado</b></font><br>
        <?PHP
                $sql="update Empleado set";
                $sql = $sql . " nombre1 = '" . $_POST["nombre1"] . "',";
                $sql = $sql . " nombre2 = '" . $_POST["nombre2"] . "',";
                $sql = $sql . " apellido1 = '" . $_POST["apellido1"] . "',";
                $sql = $sql . " apellido2 = '" . $_POST["apellido2"] . "',";
                $sql = $sql . " puestoid = '" . $_POST["puesto"] . "'";
                $sql = $sql . " where empleadoid = '" . $_POST["empleado"] . "'";
                $result = mysql_query($sql);
                
                $sql = "delete from Empresa_Empleado where empleadoid = " . $_POST["empleado"];
                $result = mysql_query($sql);
                if (isset($_POST['empresa']))
                {
                        foreach ($_POST['empresa'] as $empresa) 
                        {
                                $sql = "insert into Empresa_Empleado(empleadoid,empresaid)";
                                $sql = $sql . " values(" . $_POST["empleado"] . ", " . $empresa .")";
                                $result = mysql_query($sql);
                        }
                }

                $sql = "delete from Empleado_Departamento where empleadoid = " . $_POST["empleado"];
                $result = mysql_query($sql);
                if (isset($_POST['depto']))
                {
                        foreach ($_POST['depto'] as $depto) 
                        {
                                $sql = "insert into Empleado_Departamento(empleadoid,deptoid)";
                                $sql = $sql . " values(" . $_POST["empleado"] . ", " . $depto .")";
                                $result = mysql_query($sql);
                        }
                }

                $sql = "delete from Empleado_Proyecto where empleadoid = " . $_POST["empleado"];
                $result = mysql_query($sql);
                if (isset($_POST['proyecto']))
                {
                        foreach ($_POST['proyecto'] as $proyecto) 
                        {
                                $sql = "insert into Empleado_Proyecto(empleadoid,proyectoid)";
                                $sql = $sql . " values(" . $_POST["empleado"] . ", " . $proyecto .")";
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
