<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Categoria</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/icon.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
</head>
<body>
    
<div class="seta-4"></div>
    <div id="float"></div>
	<div id="panel">
		<div id="botao">
        <div id="home" class="zoom"><a href="../index.php"><img src="img/home.png"></a></div>
		<div id="categoria" class="zoom"><a href="index.php"><img src="img/Categoria.png"></a></div>
		<div id="produto" class="zoom"><a href="../Produto/index.php"><img src="img/Produto2.png"></a></div>
		</div>
    </div>
     
    <div id="float"></div>
<div class="container">
    
    <h2>Categoria</h2>
     <button class="btn btn-primary" data-toggle="modal" data-target="#modal-cadastrar">Novo</button>
    
        <div id="parRegistro">
        <label id="lblRegistro" for="txtRegistro">Registros</label>
         <select name="txtRegistro" id="txtRegistro" onchange="carConteudo()">
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
         </select>
    </div>
    		
    
    
    <div id="carregar"></div>
    

    
<!-- Modal cadastrar -->
<div class="modal fade" id="modal-cadastrar" role="dialog">
     <div class="modal-dialog">
    
  <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Categoria</h4>
        </div>    
    
    
    <div class="modal-body">

        <form id="form-cadastro" method="post" enctype="multipart/form-data">
         <p>
            <label>Nome</label><br />
             <input class="form-control" name="txtNome" id="txtNome" type="text" maxlength="50">
        </p>
         <p>
            <label>Status</label><br />
              <select name="txtStatus" id="txtStatus" class="form-control">
                  <option value="A">Ativo</option>
                  <option value="I">Inativo</option>
                    
             </select>
        </p>
        <p>
            <label>Imagem</label>
            <input name="txtArquivo" id="txtArquivo" type="file">
        </p>
        <p>
            <label>Obs</label><br />
            <textarea class="form-control" name="txtObs" id="txtObs"  maxlength="250"></textarea>
        
        </p>
        <p><input type="submit" name="btoInserir" id="btoInserir" value="Cadastrar" class="btn btn-primary" onclick="cadastrar()"></p>
        </form>
    </div>
      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal">Cancelar</button>
      
      </div>
        
     </div>  
    </div>
    
    
</div>
    
<!-- Modal alterar -->
<div class="modal fade" id="modalCampo" role="dialog">
     <div class="modal-dialog">
    
  <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Categoria</h4>
        </div>    
    
    
    <div class="modal-body" id="carregarCampo">
         <form id="form-alterar">
        
         </form>
    </div>
      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal">Cancelar</button>
      
      </div>
        
     </div>  
    </div>
    
    
</div>
</div>
    
    <!-- Modal carregar detalhe -->     
      
      <div class="modal fade" id="modalDetalhe" role="dialog">
      <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Categoria</h4>
          </div>
          <div class="modal-body" id="carregar-detalhe">
                
          </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>  
        </div>
          
          
     </div>
          
      </div>
      
      
      </div>
    
    
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/Script.js"></script>

</body>
</html>