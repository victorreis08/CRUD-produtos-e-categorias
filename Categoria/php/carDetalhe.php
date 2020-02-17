<?php
include 'TesteConexao.php';

$codigo=$_POST['id'];

try{
    $dados=$conn->query('select*from categoria where codigo_categoria='.$codigo);
    foreach($dados as $linha){
        echo'<p>Código: '.$linha['codigo_categoria'].'</p>';
        echo'<p>Nome: '.$linha['nome_categoria'].'</p>';
        echo'<p>Status: '.$linha['status_categoria'].'</p>';
        echo'<p>Img: '.$linha['img_categoria'].'</p>';
        echo'<p><img src="php/'.$linha['img_categoria'].'" width="100px" height="50px"/></p>';
        echo'<p>Obs: '.$linha['obs_categoria'].'</p>';
        
    }
    
}catch(PDOException $e){
    $e->getMessage();
}

?>