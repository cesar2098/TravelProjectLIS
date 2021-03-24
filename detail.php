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
  <div class="row" style="margin-top: 30px;">
    <div class="col-sm-12 col-md-3">

      <table cellpadding="0" cellspacing="0" width="100%">
        <tr>
          <td style="font-size:18px" color="#09F">Category</td>
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
      <h3 class="headingText">Ver Paquetes</h3>
      <div class="row">
        <?php

        $s = "select * from package,category,subcategory where package.category=category.cat_id and package.subcategory=subcategory.subcatid and package.packid='" . $_GET["pid"] . "'";
        $result = mysqli_query($cn, $s);
        $r = mysqli_num_rows($result);
        //echo $r;
        $n = 0;
        $data = mysqli_fetch_array($result);
        mysqli_close($cn);
        ?>

        <div class="col-sm-10" style="padding: 20px;">
          <span class="middletext">Nombre del paquete:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data[1]; ?>
          <div class="row">
            <div class="col-sm-4 col-md-4"><img src="Admin/packimages/<?php echo $data[5]; ?>" width="100%" height="200px" /></div>
            <div class="col-sm-4 col-md-4"><img src="Admin/packimages/<?php echo $data[6]; ?>" width="100%" height="200px" /></div>
            <div class="col-sm-4 col-md-4"><img src="Admin/packimages/<?php echo $data[7]; ?>" width="100%" height="200px" /></div>
          </div>
          <div class="row">
            <span class="middletext">Category:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $data[10]; ?>
            <br />
            <span class="middletext">Subcategoría:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $data[12]; ?>
            <br />
            <span class="middletext">Precio:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?php echo $data[4]; ?>
            <p><?php echo $data[8]; ?></p>
            <a class="btn btn-info" href="enquiry.php?pid=<?php echo $data[0];   ?>">Preguntar</a>
          </div>
        </div>
      </div>
    </div>
  </div>
    <?php include('bottom.php'); ?>
</body>
</html>