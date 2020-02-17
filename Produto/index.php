<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Produto</title>
<link href="css/icon.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/estilo.css" rel="stylesheet" type="text/css">
</head>

<body>
   
    <div class="seta-4"></div>
    <div id="float"></div>
	<div id="panel">
		<div id="botao">
            <div id="home" class="zoom"><a href="../index.php"><img src="img/home.png"></a></div>
		    <div id="categoria" class="zoom"><a href="../Categoria/index.php"><img src="img/Categoria.png"></a></div>
		    <div id="produto" class="zoom"><a href="index.php"><img src="img/Produto2.png"></a></div>
		</div>
       
    </div>
     
    <div id="float"></div>
  <div class="container">
  <h2>Produto</h2>
                    
  <!-- Botão para ativar o modal -->
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
    		
    
    
    <!-- carrega o conteúdo -->
    <div id="carregar"></div>
           
  
  <!-- Modal cadastrar-->
  <div class="modal fade" id="modal-cadastrar" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Produto</h4>
        </div>
        <div class="modal-body">
            <form method="post" id="form-cadastro" enctype="multipart/form-data">
            <p>
            <label for="txtNome">Nome:</label><br />
            <input type="text" name="txtNome" id="txtNome" class="form-control" maxlength="50">
            </p>
            <p>
                <label for="txtValidade">Validade:</label><br />
                <input type="date" name="txtValidade" id="txtValidade" class="form-control">
            </p>
            <p>
                <label for="txtCategoria">Categoria:</label><br />
				 <select name="txtCategoria" id="txtCategoria" class="form-control">
                  
                    
                </select>
                
            </p>
            <div id="peso">
                <p>
                    <label for="txtPeso">Peso:</label><br />
                    <input type="number" name="txtPeso" id="txtPeso" class="form-control" maxlength="5">
                </p>
            </div>
            <div id="tipo">
                <p>
                    <label for="txtTipo">Tipo:</label><br />
                   <select name="txtTipo" id="txtTipo" class="form-control">
                    <option value="kg">kg</option>
                    <option value="gr">gr</option>
                    <option value="li">li</option>
                    <option value="ml">ml</option>
                    
                    </select>
                </p>
            </div>
            <p>
             <label for="txtPreco">Preço(ex: 10.99):</label><br />
            <input type="text" name="txtPreco" id="txtPreco" class="form-control" maxlength="10">
            </p>
            
            <p>
             <label for="txtArquivo">Arquivo:</label><br />
             <input type="file" name="txtArquivo" id="txtArquivo">
            </p>
                
             <p>
                <label for="txtStatus">Status</label>
                 <select name="txtStatus" id="txtStatus" class="form-control">
                    <option value="of">Ofertas</option>
                    <option value="mv">Mais Vendidos</option> 
                 </select>
                
            </p>
                
            <p><input type="submit" name="btoInserir" id="btoInserir" value="Cadastrar" class="btn btn-primary" onclick="cadastrar()"></p>
                </form>
        </div>
        <div class="modal-footer">
          
             
            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
          
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
          <h4 class="modal-title">Produtos</h4>
        </div>
        <div class="modal-body" id="carregarCampo">
            <form id="form-alterar" method="post" enctype="multipart/form-data">
            
                
            </form>
            
             
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
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
            <h4 class="modal-title">Produtos</h4>
          </div>
          <div class="modal-body" id="carregar-detalhe">
                
          </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>  
        </div>
          
          
     </div>
          
      </div>
      
      
      </div>
    
  
</div>

    
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/Script.js"></script>

 

</body>

</html>