<?php

$nombre = $_POST['name'];
$mail = $_POST['email'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "\r\nEste mensaje fue enviado por: " . $nombre . " \r\n";
$mensaje .= "\r\nE-mail: " . $mail . " \r\n";
$mensaje .= "\r\nMensaje: " . $_POST['message'] . " \r\n";
$mensaje .= "\r\nMensaje enviado el " . date('d/m/Y', time());

$para = 'contacto@pivotstudio.co';
$asunto = 'Contacto desde www.pivotstudio.co';

mail($para, $asunto, utf8_decode($mensaje), $header);
?> 

<!DOCTYPE html>
<html lang="es-ES">

<head>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
<meta charset="utf-8" />
<link rel="shortcut icon" href="IMAGENES/favicon.png" />
<link rel="stylesheet" href="estilos.css" />
<link rel="stylesheet" href="responsive.css" />
<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css' />
<title>Contacto - Pivot Studio</title>
<meta name="description" content="Conoce Piranha Attack, un videojuego Casual 2D para Dispositivos Móviles (Android, iOS, Windows Phone, y Web)." >
<meta name="keywords" content="Piranha Attack, Pivot, Studio, 3D, Juegos, Videojuego, Game, Unity, HTML5, Kainy, Android, iOS">
<meta name="author" content="Pivot Studio">
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'/>
 
    
<script type='text/javascript'>
if (window.jstiming) window.jstiming.load.tick(&#39;headEnd&#39;);
</script>
</head>

<body>
<header>
   <nav id='nav'>
	<a href="http://www.pivotstudio.co/" id='logo-pivot'><img alt="Pivot Studio" border="0" src="IMAGENES/banner-pivot.png" style="width:170px;margin: 10px 10px 0;"
	    title="Pivot Studio"/></a>    
		<div id='navinti'>
		<ul class='inticl'>
			<li><a href='/'>Inicio</a></li>
			<li><a href='juegos'>Juegos</a></li>
			<li><a href='nosotros'>Nosotros</a></li>
			<li><a href='http://blog.pivotstudio.co/' target="_blank">Blog</a></li>
			<li><a href='contacto'>Contacto</a></li>
		</ul>
	</div>
	<div id='navmobi'>
		<a class='mobictr'>&#8801; Menu</a>
	</div>

	<ul class="social" id="social-icons">
		<li class="social-icon youtube-icon" data-color="#c4302b"><a href="https://www.youtube.com/user/PivotStudioRV" target="_blank"></a></li>
		<li class="social-icon facebook-icon" data-color="#3B5998"><a href="https://www.facebook.com/PivotStudio" target="_blank"></a></li>
		<li class="social-icon twitter-icon" data-color="#00acee"><a href="https://www.twitter.com/PivotStudio" target="_blank"></a></li>
	</ul>
</nav>


<script type='text/javascript'>
//<![CDATA[
$('#navinti ul.inticl').clone().appendTo('#navmobi');
$('.mobictr').toggle(function() {
    $(this).addClass('active');
    $('#navmobi .inticl').slideDown();
}, function() {
    $(this).removeClass('active');
    $('#navmobi .inticl').slideUp();
});
//]]>
</script>


</header>
<div class='clear'></div>
	<section>



<div id='home'>
<div class='main-contacto'>
<div class='margen'>
	<div class='caja-contacto'>
		<h2>Contacto</h2>

		<p>Para nosotros las impresiones y opiniones de nuestro p&uacute;blico son muy importantes. As&iacute; que cuentanos que te parecen nuestros productos!</p>

		<p>Encontraste alg&uacute;n error? haznos saber! para corregirlo muy pronto.</p> 

		<p>Tienes alguna duda?, estamos dispuestos a contestarte, tan pronto como sea posible.</p>
	</div>	
<div class='formulario-contacto'>
	<form id='contacto' action="mail.php" method="POST">
			<div id="form-inner">
				
			            <br /><h1>Mensaje enviado correctamente. Gracias por contactarnos. !!</h1>

			        </div>
	</form>			
</div>
</div>
<div class='clear'></div>

	<div class='caja5'>				
				<div class='logosfooter'>					
					<a href="http://www.pivotstudio.co/" id='logofooter-pivot'><img alt="Pivot Studio" border="0" src="IMAGENES/logopivotoscuro.png" title="Pivot Studio"/></a>
					<a href="http://netmasters.co/" id='logofooter-net' target='_blank'><img alt="Net Masters" border="0" src="IMAGENES/logonetmastersoscuro.png" title="Net Masters"/></a>
				</div>
			<div class='clear'></div>	
		
	</div> 
	

</div>

<footer>
&#169; 2013 Pivot Studio - Piranha Attack! - Todos los derechos reservados
</footer>
<div class='clear'></div>
</div>

<!-- Analitycs -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-46262919-1', 'pivotstudio.co');
  ga('send', 'pageview');
</script>
</body>	
</html>