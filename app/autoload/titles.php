<?php
if(isset($_GET['login'])){
	echo '<title>Netflix</title>';
}
elseif(isset($_GET['register'])){
	echo '<title>Netflix</title>';
}
elseif(isset($_GET['dashboard'])){
	echo '<title>Netflix</title>';
}
elseif(isset($_COOKIE['iduser']) && (isset($_COOKIE['cry']) )){
	if(isset($_COOKIE['perfil'])){
		echo '<title>Netflix</title>';
	}
	else{
		echo '<title>Netflix</title>';
	}
}
else{
	echo '<title>Netflix Brasil - assistir séries e filmes online</title>';
}
?>