<!doctype html>
<html lang="es">
<head>
   <meta charset="utf­8">
   <title>MONDO DIFFICILE</title>
   <link rel="stylesheet" type="text/css" href="estilo.css" />
   <script type="text/javascript" src="validarFormulario.js"></script>
</head>
<body>
	<section id="bannersuperior"><a href="http://www.amazon.com"> 
  		<img src = "img/amazon.jpg" alt = "Amazon"/> 
	</a></section>
	<section id="bannerizquierdo"><a href="http://www.amarillasinternet.com"> 
  		<img src = "img/banner.jpg" alt = "Amarillas"/> 
	</a></section>
	<section id="bannerderecho"><a href="http://www.amarillasinternet.com"> 
  		<img src = "img/banner.jpg" alt = "Amarillas"/> 
	</a></section>
<header>
	<h1 id="titulo">MONDO DIFFICILE</h1>
	<nav id="menu">
	<ul>
		<li><a href="index.php" id="color1">Portada</a></li>
		<li><a href="nacional.php" id="color2">Nacional</a></li>
		<li><a href="internacional.php" id="color3">Internacional</a></li>
		<li><a href="economia.php" id="color4">Econom&iacute;a</a></li>
		<li><a href="deportes.php" id="color5">Deportes</a></li>
		<li><a href="tecnologia.php" id="color6">Tecnolog&iacute;a</a></li>
	</ul>
	</nav>

</header>
<section id="formulario">

<form name="formulario" method="POST" action="index2.php" onSubmit=" return validarCampos(this)">
	<label for="usuario">Nuevo nombre de usuario: </label>
	<input type = "text" id = "usuario" name="usuario" placeholder="Escribe nuevo nombre de usuario"/></br>
	<label for="pass">Nueva contraseña: </label>
	<input type = "password" id = "pass" name="pass" placeholder="Escribe una contraseña"/></br>
        <label for="pass2">Repite la nueva contraseña: </label>
	<input type = "password" id = "pass2" name="pass2" placeholder="Repite la contraseña"/></br>
	<label for="email">Nuevo e-mail: </label>
	<input type = "text" id = "email" name="email" placeholder="Escribe tu nuevo e-mail"/></br>
	<label for="tlf">Nuevo tel&eacute;fono: </label>
	<input type = "text" id = "tlf" name="tlf" placeholder="Escribe tu número de teléfono"/></br>
        <label for="fecha">Nueva fecha de nacimiento: </label>
        <select type ="text" id ="fechadia" name="fechadia">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
        </select>   
        <select type ="text" id ="fechames" name ="fechames">
        	<option value="1">Enero</option>
            <option value="2">Febrero</option>
            <option value="3">Marzo</option>
            <option value="4">Abril</option>
            <option value="5">Mayo</option>
            <option value="6">Junio</option>
            <option value="7">Julio</option>
            <option value="8">Agosto</option>
            <option value="9">Septiembre</option>
            <option value="10">Octubre</option>
            <option value="11">Noviembre</option>
            <option value="12">Diciembre</option>    
        </select>
        <select type ="text" id ="fechayear" name ="fechayear">
            <option value="1930">1930</option>
            <option value="1931">1931</option>
            <option value="1932">1932</option>
            <option value="1933">1933</option>
            <option value="1934">1934</option>
            <option value="1935">1935</option>
            <option value="1936">1936</option>
            <option value="1937">1937</option>
            <option value="1938">1938</option>
            <option value="1939">1939</option>
	    <option value="1940">1940</option>
            <option value="1941">1941</option>
            <option value="1942">1942</option>
            <option value="1943">1943</option>
            <option value="1944">1944</option>
            <option value="1945">1945</option>
            <option value="1946">1946</option>
            <option value="1947">1947</option>
            <option value="1948">1948</option>
            <option value="1949">1949</option>
            <option value="1950">1950</option>
            <option value="1951">1951</option>
            <option value="1952">1952</option>
            <option value="1953">1953</option>
            <option value="1954">1954</option>
            <option value="1955">1955</option>
            <option value="1956">1956</option>
            <option value="1957">1957</option>
            <option value="1958">1958</option>
            <option value="1959">1959</option>
            <option value="1960">1960</option>
            <option value="1961">1961</option>
            <option value="1962">1962</option>
            <option value="1963">1963</option>
            <option value="1964">1964</option>
            <option value="1965">1965</option>
            <option value="1966">1966</option>
            <option value="1967">1967</option>
            <option value="1968">1968</option>
            <option value="1969">1969</option>
            <option value="1970">1970</option>
            <option value="1971">1971</option>
            <option value="1972">1972</option>
            <option value="1973">1973</option>
            <option value="1974">1974</option>
            <option value="1975">1975</option>
            <option value="1976">1976</option>
            <option value="1977">1977</option>
            <option value="1978">1978</option>
            <option value="1979">1979</option>
            <option value="1980">1980</option>
            <option value="1981">1981</option>
            <option value="1982">1982</option>
            <option value="1983">1983</option>
            <option value="1984">1984</option>
            <option value="1985">1985</option>
            <option value="1986">1986</option>
            <option value="1987">1987</option>
            <option value="1988">1988</option>
            <option value="1989">1989</option>
            <option value="1990">1990</option>
            <option value="1991">1991</option>
            <option value="1992">1992</option>
            <option value="1993">1993</option>
            <option value="1994">1994</option>
            <option value="1995">1995</option>
            <option value="1996">1996</option>
            <option value="1997">1997</option>
            <option value="1998">1998</option>
            <option value="1999">1999</option>
            <option value="2000">2000</option>
            <option value="2001">2001</option>
            <option value="2002">2002</option>
            <option value="2003">2003</option>
            <option value="2004">2004</option>
            <option value="2005">2005</option>
            <option value="2006">2006</option>
            <option value="2007">2007</option>
            <option value="2008">2008</option>
            <option value="2009">2009</option>
            <option value="2010">2010</option>
            <option value="2011">2011</option>
            <option value="2012">2012</option>
            <option value="2013">2013</option>
        </select></br>
	<label for="firma"> Firma: </label>
	<textarea name="texto" rows="5" cols="60" placeholder = "Escribe aquí tu firma"></textarea></br></br>
	<input type="submit" value="Aceptar"><input type="reset" value="Borrar">
</form>

</section>

<footer>
	<p>Juan Antonio P&eacute;rez Maldonado </br>
	618042606
	<address>Circunvalaci&oacute;n Encina 23, 18015</address></br>
	<a href="mailto:jpm88@correo.ugr.es">Correo de contacto</a>
	<a href="formulario.php">&iexcl;Suscr&iacute;bete!</a>
	<a href="documentacion.pdf">C&oacute;mo se hizo</a></p>
</footer>
</body>
</html>
