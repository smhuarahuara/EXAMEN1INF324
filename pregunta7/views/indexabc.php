
<table border="1px">
		<tr>
			<th>id</th>
			<th>nombre</th>
			<th>fecha nac</th>
            <th>coddepto</th>
		</tr>
	<?php
		foreach ($filas as $fila)
		{
			echo "<tr>";
			echo "<td>".$fila->ci."</td>";
			echo "<td>".$fila->nombrecompleto."</td>";
			echo "<td>".$fila->fechanac."</td>";
            echo "<td>".$fila->coddepto."</td>";
			echo "<td><a href='eliminar?id=".$fila->ci."'> Eliminar</a>";
            echo "<a href='editar?id=".$fila->ci."'> Editar</a></td>";
            echo "</tr>";
		}
	?>
	</table>
    