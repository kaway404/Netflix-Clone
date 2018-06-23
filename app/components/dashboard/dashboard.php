	<?php
	include './app/database/config.php';
	?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css">

	<div id="header-ali">
	<a href="/dashboard"><svg viewBox="0 0 111 30" id="netflix-logodash" width="100%" height="100%">    <path d="M105.062 14.28L111 30c-1.75-.25-3.499-.563-5.28-.845l-3.345-8.686-3.437 7.969c-1.687-.282-3.344-.376-5.031-.595l6.031-13.75L94.468 0h5.063l3.062 7.874L105.875 0h5.124l-5.937 14.28zM90.47 0h-4.594v27.25c1.5.094 3.062.156 4.594.343V0zm-8.563 26.937c-4.187-.281-8.375-.53-12.656-.625V0h4.687v21.875c2.688.062 5.375.28 7.969.405v4.657zM64.25 10.657v4.687h-6.406V26H53.22V0h13.125v4.687h-8.5v5.97h6.406zm-18.906-5.97V26.25c-1.563 0-3.156 0-4.688.062V4.687h-4.844V0h14.406v4.687h-4.874zM30.75 15.593c-2.062 0-4.5 0-6.25.095v6.968c2.75-.188 5.5-.406 8.281-.5v4.5l-12.968 1.032V0H32.78v4.687H24.5V11c1.813 0 4.594-.094 6.25-.094v4.688zM4.78 12.968v16.375C3.094 29.531 1.593 29.75 0 30V0h4.469l6.093 17.032V0h4.688v28.062c-1.656.282-3.344.376-5.125.625L4.78 12.968z"></path></svg></a>

	<a id="linksa">Inicio</a>
	<a id="linksa" href="/series" class="desative">Séries</a>
	<a id="linksa" href="/movies" class="desative">Filmes</a>
	<a id="linksa" href="/news" class="desative">Novidades</a>
	<a id="linksa" href="/myplaylist" class="desative">Playlist</a>

	</div>

	<?php
	$result_filme = "SELECT * FROM filmes WHERE id LIMIT 1";
   	$resultado_filme = mysqli_query($conn, $result_filme);
    $filme = mysqli_fetch_assoc($resultado_filme);
    if(isset($filme)){
    ?>

	<div class="destaque"> <img class="logo" src="<?php echo
	$filme['logo'];?>"/> <br> <button><i class="fas fa-play"></i><span>Assistir</span></button>
	<button><i class="fas fa-plus"></i><span>Playlist</span></button>
	
	</div>

	<style>
	.destaque{
		background-image: url(<?php echo $filme['background'];?>);
	}

.owl-carousel{
  transition: 0.8s ease;
}

.carousel-wrap {
  margin: 90px auto;
  padding: 0 5%;
  width: 80%;
  position: relative;
}

/* Corrigir itens em branco ou piscando no carousel */
.owl-carousel .item {
  position: relative;
  z-index: 100; 
  -webkit-backface-visibility: hidden;
}

/* Correção final */
.owl-nav > div {
  margin-top: -26px;
  position: absolute;
  top: 50%;
  color: #cdcbcd;
}

.owl-nav i {
  font-size: 52px;
}

.owl-nav .owl-prev {
  left: -45px;
}

.owl-nav .owl-next {
  right: -45px;
}

/* Play hover */

.item{
    position: absolute;
    transition: 0.7s;
}
.item:hover 
.play{display:block;}
.play{
  position: absolute;
  display: none;
  top: 0; 
  margin: auto;
  left: 0px;
  right: 0px;
  z-index: 100;
  transition: 0.5s;
}

.original{
  position: absolute;
  text-align: center;
  color: #fff;
  text-decoration: none;
  margin-left: 69px;
  margin-top: 45px;
}

.filmes{
  position: absolute;
  text-align: center;
  color: #fff;
  text-decoration: none;
  margin-left: 55px;
  margin-top: 45px;
}
</style>
<h1 class="original">ORIGINAL NETFLIX</h1>
	<div class="carousel-wrap">
  <div class="owl-carousel"">
    <div class="item">
      <a href="#">
        <div class="image"><img  src="https://occ-0-894-1123.1.nflxso.net/art/1d26a/2353afb52c1defea294c6e3ffb435fa6bdf1d26a.webp"></div>
       
      </a>  
    </div>
    <div class="item">
      <a href="#">
        <div class="image"><img src="https://occ-0-894-1123.1.nflxso.net/art/fdb1c/03252a40cca0021fdd38c4433f3629e3a67fdb1c.webp"></div>
    
      </a> 
    </div>
    <div class="item">
      <a href="#">
        <div class="image"><img src="https://occ-0-894-1123.1.nflxso.net/art/86fee/4ae1babad996233017f1f7444250b7b9fc986fee.webp"></div>

      </a> 
    </div>
    <div class="item">
      <a href="#">
        <div class="image"><img src="https://occ-0-894-1123.1.nflxso.net/art/86a33/1b1c01a77d259f8ad45951722d38e3eabeb86a33.webp"></div>
      
      </a>
    </div>
    <div class="item">
      <a href="#">
        <div class="image"><img src="https://occ-0-894-1123.1.nflxso.net/art/86a33/1b1c01a77d259f8ad45951722d38e3eabeb86a33.webp"></div>
       
      </a>
    </div>
    <div class="item">
      <a href="#">
        <div class="image"><img src="https://occ-0-894-1123.1.nflxso.net/art/86a33/1b1c01a77d259f8ad45951722d38e3eabeb86a33.webp"></div>
    
      </a>
    </div>
    <div class="item">
      <a href="#">
        <div class="image"><img src="https://occ-0-894-1123.1.nflxso.net/art/86a33/1b1c01a77d259f8ad45951722d38e3eabeb86a33.webp"></div>

      </a>
    </div>
    <div class="item">
      <a href="#">
        <div class="image"><img src="https://occ-0-894-1123.1.nflxso.net/art/86a33/1b1c01a77d259f8ad45951722d38e3eabeb86a33.webp"></div>

      </a>
    </div>
    <div class="item">
      <a href="#">
        <div class="image"><img src="https://occ-0-894-1123.1.nflxso.net/art/86a33/1b1c01a77d259f8ad45951722d38e3eabeb86a33.webp"></div>

      </a>
    </div>
    <div class="item">
      <a href="#">
        <div class="image"><img src="https://occ-0-894-1123.1.nflxso.net/art/86a33/1b1c01a77d259f8ad45951722d38e3eabeb86a33.webp"></div>

      </a>
    </div>
    <div class="item">
      <a href="#">
        <div class="image"><img src="https://occ-0-894-1123.1.nflxso.net/art/86a33/1b1c01a77d259f8ad45951722d38e3eabeb86a33.webp"></div>
   
      </a>
    </div>
    <div class="item">
      <a href="#">
        <div class="image"><img src="https://occ-0-894-1123.1.nflxso.net/art/86a33/1b1c01a77d259f8ad45951722d38e3eabeb86a33.webp"></div>
 
      </a>
    </div>
  </div>
</div>
<br>
<h1 class="filmes">Filmes de Ação</h1>
<div class="carousel-wrap">
  <div class="owl-carousel">

    <div class="item">
      <a href="#">
        <div class="image"><img src="https://occ-0-684-1123.1.nflxso.net/art/79fe1/581b9e1d6bb9820e875110dd6411b47a70b79fe1.jpg"></div>
        <div class="play"><img src="https://i.imgur.com/hnzWy79.png"></div>
      </a>  
    </div>
    <div class="item">
      <a href="#">
        <div class="image"><img src="https://occ-0-684-1123.1.nflxso.net/art/cf5fe/855f6762c611130f4714aaa99a42a4001bccf5fe.jpg"></div>
        <div class="play"><img src="https://i.imgur.com/hnzWy79.png"></div>
      </a> 
    </div>
    <div class="item">
      <a href="#">
        <div class="image"><img src="https://occ-0-684-1123.1.nflxso.net/art/c2961/d38bab3a1ce2403ec73471228613b2b85bcc2961.jpg"></div>
        <div class="play"><img src="https://i.imgur.com/hnzWy79.png"></div>
      </a> 
    </div>
    <div class="item">
      <a href="#">
        <div class="image"><img src="https://occ-0-684-1123.1.nflxso.net/art/f5972/e16a4fba8ef865065d54d1d271b63fb9722f5972.jpg"></div>
        <div class="play"><img src="https://i.imgur.com/hnzWy79.png"></div>
      </a>
    </div>
    <div class="item">
      <a href="#">
        <div class="image"><img src="https://occ-0-684-1123.1.nflxso.net/art/8ead1/373bf92182f9d10e7f0a6ea6247bc0139288ead1.jpg"></div>
        <div class="play"><img src="https://i.imgur.com/hnzWy79.png"></div>
      </a>
    </div>
    <div class="item">
      <a href="#">
        <div class="image"><img src="https://occ-0-684-1123.1.nflxso.net/art/254ca/9ada8ccf318b9b9e117465079f96628babb254ca.jpg"></div>
        <div class="play"><img src="https://i.imgur.com/hnzWy79.png"></div>
      </a>
    </div>
    <div class="item">
      <a href="#">
        <div class="image"><img src="https://occ-0-684-1123.1.nflxso.net/art/469d5/d8af641020c1307856d27cb503d6058fcad469d5.jpg"></div>
        <div class="play"><img src="https://i.imgur.com/hnzWy79.png"></div>
      </a>
    </div>
    <div class="item">
      <a href="#">
        <div class="image"><img src="https://occ-0-684-1123.1.nflxso.net/art/0e5c4/9664a5991361dffebc5e77f5c6165ffb8bb0e5c4.jpg"></div>
        <div class="play"><img src="https://i.imgur.com/hnzWy79.png"></div>
      </a>
    </div>
    <div class="item">
      <a href="#">
        <div class="image"><img src="https://occ-0-684-1123.1.nflxso.net/art/230dc/8fbfad0c3940c51957a89cba31a27d3b6ef230dc.jpg"></div>
        <div class="play"><img src="https://i.imgur.com/hnzWy79.png"></div>
      </a>
    </div>
    <div class="item">
      <a href="#">
        <div class="image"><img src="https://occ-0-684-1123.1.nflxso.net/art/d46cd/d348003a66f040af0f25a2e5e4d325fefeed46cd.jpg"></div>
        <div class="play"><img src="https://i.imgur.com/hnzWy79.png"></div>
      </a>
    </div>
    <div class="item">
      <a href="#">
        <div class="image"><img src="https://occ-0-684-1123.1.nflxso.net/art/ab879/23796174de393ac8d9cd95043c6f3e1dbeeab879.jpg"></div>
        <div class="play"><img src="https://i.imgur.com/hnzWy79.png"></div>
      </a>
    </div>
    <div class="item">
      <a href="#">
        <div class="image"><img src="https://occ-0-684-1123.1.nflxso.net/art/0fa02/b17bfd325a0a99c82c6e5da44c09fb4d9ae0fa02.jpg"></div>
        <div class="play"><img src="https://i.imgur.com/hnzWy79.png"></div>
      </a>
    </div>
  </div>
</div>
<br>
<h1 class="filmes">Filmes de Terror</h1>
<div class="carousel-wrap">
  <div class="owl-carousel">
    <div class="item">
      <a href="#">
        <div class="image"><img src="https://occ-0-684-1123.1.nflxso.net/art/79fe1/581b9e1d6bb9820e875110dd6411b47a70b79fe1.jpg"></div>
        <div class="play"><img src="https://i.imgur.com/hnzWy79.png"></div>
      </a>  
    </div>
    <div class="item">
      <a href="#">
        <div class="image"><img src="https://occ-0-684-1123.1.nflxso.net/art/cf5fe/855f6762c611130f4714aaa99a42a4001bccf5fe.jpg"></div>
        <div class="play"><img src="https://i.imgur.com/hnzWy79.png"></div>
      </a> 
    </div>
    <div class="item">
      <a href="#">
        <div class="image"><img src="https://occ-0-684-1123.1.nflxso.net/art/c2961/d38bab3a1ce2403ec73471228613b2b85bcc2961.jpg"></div>
        <div class="play"><img src="https://i.imgur.com/hnzWy79.png"></div>
      </a> 
    </div>
    <div class="item">
      <a href="#">
        <div class="image"><img src="https://occ-0-684-1123.1.nflxso.net/art/f5972/e16a4fba8ef865065d54d1d271b63fb9722f5972.jpg"></div>
        <div class="play"><img src="https://i.imgur.com/hnzWy79.png"></div>
      </a>
    </div>
    <div class="item">
      <a href="#">
        <div class="image"><img src="https://occ-0-684-1123.1.nflxso.net/art/8ead1/373bf92182f9d10e7f0a6ea6247bc0139288ead1.jpg"></div>
        <div class="play"><img src="https://i.imgur.com/hnzWy79.png"></div>
      </a>
    </div>
    <div class="item">
      <a href="#">
        <div class="image"><img src="https://occ-0-684-1123.1.nflxso.net/art/254ca/9ada8ccf318b9b9e117465079f96628babb254ca.jpg"></div>
        <div class="play"><img src="https://i.imgur.com/hnzWy79.png"></div>
      </a>
    </div>
    <div class="item">
      <a href="#">
        <div class="image"><img src="https://occ-0-684-1123.1.nflxso.net/art/469d5/d8af641020c1307856d27cb503d6058fcad469d5.jpg"></div>
        <div class="play"><img src="https://i.imgur.com/hnzWy79.png"></div>
      </a>
    </div>
    <div class="item">
      <a href="#">
        <div class="image"><img src="https://occ-0-684-1123.1.nflxso.net/art/0e5c4/9664a5991361dffebc5e77f5c6165ffb8bb0e5c4.jpg"></div>
        <div class="play"><img src="https://i.imgur.com/hnzWy79.png"></div>
      </a>
    </div>
    <div class="item">
      <a href="#">
        <div class="image"><img src="https://occ-0-684-1123.1.nflxso.net/art/230dc/8fbfad0c3940c51957a89cba31a27d3b6ef230dc.jpg"></div>
        <div class="play"><img src="https://i.imgur.com/hnzWy79.png"></div>
      </a>
    </div>
    <div class="item">
      <a href="#">
        <div class="image"><img src="https://occ-0-684-1123.1.nflxso.net/art/d46cd/d348003a66f040af0f25a2e5e4d325fefeed46cd.jpg"></div>
        <div class="play"><img src="https://i.imgur.com/hnzWy79.png"></div>
      </a>
    </div>
    <div class="item">
      <a href="#">
        <div class="image"><img src="https://occ-0-684-1123.1.nflxso.net/art/ab879/23796174de393ac8d9cd95043c6f3e1dbeeab879.jpg"></div>
        <div class="play"><img src="https://i.imgur.com/hnzWy79.png"></div>
      </a>
    </div>
    <div class="item">
      <a href="#">
        <div class="image"><img src="https://occ-0-684-1123.1.nflxso.net/art/0fa02/b17bfd325a0a99c82c6e5da44c09fb4d9ae0fa02.jpg"></div>
        <div class="play"><img src="https://i.imgur.com/hnzWy79.png"></div>
      </a>
    </div>
  </div>
</div>
<script type="text/javascript">
$('.owl-carousel').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  navText: [
    "<i class='fas fa-chevron-left fa-3x'></i>",
    "<i class='fas fa-chevron-right fa-3x'></i>"
  ],
  autoplay: false,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 3
    },
    1000: {
      items: 5
    }
  }
})
</script>

				
<?php }?>
