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
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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