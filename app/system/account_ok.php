<?php
function verificar (){
include './app/database/config.php';
if(isset($_COOKIE['iduser']) && (isset($_COOKIE['cry']) )){

	$iduser = $_COOKIE['iduser'];
	$cry = $_COOKIE['cry'];

	$result_usuario = "SELECT * FROM users WHERE id = '$iduser' && cry = '$cry' LIMIT 1";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $user = mysqli_fetch_assoc($resultado_usuario);

    if(isset($user)){
    	echo '';

    }
    else{
    	// setcookie("iduser", "", time()+7200);
     //        setcookie("cry", "", time()+7200);
    	// echo '<script>location.href="/login";</script>';
    }
}
}
?>