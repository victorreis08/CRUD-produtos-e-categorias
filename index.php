<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<style>
	
    .zoom {
    
    transition: transform .2s;
    float: left;
    
}

.zoom:hover {
    -ms-transform: scale(1.5); /* IE 9 */
    -webkit-transform: scale(1.5); /* Safari 3-8 */
    transform: scale(1.1); 
}
    
    body{
		
		background-image: url(img/tela.jpg);
		font-family: arial;
	}
	#sistema{
		width: 520px;
		height: 300px;
		padding: 10px;
		border-radius: 20px;
		background-color: white;
		margin: auto;
		margin-top: 150px;
	}	
	#titulo{
		text-align: center;
	}
	#botao{
		width: 500px;
		margin-left: 50px;
	}
	#categoria{
		float: left;
		margin-left: 10px;
	}#produto{
		float: left;
		margin-left: 10px;
	}
</style>
	
<body>
<!--daqui pra frente mostra os dados da página-->		
	<div id="sistema">
		<h1 id="titulo">Bem vindo ao Sistema </h1>
	   <div id="botao">
		  <div id="categoria" class="zoom"><a href="Categoria/index.php"><img src="img/Categoria.png"></a></div>
		  <div id="produto" class="zoom"><a href="Produto/index.php"><img src="img/Produto2.png"></a></div>
        </div>
	</div>
</body>
</html>