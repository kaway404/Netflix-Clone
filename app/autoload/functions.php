<?php
function script () {
	if(isset($_GET['login'])){
		echo '<script type="text/javascript" src="/app/scripts/login.js"></script>';
	}
	elseif(isset($_GET['register'])){
		echo '<script type="text/javascript" src="/app/scripts/registro.js"></script>';
	}
	elseif(isset($_GET['createprofile'])){
		echo '<script type="text/javascript" src="/app/scripts/createprofile.js"></script>';
	}
}
?>