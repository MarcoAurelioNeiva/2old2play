<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	body {
	padding-top: 65px;
    margin: 0;
    background-color:#aaaaaa;
}
		/*topnav*/
.topnav{
	overflow: hidden;
	background-color:#111111; 
	position: fixed;
	width: 100%;
	z-index: 10;
	top: 0;
}
.topnav a{
	text-decoration: none;
	color: white;
	font-size:17px;
	padding: 20px 7.027406886858749%;
	text-align: center;
	float: left;
    font-family: 'Plaster', cursive;
}
.topnav a:hover {
    background-color: #333333;
  }
  .topnav a:active {
    color: green;
  }
  #home{
  	margin: auto 50px;
		/*fim do topnav*/
  }
	</style>
</head>
<body>

<!-- topnav -->
<nav class="topnav">
	<a href="index.php" id="home">Home</a>
	<a href="imagens.php">Imagens</a>
	<a href="">Novidades</a>
	<a href="">Sobre</a>
	<a href="contatos.php">Contato</a>
</nav>

<!-- fim do topnav -->
	<!-- formulario-->
	<form>
		<fieldset>
			<label for="contact-name">Nome Completo:</label>
			<input type="text" required="" id="contact-name">
		</fieldset>
		<fieldset>
			<label for="contact-email">E-mail:</label>
			<input type="text" required="" id="contact-email">
		</fieldset>
		<fieldset>
			<label for="contact-assunto">Assunto:</label>
			<input type="text" required="" id="contact-assunto">
		</fieldset>
		<fieldset>
			<label for="contact-mensagem">mensagem:</label>
			<textarea rows="10" cols="30" required="" id="contact-mensagem"></textarea>
		</fieldset>
			<button type="submit">enviar</button>
	</form>
<p>Outras formas de contatos:</p>
<p>E-mail: contato@gmail.com</p>
<p>E-mail: contato@hotmail.com</p>
<p>telefone: 4002-8922</p>
<!-- fim do formulario -->

</body>
</html>