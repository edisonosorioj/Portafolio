<html>
<head>
<title>Facebook Page Album</title>
<style type='text/css'>
	body
	{
		font-family:arial;
	}
	#wrapper
	{
		width:880px;
		margin:0 auto:
	}
	#back
	{
		display:block;
		padding:5px;
		float:left;
	}
	#backAlbums
	{
		display:block;
		padding:5px;
		float:right;
	}
	#next
	{
		float:right;
		display:block;
		padding:5px;
	}
	#prev
	{
		float:left;
		display:block;
		padding:5px;
	}
	.ImageLink
	{
		display:block;
		float:left;
		padding:5px;
		margin:5px;
	}
	.ImageLink img
	{
		width:150px;
	}
</style>
</head>

<body>
<div id ="wrapper">
<?php
	define('PAGE_ID', '7608631709');
	define('APP_ID','');
	define('APP_SECRET','');
	include("phpcUrl.php");
	$face = new FacePageAlbum(PAGE_ID, $_GET['aid'], $_GET['aurl'], APP_ID, APP_SECRET);
?>
</div>
</body>
</html>