<?php
include './app/database/config.php';
require './app/autoload/titles.php';
require './app/autoload/functions.php';
require './app/autoload/_autoload.php';
require './app/system/account_ok.php';
require './app/system/perfil_ok.php';
require './app/system/includes.php';
?>
<!DOCTYPE html>
<html>
<head>
	
	<link rel="shortcut icon" href="/app/img/favicon.ico"/>
	<meta charset="UTF-8">
  <meta name="description" content="rexo">
  <meta name="keywords" content="rexo">
  <meta name="author" content="rexo">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" type="text/css" href="/app/styles/style.css?v=1.0">
	<?php
	titulo();
	?>
	<script type="text/javascript" src="/app/scripts/jquery.js"></script>
	<?php
	script();
	?>
</head>
<body>
<?php
home();
?>
</body>
</html>	
