<?php if(!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table style="width:100%">
<tr><td style="font-size:28px">Admin Links</td></tr>

<?php if($_SESSION["usertype"]=="Admin")
{?>

<tr><td><a href="adduser.php">Agregar usuario</a></td></tr>
<tr><td><a href="updateuser.php">Actualizar Usuario</a></td></tr>
<tr><td><a href="deleteuser.php">Eliminar Usuario</a></td></tr>

<?php }?>

<tr><td><a href="addcategory.php">Agregar Categoría</a></td></tr>


<?php if($_SESSION["usertype"]=="Admin")
{?>
<tr><td><a href="updatecategory.php">Actualizar Categoría</a></td></tr>
<tr><td><a href="deletecategory.php">Eliminar Categoría</a></td></tr>
<?php }?>


<tr><td><a href="viewcategory.php">Ver Categoría</a></td></tr>
<tr><td><a href="addsubcategory.php">Agregar Categoría</a></td></tr>
<?php if($_SESSION["usertype"]=="Admin")
{?>
<tr><td><a href="updatesubcategory.php">Actualizar Subcategoría</a></td></tr>
<tr><td><a href="deletesubcategory.php">Eliminar Subcategoría</a></td></tr>
<?php }?>

<tr><td><a href="viewsubcategory.php">Ver Subcategoría</a></td></tr>
<tr><td><a href="addpackage.php">Agregar Paquete</a></td></tr>

<?php if($_SESSION["usertype"]=="Admin")
{?>
<tr><td><a href="updatepackage.php">Actualizar Paquete</a></td></tr>
<tr><td><a href="deletepackage.php">Eliminar Paquete</a></td></tr>

<?php }?>

<tr><td><a href="viewpackage.php">Ver Paquete</a></td></tr>

<tr><td><a href="addadvertisement.php">Agregar publicidad</a></td></tr>
<?php if($_SESSION["usertype"]=="Admin")
{?>
<tr><td><a href="deleteadvertisement.php">Eliminar publicidad</a></td></tr>
<?php }?>

<tr><td><a href="viewadvertisement.php">Ver publicidad</a></td></tr>
<tr><td><a href="viewenquiry.php">Ver Consultas</a></td></tr>
</table>


</body>
</html>