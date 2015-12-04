<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<div align='center'>
<font size='4'><b>Proyecto Modificado</b></font><br>
        <?PHP
                $sql="update Proyecto set";
                $sql = $sql . " nombre = '" . $_POST["nombre"] . "',";
                $sql = $sql . " fechainicio = STR_TO_DATE('" . $_POST["fechai"] . "', '%Y-%m-%d'),";
                $sql = $sql . " fechafin = STR_TO_DATE('" . $_POST["fechaf"] . "', '%Y-%m-%d'),";
                $sql = $sql . " clienteid = " . $_POST["cliente"] . ",";
                $sql = $sql . " estadoid = " . $_POST["estado"];
                $sql = $sql . " where proyectoid = '" . $_POST["proyecto"] . "'";
                $result = mysql_query($sql);
                
                $sql = "delete from Proyecto_Tarea where proyectoid = " . $_POST["proyecto"];
                $result = mysql_query($sql);
                if (isset($_POST['tarea']))
                {
                        foreach ($_POST['tarea'] as $tarea) 
                        {
                                $sql = "insert into Proyecto_Tarea(proyectoid,tareaid)";
                                $sql = $sql . " values(" . $_POST["proyecto"] . ", " . $tarea .")";
                                $result = mysql_query($sql);
                        }
                }
        ?>
        <br><br>Proceso Realizado con Exito<br><br>
        <a href='busqueda_proyecto.php'>Continuar</a>
</div>
</body>
</html>
<?PHP
        include("../BD/conexionf.php");
?>
