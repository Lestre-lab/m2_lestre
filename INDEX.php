<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <style type="text/css">
     .swiper {
        width: 100%;
        height: 100%;
      }

      .swiper-slide {
        text-align: center;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
    </style>
	<title>Surrealismo</title>
</head>
<body>
	<header>
		<nav>
		<div id="logo">
			<a href="INDEX.php"><img src="img/logo.png" class="logo"></a>
		</div>
			<ul>
		<li><a href="ARTISTAS.php">Artistas</a></li>
		<li><a href="HISTORIA.html">Historia</a></li>
		<li><a href="FILOSOFIA.html">Filosofia</a></li>
		<li><a href="GALERIA.html">Galería</a></li>
		<li><a href="CONTACTO.php">Contacto</a></li>
		
		<li><form action="resultados_buscar.php" method="post">
    <label>
    <input type="search" name="buscar" placeholder="Buscar..." />
    <input type="submit" value="Enviar">
    </label>
    </form></li></ul>
		</nav>
		
		</header>

		<section class="funo">
		<div class="infuno"></div>
		</section>
		<article>
			<div class="miros"><img class="miro" src="img/artuno.png"></div></div>
			<div class="textouno"><p>El surrealismo emerge con una gran influencia por parte del Dadaísmo oficialmente con el Manifiesto del surrealismo
			de André Breton en Francia 1924, estableciéndose como un movimiento intelectual y político que presentaba profundo interés en la psique humana, elementos oníricos -e influencia de La interpretación de los sueños de Freud
			(1915)-</p><br><a href="FILOSOFIA.html"><h1>Ver más</h1></a>
			<p>
		</div>
	</article>
	<section class="secdos">
			<div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="img/cuadrouno.png"></div>
        <div class="swiper-slide"><img src="img/persistenciadali.jpg"></div>
        <div class="swiper-slide"><img src="img/cuadrodos.png"></div>
        <div class="swiper-slide"><img src="img/magrittebeso.jpg"></div>
        <div class="swiper-slide"><img src="img/lagrimasray.jpg"></div>
        <div class="swiper-slide"><img src="img/ernstbosque.jpg"></div>
      <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 0,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    </script>
		</section>

		<footer>
			<h1 class="e">Contacto</h1>
		<div class="pie">
		<div id="redes">
				<ul>
					<li><a href="https://www.instagram.com/surrealismototalart/" target="_blank"><img src="img/insta.png" class="logoredes"></a><p>@surrealismo</p></a></li>

					<li><a href="https://twitter.com/search?q=%23surrealismo" target="_blank"><img src="img/twi.png" class="logoredes"></a><p>@surrealismo</p></li>

					<li><a href="_blank" target="_blank"><img src="img/what.png" class="logoredes"></a><p>+54 1176467940</p></li>

				</ul>
			
		</div>
		<div id="columnas">
			<ul>
		<li><a href="DALI.php">Salvador Dalí</a></li>
		<li><a href="MIRO.php">Joan Miró</a></li>
		<li><a href="ERNST.php">Max Ernst</a></li>
		<li><a href="chagal.html">Marc Chagal</a></li>
		<li><a href="magritte.html">Réne Magritte</a></li>
		<li><a href="ray.html">Man Ray</a></li>
		</ul>
		</div>
		<div id="logosurre"></div>
		</div>
		</footer>
	</main>
</body>

</html>