<?php
include 'TesteConexao.php';

$numItem='';

if(isset($_POST['registro'])){
    $numItem=$_POST['registro'];
}else{
    
    $numItem=10;
}
$page = '';
if(isset($_POST['page']))  
 {  
      $page = $_POST['page'];  
 }  
 else  
 {  
      $page = 0;  
 }  

$start_from = $page*$numItem;  
$query="SELECT * FROM produto ORDER BY codigo_produto ASC LIMIT $start_from, $numItem";  


try{
    
    $dados=$conn->query($query);
    
    echo'<table class="table table-bordered table-hover" id="table">';
			   
              echo'<thead>';
                    echo'<tr>';
                        echo'<th>Código</th>';
                        echo'<th>Nome</th>';
                        echo'<th>Preço</th>';
                        echo'<th>Ações</th>';
                    echo'</tr>';
                echo'</thead>';
                echo'<tbody>';
                   
            
  
	
    foreach($dados as $linha){
		
		$valor = $linha['preco_produto'];
	
	$replace= str_replace(".", ",", $valor);	
		
		
        echo '<tr>';
        echo '<td>'.$linha['codigo_produto'].'</td>';
        echo '<td>'.$linha['nome_produto'].'</td>';
        echo '<td>R$'.$replace.'</td>';
        echo '<td>';
        echo '<a class="edit" style="cursor:pointer;" title="Editar" onClick="carregarCampo('.$linha['codigo_produto'].')"  data-toggle="modal" data-target="#modalCampo"><i class="material-icons">&#xE254;</i></a>';
        echo '<a class="delete" style="cursor:pointer;"  onClick="deletar('.$linha['codigo_produto'].')" title="Deletar" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>';
        echo'<a class="open" style="cursor:pointer;" title="Detalhes" onclick="carregarDetalhe('.$linha['codigo_produto'].')" data-toggle="modal" data-target="#modalDetalhe"><i class="material-icons">open_with</i></a>';
        echo '</td>';
        echo '</tr>';
        
    }
    
    //Verificacar se tem registros
    if($dados->rowCount() == '0'){
            
        echo'<p class="verifica">Nenhum serviço cadastrado</p>';
    
    
    }
    echo'</tbody>';
    echo'</table>';
    
    //paginação
    $page_query = 'SELECT * FROM produto';  
    $dados_page=$conn->query($page_query);
    $total=$dados_page->rowCount();
    $total_pages = ceil($total/$numItem);
    $bla=0;
    $anterior=$page-1;
    $proximo=$page+1;
      
    echo '<ul class="pagination justify-content-end">';
    if($anterior <= -1){
        $anterior=$page+0;
        echo'<li class="page-item disabled"id="'.$anterior.'"><a class="page-link">Anterior</a></li>';
        
    }else{    
        echo'<li class="page-item" style="cursor:pointer;" id="'.$anterior.'"><a class="page-link">Anterior</a></li>';
    }
    for($i=0; $i<$total_pages; $i++){
        
        $bla = $i+1;
         echo'<li class="page-item" id="'.$i.'"><a class="page-link" style="cursor:pointer;">'.$bla.'</a></li>';
         
        
    }
    
    if($proximo >= $i){
        $proximo=$page+0;
        echo'<li class="page-item disabled" id="'.$proximo.'"><a class="page-link">Próximo</a></li>';
    }else{
        echo'<li class="page-item" style="cursor:pointer;" id="'.$proximo.'"><a class="page-link">Próximo</a></li>';
   }
    echo '</ul>';
    $page=$page+1;
    echo'<p>Mostrando páginas '.$page.' de '.$i.'</p>';


    
}catch(PDOException $e){
    
    echo $e->getMessage();
    
}

?>

