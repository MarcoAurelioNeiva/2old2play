<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	body {
	padding-top: 65px;
    margin: 0;
    background-color:#aaaaaa;
    font-size: 30px;
}

	</style>
</head>
<body>

<!-- topnav -->
<?php
require_once("html/topnav.html")
?>

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
<!-- footer -->
<?php
require_once("html/footer.html")
?>
<!-- fim do footer -->
</body>
</html>
<link rel="stylesheet" type="text/css" href="css/topnav.css">
<link rel="stylesheet" type="text/css" href="css/footer.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">