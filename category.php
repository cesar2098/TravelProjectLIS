<!DOCTYPE html>
<html >

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>My Tour | packages</title>
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href="stylecss.css" rel='stylesheet' type='text/css' />
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
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
</head>

<body class="container-fluid">
	<?php include('function.php'); ?>
	<?php include('top.php'); ?>
	<!--/sticky-->
	<?php include('slider.php'); ?>
	<div class="row" style="margin-top: 40px;">
		<div class="col-md-3" style="padding: 20px;">
			<table cellpadding="0" cellspacing="0" width="100%">
				<tr>
					<td style="font-family: 'Pangolin', cursive; font-size:20px; color:#09F"><b>Categorías</b></td>
				</tr>
				<?php
				$s = "select * from category";
				$result = mysqli_query($cn, $s);
				$r = mysqli_num_rows($result);
				//echo $r;

				while ($data = mysqli_fetch_array($result)) {

					echo "<tr><td style=' padding:5px;'><b><a href='subcat.php?catid=$data[0]'>$data[1]</a></b></td></tr>";
				}
				mysqli_close($cn);
				?>

			</table>
		</div>
		<div class="col-md-5">
			<h3 class="headingText" >Bienvenido a My Tour</h3>
			<p class="text-justify p-3">Planifique y reserve su viaje perfecto.
				Cree las vacaciones de sus sueños. qué te gusta. Haz lo que amas. Novedades Explore nuevas experiencias,
				atracciones, tendencias gastronómicas y vinícolas. ¿Qué encontrarás durante tu visita a My Tour? Impresionante
				belleza natural y el espectacular paisaje de rocas rojas del Monumento Nacional de Colorado.
				Emocionantes aventuras al aire libre que incluyen caminatas, campamentos o esquí en Grand Mesa.
				Cientos de millas de senderos de ciclismo de montaña de clase mundial, como el sendero Kokopelli.
				Increíble rafting en los rápidos del río Colorado. Impresionantes campos de golf cuyas calles verdes
				se yuxtaponen con el escarpado desierto de Redland. Lugares tranquilos para reflexionar y
				relajarse en medio del esplendor natural de Western Slope de Colorado. Un centro encantador
				lleno de excelentes tiendas, restaurantes, galerías de arte y mucho más. Este es My Tour,
				donde puedes experimentar hermosos lugares turísticos.
			</p>
		</div>
		<div class="col-md-4">
			<div style="background-image:url(images/13.jpg); background-repeat:no-repeat; color:#FFF; font-family:Lucida Sans Unicode, Lucida Grande, sans-serif; font-size:24px; " width="80%" height="300px">
				<div style="background:linear-gradient(#09F,#096,#09F); vertical-align:text-top; padding-left:5%;  width:100%;">HAVE A GOOD TIME &nbsp;&nbsp;&nbsp; without spending a dime</div>
			</div>
		</div>
	</div>

	<div style="clear:both"></div>

	<?php include('bottom.php'); ?>
</body>

</html>