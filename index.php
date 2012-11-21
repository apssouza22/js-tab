<!doctype html>
<!--[if lt IE 7 ]> <html lang="pt" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="pt" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="pt" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="pt" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="pt" class="no-js"> <!--<![endif]-->
	<head>
		<title>teste</title>
		<style>
			a{cursor: pointer; margin: 10px;}
			.conteudo div{
				display: none;
			}
			
			.selected{
				background: #00A700;
			}
			
			#gallery .mask{
				position: relative;
				width: 860px;
				height: 150px;
				overflow: hidden;
				display: block;
			}
			#gallery .mask .row{
				position: absolute;
				top: 0; left: 0;
				width: 50000px;
			}
		</style>
	</head>

	<body>
		<div class="abas">
			<a href="#fulana1">fulana1</a>
			<a href="#fulana2">fulana2</a>
			<a href="#fulana3">fulana3</a>
		</div>
		<div class="conteudo">
			<div id="fulana1"> fotos fulana 1</div>
			<div id="fulana2">fotos fulana 2</div>
			<div id="fulana3">fotos fulana 3</div>
		</div>
		
		
		<h1>Carrossel</h1>
		
		<div id="gallery">
			<a class="prev"><<<</a>
			<a class="next">>>></a>
			<div class="mask">
				<div class="row">
					<img class="item" src="img/thumb_convite01.jpg" width="200"></img>
					<img class="item" src="img/thumb_convite01.jpg" width="200"></img>
					<img class="item" src="img/thumb_convite01.jpg" width="200"></img>
					<img class="item" src="img/thumb_convite01.jpg" width="200"></img>
					<img class="item" src="img/thumb_convite01.jpg" width="200"></img>
					<img class="item" src="img/thumb_convite01.jpg" width="200"></img>
					<img class="item" src="img/thumb_convite01.jpg" width="200"></img>
				</div>
			</div>
		</div>
		
		<script type="text/javascript" src="jquery-1.5.1.min.js"></script>
		<script type="text/javascript" src="tab.js"></script>
		<script type="text/javascript">
			Tab({
				cssClassItemSelected : 'selected',
				selectorTab	: '.abas a',
				selectorBoxContents	: '.conteudo div'
			});
			
		</script>
	</body>
</html>
