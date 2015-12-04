<?PHP
        include("../BD/conexioni.php");
        include("global/header.php");
?>
<div align='center'>
<font size='4'><b>Empresa Modificada</b></font><br>
        <?PHP
                $sql="update Empresa set";
                $sql = $sql . " nombre = '" . $_POST["nombre"] . "',";
                $sql = $sql . " telefono = '" . $_POST["telefono"] . "',";
                $sql = $sql . " direccion = '" . $_POST["direccion"] . "'";
                $sql = $sql . " where empresaid = '" . $_POST["empresa"] . "'";
                $result = mysql_query($sql);
                
                $sql = "delete from Empresa_Departamento where empresaid = " . $_POST["empresa"];
                $result = mysql_query($sql);
                if (isset($_POST['depto']))
                {
                        foreach ($_POST['depto'] as $depto) 
                        {
                                $sql = "insert into Empresa_Departamento(empresaid,deptoid)";
                                $sql = $sql . " values(" . $_POST["empresa"] . ", " . $depto .")";
                                $result = mysql_query($sql);
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
