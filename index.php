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
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/app/styles/style.css?v=1.0">
	<?php
	titulo();
	?>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
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