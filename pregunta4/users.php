<?php
    include "conexion.inc.php";
	include "user_session.php";
    $user=$_GET["usuario"];
    $password=$_GET["password"];
    $sql="select * from acceso where usuario='".$user."' and password='".$password."'";
    $resultado=mysqli_query($con, $sql);
    while($fila=mysqli_fetch_array($resultado)){
        $datos['ci']=$fila['ci'];
    }
    if(!isset($datos["ci"])){
        header("Location: login.php?e=e");
    }
	if(!isset($_SESSION['user'])){
		$userSession = new UserSession();
		$userSession->setCurrentUser($user, $password);
	}
	if($datos['ci']==8901){
		header("Location: director.php");
	}
?>
<?php include "miestiloinicio.inc.php"?> 
        <!-- Banner -->
        <section id="banner">
									<div class="content">
										<header>
										<?php
										// $sql="select * from persona where ci=".$datos["ci"];
										$sql="select * from persona where ci=".$datos['ci']; 
										$resultado=mysqli_query($con, $sql);
										while($fila=mysqli_fetch_array($resultado)){
											$dat['nombre']=$fila['nombrecompleto'];
											}
									?>
									<div>
									<p id="p1"><h3>Bienvenido <?php echo $dat['nombre'];?> estas son las materias a las cuales estas registrado.</h3></p>
									<a href="logout.php">Cerrar sesión</a>
									</div>
									<div style="text-align:center;">
										<table border="1px" style="margin: 0 auto;">
										<tr>
										<td>ci</td>
										<td>sigla</td>
										<td>nota1</td>
										<td>nota2</td>
										<td>nota3</td>
										<td>nota_final</td>
										</tr>
										<?php
										$sql="select * from inscripcion where ciestudiante='".$datos["ci"]."'";
										$resultado=mysqli_query($con, $sql);
										while($filas=mysqli_fetch_array($resultado)){
											echo "</tr>";
											echo "<td>".$filas['ciestudiante']."</td>";
											echo "<td>".$filas['sigla']."</td>";
											echo "<td>".$filas['nota1']."</td>";
											echo "<td>".$filas['nota2']."</td>";
											echo "<td>".$filas['nota3']."</td>";
											echo "<td>".$filas['nota_final']."</td>";
											echo "</tr>";

											}
										?>
										</table>
									</div>
										
									</div>
									<span class="">
										<img src="images/fcpn.png"  width="200" heigth="200"/>
									</span>
			</section>
 						</div>
					</div>    
							
        
<?php include "miestilofin.inc.php"?>   