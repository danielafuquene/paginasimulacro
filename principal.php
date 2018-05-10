<?php
require_once("php/conexion.php");
session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Institución Educativa ITI</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Agility  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<link href='https://fonts.googleapis.com/css?family=Marvel:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css'>
<!--google fonts-->
<script src="js/jquery-1.11.0.min.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

</head>
<body>
<!--header strat here-->
<div class="banner">
	<div class="header">
		<div class="container">
			<div class="header-main">
				
				<div class="logo">
			       <h1><span class="books"></span> <a href="index.html"><strong>Institución Educativa Instituto Técnico Industrial</strong></a></h1>
			    </div>
				
				<div class="top-nav">
				 	 <span class="menu"> <img src="C:\xampp\htdocs\soft\web\images\exam.jgp" alt=""></span>
				     

								<table> 
                                  
                                <tr>
                                  <td>
                                
                                  <table width="220" border="0" cellspacing="0" cellpadding="1">

                                  <tr bgcolor="#c0d6e4" align="center"> 
                                    <td><b><font color="#FFFFFF">Usuario</font></b></td> 
                                  </tr> 
 
                                  <tr bgcolor="#990033"> 
                                  <td> 
                                  
                                    <table width="100%" border="0" cellspacing="0" cellpadding="4"> 
                                      <tr bgcolor="#FFFFFF"> 
                                        <td align="center"><?php echo $_SESSION['usuario'];?></td> 
                                      </tr> 
                                    </table> 
                                  </td> 
                                  </tr>

                                  </table>
                                
                                  </td>

                                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                   
                                  <td>
                                
                                  <table width="220" border="0" cellspacing="0" cellpadding="1">

                                  <tr bgcolor="#c0d6e4" align="center"> 
                                    <td><b><font color="#FFFFFF">Rol</font></b></td> 
                                  </tr> 
 
                                  <tr bgcolor="#990033"> 
                                  <td> 
                                  
                                    <table width="100%" border="0" cellspacing="0" cellpadding="4"> 
                                      <tr bgcolor="#FFFFFF"> 
                                        <td align="center">Usuario</td> 
                                      </tr> 
                                    </table> 
                                  </td> 
                                  </tr>

                                  </table>
                                
                                  </td>

                                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                   
                                  <td>
                                
                                  <table width="220" border="0" cellspacing="0" cellpadding="1">

                                  <tr bgcolor="#c0d6e4" align="center"> 
                                    <td><b><font color="#FFFFFF">Fecha</font></b></td> 
                                  </tr> 
 
                                  <tr bgcolor="#990033"> 
                                  <td> 
                                  
                                    <table width="100%" border="0" cellspacing="0" cellpadding="4"> 
                                      <tr bgcolor="#FFFFFF"> 
                                        <td align="center"><?php echo $fecha_actual=date("Y-m-d");?></td> 
                                      </tr> 
                                    </table> 
                                  </td> 
                                  </tr>

                                  </table>
                                
                                  </td>

                                </tr> 
                                </table>

											
						<!-- script-for-menu -->
										 <script>
										   $( "span.menu" ).click(function() {
											 $( "ul.res" ).slideToggle( 300, function() {
											 // Animation complete.
											  });
											 });
										</script>
						<!-- /script-for-menu -->

				 </div>

                
				<div class="clearfix"> </div>
			</div>
				<section>
					
				</section>
			 <div class="clearfix"> </div>
            
		 </div>


	 </div>
	 <div align="center">
	 	<h1>Presentación de simulacro ICFES</h1>
        <h2>A continuación, seleccione el componente del cual desea realizar la evaluación</h2>
	 </div>
	
   </div>
   



<!--header end here-->
<!-- FlexSlider -->
				  <script defer src="js/jquery.flexslider.js"></script>
				  <script type="text/javascript">
					$(function(){
					});
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
<!-- FlexSlider -->
<!--banner end here-->
<!--educate logos start here-->
<div class="educate">
	<div class="container">
		<div class="education-main">
			<ul class="ch-grid">
				<h2>Componentes de las pruebas saber </h2>
				<br>
				
				<!-- BOTON MATEMATICAS 
				<div class="col-md-3 w3agile" onclick="location.href='matematicas.php';" >
					<li>
						<div class="ch-item">
							<div class="ch-info">
								
								<div class="ch-info-front ch-img-1">
									<span class="glyphicon glyphicon-grain" aria-hidden="true"> </span>
					                <h5>Matemáticas</h5>
								</div>

								<div class="ch-info-back">
									<h3>Componente de pruebas saber</h3> <br>
									<p>Comenzar prueba</p>
								</div>
							</div>
						</div>
					</li>
				</div>--> 

                <!-- BOTON CIENCIAS 
				<div class="col-md-3 w3agile" onclick="location.href='matematicas.php';">
					<li>
						<div class="ch-item">
							<div class="ch-info">
								<div class="ch-info-front ch-img-2">
									<span class="glyphicon glyphicon-education" aria-hidden="true"> </span>
					                <h5>Ciencias naturales</h5>
								</div>
								<div class="ch-info-back">
									<h3>Componente de pruebas saber</h3> <br>
									<p>Comenzar prueba</p>
								</div>
							</div>
						</div>
					</li>
				</div>-->
				<!-- BOTON COMPRESION LECTORA -->
				<div class="col-md-3 w3agile" align="center" onclick="location.href='español.php';">
					<li>
						<div class="ch-item">
							<div class="ch-info">
								<div class="ch-info-front ch-img-4">
									<span class="glyphicon glyphicon-eye-open" aria-hidden="true"> </span>
					                <h5>Compresión Lectora</h5>
								</div>
								<div class="ch-info-back">
									<h3>Componente de pruebas saber</h3> <br>
									<p>Comenzar prueba</p>
								</div>
							</div>
						</div>
					</li>
				</div>
				
                <!--BOTON INGLES -->
				<div class="col-md-3 w3agile" onclick="location.href='ingles.php';">
					<li>
						<div class="ch-item">
							<div class="ch-info">
								<div class="ch-info-front ch-img-3">
									<span class="glyphicon glyphicon-hourglass" aria-hidden="true"> </span>
					                <h5>Inglés</h5>
								</div>
								<div class="ch-info-back">
									<h3>Componente de pruebas saber</h3> <br>
									<p>Comenzar prueba</p>
								</div>
							</div>
						</div>
					</li>
				</div>
				
				<!-- BOTON FILOSOFIA -->
				<div class="col-md-3 w3agile" align="center" onclick="location.href='prueba.php';">
					<li>
						<div class="ch-item">
							<div class="ch-info">
								<div class="ch-info-front ch-img-4">
									<span class="glyphicon glyphicon-eye-open" aria-hidden="true"> </span>
					                <h5>Filosofia</h5>
								</div>
								<div class="ch-info-back">
									<h3>Componente de pruebas saber</h3> <br>
									<p>Comenzar prueba</p>
								</div>
							</div>
						</div>
					</li>
				</div>
				

				<div class="clearfix"> </div>
			 </ul>
		 </div>
	</div>
</div>
<!--educate logos end here-->
<!--we do start here-->
<div class="we-do">
	<div class="container">
		<div class="we-do-main">
			   <h2>Objetivo </h2>
			   <h4>Calidad en las pruebas saber</h4>
			   <p> Mediante el entrenamiento dirigido por parte de los docentes, los estudiantes darán respuesta a las preguntas planteadas en cada componente con el fin de manejar los temas evaluados.</p>
			  <!-- <a href="single.html">Read More</a>-->
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--we do end here-->
<!--pop-up-box-->
	  <script type="text/javascript" src="js/modernizr.custom.53451.js"></script>
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<!--pop-up-box-->

<!--watch start here
<div class="watch-video">
	<div class="container">
		<div class="watch-video-main">
			<div class="video-bottom">
			 <a class="play-icon popup-with-zoom-anim" href="#small-dialog5"> <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"> </span> </a>
			 video
				<div id="small-dialog5" class="mfp-hide">
					<iframe src="https://player.vimeo.com/video/2990650" width="640" height="361" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen> </iframe>
				</div>
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});

						});
				</script>
		</div>


			<h3>Watch Our Video</h3>
		</div>
	</div>
</div>-->
<!--watch end here-->
<!--event start here
<div class="events">
	<div class="container">
		<div class="events-main">
			<div class="events-top">
				<h3>Events</h3>
			</div>
			<div class="events-grid">
				<div class="col-md-3 event-month wthree">
					<h3>20</h3>
					<h4>June</h4>
				</div>
				<div class="col-md-5 event-text">
					<h4>Lorem ipsum dolor sit amet</h4>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					<a href="single.html">Read More</a>
					<p> </p>
				</div>
				<div class="col-md-4 event-img">
					<div class="item item-type-move">
						<a class="item-hover" href="single.html">
							<div class="item-info">
								<div class="headline">
									Learning
									<div class="line"> </div>
								</div>
								<div class="date">Lorem ipsum dolor</div>
							</div>
							<div class="mask"> </div>
					    </a>
						<div class="item-img">
								<img src="images/e1.jpg" class="img-responsive" alt="">
						</div>
                </div>

				</div>
			   <div class="clearfix"> </div>
			</div>
			<div class="events-grid">
				<div class="col-md-3 event-month wthree">
					<h3>24</h3>
					<h4>June</h4>
				</div>
				<div class="col-md-5 event-text">
					<h4>Lorem ipsum dolor sit amet</h4>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					<a href="single.html">Read More</a>
					<p> </p>
				</div>
				<div class="col-md-4 event-img">
					<div class="item item-type-move">
						<a class="item-hover" href="single.html">
							<div class="item-info">
								<div class="headline">
									Learning
									<div class="line"> </div>
								</div>
								<div class="date">Lorem ipsum dolor</div>
							</div>
							<div class="mask"> </div>
					    </a>
						<div class="item-img">
								<img src="images/e2.jpg" class="img-responsive" alt="">
						</div>
                </div>
				</div>
			   <div class="clearfix"> </div>
			</div>
			<div class="events-grid">
				<div class="col-md-3 event-month wthree">
					<h3>26</h3>
					<h4>June</h4>
				</div>
				<div class="col-md-5 event-text">
					<h4>Lorem ipsum dolor sit amet</h4>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					<a href="single.html">Read More</a>
					<p> </p>
				</div>
				<div class="col-md-4 event-img">
					<div class="item item-type-move">
						<a class="item-hover" href="single.html">
							<div class="item-info">
								<div class="headline">
									Learning
									<div class="line"> </div>
								</div>
								<div class="date">Lorem ipsum dolor</div>
							</div>
							<div class="mask"> </div>
					    </a>
						<div class="item-img">
								<img src="images/e3.jpg" class="img-responsive" alt="">
						</div>
                </div>
				</div>
			   <div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>-->
<!--event end here-->
<script src="js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
      $("#slider2").responsiveSlides({
        auto: true,
        pager: true,
        speed: 300,
        namespace: "callbacks",
      });
    });
  </script>

<!--clients star here
<div class="clients">
	<div class="container">
		<div class="clients-main">
			<div class="clients-top">
				<h3>Happy Clients</h3>
			</div>
		 <div class="slider-bann wow bounceInRight" data-wow-delay="0.3s">
	    <ul class="rslides" id="slider2">
	      <li>
	      	<div class="clients-text">
	      		<img src="images/c1.png" alt="">
		     	<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</p>
		        <h4>John</h4>
	        </div>
	      </li>
	      <li>
	      	<div class="clients-text">
	      		<img src="images/c2.png" alt="">
		     	<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</p>
		        <h4>Smith</h4>
	        </div>
	        </li>
	      <li>
	      	<div class="clients-text">
	      		<img src="images/c3.png" alt="">
		     	<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</p>
		        <h4>Daneal</h4>
		  </div>
	      </li>
	    </ul>
	    </div>
    </div>

	</div>
</div>-->
<!--clients end here-->
<!--footer start here-->
<div class="footer w3ls">
	<div class="container">
		<div class="footer-main">
			<div class="footer-top">
			<!--	<div class="col-md-4 ftr-grid">
					<h3>Learning</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
				</div>-->
				<div class="col-md-4 ftr-grid">
					<h3>Dirección</h3>
					<div class="ftr-address">
						<div class="local">
							<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
						</div>
						<div class="ftr-text">
							<p>Urbanización Nueva Ciudad Milagro Armenia (Q)</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="ftr-address">
						<div class="local">
							<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
						</div>
						<div class="ftr-text">
							<p>318 450 51 59 - 316 482 95 55</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			<!--	<div class="col-md-4 ftr-grid">
					<h3>Stay In Touch</h3>
					<form action="#" method="post">
						<input type="text" placeholder="Enter Email"  name="Enter Email" required="">
						<input type="submit" value="">
					</form>
					<ul class="ftr-social-icons">
						<li><a class="fa" href="https://web.facebook.com/instituto.tecnicoindustrial.75?fref=ts&_rdc=1&_rdr"> </a></li>
					</ul>
				</div>
			   <div class="clearfix"> </div>
			</div>
			<div class="footer-bottom">
				<div class="col-md-6 ftr-navg">
					<ul>
						<li><a href="index.html">Inicio</a></li>
						<li><a href="about.html">Quienes Somos</a></li>
						<li><a href="shortcodes.html">Short Codes</a></li>
						<li><a href="gallery.html">Gallery</a></li>
						<li><a href="contact.html">Contáctanos</a></li>
					</ul>
				</div>
				<div class="col-md-6 copyrights">
					<p>© 2016 Learning. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
				</div>-->
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--footer end here-->
</body>
</html>
