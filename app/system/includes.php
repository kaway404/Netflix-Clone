<?php
function home_index (){
	include './app/components/home/home_index.php';
}
function dashboard (){
	if(isset($_GET['series'])){
		include './app/components/busca/series.php';
	}
	elseif(isset($_GET['filmes'])){
		include './app/components/busca/movies.php';
	}
	elseif(isset($_GET['news'])){
		include './app/components/busca/news.php';
	}
	elseif(isset($_GET['playlist'])){
		include './app/components/busca/playlist.php';
	}
	elseif(isset($_GET['genero'])){
		include './app/components/gene/home.php';
	}
	elseif(isset($_GET['generoblob'])){
		include './app/components/gene/filmes.php';
	}
	else{
		include './app/components/dashboard/dashboard.php';
	}
}
function browse (){
	include './app/components/dashboard/browse.php';
}
function createprofile (){
	include './app/components/dashboard/create_profile.php';
}
function editprofile (){
	include './app/components/dashboard/edit_profile.php';
}
function editandoprofile () {
	include './app/components/dashboard/editandoprofile.php';
}
function login (){
	include './app/components/account/login.php';
}
function register (){
	include './app/components/account/register.php';
}
function database (){
	include './app/database/config.php';
}
?>