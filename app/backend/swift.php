<?php
if(isset($_COOKIE['iduser']) && (isset($_COOKIE['cry']) )){
	$perfil = $_GET['id'];
	setcookie("perfil", $perfil, time() + (86400 * 30), "/");

	echo '<script>location.href="/dashboard";</script>';
}	
?>