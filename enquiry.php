<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Tour | packages</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="stylecss.css" rel='stylesheet' type='text/css'/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
</head>

<body class="container">
		<?php include('function.php'); ?>
		<?php
		if (isset($_POST["sbmt"])) {
			$cn = makeconnection();
			$s = "insert into enquiry(Packageid,Name,Gender,Mobileno,Email,NoofDays,Child,Adults,Message,Statusfield) values('" . $_REQUEST["pid"] . "','" . $_POST["t1"] . "','" . $_POST["r1"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "','" . $_POST["t5"] . "','" . $_POST["t6"] . "','" . $_POST["t7"] . "','Pending')";
			mysqli_query($cn, $s);

			echo "<script>alert('Recibimos su consulta, en breve obtendra la información solicitada!!!');</script>";
		}
		?>
		<?php include('top.php'); ?>
		<!--/sticky-->
		<?php include('slider.php'); ?>
		<div class="row" style="margin-top: 10px;">
			<div class="col-md-4">
				<h3 style="font-size:18px" color="#09F">Categorías</h3>
				<ul>
					<?php
					$s = "select * from category";
					$result = mysqli_query($cn, $s);
					$r = mysqli_num_rows($result);
					while ($data = mysqli_fetch_array($result)) {
						echo "<li style=' padding:5px;'><a href='subcat.php?catid=$data[0]'>$data[1]</a></li>";
					}
					?>
				</ul>
			</div>
			<div class="col-md-8">
				<h3 class="headingText">Consulta</h3>
				<?php

				$s = "select * from package,category,subcategory where package.category=category.cat_id and package.subcategory=subcategory.subcatid and package.packid='" . $_GET["pid"] . "'";

				$result = mysqli_query($cn, $s);
				$r = mysqli_num_rows($result);
				//echo $r;
				$n = 0;
				$data = mysqli_fetch_array($result);
				mysqli_close($cn);
				?>
				<form method="post" enctype="multipart/form-data">
					<h3 class="text-info">Package Id:&nbsp;&nbsp;&nbsp;<?php echo $data[0]; ?></h3>
					<h3 class="text-info">Pack Name:&nbsp;&nbsp;&nbsp;<?php echo $data[1]; ?></h3>
					<div class="row">
						<div class="form-group col-md-12">
							<label for="name">Nombre</label>
							<input type="text" class="form-control" name="t1" id="name" required title"Please Enter Only Characters and numbers between 1 to 50 for Name" />
						</div>
						<div class="form-group col-md-4">
							<label for="male">Hombre</label>
							<input type="radio" class="form-control" name="r1" id="male" value="Masculino" checked="checked" />
						</div>
						<div class="form-group col-md-4">
							<label for="female">Mujer</label>
							<input type="radio" class="form-control" id="female" name="r1" value="Femenino" />
						</div>
						<div class="form-group col-md-6">
							<label for="phone">Teléfono</label>
							<input type="text" class="form-control" name="t2" required title"Please Enter Only numbers between 10 to 12 for Mobile No" />
						</div>
						<div class="form-group col-md-6">
							<label for="email">Email</label>
							<input type="email" class="form-control" name="t3" required />
						</div>
						<div class="form-group col-md-4">
							<label for="">Número de días</label>
							<input type="number" class="form-control" name="t4" required pattern="[1 _]{1,20}" title"Please Enter Only numbers between 1 to 20 for No. oF Days" />
						</div>
						<div class="form-group col-md-4">
							<label for="">Número de niños</label>
							<input type="number" class="form-control" name="t5" required pattern="[1 _]{1,10}" title"Please Enter Only numbers between 1 to 10 for Children" />
						</div>
						<div class="form-group col-md-4">
							<label for="">Número de adultos</label>
							<input type="number" class="form-control" name="t6" required pattern="[1 _]{1,20}" title"Please Enter Only numbers between 1 to 20 for No.Of Adults" />
						</div>
						<div class="form-group col-md-4">
							<label for="">Comentarios</label>
							<textarea name="t7" class="form-control" required="required" /></textarea>
						</div>
						<div class="form-group col-md-12">
							<button type="submit" value="Submit" name="sbmt" class="btn btn-primary">Enviar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	<?php include('bottom.php'); ?>

</body>