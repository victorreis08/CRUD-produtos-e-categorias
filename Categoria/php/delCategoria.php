<?php
    include "TesteConexao.php";



    try{
        
        $dados=$conn->prepare('delete from categoria where codigo_categoria=:codigo');
        
       
        
        $dados->execute(array(
        
        
        ':codigo'=>$_POST['id']
        
        
        ));
        
        
    }catch(PDOException $e){
        
        echo '<div id="erro">bla</div>';
    }


?>