	<?php
	include './app/database/config.php';
	?>
	<div id="header-ali">
	<a href="/dashboard"><svg viewBox="0 0 111 30" id="netflix-logodash" width="100%" height="100%">    <path d="M105.062 14.28L111 30c-1.75-.25-3.499-.563-5.28-.845l-3.345-8.686-3.437 7.969c-1.687-.282-3.344-.376-5.031-.595l6.031-13.75L94.468 0h5.063l3.062 7.874L105.875 0h5.124l-5.937 14.28zM90.47 0h-4.594v27.25c1.5.094 3.062.156 4.594.343V0zm-8.563 26.937c-4.187-.281-8.375-.53-12.656-.625V0h4.687v21.875c2.688.062 5.375.28 7.969.405v4.657zM64.25 10.657v4.687h-6.406V26H53.22V0h13.125v4.687h-8.5v5.97h6.406zm-18.906-5.97V26.25c-1.563 0-3.156 0-4.688.062V4.687h-4.844V0h14.406v4.687h-4.874zM30.75 15.593c-2.062 0-4.5 0-6.25.095v6.968c2.75-.188 5.5-.406 8.281-.5v4.5l-12.968 1.032V0H32.78v4.687H24.5V11c1.813 0 4.594-.094 6.25-.094v4.688zM4.78 12.968v16.375C3.094 29.531 1.593 29.75 0 30V0h4.469l6.093 17.032V0h4.688v28.062c-1.656.282-3.344.376-5.125.625L4.78 12.968z"></path></svg></a>

	<a id="linksa">Inicio</a>
	<a id="linksa" class="desative">Séries</a>
	<a id="linksa" class="desative">Filmes</a>
	<a id="linksa" class="desative">Novidades</a>
	<a id="linksa" class="desative">Playlist</a>

	</div>

	<?php
	$result_filme = "SELECT * FROM filmes WHERE id LIMIT 1";
   	$resultado_filme = mysqli_query($conn, $result_filme);
    $filme = mysqli_fetch_assoc($resultado_filme);
    if(isset($filme)){
    ?>

	<div class="destaque">
		<img class="logo" src="<?php echo $filme['logo'];?>"/>
		<br>
		<button>Assistir</button>
		<button>+ PlayList</button>
		<div id="nani"></div>
	</div>

	<style>
	.destaque{
		background-image: url(<?php echo $filme['background'];?>);
	}
	</style>

	<?php } ?>

	<?php
	$result_filmes = "SELECT * FROM filmes WHERE id";
   	$resultado_filme = mysqli_query($conn, $result_filmes);
    $filmes = mysqli_fetch_assoc($resultado_filme);
    if(isset($filmes)){
    ?>

	<div id="slider">
		<h1>Populares na Netflix</h1>

<div id="carousel" class="container">
  <div class="control-container">
  <div id="left-scroll-button" class="left-scroll button scroll">
    <i class="fa fa-chevron-left" aria-hidden="true"></i>
  </div>
  <div id="right-scroll-button" class="right-scroll button scroll">
    <i class="fa fa-chevron-right" aria-hidden="true"></i>
  </div>
  </div>

  <div class="items" id="carousel-items">
  	<?php foreach ($resultado_filme as $resultado_filme => $resultado_filmes) {?>
    <div class="item">
      <img class="item-image" src="<?php echo $resultado_filmes['cover'];?>" />
      <span class="item-load-icon button opacity-none"><i class="fa fa-play"></i></span>
    </div>
   <?php } ?>
  </div>
</div>

	</div>

<script>
function MouseWheelHandler(e, element) {
  var delta = 0;
  if (typeof e === 'number') {
    delta = e;
  } else {
    if (e.deltaX !== 0) {
      delta = e.deltaX;
    } else {
      delta = e.deltaY;
    }
    e.preventDefault();
  }

  element.scrollLeft -= (delta);

}

window.onload = function() {
  var carousel = {};
  carousel.e = document.getElementById('carousel');
  carousel.items = document.getElementById('carousel-items');
  carousel.leftScroll = document.getElementById('left-scroll-button');
  carousel.rightScroll = document.getElementById('right-scroll-button');

  carousel.items.addEventListener("mousewheel", handleMouse, false);
  carousel.items.addEventListener("scroll", scrollEvent);
  carousel.leftScroll.addEventListener("click", leftScrollClick);
  carousel.rightScroll.addEventListener("click", rightScrollClick);
 /* carousel.leftScroll.addEventListener("mousedown", leftScrollClick);
  carousel.rightScroll.addEventListener("mousedown", rightScrollClick);*/

  setLeftScrollOpacity();
  setRightScrollOpacity();
  
  function handleMouse(e) {
    MouseWheelHandler(e, carousel.items);
  }

  function leftScrollClick() {
    MouseWheelHandler(100, carousel.items);
  }

  function rightScrollClick() {
    MouseWheelHandler(-100, carousel.items);
  }

  function scrollEvent(e) {
    setLeftScrollOpacity();
    setRightScrollOpacity();
  }
  
  function setLeftScrollOpacity() {
    if (isScrolledAllLeft()) {
      carousel.leftScroll.style.opacity = 0;
    } else {
      carousel.leftScroll.style.opacity = 1;
    }
  }
  
  function isScrolledAllLeft() {
    if (carousel.items.scrollLeft === 0) {
      return true;
    } else {
      return false;
    }
  }
  
  function isScrolledAllRight() {
    if (carousel.items.scrollWidth > carousel.items.offsetWidth) {
      if (carousel.items.scrollLeft + carousel.items.offsetWidth === carousel.items.scrollWidth) {
        return true;
      } 
    }else {
      return true;
    }
    
    return false;
  }
  
  function setRightScrollOpacity() {
    if (isScrolledAllRight()){
        carousel.rightScroll.style.opacity = 0;
      } else {
        carousel.rightScroll.style.opacity = 1;
      }
  }
}
</script>

<?php } ?>
