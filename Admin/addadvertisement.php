<?php if(!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html>
<html>
<head>
<title>My Tour | packages</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

<link href="style.css" rel="stylesheet" type="text/css" />

<link href="../css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">




<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="../css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="../js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!--/animated-css-->
</head>
<body>
<!--header-->
<!--sticky-->
<?php
if($_SESSION['loginstatus']=="")
{
	header("location:loginform.php");
}
?>

	<?php include('function.php'); ?>

<?php include('top.php'); ?>
<!--/sticky-->
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:450px;">
<?php include('left.php'); ?>
</div>
<div class="col-sm-9">




<form method="post" enctype="multipart/form-data">
<table border="0" width="400px" height="300px" align="center" class="tableshadow">
<tr><td colspan="2" class="toptd">Agregar publicidad</td></tr>
<tr><td class="lefttxt">Titulo</td><td><input type="text" name="t1" required pattern="[a-zA-z _]{3,50}" title"Ingrese solo caracteres entre 3 y 50 para el título" /></td></tr>
<tr><td class="lefttxt">Nombre de Compañia</td><td><input type="text" name="t2"  required="required" pattern="[a-zA-z. _]{3,50}" title "Ingrese solo caracteres entre 3 y 50 para el nombre de la empresa" /></td></tr>
<tr><td class="lefttxt">Subir foto</td><td><input type="file" name="t3"/></td></tr>
<tr><td class="lefttxt">Detalles</td><td><textarea name="t4"/></textarea></td></tr>
<tr><td>&nbsp;</td><td ><input type="submit" value="GUARDAR" name="sbmt" /></td></tr>
</table>
</form>
</div>


</div>
<?php include('bottom.php'); ?>

<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	
	$target_dir = "addverimages/";
	$target_file = $target_dir.basename($_FILES["t3"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
	//check if image file is a actual image or fake image
	$check=getimagesize($_FILES["t3"]["tmp_name"]);
	if($check!==false) {
		echo "el archivo es una imagen - ". $check["mime"]. ".";
		$uploadok = 1;
	}else{
		echo "El archivo no es una imagen.";
		$uploadok=0;
	}
	
	
	
	
	//aloow certain file formats
	if($imagefiletype != "jpg" && $imagefiletype !="png" && $imagefiletype !="jpeg" && $imagefileype !="gif"){
		echo "lo siento, solo se permiten archivos jpg, jpeg, png y gif.";
		$uploadok=0;
	}else{
		if(move_uploaded_file($_FILES["t3"]["tmp_name"], $target_file)){
			
	
	
	$s="insert into advertisement(title,companyname,pic,detail) values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . basename($_FILES["t3"]["name"]) . "','" . $_POST["t4"] ."')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Guardado');</script>";
	
	
		} else{
			echo "Lo siento, hubo un error al cargar su archivo.";
		}}
}
?>

</body>
</html>


