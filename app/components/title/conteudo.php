<?php
	include './app/database/config.php';
	?>
	
	<div id="header-ali" style="background: #141414!important;">
	<a href="/dashboard"><svg viewBox="0 0 111 30" id="netflix-logodash" width="100%" height="100%">    <path d="M105.062 14.28L111 30c-1.75-.25-3.499-.563-5.28-.845l-3.345-8.686-3.437 7.969c-1.687-.282-3.344-.376-5.031-.595l6.031-13.75L94.468 0h5.063l3.062 7.874L105.875 0h5.124l-5.937 14.28zM90.47 0h-4.594v27.25c1.5.094 3.062.156 4.594.343V0zm-8.563 26.937c-4.187-.281-8.375-.53-12.656-.625V0h4.687v21.875c2.688.062 5.375.28 7.969.405v4.657zM64.25 10.657v4.687h-6.406V26H53.22V0h13.125v4.687h-8.5v5.97h6.406zm-18.906-5.97V26.25c-1.563 0-3.156 0-4.688.062V4.687h-4.844V0h14.406v4.687h-4.874zM30.75 15.593c-2.062 0-4.5 0-6.25.095v6.968c2.75-.188 5.5-.406 8.281-.5v4.5l-12.968 1.032V0H32.78v4.687H24.5V11c1.813 0 4.594-.094 6.25-.094v4.688zM4.78 12.968v16.375C3.094 29.531 1.593 29.75 0 30V0h4.469l6.093 17.032V0h4.688v28.062c-1.656.282-3.344.376-5.125.625L4.78 12.968z"></path></svg></a>

	<a id="linksa" href="/dashboard" class="desative">Inicio</a>
	<a id="linksa" href="/series" class="desative">Séries</a>
	<a id="linksa" href="/movies" class="desative">Filmes</a>
	<a id="linksa" href="/news" class="desative">Novidades</a>
	<a id="linksa" href="/myplaylist" class="desative">Playlist</a>

	</div>
		<?php
		$idhaha = $_GET['id'];
		$result_filme = "SELECT * FROM filmes WHERE url = '$idhaha'";
        $resultado_filme = mysqli_query($conn, $result_filme);
        $resultado = mysqli_fetch_assoc($resultado_filme);
        if(isset($resultado)){
        ?>
	<div id="title">
		<div class="info_left">
			<h1><?php echo $resultado['name'];?></h1>
			<span id="ano"><?php echo $resultado['age'];?></span>
			<br>
			<br>
			<span id="synopse"><?php echo $resultado['synopse'];?></span>
			<br>
			<br>
			<br>
			<br>
			<button><i class="fas fa-play"></i><span>Assistir</span></button>
		</div>
		<div class="info_right">
			<img src="<?php echo $resultado['background'];?>"/>
		</div>
			<div class="bottom_lol">
		<center>
		<a class="ativo">Sobre</a>
		<a>Filmes Semelhantes</a>
		</center>
	</div>
	</div>
	<?php } ?>

		<?php
		$idhaha = $_GET['id'];
		$result_serie = "SELECT * FROM series WHERE url = '$idhaha'";
        $resultado_serie = mysqli_query($conn, $result_serie);
        $resultadoserie = mysqli_fetch_assoc($resultado_serie);
        if(isset($resultadoserie)){
        ?>
	<div id="title">
		<div class="info_left">
			<h1><?php echo $resultadoserie['name'];?></h1>
			<span id="ano"><?php echo $resultadoserie['age'];?></span>
			<br>
			<br>
			<span id="synopse"><?php echo $resultadoserie['synopse'];?></span>
			<br>
			<br>
			<br>
			<br>
			<button><i class="fas fa-play"></i><span>Assistir</span></button>
		</div>
		<div class="info_right">
			
		<style>	
		.info_right{
			background-size: cover;
			background-image: url(<?php echo $resultadoserie['background'];?>);
		}
		</style>

		</div>

	<?php
		$idhaha = $_GET['id'];
		$result_episode = "SELECT * FROM videos WHERE idserie = '$idhaha'";
        $resultado_episode = mysqli_query($conn, $result_episode);
        $resultadoepisode = mysqli_fetch_assoc($resultado_episode);
        if(isset($resultadoserie)){
        ?>
	<div id="episodios">
		<div id="scroll">
			<div id="info"><h1>Episodios de <?php echo $resultadoserie['name'];?></h1></div>
			<?php
			 foreach ($resultado_episode as $resultado_episode => $resultado_episodes) {
			?>
			<a href="/watch/<?php echo $resultado_episodes['id']; ?>">
			<div id="serie_ep">
				<div id="imgeps2"></div>
				<div id="descrt_filme"><p><?php echo $resultado_episodes['nome']; ?></p></div>
				<div id="back_filme2"></div>
				<div id="play"><button><i class="fas fa-play"></i></button></div>
			</div>
			</a>
			<style>
			#imgeps2{
				background-image: url('<?php echo $resultadoserie['cover']; ?>');
			}
			</style>
		<?php } ?>
		</div>
	</div>
<?php } ?>

<?php
		$genres = 1;
		$idhaha = $_GET['id'];
		$result_seriet = "SELECT * FROM series WHERE url <> '$idhaha' and genre1 = '$genres' or genre2 = '$genres' or genre3 = '$genres' or genre4 = '$genres' or genre5 = '$genres' ";
        $resultado_seriet = mysqli_query($conn, $result_seriet);
        $resultadoseriet = mysqli_fetch_assoc($resultado_seriet);
        if(isset($resultadoseriet)){
        ?>
	<div id="semelhantes2">
		<div id="scroll">
			<div id="info"><h1>Semelhants a <?php echo $resultadoseriet['name'];?></h1></div>
			<?php
			 foreach ($resultado_seriet as $resultado_seriet => $resultado_seriets) {
			?>
			<a href="/title/<?php echo $resultado_seriets['url']; ?>">
			<div id="serie_ep">
				<div id="img_ep"></div>
				<div id="descrt_filme"><p><?php echo $resultado_seriets['name']; ?></p></div>
				<div id="back_filme"></div>
				<div id="play"><button><i class="fas fa-play"></i></button></div>
			</div>
			</a>
			<style>
			#img_ep{
				background-image: url('<?php echo $resultado_seriets['cover']; ?>');
			}
			</style>
		<?php } ?>
		</div>
	</div>
<?php } ?>

	<div class="bottom_lol">
		<center>
		<a class="ativo" id="sobre">Sobre</a>
		<a id="epi">Episodios</a>
		<a id="semelhantes">Séries Semelhantes</a>
		</center>
	</div>

	</div>

	<script type="text/javascript">
		var info = document.getElementById('sobre');
		var ep = document.getElementById('epi');
		var semelhantes = document.getElementById('semelhantes');
		$('#epi').click(function(){
		$("#episodios").fadeIn(600);
		$("#semelhantes2").fadeOut(600);
		ep.style = 'border-bottom: 3px solid #e50914;';
		info.style = 'border-bottom: 3px solid transparent;';
		semelhantes.style = 'border-bottom: 3px solid transparent;'
	    });
	    $('#sobre').click(function(){
		$("#episodios").fadeOut(600);
		$("#semelhantes2").fadeOut(600);
		info.style = 'border-bottom: 3px solid #e50914;';
		ep.style = 'border-bottom: 3px solid transparent;';
		semelhantes.style = 'border-bottom: 3px solid transparent;'
	    });
	     $('#semelhantes').click(function(){
		$("#semelhantes2").fadeIn(600);
		$("#episodios").fadeOut(600);
		semelhantes.style = 'border-bottom: 3px solid #e50914;';
		ep.style = 'border-bottom: 3px solid transparent;';
		info.style = 'border-bottom: 3px solid transparent;'
	    });
	</script>


	<?php } ?>
