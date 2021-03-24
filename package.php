<!DOCTYPE >
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
	<div class="row">
		<div class="col-sm-12 col-md-3">
			<table cellpadding="0" cellspacing="0" width="100%">
				<tr>
					<td style="font-size:18px" color="#09F">Categoría</td>
				</tr>
				<?php

				$s = "select * from category";
				$result = mysqli_query($cn, $s);
				$r = mysqli_num_rows($result);
				//echo $r;

				while ($data = mysqli_fetch_array($result)) {

					echo "<tr><td style=' padding:5px;'><a href='subcat.php?catid=$data[0]'>$data[1]</a></td></tr>";
				}

				?>

			</table>
		</div>

		<div class="col-sm-12 col-md-9">
			<h3 class="headingText">Packages</h3>
			<div class="row">
				<?php
				$s = "select * from package where package.subcategory='" . $_GET["subcatid"] . "'";
				$result = mysqli_query($cn, $s);
				$r = mysqli_num_rows($result);
				//echo $r;
				$n = 0;
				while ($data = mysqli_fetch_array($result)) {

					if ($n % 3 == 0) {
				?>
					<?php

					} ?>
					<div class="card col-sm-6 col-md-4">
						<div class="image">
						<img src="Admin/packimages/<?php echo $data[5]; ?>" width="100%" height="200px" /></td>
						</div>
						<div class="container-card">
							<h4 style="background-color:#60B0E6; font-family:Lucida Calligraphy; color:#FFF">
								<?php echo $data[1]; ?>
							</h4>
							<div style="background-color:#60B0E6; font-family:Lucida Calligraphy">
							<a style="color: white;" href="detail.php?pid=<?php echo $data[0];   ?>">
										<font color="#FFFFFF">Ver Detalle</font>
									</a>
							</div>
						</div>
					</div>
					<?php

					if ($n % 3 == 2) {
					?>
						</tr>

				<?php
					}
					$n = $n + 1;
				}
				mysqli_close($cn);
				?>
			</div>
		</div>
	</div>

	<div style="clear:both"></div>

	<?php include('bottom.php'); ?>
</body>

</html>