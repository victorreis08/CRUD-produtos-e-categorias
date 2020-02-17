<?php
    include "TesteConexao.php";
    
    $codigo=$_POST['txtCodigo'];
    $nome=trim($_POST['txtNome2']);
    $status=$_POST['txtStatus2'];
    $obs=trim($_POST['txtObs2']);

    
    if(isset($_FILES['txtArquivo2'])){
        $arquivo = $_FILES["txtArquivo2"];
	
        $pasta_dir = 'img/';

        if(!file_exists($pasta_dir)){
	       mkdir($pasta_dir);
        }
        $arquivo_nome = $pasta_dir.$arquivo["name"];
        move_uploaded_file($arquivo["tmp_name"], $arquivo_nome);
        
    try{
        
        $dados=$conn->prepare('update categoria set nome_categoria=:nome, status_categoria=:status, img_categoria=:img, obs_categoria=:obs where codigo_categoria=:codigo');
        
        $dados->execute(array(
            ':codigo'=>$codigo,
            ':nome'=>$nome,
            ':status'=>$status,
            ':img'=>$arquivo_nome,
            ':obs'=>$obs
        
        ));
         if($dados->rowCount() > '0'){
            echo'Dados alterardos com sucesso';
        }else{
              echo'Não foi possivel realizar o cadastro';
         }   
        
        
    }catch(PDOException $e){
        
        echo $e->getMessage();
        
    }
    }


?>