<?php if(!isset($_SESSION)) { session_start(); } ?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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

<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="insert into users values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["s1"] . "')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
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




<form method="post">
<table border="0" width="400px" height="300px" align="center" class="tableshadow">
<tr><td colspan="2" class="toptd">Agregar Usuario</td></tr>
<tr><td class="lefttxt">Nombre de usuario</td><td><input type="text" name="t1" required pattern="[a-zA-z1 _]{3,50}" title"Ingrese solo caracteres y n??meros entre 3 y 50 para el nombre de usuario" /></td></tr>
<tr><td class="lefttxt">Contrase??a</td><td><input type="password" name="t2" required pattern="[a-zA-z0-9]{1,10}" title"Ingrese solo caracteres y n??meros entre 1 y 10 para el nombre de la empresa"/></td></tr>
<tr><td class="lefttxt">Confirmar contrase??a</td><td><input type="password" name="t3" required pattern="[a-zA-z0-9]{1,10}" title"Ingrese solo caracteres y n??meros entre 1 y 10 para el nombre de la empresa"/></td></tr>
<tr><td class="lefttxt">Tipo de usuario</td><td><select name="s1" required><option value="">Seleccionar</option><option value="Admin">Admin</option><option value="General">General</option></select></td></tr>
<tr><td>&nbsp;</td><td ><input type="submit" value="GUARDAR" name="sbmt" /></td></tr>




</table>
</form>



</div>


</div>
<?php include('bottom.php'); ?>
</body>
</html>