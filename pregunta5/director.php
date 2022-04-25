<?php
    include "miestiloinicio.inc.php";
    include "conexion.inc.php";
    $sql = "select avg(case when persona.coddepto='02' then inscripcion.nota_final end) LP, avg(case when persona.coddepto='03' then inscripcion.nota_final end) CB, avg(case when persona.coddepto='04' then inscripcion.nota_final end) RU, avg(case when persona.coddepto='05' then inscripcion.nota_final end) PT, avg(case when persona.coddepto='06' then inscripcion.nota_final end) TA, avg(case when persona.coddepto='07' then inscripcion.nota_final end) SC from persona, inscripcion where persona.ci=inscripcion.ciestudiante";
    $resultado=mysqli_query($con, $sql);
?>
<section id="banner">
    <div class="content">
<h2>Bienvenido director</h2>
<table border="1px">
    <tr>
        <td>LP</td>
        <td>CB</td>
        <td>RU</td>
        <td>PT</td>
        <td>TA</td>
        <td>SC</td>
    </tr>
<?php
    while($fila=mysqli_fetch_array($resultado)){
    
        echo "<td>".$fila['LP']."</td>";
        echo "<td>".$fila['CB']."</td>";
        echo "<td>".$fila['RU']."</td>";
        echo "<td>".$fila['PT']."</td>";
        echo "<td>".$fila['TA']."</td>";
        echo "<td>".$fila['SC']."</td>";
    }
?>
</table>
</div>
</section>
<a href="logout.php">Cerrar sesión</a>
</body>
</html>