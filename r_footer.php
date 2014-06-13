	<footer>
		<ul class="center">
			<li class="lifooter">
				<nav>
					<ul>
						<li class="fontsmall">MAQUI-VIAL &copy;&nbsp; 2014 Todos los derechos reservados</li>
						<li class="fontsmall"><a href="legal.html">Aviso legal</a>&nbsp;&nbsp;&nbsp;<a href="privacidad.html">Pol&iacute;tica de privacidad</a></li>
						<li class="fontsmall"><a  class="linkf" href="http://www.soluciones3g.com.ar/" target="_blank" rel="nofollow"> by walterg20 >> soluciones 3g</a></li>
    					<li>
     						<a href="http://validator.w3.org/check?uri=referer">
     							<img src="http://www.w3.org/Icons/valid-html401" alt="Valid HTML 4.01 transitional" height="31" width="88">
     						</a>
    					</li>
						<li>
     			            <a href="http://jigsaw.w3.org/css-validator/check/referer">
			                    <img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" />
            				</a>
    					</li>
						<li>
				            <a href="http://jigsaw.w3.org/css-validator/check/referer">
				                <img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" />
				            </a>
    					</li>
						<?php if ($rol!="") {
							echo"<li><a href='l_cerrar_sesion.php'>".$usuario." cerrar sesión </a></li>";
						 }else{
							echo'<li><a href="f_login.php">loguearse</a></li>';
						 }?>
					</ul>
				</nav>	
			</li>

		</ul>
	</footer>
