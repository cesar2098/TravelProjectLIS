<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link href="css/owl.carousel.css" rel='stylesheet' type='text/css' />
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--js-->
	<script src="js/jquery.min.js"></script>

	<!--/js-->
	<!--animated-css-->
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<!--/animated-css-->
</head>

<body class="container-fluid">
	<!--header-->
	<!--sticky-->
	<?php include('function.php'); ?>

	<?php include('top.php'); ?>
	<!--/sticky-->
	<?php include('slider.php'); ?>
	<!--About-->
	<div class="about section" id="section-2">
		<div class="about-head text-center">
			<h3>Sobre Nosotros</h3>
			<span></span><img src="images/about-img.png" alt=""><span></span>
		</div>
		<div class="container">
			<div class="col-md-4 about-grids">
				<h4><span class="icon1"></span>Nuestra visión</h4>
				<p>Turismo ético, justo y positivo tanto para los viajeros como para las personas y lugares que visitan.</p>
			</div>
			<div class="col-md-4 about-grids grid2">
				<h4><span class="icon2"></span>Nuestra misión</h4>
				<p>Asegurar que el turismo siempre beneficie a la población local desafiando las malas prácticas y promoviendo un mejor turismo.</p>
			</div>
			<div class="col-md-4 about-grids">
				<h4><span class="icon3"></span>Información de seguridad</h4>
				<p>Las vacaciones son un momento para relajarse en un entorno seguro. Para ayuda de emergencia de cualquier tipo, llame al 911 desde cualquier teléfono ... en su hotel, marque 9-911.</p>
				<div align="right"><a  class="btn btn-info" href="aboutus.php">Leer más</a></div>
			</div>
		</div>
	</div>
	<!--/About-->
	<!--top-tours-->
	<div class="section" id="section-3">
		<div id="portfolio" class="portfolio">
			<div class="top-tours-head text-center">
				<h3>Galería</h3>
				<span></span><img src="images/star.png" alt=""><span></span>

			</div>
			<ul id="filters" class="clearfix wow bounceIn" data-wow-delay="0.4s">
				<li><span class="filter active" data-filter="app card icon logo fun">TODO</span></li>
				<li><span class="filter" data-filter="app">Viaje doméstico</span></li>
				<li><span class="filter" data-filter="card">Viaje al extranjero</span></li>
				<li><span class="filter" data-filter="icon">Tour de corta duración</span></li>
				<li><span class="filter" data-filter="fun">Tour de larga duración</span></li>
			</ul>
			<div class="row">
				<div class="portfolio col-sm-6 col-md-4 col-lg-3 card mix_all" data-cat="card">
					<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
						<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
							<img src="images/t1.jpg" class="img-responsive" alt="" /></a>
					</div>
				</div>
				<div class="portfolio col-sm-6 col-md-4 col-lg-3 app mix_all" data-cat="app">
					<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
						<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
							<img src="images/t2.jpg" class="img-responsive" alt="" /></a>
					</div>
				</div>
				<div class="portfolio col-sm-6 col-md-4 col-lg-3 card mix_all" data-cat="card">
					<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
						<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
							<img src="images/t3.jpg" class="img-responsive" alt="" /></a>

					</div>
				</div>
				<div class="portfolio col-sm-6 col-md-4 col-lg-3 icon mix_all" data-cat="icon">
					<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
						<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
							<img src="images/t4.jpg" class="img-responsive" alt="" /></a>

					</div>
				</div>
				<div class="portfolio col-sm-6 col-md-4 col-lg-3 card mix_all" data-cat="card">
					<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
						<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
							<img src="images/t5.jpg" class="img-responsive" alt="" /></a>

					</div>
				</div>
				<div class="portfolio col-sm-6 col-md-4 col-lg-3 fun mix_all" data-cat="fun">
					<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
						<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
							<img src="images/t6.jpg" class="img-responsive" alt="" /></a>

					</div>
				</div>
				<div class="portfolio col-sm-6 col-md-4 col-lg-3 fun mix_all" data-cat="fun">
					<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
						<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
							<img src="images/t7.jpg" class="img-responsive" alt="" /></a>

					</div>
				</div>
				<div class="portfolio col-sm-6 col-md-4 col-lg-3 icon mix_all" data-cat="fun">
					<div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
						<a href="#" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
							<img src="images/t8.jpg" class="img-responsive" alt="" /></a>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Script for gallery Here-->
	<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
	<script type="text/javascript">
		$(function() {
			var filterList = {
				init: function() {
					// MixItUp plugin
					// http://mixitup.io
					$('#portfoliolist').mixitup({
						targetSelector: '.portfolio',
						filterSelector: '.filter',
						effects: ['fade'],
						easing: 'snap',
						// call the hover effect
						onMixEnd: filterList.hoverEffect()
					});
				},
				hoverEffect: function() {
					// Simple parallax effect
					$('#portfoliolist .portfolio').hover(
						function() {
							$(this).find('.label').stop().animate({
								bottom: 0
							}, 200, 'easeOutQuad');
							$(this).find('img').stop().animate({
								top: -30
							}, 500, 'easeOutQuad');
						},
						function() {
							$(this).find('.label').stop().animate({
								bottom: -40
							}, 200, 'easeInQuad');
							$(this).find('img').stop().animate({
								top: 0
							}, 300, 'easeOutQuad');
						}
					);
				}
			};
			// Run the show!
			filterList.init();
		});
	</script>
	<!--Gallery Script Ends-->
	<!--/top-tours-->


	<div class="row tour-guides section" id="section-4">
		<div class="col-md-12tour-guides-head text-center">
			<h3>Anuncios </h3>
			<span></span><img src="images/guide.png" alt=""><span></span>
			<div class="container">
				<p>Mis guías turísticos son caros, así que primero decida lo que quiere hacer, ya sea un recorrido general por una ciudad, un día de senderismo o visitar pueblos remotos en un país del tercer mundo. Tenga en mente una asignación de tiempo en el parque de pelota, ya sea medio día, día completo o una experiencia de varios días. Una vez que haya elegido una guía, probablemente refinará sus ideas basándose en el conocimiento de la guía.</p>
			</div>
		</div>
		<div>
			<!-- requried-jsfiles-for owl -->
			<link href="css/owl.carousel.css" rel="stylesheet">
			<script src="js/owl.carousel.js"></script>
			<script>
				$(document).ready(function() {
					$("#owl-demo").owlCarousel({
						items: 1,
						lazyLoad: true,
						autoPlay: true,
						navigation: false,
						navigationText: false,
						pagination: true,
					});
				});
			</script>
			<!-- //requried-jsfiles-for owl -->
			<div id="owl-demo" class="owl-carousel">
				<?php
				$s = "select * from advertisement";
				$result = mysqli_query($cn, $s);

				$n = 0;
				while ($data = mysqli_fetch_array($result)) {
					if ($n % 4 == 0) {
				?>

						<div class="item text-center guide-sliders">
						<?php } ?>


						<div class="col-md-3 image-grid">
							<img src="Admin/addverimages/<?php echo $data[3]; ?>" width="300px" height="150px">

							<p><a href="#"><?php echo $data[2]; ?></a></p>
						</div>
						<?php if ($n % 4 == 3) { ?>
						</div>

				<?php
						}
						$n = $n + 1;
					}
				?>
			</div>
		</div>
	</div>



	<div id="section-5" class="contact section">
		<div class="contact-head text-center">
			<h3>Contacta con nosotros</h3>
			<span></span><img src="images/mail.png" alt=""><span></span><br /><br />
			<h4 style="color:#000"> Planifique su viaje
				¡Nuestros expertos en viajes pueden ayudarlo a reservar ahora!</h4>

			<div class="contact-grids">
				<div class="container">
					<div class="col-md-4 address">
						<h4 style="color:#09F">Empresas KALER</h4>
						<p style="color:#000">NECESITAS AYUDA PARA RESERVAR PAQUETE <br />
							Para obtener sugerencias fantásticas, también puede llamar a nuestro experto en viajes.</p>
						<h5 style="color:#000"><span class="img1"></span>(+503) 2257-0000&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;(503) 7634-0000</h5>
						<h5 style="color:#000"><span class="img2"></span><a href="#">info en mytour.com&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;soporte en mytour.com</a></h5>
						<h5 style="color:#000"><span class="img3"></span>1100 Calle, Colonia Escalón.</h5>
						<br />
						<img src="images/contac.jpg" />
					</div>
					<div class="col-md-8 contact">

						<?php
						if (isset($_POST["sbmt"])) {
							$cn = makeconnection();
							$s = "insert into contactus(Name,Phno,Email,Message) values('" . $_POST["t1"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "')";
							mysqli_query($cn, $s);
							mysqli_close($cn);
							echo "<script>alert('Guardado');</script>";
						}
						?>
						<form method="post">
							<div class="row">
								<div class="form-group col-md-12">
									<input type="text" class="form-control" placeholder=" Nombre" name="t1" required title"Ingrese solo caracteres y números entre 1 y 50 para el nombre">
								</div>
								<div class="form-group col-md-12">
									<input type="phone" class="form-control" placeholder=" Teléfono" name="t2"  required title"Ingrese solo números entre 10 y 12 para el número de contacto">
								</div>
								<div class="form-group col-md-12">
									<input type="email" placeholder="correo" class="form-control" name="t3"required>
								</div>
								<div class="form-group col-md-12">
									<textarea class="form-control" placeholder="Su comentario aqui" name="t4" required /></textarea>
								</div>
								<div class="row">
									<input type="submit" class="btn btn-info" value="Enviar mensaje" name="sbmt">
								</div>
							</div>
							<div class="clearfix"></div>
						</form>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<?php include('bottom.php'); ?>
</body>

</html>