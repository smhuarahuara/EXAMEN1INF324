<?php
	include "user_session.php";

	$userSesion = new UserSession();
	if(isset($_SESSION['user'])){
		echo "entra";
		header("Location: users.php?usuario=".$_SESSION['user']."&password=".$_SESSION['pass']);
	}

?>
<?php include "miestiloinicio.inc.php"?>
							<!-- Content -->
							
									<header class="main">
										<h2>Inicia Sesion</h2>
									</header>
									<hr class="major" />
									<!-- Elements -->
										<div class="row gtr-200">
											<div class="col-6 col-12-medium">
												<!-- Form -->
													<form method="GET" action="users.php">
														<div class="row gtr-uniform">
															<div class="col-6 col-12-xsmall">
																<input type="text" name="usuario" id="demo-email" value="" placeholder="Usuario" />
															</div>
															<!-- Break -->
															<div class="col-6 col-12-xsmall">
																<input type="password" name="password" id="demo-name" value="" placeholder="Password" />
															</div>
															<!-- Break -->
															<div class="col-12">
																<ul class="actions">
																	<li><input type="submit" value="Iniciar Sesion" class="primary" /></li>
																</ul>
															</div>
														</div>
													</form>
													<?php
            if(isset($_GET["e"])){
                echo "<p>El usuario o la contraseña no son correctos</p>";
            }
        ?>
											</div>
										</div>

								</section>

						</div>
					</div>
<?php include "miestilofin.inc.php"?>