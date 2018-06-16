<?php
if(isset($_GET['login'])){
	echo '<title>Netflix</title>';
}
elseif(isset($_GET['register'])){
	echo '<title>Netflix</title>';
}
elseif(isset($_GET['dashboard'])){
	echo '<title>Netflix</title>';
	echo '<link rel="stylesheet" type="text/css" href="/app/styles/darkness.css?v=1.0">';
}
elseif(isset($_GET['browse'])){
	echo '<title>Netflix</title>';
	echo '<link rel="stylesheet" type="text/css" href="/app/styles/darkness.css?v=1.0">';
}
elseif(isset($_COOKIE['iduser']) && (isset($_COOKIE['cry']) )){
	if(isset($_COOKIE['perfil'])){
		echo '<title>Netflix</title>';
		echo '<link rel="stylesheet" type="text/css" href="/app/styles/darkness.css?v=1.0">';
	}
	else if(empty($_COOKIE['perfil'])){
		echo '<link rel="stylesheet" type="text/css" href="/app/styles/darkness.css?v=1.0">';
	}
	else{
		echo '<title>Netflix</title>';
		echo '<link rel="stylesheet" type="text/css" href="/app/styles/darkness.css?v=1.0">';
	}
}
else{
	echo '<title>Netflix Brasil - assistir séries e filmes online</title>';
	echo '<link rel="stylesheet" type="text/css" href="/app/styles/dark.css?v=1.0">';
}
?>