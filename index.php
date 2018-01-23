<!DOCTYPE html>
<html>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="game design">
<meta name="keywords" content="2old2play, jogos desenvolvidos no brasil, rpg, mmo">
<meta name="author" content=" Marco Neiva">

<head>
  <title>2old2play</title>
  <style>

  /*--------------------------------*/


</style>
</head>
<body>
  <!-- navegador -->
  <nav class="topnav">
    <a href="index.php" id=home>Home</a>
    <a href="imagens.php">Imagens</a>
    <a href="">Novidades</a>
    <a href="">Sobre</a>
    <a href="contatos.php">Contato</a>
  </nav>

  <!-- fim do navegador -->

  <img src="g0.png" height="50%" width="100%" >

  <!--  -->



  <!-- -->
  <div> <!-- video-->
    <iframe src="https://www.youtube.com/embed/hFJbLn3sbA0" frameborder="0" allowfullscreen" width="100%" height="315" ></iframe>
  </div> <!-- fim do video-->
  <!-- area de personagens -->
  <div class="box_persona">
    <div id="persona">
      <h2>Personagens</h2>
    </div>
    <!--modal -->
    <div class="mini_personagem">
      <h3>Jude</h3>
      <img id="myimg" src="g3.jpg" alt="jude" width="300" height="200">
    </div>
    <div id="mymodal" class="modal">
      <span class="close">&times;</span>
      <img class="modal-content" id="img01">
      <div id="caption"> Jude</div>
      <div id="caption">
        Morador da Vila do Sol, não conhece seu passado. O que ele sabe é que em um dia de tempestade, foi abandonado na porta da capela da vila e foi criado por seus pais adotivos. Treinou a vida inteira para realizar o sonho de entrar no exército e lutar para proteger o reino. Após o saque à Vila do Sol, irá se aventurar ao lado de Walrus, seu mentor, para encontrar o responsável pelo ataque. Ao longo da história, descobrirá que faz parte de uma antiga profecia que decidirá o destino do mundo.
      </div>
      <div id="caption">
        Personalidade: uma pessoa leal e corajosa disposta a fazer o impossível para ajudar os outros, mesmo que não dê tudo certo no final. Porém é uma pessoa insegura de si mesma devido a não conhecer seu passado e não conseguir explicar o poder dentro de si. Se sente isolado e usa do humor como forma de defesa.
      </div>
      <div id="caption">
        Aparência: Uma jovem adulto de 19 anos com 1.75 de altura. Corpo esbelto, cabelos prateados e olhos roxo. Possui uma marca de nascença na forma de um Triskle no pescoço, sinal de sua descendência da Tribo dos Deuses. No jogo final, será possível alterar o nome e customizar a aparência do protagonista.
      </div>
      <div id="caption">
        Habilidades especiais: possui uma proficiência única para combate, podendo lutar em diferentes estilos. Possui o poder dos deuses.
        Relevância no enredo do jogo: Protagonista da história que fará a história girar. Durante o jogo irá descobrir suas origens e sua relação com a antiga profecia.
      </div>
      <div id="caption">
        Relacionamento com outros personagens: no início da história, irá conhecer Walrus, seu mentor, que servirá como uma figura paterna após perder seus pais adotivos no ataque a sua vila. Conhecerá outros companheiros ao longo de sua jornada
      </div>
    </div>
    <!-- -->
    <img id="myimg" src="g9.jpg" alt="" width="300" heigth="200">
    <div id="mymodal" class="modal">
      <span class="close">&times;</span>
      <img class="modal-content" id="img01">
      <div id="caption">jose</div>
      <div id="caption">
        texto
      </div>
    </div>
  </div>
  <!-- footer -->

  <div class="footer">
    <a href="index.php"><img src="g0.png" width="150px"></a>
    <div class="social">
      <a href="https://www.facebook.com/totpStudios/" class="fa fa-facebook"></a>
      <a href="" class="fa fa-instagram"></a>
      <a href="https://www.youtube.com/watch?time_continue=1&v=hFJbLn3sbA0" class="fa fa-youtube"></a>
    </div>
  </div>
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
