<?php
include "TesteConexao.php";

try{
    
    $dados= $conn->query("select*from categoria");
    
    foreach($dados as $linha){
       
        echo '<option value='.$linha['codigo_categoria'].'>'.$linha['nome_categoria'].'</option>';
     
        
        
    }
     
    
    
}catch(PDOExeception $e){
    
echo $e->getMessage();
    
    
}



?>