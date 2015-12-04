<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<div align='center'>
        <font size='4'><b>Empleado Eliminado</b></font>
        <?PHP
                $sql="delete from Empresa_Empleado where empleadoid= " . $_POST["id"];
                $result = mysql_query($sql);

                $sql="delete from Empleado_Departamento where empleadoid= " . $_POST["id"];
                $result = mysql_query($sql);

                $sql="delete from Empleado_Proyecto where empleadoid= " . $_POST["id"];
                $result = mysql_query($sql);

                $sql="delete from Horario where empleadoid= " . $_POST["id"];
                $result = mysql_query($sql);

                $sql="delete from Telefono where empleadoid= " . $_POST["id"];
                $result = mysql_query($sql);

                $sql="delete from Empleado where empleadoid= " . $_POST["id"];
                $result = mysql_query($sql);
        ?>
        <br><br>Proceso Realizado con Exito<br><br>
        <a href='busqueda_empleado.php'>Continuar</a>
</div>
</body>
</html>
<?PHP
        include("../BD/conexionf.php");
?>
