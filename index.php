<?php
include './app/database/config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Netflix Brasil - assistir séries e filmes online</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/app/styles/style.css?v=1.0">
</head>
<body>

<?php
if(isset($_COOKIE['iduser'])){
	include './app/components/dashboard/dashboard.php';
}
else{
include './app/components/home/home_index.php';
}
?>

</body>
</html>	