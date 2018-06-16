<?php
if(isset($_COOKIE['iduser']) && (isset($_COOKIE['cry']) )){

	$iduser = $_COOKIE['iduser'];
	$idperfil = $_COOKIE['perfil'];

	$result_perfil = "SELECT * FROM perfil WHERE id = '$idperfil' and iduser = '$iduser' LIMIT 1";
    $resultado_perfil = mysqli_query($conn, $result_perfil);
    $perfil = mysqli_fetch_assoc($resultado_perfil );

    if(isset($perfil )){
    	echo '';
    }

    else{
    	setcookie("perfil", "", time()+7200);
    	echo '<script>location.href="/browse";</script>';
    }
}
?>