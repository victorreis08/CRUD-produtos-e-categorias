<?php
include 'TesteConexao.php';

    $nome= trim($_POST['txtNome']);
    $status=$_POST['txtStatus'];
	$obs=trim($_POST['txtObs']);

if(isset($_FILES['txtArquivo'])){
	
	$arquivo= $_FILES['txtArquivo'];
	
	$pasta_dir = 'img/';

if(!file_exists($pasta_dir)){
	mkdir($pasta_dir);
}
$arquivo_nome = $pasta_dir.$arquivo["name"];
	
move_uploaded_file($arquivo["tmp_name"], $arquivo_nome);
try{
        $dados = $conn->prepare('insert into categoria values(:codigo, :nome, :status, :img, :obs)');
        $dados->execute(array(
        
            ':codigo'=> '',
            ':nome'=> $nome,
            ':status'=>$status,
            ':img'=>$arquivo_nome,
            ':obs'=>$obs
        
        ));
        
        
     if($dados->rowCount() == 1){
		 echo'Cadastro realizado com sucesso';	
	   }
        
    }catch(PDOException $e){
        $e->getMessage();
           
    }
}
?>