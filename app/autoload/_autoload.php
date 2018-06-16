<?php
session_start();
if(isset($_COOKIE['iduser']) && (isset($_COOKIE['cry']) )){
	include './app/system/account_ok.php';
	if(isset($_COOKIE['perfil'])){
	include './app/components/dashboard/dashboard.php';
	}
	else{
	if(isset($_GET['browse'])){
	include './app/components/dashboard/browse.php';
	}
	elseif(isset($_GET['createprofile'])){
		include './app/components/dashboard/create_profile.php';
	}
	elseif(isset($_GET['editprofile'])){
		include './app/components/dashboard/edit_profile.php';
	}
	elseif(isset($_GET['editandoprofile'])){
		include './app/components/dashboard/editandoprofile.php';
	}
	else{
	include './app/components/dashboard/browse.php';
	}
	}
}
else{
if(isset($_GET['login'])){
	include './app/components/account/login.php';
}
elseif(isset($_GET['register'])){
	include './app/components/account/register.php';
}
else{
include './app/components/home/home_index.php';
}
}
?>