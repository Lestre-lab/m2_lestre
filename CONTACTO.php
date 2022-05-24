<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title></title>
</head>
<body>
<main>
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
	<section><img src="img/contit.png"></section>
	<section class="magaa">
		<div class="opacidad">
		<form id="formcontacto" action="enviar.php" method="post">
        <label><p class="white">Nombre</p>
            <input type="text" name="nombre" required/>	
        </label>
        <label><p class="white">Email</p>
            <input type="email" name="email"required />
        </label>
        <label><p class="white">Localidad</p>
            <input type="text" name="localidad" />
        </label>
        <label><p class="white">Comentario</p>
            <textarea name="comentario"></textarea>
        </label>
        <input type="submit" value="Enviar" />
    </form>
    <br>
</div>
    <div class="opacidade">
    	<h1>Logueate</h1>
	<form action="login.php" method="post">
    	<label> <p class="white">Nombre de usuario</p>
        	<input name="usuario" type="text" maxlength="12" />
        </label><br>
        <label><p class="white">Contraseña</p>
        	<input type="password" name="password" maxlength="12" />
        </label><br/>
        	<input type="submit" value="Login"/>	
    </form>
    <a href="form_registro.php"><p class="white">Registrate</a> si no sos usuario.</p>
    </div>
    <div class="opacidade"><h1>Registrate en el sitio</h1>
    <form action="registro.php" method="post" >
    	<label><p class="white">Nombre</p>
        	<input type="text" name="nombre" required />
        </label><br />
		<label><p class="white">Apellido</p>
        	<input type="text" name="apellido" required />
        </label><br />
        <label><p class="white">Email</p>
        	<input type="email" name="email" required />
        </label><br />
        <label><p class="white">Nombre de usuario</p>
        	<input name="usuario" type="text" maxlength="12" />
        </label><br />
        <label><p class="white">Contraseña</p>
        	<input type="password" name="password" maxlength="12" />
        </label><br />
        <label>
            <input name="newsletter" type="checkbox" value="si" checked="checked" /><p class="white"> Sí, deseo recibir informacion por mail.</p>
        </label><br />
        <input type="submit" value="Registrarse"/>
        <br><br>
    </form></div>
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
		<li><a href="chagal.php">Marc Chagal</a></li>
		<li><a href="magritte.php">Réne Magritte</a></li>
		<li><a href="ray.php">Man Ray</a></li>
		</ul>
		</div>
		<div id="logosurre"></div>
		</div>
		</footer>
	</main>
</body>
</html>