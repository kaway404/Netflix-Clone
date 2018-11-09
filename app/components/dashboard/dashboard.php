	<?php
	include './app/database/config.php';
	?>
<script src="/app/scripts/jquery.js"></script>

	<div id="header-ali">
	<a href="/dashboard"><svg viewBox="0 0 111 30" id="netflix-logodash" width="100%" height="100%">    <path d="M105.062 14.28L111 30c-1.75-.25-3.499-.563-5.28-.845l-3.345-8.686-3.437 7.969c-1.687-.282-3.344-.376-5.031-.595l6.031-13.75L94.468 0h5.063l3.062 7.874L105.875 0h5.124l-5.937 14.28zM90.47 0h-4.594v27.25c1.5.094 3.062.156 4.594.343V0zm-8.563 26.937c-4.187-.281-8.375-.53-12.656-.625V0h4.687v21.875c2.688.062 5.375.28 7.969.405v4.657zM64.25 10.657v4.687h-6.406V26H53.22V0h13.125v4.687h-8.5v5.97h6.406zm-18.906-5.97V26.25c-1.563 0-3.156 0-4.688.062V4.687h-4.844V0h14.406v4.687h-4.874zM30.75 15.593c-2.062 0-4.5 0-6.25.095v6.968c2.75-.188 5.5-.406 8.281-.5v4.5l-12.968 1.032V0H32.78v4.687H24.5V11c1.813 0 4.594-.094 6.25-.094v4.688zM4.78 12.968v16.375C3.094 29.531 1.593 29.75 0 30V0h4.469l6.093 17.032V0h4.688v28.062c-1.656.282-3.344.376-5.125.625L4.78 12.968z"></path></svg></a>

	<a id="linksa">Inicio</a>
	<a id="linksa" href="/series" class="desative">Séries</a>
	<a id="linksa" href="/movies" class="desative">Filmes</a>
	<a id="linksa" href="/news" class="desative">Novidades</a>
	<a id="linksa" href="/myplaylist" class="desative">Playlist</a>

	</div>

  	<?php
  	$result_filme = "SELECT * FROM series WHERE id LIMIT 1";
   	$resultado_filme = mysqli_query($conn, $result_filme);
    $filme = mysqli_fetch_assoc($resultado_filme);
    if(isset($filme)){
    ?>

	<div class="destaque"> <img class="logo" src="/app/img/<?php echo
	$filme['logo'];?>"/> <br> <button><i class="fas fa-play"></i><span>Assistir</span></button>
	<button><i class="fas fa-plus"></i><span>Playlist</span></button>
	
	</div>

	<style>
	.destaque{
		background-image: url(/app/img/<?php echo $filme['background'];?>);
	}
</style>

<?php
$result_filme = "SELECT * FROM series WHERE id";
$resultado_filme = mysqli_query($conn, $result_filme);
$filme = mysqli_fetch_assoc($resultado_filme);
if(isset($filme)){?>
<div class="slider">
<h1 class="original">ORIGINAL NETFLIX</h1>
<div class="slider-item">
  <?php foreach ($resultado_filme as $resultado_filme => $resultado_filmes): ?>   
  <div class="slider-t" data-id="<?php echo $resultado_filmes['id'];?>">
    <div class="slider-b" data-id="<?php echo $resultado_filmes['id'];?>" style="background-image: url('/app/img/<?php echo $resultado_filmes['cover'];?>'">
      <div class="hover-item" id="hover_item<?php echo $resultado_filmes['id'];?>" data-id="<?php echo $resultado_filmes['id'];?>">
        <p style="bottom: 80%"><?php echo $resultado_filmes['name'];?>
        <div class="transition"></div>
        <p style="left: 35%" class="vermais" data-showid="<?php echo $resultado_filmes['id'];?>">Ver mais</p>
      </div>
    </div>
  </div>
  <?php endforeach ?>
</div>
</div>
<?Php } ?>

<div class="loly">

</div>

<style type="text/css">
  .slider{
    width: 100%;
    height: 300px;
    min-width: 100vw;
    background: transparent;
    color: #fff;
    padding: 40px;
  }

  .slider h1{
    font-size: 1.8em;
  }

  .slider-item{
    width: 100%;
    height: 200px;
    white-space: nowrap;
    position: relative;
    top: 30px;
  }

  .slider-item .slider-t{
    width: 300px;
    height: 170px;
    display: inline-block;
    top: 10px;
    position: relative;
    margin-left: 5px;
    transition: 0.9s;
    cursor: pointer;
  }

  .slider-item .hover-item{
    width: 100%;
    height: 100%;
    position: absolute;
    background: #232323;
    opacity: 0;
    transition: 0.5s;
  }

  .slider-item .hover-item p{
    position: absolute;
    bottom: 10px;
    left: 10px;
    font-size: 1.3em;
  }

  .slider-item .slider-b{
   background: #212121;
   width: 100%;
   height: 100%;
   position: relative;
   background-size: cover;
   transition: 1s;
   cursor: pointer;
  }

  .loly{
    width: 100%;
    height: 400px;
    background: #232323;
    position: relative;
    bottom: 85px;
    transition: 1s;
  }

  @media only screen and (max-width: 1494px) {
    .slider-b{
      width: 95% !important;
    }
  }

   @media only screen and (max-width: 974px) {
    .slider-b{
      width: 80% !important;
    }
  }
</style>

<script type="text/javascript">
  $(".loly").hide();
  $(".slider-t").hover(function(){
    let hover_id = $(this).data("id");
    let item_div = "#hover_item" + hover_id;
    $(this).css("transform", "scale(1.4)");
    $(item_div).css("opacity", "1");
    $(this).css("z-index", "1000");
    $(this).css("border", "4px solid #fff");
    if(hover_id == 1){
      $(this).css("margin-left", "40px");
      $(this).css("margin-right", "80px");
    }
    else{
      $(this).css("margin-left", "80px");
     $(this).css("margin-right", "80px");
    }
  });

  $(".slider-t").mouseleave(function(){
    let hover_id = $(this).data("id");
    let item_div = "#hover_item" + hover_id;
    $(this).css("transform", "scale(1)");
    $(this).css("margin-left", "0px");
    $(this).css("margin-right", "0px");
    $(this).css("z-index", "0");
    $(item_div).css("opacity", "0");
    $(this).css("border", "4px solid transparent");
  });

  $(".vermais").click(function(){
    let showid = $(this).data("showid");
    let htmld = "#hover_item" + showid;
    $(htmld).css("transform", "scale(1)");
    $(htmld).css("margin-left", "0px");
    $(htmld).css("margin-right", "0px");
    $(htmld).css("z-index", "0");
    $(".loly").show();

  });
</script>
				
<?php }?>
