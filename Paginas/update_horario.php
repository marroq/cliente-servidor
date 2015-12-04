<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<div align='center'>
<font size='4'><b>Horario Modificado</b></font><br>
        <?PHP
                if (($_POST["entrada"] <= 0) || ($_POST["salida"] <= 0) || ($_POST["entrada"] > 12) || ($_POST["salida"] > 12)) 
                {
                        echo "ERROR! HORARIO NO PERMITIDO";
                }
                else 
                {
                $sql="update Horario set";
                $sql = $sql . " empleadoid = " . $_POST["empleado"] . ",";
                $sql = $sql . " fecha = STR_TO_DATE('" . $_POST["fecha"] . "', '%Y-%m-%d'),";
                $sql = $sql . " entrada = " . $_POST["entrada"] . ",";
                $sql = $sql . " salida = " . $_POST["salida"];
                $sql = $sql . " where horarioid = '" . $_POST["horario"] . "'";
                $result = mysql_query($sql);
                }
        ?>
        <br><br>Proceso Realizado con Exito<br><br>
        <a href='busqueda_horario.php'>Continuar</a>
</div>
</body>
</html>
<?PHP
        include("../BD/conexionf.php");
?>
