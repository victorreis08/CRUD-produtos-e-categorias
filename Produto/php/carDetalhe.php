<?php

include'TesteConexao.php';

$codigo=$_POST['id'];

try{
    
    $dados=$conn->query("select produto.*, categoria.nome_categoria from produto INNER JOIN categoria ON produto.codigo_categoria= categoria.codigo_categoria where codigo_produto=".$codigo);
    
    foreach($dados as $linha){
        
        echo '<p>Código: '.$linha['codigo_produto'].'</p>';
        echo '<p>Nome: '.$linha['nome_produto'].'</p>';
        echo '<p>Validade: '.$linha['validade_produto'].'</p>';
        echo '<p>Categoria: '.$linha['nome_categoria'].'</p>';
        echo '<p>Peso: '.$linha['peso_produto'].'</p>';
        echo '<p>Preço: '.$linha['preco_produto'].'</p>';
        echo'<p>Img: '.$linha['img_produto'].'</p>';
        echo '<p><img src="php/'.$linha['img_produto'].'" width="30%" height="20%"/></p>';
        echo '<p>Status: '.$linha['status_produto'].'</p>';
    }
}catch(PDOException $e){
    
    echo $e->getMessage();
    
}


?>