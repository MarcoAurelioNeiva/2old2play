<!DOCTYPE html>
<html>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="game design">
<meta name="keywords" content="2old2play, jogos desenvolvidos no brasil, rpg, mmo">
<meta name="author" content=" Marco Neiva">

<head>
  <title>2old2play</title>
</head>
<body>
  <!-- navegador -->
  <?php
  require_once("html/topnav.html")
  ?> 
    <!-- fim do navegador -->
    <!-- banner -->
  <img src="img/g0.png" height="50%" width="100%" >
    <!-- fim do banner -->
 
  <div> <!-- video-->
    <iframe src="https://www.youtube.com/embed/hFJbLn3sbA0" frameborder="0" allowfullscreen" width="100%" height="315" ></iframe>
  </div> <!-- fim do video-->
  <!-- area de personagens -->
  <?php
  require_once("html/modalbox.html")
  ?>
  <!-- fim da area de personagens -->
  <!-- footer -->
<?php
require_once("html/footer.html")
?>
  <!-- fim do footer -->

  <script>


    /*modal*/

    var modal = document.getElementById('mymodal');
    var img = document.getElementById('myimg');
    var modalimg = document.getElementById("img01");
    var captiontext= document.getElementById("caption");

    img.onclick = function(){
      modal.style.display ="block";
      modalimg.src = this.src;
      /*captiontext.innerHTML = this.alt;*/
    }
    var span = document.getElementsByClassName("close") [0];
    var doc = document.documentElement;
    doc.addEventListener("click",function(event){
      if (event.target === modal || event.target === span){
        modal.style.display = "none";
      }
    })
    /*fim do modal*/
  </script>

</body>
</html>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
