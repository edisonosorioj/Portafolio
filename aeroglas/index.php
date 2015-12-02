<html>
<head>
	<title>Aeroglas</title>
	<meta charset='UTF-8' />
	<meta name="viewport" content="width:device-width,maximum-scale=1"/>
	<link rel="icon" href="image/fav.png">
	<link rel="stylesheet" type="text/css" href="static/estilos.css">
	<link rel="stylesheet" type="text/css" href="static/normalize.css">
</head>
<body>
      <header class="Header">

	</header>
	
	<section class="Profile">
		<div id ="wrapper">
		<?php
		   define('PAGE_ID', 'edison.osorio.71');
		   define('APP_ID','');
		   define('APP_SECRET','');
		   include("phpcUrl.php");
		   $face = new FacePageAlbum(PAGE_ID, $_GET['aid'], $_GET['aurl'], APP_ID, APP_SECRET);
		?>
            
	</section>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>

</div>
</body>
</html>