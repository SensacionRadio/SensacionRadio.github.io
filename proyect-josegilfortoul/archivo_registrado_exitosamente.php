<!DOCTYPE html>
<html lang="es">

	<head>
		<title>PREINSCIPCIÓN UNIDAD EDUCATIVA DR. JOSÉ GIL FORTOUL</title>
		<link rel="icon" href="images/favicon.png">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- bootstrap css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- style css -->
		<link rel="stylesheet" href="css/style.css">
		<!-- Responsive-->
		<link rel="stylesheet" href="css/responsive.css">  
		<!-- Scrollbar Custom CSS -->
		<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
		<!-- Tweaks for older IEs-->
		<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
		<link href="css/fontawesome-all.css" rel="stylesheet">
	</head>

	<!-- body -->
	<body class="main-layout">
		<!-- end loader -->
		<div class="loader_bg">
			<div class="loader"><img src="images/loading.gif" alt="#" /></div>
		</div>
		<!-- end loader -->

		<!-- header -->
		<header>
			<div class="header-top">
				<div class="header">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xl-2 col-lg-4 col-md-4 col-sm-3 col logo_section">
								<div class="full">
									<div class="center-desk">
										<div class="logo">
											<a href="index.html"><img src="images/logo.png" alt="#" /></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-10 col-lg-8 col-md-8 col-sm-9">
								<div class="header_information">
									<div class="menu-area">
										<div class="limit-box">
											<nav class="main-menu ">
												<ul class="menu-area-main">
													<li><a href="index.html">Inicio</a></li>
													<li><a href="preinscripcion.html">Preinscripción</a></li>
													<li><a href="index.html">Volver</a></li>										
												</ul>
											</nav>
										</div>
									</div>
									<!-- <div class="mean-last">
										<a href="#"><img src="images/search_icon.png" alt="#" /></a> <a href="#">Iniciar Sesión</a>
									</div> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

	<!-- contacto -->
	<div id="contact" class="contact">
		<center>
			<form class="contact_bg" method="POST" action="preinscripcion.html">
					<div class="col-md-12">
						<div class="titlepage">
							<h2>¡Registro completo!<strong class="yellow"></strong></h2>
						</div>
												<div class="col-md-12">

						<?php
                   		 session_start();
    
                		echo "Por favor pasar por la oficina para formalizar su inscripción: C.I: N°".$_SESSION['ci_alumno'];

               			 ?>
               			 </div>					
					</div>
				</div>
			</form>
		</center>
	</div>
	<!-- end contacto -->

	<!--  Footer -->
	<footer>
		<div class="footer ">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Dirección</h2>
						<span>Urbanización Fundemos I, Avenida Caripe cruce con calle Quiriquire, Maturín, Estado Monagas, 6201, Venezuela</span>
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
						<div class="row">
							<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 ">
								<div class="address">
									<h3>Contacto</h3>
									<ul class="loca">
										<li>
											<a href="mailto:educacionmediageneral@gmail.com">educacionmediageneral@gmail.com</a>
										</li>
										<li>
											<a href="tel:+582916512106">0291 651 2106</a>
										</li>
									</ul>
									<ul class="social_link">
										<li><a href="https://www.facebook.com/josegil.fortoul.522" target="_blank"><img src="icon/fb.png"></a></li>
										<li><a href="#"><img src="icon/tw.png"></a></li>
										<li><a href="educacionmediageneral@gmail.com" target="_blank"><img src="icon/instagram.png"></a></li>
									</ul>
								</div>
							</div>

							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="address">
									<h3>Menú</h3>
									<ul class="Links_footer">
										<li>
											<a href="index.html">Inicio</a>
										</li>
										<li>
											<a href="index.html">Sobre Nosotros</a>
										</li>
										<li>
											<a href="index.html">Etapas</a>
										</li>
										<li>
											<a href="index.html">Instalaciones</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="address">
									<ul class="Links_footer">
										<li>
											<a href="index.html">Objetivos</a>
										</li>
										<!-- <li>
											<a href="index.html">Contacto</a>
										</li> -->
										<li>
											<a href="#">Preinscripción</a>
										</li>
									</ul>
								</div>
							</div>

							<div class="col-lg-3 col-md-6 col-sm-6 ">
								<div class="address">
									<a><img src="images/logo1.png" alt="logo"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright">
				<div class="container">
					<p>Copyright © 2021 Design by J&S Producciones</a></p>
				</div>
			</div>
		</div>
	</footer>
	<!-- end footer -->
	
	<!-- Javascript files-->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/jquery-3.0.0.min.js"></script>
	<script src="js/plugin.js"></script>
	<!-- sidebar -->
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
	</body>
</html>