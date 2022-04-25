 
  
<!-- Sidebar -->
 <div id="sidebar">
						<div class="inner">
							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
                                        <?php
                                              echo "<li><a href='".$it."./login.php'>Login</a></li>";
										      echo "<li><a href='".$it."./index.php'>Inicio</a></li>";
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