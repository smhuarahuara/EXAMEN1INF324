<?php include "miestiloinicio.inc.php"?> 
<!-- Content -->
								<section>
									<header class="main">
										<h1>Ayuda de la Plataforma</h1>
									</header>

									<!-- Content -->
										<h2 id="content">Simplemente sencillo</h2>
										<p>El uso de la plataforma es bastante sencillo, con unos clicks podras encontrar el login que buscas.</p>
										<div class="row">
											<div class="col-6 col-12-small">
												<h3>Para que se usa?</h3>
												<p>Es netamente utilizado para brindar informacion a los usuarios del campus acerca de sus notas asi tambien para el uso de docentes.</p>
											</div>
											<div class="col-6 col-12-small">
												<h3>Quienes acceden al mismo?</h3>
												<p>Estudaintes y docentes de nuestra prestigiosa facultad.</p>
											</div>
											<!-- Break -->
											<div class="col-4 col-12-medium">
												<h3>Como esta creada la pagina?</h3>
												<p>La pagina se encuentra establecida en apache con php, una base de datos MySQL lo cual nos brinda responsividad sobre el usuario.</p>
											</div>
											<div class="col-4 col-12-medium">
												<h3>¿Como consigo participar?</h3>
												<p>Para participar en el desarrollo de la plataforma contactar a los administrativos de la facultad.</p>
											</div>
										</div>

									<hr class="major" />

									<!-- Elements -->
										<div class="row gtr-200">
											<div class="col-6 col-12-medium">
												<!-- Icons -->
													<div class="row">
														<div class="col-6 col-12-small">
															<h4>Redes Sociales</h4>
															<ul class="icons">
																<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
																<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
																<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
																<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
																<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
																<li><a href="#" class="icon brands fa-tumblr"><span class="label">Tumblr</span></a></li>
															</ul>

														</div>
													</div>
													
												
											</div>
										</div>
								</section>
						</div>
					</div>
					<!-- Sidebar -->
 <div id="sidebar">
						<div class="inner">
							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="login.html">Login</a></li>
										<?php echo "<li><a href='".$it."./index.php'>Inicio</a></li>";
										      echo "<li><a href='".$it."./ayuda.php'>Ayuda</a></li>"
                                        ?>
										<li>
											<span class="opener">Carreras</span>
											<ul><?php
												echo "<li><a href='".$it."./info/index.php?v=1'>INFORMATICA</a></li>";
												echo "<li><a href='".$it."./qmc/index.php?v=1'>QUIMICA</a></li>";
												echo "<li><a href='".$it."./fisica/index.php?v=1'>FISICA</a></li>";
                                                ?>
											</ul>
										</li>
									</ul>
								</nav>
							<!-- Section -->
								<section>
									<header class="major">
										<h2>Mantente informado</h2>
									</header>
									<p style="text-align: justify;">Para conocer acerca de demas carreras y consultas mas personalizadas puedes encontrarnos en los siguientes directorios.</p>
									<ul class="contact">
										<li class="icon solid fa-envelope"><a href="informaciones@fcpn.edu.bo">informaciones@fcpn.edu.bo</a></li>
										<li class="icon solid fa-phone">(+591) 69982132</li>
										<li class="icon solid fa-home">La Paz, Monoblock Central 2do Patio #8254<br />
										La Paz-BOLIVIA</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
								</footer>

						</div>
					</div>
    </div>
<!-- Scripts -->
            <?php
            echo "<script src='.".$it."/assets/js/jquery.min.js'></script>";
			echo "<script src='.".$it."/assets/js/browser.min.js'></script>";
			echo "<script src='.".$it."/assets/js/breakpoints.min.js'></script>";
			echo "<script src='.".$it."/assets/js/util.js'></script>";
			echo "<script src='.".$it."/assets/js/main.js'></script>";
            ?>

	</body>
</html>
