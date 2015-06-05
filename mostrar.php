<html>
    <body>
        <form  method="POST">
            <input type="submit" value="Mostrar" name="mostrar" />
        </form>
    </body>
</html>
<?php
include './conexiondb.php';
$conn=  conectar();
if(isset($_REQUEST['mostrar'])){
    $query="select * from registro";
    $resultado=  mysql_query($query);
    $total=  mysql_num_rows($resultado);
    echo "<table border='2'><tr><td>id</td><td>nombre</td><td>apodo</td><td>clave</td></tr>";
    while($dato=  mysql_fetch_array($resultado)){
        echo "<tr>";
        echo "<td>".$dato['id']."</td>";
        echo "<td>".$dato['nombre']."</td>";
        echo "<td>".$dato['apodo']."</td>";
        echo "<td>".$dato['clave']."</td>";
        echo "</tr>";
        }
        echo "</table>";
        echo "numero de registros en la tabla".$total;
        desconectar();
}
?>