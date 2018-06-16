<?php include '../database/config.php';
	session_start();
	$json = file_get_contents('php://input'); 	
	$obj = json_decode($json,true);

	$email = $_POST['email'];
	
	$password = sha1($_POST['senha']);
	
	if($_POST['email']==""){
		echo ('Preencha os campos');	
	}

	if($_POST['email']!=""){
		$result_usuario = "SELECT * FROM users WHERE email = '$email' && password = '$password' LIMIT 1";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        if(isset($resultado)){
            setcookie("iduser", $resultado['id'], time()+7200);
            setcookie("cry", $resultado['cry'], time()+7200);
            echo 'Estamos redirecionando você';
            echo '<script>location.href="/browse";</script>';
        }
        else{
        	echo 'Email ou senha incorretos';
        }
	}	
?>