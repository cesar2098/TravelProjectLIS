<?php if (!isset($_SESSION)) {
	session_start();
} ?>

<!DOCTYPE html>
<html>

<head>
	<title>My Tour | packages</title>
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

	<link href="style.css" rel="stylesheet" type="text/css" />

	<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
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
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/jszip-2.5.0/dt-1.10.24/b-1.7.0/b-html5-1.7.0/sc-2.0.3/datatables.min.css" />

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/jszip-2.5.0/dt-1.10.24/b-1.7.0/b-html5-1.7.0/sc-2.0.3/datatables.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#packagesTable').DataTable({
				dom: 'Bfrtip',
				buttons: [
					'copyHtml5',
					'excelHtml5',
					'csvHtml5',
					'pdfHtml5'
				]
			});
		});
	</script>
</head>

<body>
	<!--header-->
	<!--sticky-->
	<?php
	if ($_SESSION['loginstatus'] == "") {
		header("location:loginform.php");
	}
	?>


	<?php include('function.php'); ?>
	<?php
	if (isset($_POST["sbmt"])) {
		$cn = makeconnection();
		$s = "insert into category(Cat_name) values('" . $_POST["t1"] . "')";
		mysqli_query($cn, $s);

		echo "<script>alert('Guardado');</script>";
	}
	?>



	<?php include('top.php'); ?>
	<!--/sticky-->
	<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
		<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
			<?php include('left.php'); ?>
		</div>
		<div class="col-sm-9">
			<td align="center" valign="top" style="padding-top:10px;">
				<table class="display" id="packagesTable" width="95%">
					<thead>
						<tr>
							<td style="font-size:15px; padding:5px; font-weight:bold;">ID</td>
							<td style="font-size:15px; padding:5px; font-weight:bold;">Nombre de PAquete</td>
							<td style="font-size:15px; padding:5px; font-weight:bold;">Categoría</td>
							<td style="font-size:15px; padding:5px; font-weight:bold;">Subcategoría</td>
							<td style="font-size:15px; padding:5px; font-weight:bold;">Precio</td>
							<td style="font-size:15px; padding:5px; font-weight:bold;">Foto1</td>
							<td style="font-size:15px; padding:5px; font-weight:bold;">Foto2</td>
							<td style="font-size:15px; padding:5px; font-weight:bold;">Foto3</td>
						</tr>
					</thead>
					<tbody>

					<?php

					$s = "select * from package";
					$result = mysqli_query($cn, $s);
					$r = mysqli_num_rows($result);
					//echo $r;

					while ($data = mysqli_fetch_array($result)) {

						echo "<tr><td style=' padding:5px;'>$data[0]</td>
										<td style=' padding:5px;'>$data[1]</td>
										<td style=' padding:5px;'>$data[2]</td>
										<td style=' padding:5px;'>$data[3]</td>
										<td style=' padding:5px;'>$data[4]</td>
										<td style=' padding:5px;'><IMG src='packimages/$data[5]' style='height:50PX' /></td>
										<td style=' padding:5px;'><IMG src='packimages/$data[6]' style='height:50PX' /></td>
										<td style=' padding:5px;'><IMG src='packimages/$data[7]' style='height:50PX' /></td>
										</tr>";
					}


					?>
					</tbody>
				</table>
		</div>


	</div>
	<?php include('bottom.php'); ?>
</body>

</html>