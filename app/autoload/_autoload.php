<?php
if(isset($_COOKIE['iduser'])){
	include './app/components/dashboard/dashboard.php';
}
else{
include './app/components/home/home_index.php';
}
?>