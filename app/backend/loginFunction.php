<?php include '../database/config.php';
	$json = file_get_contents('php://input'); 	
	$obj = json_decode($json,true);

	$email = $_POST['email'];
	
	$password = $_POST['senha'];;
	
	if($_POST['email']==""){
		echo json_encode('Preencha os campos');	
	}
	elseif($_POST['senha']==""){
		echo json_encode('Preencha os campos');	
	}

	if($_POST['email']!=""){
	
	$result= $mysqli->query("SELECT * FROM users where email='$email' and password='$password'");
	
		if($result->num_rows==0){
			echo json_encode('Email ou senha incorretos');				
		}
		else{		
		echo ('1');				
		}
	}	
?>