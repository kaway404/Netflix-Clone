<?php include '../database/config.php';

$name = $_POST['name'];
if(isset($_COOKIE['iduser']) && (isset($_COOKIE['cry']) )){

if($_POST['name']==""){
	echo ('Preencha o campo Nome');	
}

$iduser = $_COOKIE['iduser'];

if($_POST['name']!=""){

	$result_usuario = "SELECT * FROM perfil WHERE id = '$iduser' LIMIT 1";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $resultado = mysqli_fetch_assoc($resultado_usuario);
    $totaldeperfil = mysqli_num_rows($resultado_usuario);
     if($totaldeperfil < 4){

    $sql = "INSERT INTO perfil (iduser, name)
			VALUES ('".$iduser."', '".$name."')";

			if (mysqli_query($conn, $sql)) {
			    echo "Criado com sucesso";
			    echo '<script>location.href="/browse";</script>';
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
		}
	}
}
	?>