<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<div align='center'>
        <font size='4'><b>Empresa Eliminada</b></font><br>
        <?PHP
                $sql2= "select ee.empresaid as empresa from Empresa_Empleado ee, Empleado e, Empresa em ";
                $sql2= $sql2 . " where ee.empleadoid=e.empleadoid";
                $sql2= $sql2 . " and ee.empresaid=em.empresaid";
                $sql2= $sql2 . " and ee.empresaid=". $_POST["id"];

                $result = mysql_query($sql2);
                $num=0;
                while($row = mysql_fetch_array($result)) {
                        if($num>0) {
                                echo "";
                        } else {
                                if ($_POST["id"]==$row["empresa"]) {
                                echo "ERROR! EXISTEN EMPLEADOS PARA ESTA EMPRESA";
                                $num++;
                                } 
                                else 
                                {
                                $sql="delete from Empresa_Departamento where empresaid= " . $_POST["id"];
                                $result = mysql_query($sql);

                                $sql="delete from Empresa where empresaid= " . $_POST["id"];
                                $result = mysql_query($sql);
                                }
                        }
                }
        ?>
        <br><br>Proceso Realizado con Exito<br><br>
        <a href='busqueda_empresa.php'>Continuar</a>
</div>
</body>
</html>
<?PHP
        include("../BD/conexionf.php");
?>
