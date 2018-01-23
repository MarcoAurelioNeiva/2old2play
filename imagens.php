<!DOCTYPE html>
<html>
<head>
	<title>Imagens</title>
	<style>
	body{
		margin: 0;
		background-color: rgb(180, 182, 216);
	}
/* navegador */
	#home{
		margin: auto 50px;
	}
	.topnav {
		overflow: hidden;
		background-color: #111111;

	}
	.topnav a {
		text-decoration: none;
		color: white;
		font-size: 17px;
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
/* fim de navegador */
/*imagens*/
	ul{

		width: 800px;
		list-style: none;
		display: flex;
		margin: 50px 75px;
	}
	.mini{
		width: 200px;
		height: 136px;
		padding: 0px 0px 0px 10px;
	}
	.lbox{
		visibility: hidden;
		opacity: 0;
	}
	.lbox:target{
		opacity: 1;
		visibility: visible;
		width: 100%;
		height: 100%;
		top: 0;
		left: 0;
		background: rgba(10,10,10,.7);
		position: fixed;
	}
	.box_img{
		width: 50%;
		margin: 10px;
	}
	.btn{
		color: #fff;
		font-family: 'arial';
		text-decoration: none;
		position: absolute;
		width: 50px;
		height: 50px;
		font-size: 40px;
		text-align: center;
	}
	#prev {
		left: 5%;
		top: 45%;
	}
	#next{
		right: 5%;
		top: 45%;
	}
	#close{
		top: 0;
		right: 2%;
	}
/*	.box_img img{
		opacity: 0;*/
	}
	.lbox:target .box_img img{
		opacity: 1;
		transition: opacity .4s linear;
	} 
	.imagem{
		width: 50%;
 		left: 50%;
 		top: 50%;
 		position: absolute;
 		transform: translate(-50%,-50%);
	}

	.lbox:target{
		-webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)}
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)}
    to {transform:scale(1)}
}
/* fim de imagens */
</style>
</head>
<body>
	<nav class="topnav">
		<a href="index.php" id=home>Home</a>
		<a href="imagens.php">Imagens</a>
		<a href="">Novidades</a>
		<a href="">Sobre</a>
		<a href="contatos.php">Contato</a>
	</nav>

<!-- imagens-->
	<ul>
		<li><a href="#img0"><img src="g0.png" class="mini"></a></li>
		<li><a href="#img1"><img src="g1.jpg" class="mini"></a></li>
		<li><a href="#img2"><img src="g2.jpg" class="mini"></a></li>
		<li><a href="#img3"><img src="g3.jpg" class="mini"></a></li>
		<li><a href="#img4"><img src="g4.jpg" class="mini"></a></li>
	</ul>
	<ul>
		<li><a href="#img5"><img src="g5.jpg" class="mini"></a></li>
		<li><a href="#img6"><img src="g6.jpg" class="mini"></a></li>
		<li><a href="#img7"><img src="g7.jpg" class="mini"></a></li>
		<li><a href="#img8"><img src="g8.jpg" class="mini"></a></li>
		<li><a href="#img9"><img src="g9.jpg" class="mini"></a></li>
	</ul>
	<ul>
		<li><a href="#img10"><img src="g10.jpg" class="mini"></a></li>
		<li><a href="#img11"><img src="g11.jpg" class="mini"></a></li>
		<li><a href="#img12"><img src="g12.jpg" class="mini"></a></li>
		<li><a href="#img13"><img src="g13.jpg" class="mini"></a></li>
		<li><a href="#img14"><img src="g14.jpg" class="mini"></a></li>
	</ul>
		
	<div class="lbox" id="img0">
		<div class="box_img">
			<a href="#img14" class="btn" id="prev">&#171;</a>
			<a href="" class="btn" id="close">&times;</a>
			<img src="g0.png" class="imagem">
			<a href="#img1" class="btn" id="next">&#187;</a>
		</div>
	</div>

	<div class="lbox" id="img1">
		<div class="box_img">
			<a href="#img0" class="btn" id="prev">&#171;</a>
			<a href="" class="btn" id="close">&times;</a>
			<img src="g1.jpg" class="imagem">
			<a href="#img2" class="btn" id="next">&#187;</a>
		</div>  
	</div>

	<div class="lbox" id="img2">
		<div class="box_img">
			<a href="#img1" class="btn" id="prev">&#171;</a>
			<a href="" class="btn" id="close">&times;</a>
			<img src="g2.jpg" class="imagem">
			<a href="#img3" class="btn" id="next">&#187;</a>
		</div>  
	</div>

	<div class="lbox" id="img3">
		<div class="box_img">
			<a href="#img2" class="btn" id="prev">&#171;</a>
			<a href="" class="btn" id="close">&times;</a>
			<img src="g3.jpg" class="imagem">
			<a href="#img4" class="btn" id="next">&#187;</a>
		</div>
	</div>

	<div class="lbox" id="img4">
		<div class="box_img">
			<a href="#img3" class="btn" id="prev">&#171;</a>
			<a href="" class="btn" id="close">&times;</a>
			<img src="g4.jpg" class="imagem">
			<a href="#img5" class="btn" id="next">&#187;</a>
		</div>
	</div>

	<div class="lbox" id="img5">
		<div class="box_img">
			<a href="#img4" class="btn" id="prev">&#171;</a>
			<a href="" class="btn" id="close">&times;</a>
			<img src="g5.jpg" class="imagem">
			<a href="#img6" class="btn" id="next">&#187;</a>
		</div>
	</div>

	<div class="lbox" id="img6">
		<div class="box_img">
			<a href="#img5" class="btn" id="prev">&#171;</a>
			<a href="" class="btn" id="close">&times;</a>
			<img src="g6.jpg" class="imagem">
			<a href="#img7" class="btn" id="next">&#187;</a>
		</div>
	</div> 

	<div class="lbox" id="img7">
		<div class="box_img">
			<a href="#img6" class="btn" id="prev">&#171;</a>
			<a href="" class="btn" id="close">&times;</a>
			<img src="g7.jpg" class="imagem">
			<a href="#img8" class="btn" id="next">&#187;</a>
		</div>
	</div>

	<div class="lbox" id="img8">
		<div class="box_img">
			<a href="#img7" class="btn" id="prev">&#171;</a>
			<a href="" class="btn" id=close>&times;</a>
			<img src="g8.jpg" class="imagem">
			<a href="#img9" class="btn" id="next">&#187;</a>
		</div>
	</div>

	<div class="lbox" id="img9">
		<div class=box_img>
			<a href="#img8" class="btn" id="prev">&#171;</a>
			<a href="" class="btn" id="close">&times;</a>
			<img src="g9.jpg" class="imagem">
			<a href="#img10" class=btn id="next">&#187;</a>
		</div>
	</div>

	<div class="lbox" id="img10">
		<div class="box_img">
			<a href="#img9" class="btn" id="prev">&#171;</a>
			<a href="" class="btn" id="close">&times;</a>
			<img src="g10.jpg" class="imagem">
			<a href="#img11" class="btn" id="next">&#187;</a>
		</div>		
	</div>

	<div class="lbox" id="img11">
		<div class="box_img">
			<a href="#img10" class="btn" id="prev">&#171;</a>
			<a href="" class="btn" id="close">&times;</a>
			<img src="g11.jpg" class="imagem">
			<a href="#img12" class="btn" id="next">&#187;</a>
		</div>
	</div>

	<div class="lbox" id ="img12">
		<div class="box_img">
			<a href="#img11" class="btn" id="prev">&#171;</a>
			<a href="" class="btn" id="close">&times;</a>
			<img src="g12.jpg" class="imagem">
			<a href="#img13" class="btn" id="next">&#187;</a>
		</div>
	</div>

	<div class="lbox" id="img13">
		<div class="box_img">
			<a href="#img12" class="btn" id="prev">&#171;</a>
			<a href="" class="btn" id="close">&times;</a>
			<img src="g13.jpg" class="imagem">
			<a href="#img14" class="btn" id="next">&#187;</a>
		</div> 
	</div>

	<div class="lbox" id="img14">
		<div class=box_img>
			<a href="#img13" class="btn" id="prev">&#171;</a>
			<a href="" class="btn" id="close">&times;</a>
			<img src="g14.jpg" class="imagem">
			<a href="#img0" class="btn" id="next">&#187;</a>
		</div>
	</div>
<!-- imagens-->
	
</body>
</html>