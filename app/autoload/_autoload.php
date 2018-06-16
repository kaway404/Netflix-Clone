<?php
if(isset($_COOKIE['iduser'])){
	include './app/components/dashboard/dashboard.php';
}
else{
if(isset($_GET['login'])){
	include '/app/components/account/login.php';
}
elseif(isset($_GET['register'])){
	include './app/components/account/register.php';
}
else{
include './app/components/home/home_index.php';
}
}
?>