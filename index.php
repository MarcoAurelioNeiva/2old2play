<!DOCTYPE html>
<html>

<meta charset="utf-8">
<meta name="viewport" content="width= devic-width, inicial-scale=1.0">
<meta name="description" content="game design">
<meta name="keywords" content="2old2play, jogos desenvolvidos no brasil, rpg, mmo">
<meta name="author" content=" Marco Neiva">

<head>
	<title>2old2play</title>
	<style>
	
html,body{min-height: 100%}


* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;margin:0}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  width: 100%;
  height: 500px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}


/*--------------------------------*/
	*{
		margin: 0;
		padding: 0; 
	}
	ul 
	{
		list-style-type: none;
		overflow: hidden;
		background-color: #111111;
		padding: 0px 0px 0px 2.459592410400562%;
	}
	li
	{
		float: left;
		padding: 16px 7.027406886858749%;
		margin: 0 auto;
	}
	li a
	{
		display: block;
		color: white;
		text-align: center;
		text-decoration: none;
	}
	li a:hover
	{
		background-color:#333333;
	}
	@media(max-width: 946px){
		ul{ padding: 0 0 0 0; }
	}
</style>
</head>
<body style="background-color:#aaaaaa; margin:0px">

<nav> <!-- menu inicial-->
		<ul> 
			<li><a href="#home">Inicio</a></li>
			<li><a href="#loja">Loja</a></li>
			<li><a href="#novidades">Novidades</a></li>
			<li><a href="#sobre">Sobre</a></li>
			<li><a href="#contato">Contato</a></li>
		</ul>
	</nav> <!-- fim do menu inicial-->

	<img src="2velhinhos.png" float>

<!-- ------------------------------------------------- -->

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="velhos.jpg" style="width:100% min-height:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="g2.png" style="/*width:100%*/">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="g3.jpg" style="/*width:100%*/">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

<!-- ------------------------------------------------- -->


	<div> <!-- Onde fira notificações em forma de roleta-->
		<iframe src="https://www.youtube.com/embed/iJt719UHn4U" width="100%" height="545"></iframe>
	</div> <!-- fim de Onde fira notificações em forma de roleta-->
	<div>
		<embed width="100%" heigth="100%" src="rpgmito.txt">
	 </div>
<!-- ------------------------------------------------------------ -->
</body>
</html>