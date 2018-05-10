<?php
require_once("php/conexion.php");
session_start(); 
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Institución Educativa ITI</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/estiloExamen.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
<link href='https://fonts.googleapis.com/css?family=Marvel:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<!--header strat here-->
<div class="banner agileits">
	<div class="header">
		<div class="container">
			<div class="header-main">
				
				<div class="logo">
			       <h1><span class="books"></span> <a href="index.html"><strong>Institución Educativa Instituto Técnico Industrial</strong></a></h1>
			    </div>
				
				<div class="top-nav">
				 	 <span class="menu"> <img src="C:\xampp\htdocs\soft\web\images\escudo.jgp" alt=""></span>
				     

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
		
					 <div class="clearfix"> </div>
          
		 </div>
	 </div>
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
                
<br>

<div class="punt" style="font-size: 20px ">

  <TABLE BORDER = 0 WIDTH="50%" >
	<TR>
	  <TD align="center"> <b>Puntaje:</b> <?php echo $_SESSION['puntaje'];?> </TD>
	</TR>
  </TABLE>
</div>

<br>

                <?php

                $sql = "select * from preguntas";
                $result = $connection->query($sql);

                while ($fila = mysqli_fetch_array($result)){
                ?>

                <form action="php/validaRespuestas.php" method="post">
                  <TABLE BORDER = 0 WIDTH="70%" align="center">
	                <TR><TD align="center"><input type="hidden" name="id" value="<?php echo $fila["id"]; ?>"> <?php echo $fila["pregunta"]; ?></TD></TR>
	
	                <TR><TD>
	                  <br>	
	                  <TABLE BORDER = 0 WIDTH=100%>
		                
		                <TR>
		                  <TD align="center"><input type="radio" name="respuesta<?php echo $fila["id"]; ?>" value="A"> <b>A.</b> <?php echo $fila["opA"]; ?></TD>
		                  <TD align="center"><input type="radio" name="respuesta<?php echo $fila["id"]; ?>" value="B"> <b>B.</b> <?php echo $fila["opB"]; ?></TD>
		                </TR>
		                
		                <TR>
		                  <TD align="center"><input type="radio" name="respuesta<?php echo $fila["id"]; ?>" value="C"> <b>C.</b> <?php echo $fila["opC"]; ?></TD>
		                  <TD align="center"><input type="radio" name="respuesta<?php echo $fila["id"]; ?>" value="D"> <b>D.</b> <?php echo $fila["opD"]; ?></TD>
		                </TR>

		              </TABLE>
	                </TD></TR>

                     <br><br>
                <?php
                }

                $connection->close();
                ?>

                    <TR><TD align="center">

                      <br>	
                      	
                      <input type="submit" name="envior" value="Enviar Respuesta">
                      

                    </TD></TR>

                  </TABLE>
                </form>
                
                <br>
                
                <br>

<!--we do end here-->
<!--pop-up-box-->
	<script type="text/javascript" src="js/modernizr.custom.53451.js"></script>
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<!--pop-up-box-->


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
			
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--footer end here-->
</body>
</html>
