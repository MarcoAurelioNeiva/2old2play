<!DOCTYPE html>
<html>
<head>
	<title>Imagens</title>
	<style>
	ul{
		width: 800px;
		list-style: none;
		display: flex;
		margin: 100px auto;
	}
	.mim{
		width: 200px;
		padding: 10px;
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
</style>
</head>
<body>
	<ul>
		<li><a href="#img1"><img src="g1.jpg" class="mini"></a></li>
		<li><a href="#img2"><img src="g2.jpg" class="mini"></a></li>
		<li><a href="#img3"><img src="g3.jpg" class="mini"></a></li>
		<li><a href="#img4"><img src="g4.jpg" class="mini"></a></li>
		<li><a href="#img5"><img src="g5.jpg" class="mini"></a></li>
		<li><a href="#img6"><img src="g6.jpg" class="mini"></a></li>
	</ul>		

	<div class="lbox" id="img1">
		<div class="box_img">
			<a href="" class="btn" id="prev">&#171;</a>
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
</body>
</html>