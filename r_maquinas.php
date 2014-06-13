<?php
if ($rol!="") {
	echo'	
	<section id="mcontacto">
		<ul>
			<li class="skills">
				<h3 class="capitaliza">maquinas para el alquiler</h3>
				<ul>
					<li>
						<img src="imagenes/bobcat.jpg" alt="skills">
						<p>Esta maquina sirve para hacer bla bla bla <a class="link" href="#contacto">contactarnos!</a></p>
						<div class="barra"><p class="skill-1">
								<span>
									$6500
								</span>
							</p>
						</div>
					</li> 
					<li>
						<img src="imagenes/otra.jpg" alt="skills">
						<p>Esta maquina sirve para hacer bla bla bla <a class="link" href="#contacto">contactarnos!</a></p>
						<div class="barra"><p class="skill-2">
								<span>
									$3500
								</span>
							</p>
						</div>
					</li>
					<li>
						<img src="imagenes/foto10.jpg" alt="skills">
						<p>Esta maquina sirve para hacer bla bla bla <a class="link" href="#contacto">contactarnos!</a></p>
						<div class="barra"><p class="skill-3">
								<span>
									$3500
								</span>
							</p>
						</div>
					</li>
				</ul>
			</li>
		</ul>
		<div class="back">
			<a href="#portfolio">
				volver
			</a>
		</div>
	</section>';
}else{
	echo'
	<section id="mcontacto">
		<ul>
			<li class="skills">
				<h3 class="capitaliza">maquinas para el alquiler</h3>
				<ul>
					<li>
						<img src="imagenes/bobcat.jpg" alt="skills">
						<p>Esta maquina sirve para hacer bla bla bla <a class="link" href="#contacto">contactarnos!</a></p>
						<div class="barra"><p class="skill-1">
								<span>
									$ solo para usuarios <a href="f_login.php">registrados</a>
								</span>
							</p>
						</div>
					</li>
					<li>
						<img src="imagenes/otra.jpg" alt="skills">
						<p>Esta maquina sirve para hacer bla bla bla <a class="link" href="#contacto">contactarnos!</a></p>
						<div class="barra"><p class="skill-2">
								<span>
									$ solo para usuarios <a href="f_login.php">registrados</a>
								</span>
							</p>
						</div>
					</li>
					<li>
						<img src="imagenes/foto10.jpg" alt="skills">
						<p>Esta maquina sirve para hacer bla bla bla <a class="link" href="#contacto">contactarnos!</a></p>
						<div class="barra"><p class="skill-3">
								<span>
									$ solo para usuarios <a href="f_login.php">registrados</a>
								</span>
							</p>
						</div>
					</li>

				</ul>
			</li>
		</ul>
		<div class="back">
			<a href="#portfolio">
				volver
			</a>
		</div>
	</section>';
}?>
