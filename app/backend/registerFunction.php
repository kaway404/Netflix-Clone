<?php include '../database/config.php';
	$json = file_get_contents('php://input');
 
	 // decoding the received JSON and store into $obj variable.
	 $obj = json_decode($json,true);
	 
	// same with $email.
	$email = $_POST['email'];
	 
	// same with $password.
	$password = $_POST['senha'];

	$passwordcry = sha1($_POST['senha']);

	$crying = "netflix_" . sha1($_POST['email']);
	
	if($_POST['email']==""){
		echo ('Preencha os campos');	
	}
	elseif($_POST['senha']==""){
		echo j('Preencha os campos');	
	}

	if($_POST['email']!=""){
	
	$result_usuario = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $resultado = mysqli_fetch_assoc($resultado_usuario);

    if(isset($resultado)){
    	echo 'Esse email já existe';
    }
		else
		{	
		  $sql = "INSERT INTO users (cry, email, password)
			VALUES ('".$crying."', '".$email."', '".$passwordcry."')";

			if (mysqli_query($conn, $sql)) {
			    echo "Cadastrado com sucesso";
			    echo '<script>location.href="/login";</script>';
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
				
		}
	}

	
?>