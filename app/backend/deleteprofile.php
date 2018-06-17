<?php include '../database/config.php';

if(isset($_COOKIE['iduser']) && (isset($_COOKIE['cry']) )){

$iduser = $_COOKIE['iduser'];

$idprofile = $_GET['id'];


	$result_usuario = "SELECT * FROM perfil WHERE iduser = '$iduser' and id = '$idprofile' LIMIT 1";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $resultado = mysqli_fetch_assoc($resultado_usuario);
    $totaldeperfil = mysqli_num_rows($resultado_usuario);
     if($totaldeperfil < 4){

    $sql = "DELETE FROM perfil WHERE iduser = '$iduser'and id = '$idprofile' ";

			if (mysqli_query($conn, $sql)) {
			    echo '<script>location.href="/browse";</script>';
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
		}
}
	?>