<!DOCTYPE >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<!---banner--->
<!----start-slider-script---->
			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!----//End-slider-script---->
			<!-- Slideshow 4 -->
			<div id="section-1" class="section">
			    <div id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			        <li>
			          <img src="images/sl1.jpg" alt="">
					  <div class="caption">
			     	  		<div class="header-info">
							<h2><a href="#">Escápate este fin de semana</a></h2>
							<lable></lable>
							<h1><a href="#">RESORT DE PLAYA CIELO</a></h1>
							</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/sl2.jpg" alt="">
			        <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Diviértete en la playa</a></h2>
							<lable></lable>
							<h1><a href="#">RESORT DE PLAYA CIELO</a></h1>
							</div>
			          </div>
			        </li>
			        <li>
			          <img src="images/slide.jpg" alt="">
			          <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Escápate este fin de semana</a></h2>
							<lable></lable>
							<h1><a href="#">¡Míralo! ¡Sentirlo! ¡Me encanta!</a></h1>
							</div>
			          </div>
			        </li>
					<li>
			          <img src="images/beach4.jpg" alt="">
			          <div class="caption">
			          	<div class="header-info">
							<h1><a href="#">El destino</a></h1>
							<lable></lable>
							<h2><a href="#">DE TUS SUEÑOS</a></h2>
							</div>
			          </div>
			        </li>
                    <li>
			          <img src="images/sl4.jpg" alt="">
			          <div class="caption">
			          	<div class="header-info">
							<h2><a href="#">Sentirse protegido</a></h2>
							<lable></lable>
							<h1><a href="#">Durante tus vacaciones</a></h1>
							</div>
			          </div>
			        </li>
			      </ul>
			    </div>	         
			    <div class="clearfix"> </div>
				</div>
		<!----- //End-slider---->
<!---banner--->	
</body>
</html>