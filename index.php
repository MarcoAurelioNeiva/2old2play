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
  @media only screen and (max-width: 100%) {
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
  @media(max-width: 100%){
    ul{ padding: 0 0 0 0; }
  }

/*modal*/

#myimg{
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}
#myimg:hover {opacity: 0.7;}

.modal{
  display:none;
  position:fixed;
  z-index: 1;
  padding-top: 100px;
  left:0;
  top:0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0, 0, 0);
  background-color: rgba(0, 0, 0, 0.9);
}
.modal-content{
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}
#caption{
  margin:auto;
  display:block;
  width: 80%;
  max-width: 700px;
  text-align:center;
  color: #ccc;
  padding: 10px 0;
  height: : 150px;
}
.modal-content,#caption{
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s
  animation-name:zoom;
  animation-duration:0.6s;
}
@-webkit-keyframes zoom{
  from {-webkit-transform:scale(0)}
  to {-webkit-transform:scale(1);}
}
@keyframes zomm {
  from{transform: scale(0)}
to {transform:scale(1)}
}
.close{
  position:absolute;
  top:15px;
  right:35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}
.close:hover,
.close:focus{
  color:#bbb;
  text-decoration: none;
  cursor:pointer;
@media only screen and (max-width: 700px){
  .modal-content{
    width: 100%;
  }
}

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

 <img src="logo.png" f  height="50%" width="100%" >

 <!-- ------------------------------------------------- -->

 <div class="slideshow-container">

  <div class="mySlides fade">
    <div class="numbertext">01 / 10</div>
    <img src="g1.jpg" style="width:100% min-height:100%">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">02 / 10</div>
    <img src="g2.jpg" >
  </div>

  <div class="mySlides fade">
    <div class="numbertext">03 / 10</div>
    <img src="g3.jpg" style="/*width:100%*/">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">04 / 10</div>
    <img src="g4.jpg">
  </div>

  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="g5.jpg">
  </div>

  <div class="mySlides fade">
    <div class="numvertext">06 / 10</div>
    <img src="g6.jpg">
  </div>

  <div class="mySlades fade">
    <div class="numbertext">07 / /10</div>
    <img src="g7.jpg">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">08 / 10</div>
    <img src="g8.jpg">
  </div>

  <div class="mySlides fade">
    <div class="numbertext fade">09 / 10</div>
    <img src="g9.jpg">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">10 / 10</div>
    <img src="g10.jpg">
  </div>

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
  /*var slideIndex = 0;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    //Variáveis
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    //Reset de posição
    if (n > slides.length) {
      slideIndex = 0;
    }
    else{
      slideIndex++;
    }
    for(i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    var slideIndex = 0;
    showSlides();

    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
      slideIndex = 1;
    }
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
  }*/

  var array=[n]
  function slide(){
    avance(array)
    voltar(array)
    setinterval function(){
      avance()
    }
  }
function avance(array){
  if cont < array.length{
    arrau[0].style.dysplay="none"
    cont++
    array[] style display="block"
  }
  else {cont = 0
  }
}
</script>

<!-- ------------------------------------------------- -->


<div> <!-- Onde fira notificações em forma de roleta-->
  <iframe src="https://www.youtube.com/embed/hFJbLn3sbA0" frameborder="0" allowfullscreen" width="100%" height="315" ></iframe>
</div> <!-- fim de Onde fira notificações em forma de roleta-->
<div>
  <embed width="100%" heigth="100%" src="rpgmito.txt">
  </div>
  <!-- ------------------------------------------------------------ -->

<!--modal -->

<div id="mymodal" class="modal">
  <span class="close">&times;</span>
  <img src="g3.jpg" width="40%" id="img01">
  <div id="capition"></div>
</div>

<script>
  var modal = document.getElementById('mymodal');
  var img = document.getElementById('myimg');
  var modalimg = document.getElementByid("img01");
  var captiontext= document.getElementById("caption");

  img.inclick = function(){
    modal.style.dysplay ="block";
    modalimg.src = this.src;
    captiontext,innerHTML = this.alt;
  }
var span = document.getElementsByClassName("close") [0];
span.onclick = function() {
  modal.style.display = "none";
}

</script>
</body>
</html>