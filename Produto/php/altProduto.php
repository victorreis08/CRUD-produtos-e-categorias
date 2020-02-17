<?php
include 'TesteConexao.php';

$codigo=$_POST['txtCodigo'];
$nome=trim($_POST['txtNome2']);
$validade=$_POST['txtValidade2'];
$categoria= $_POST['txtCategoria2'];
$peso=trim($_POST['txtPeso2']);
$tipo=$_POST['txtTipo2'];
$preco=trim($_POST['txtPreco2']);
$status=$_POST['txtStatus2'];

if(isset($_FILES['txtArquivo2'])){

$arquivo = $_FILES["txtArquivo2"];
$pasta_dir = 'img/';

if(!file_exists($pasta_dir)){
	mkdir($pasta_dir);
}
$arquivo_nome = $pasta_dir.$arquivo["name"];
move_uploaded_file($arquivo["tmp_name"], $arquivo_nome);


try{
	
	$dados = $conn->prepare('update produto set nome_produto=:nome,validade_produto=:validade,codigo_categoria=:categoria,peso_produto=:peso,tipo_produto=:tipo,preco_produto=:preco,img_produto=:img, status_produto=:status where codigo_produto=:codigo');
	
	$dados->execute(array(
			':codigo'=>$codigo,
			':nome'=>$nome,
			':validade'=>$validade,
			':categoria'=>$categoria,
			':peso'=>$peso,
			':tipo'=>$tipo,
			':preco'=>$preco,
			':img'=>$arquivo_nome,
            ':status'=>$status
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