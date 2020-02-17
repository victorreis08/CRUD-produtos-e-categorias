<?php
include 'TesteConexao.php';

$nome=$_POST['txtNome'];
$validade=$_POST['txtValidade'];
$categoria= $_POST['txtCategoria'];
$peso=$_POST['txtPeso'];
$tipo=$_POST['txtTipo'];
$preco=$_POST['txtPreco'];
$status=$_POST['txtStatus'];

if(isset($_FILES['txtArquivo'])){

$arquivo = $_FILES["txtArquivo"];
	
$pasta_dir = 'img/';

if(!file_exists($pasta_dir)){
	mkdir($pasta_dir);
}
$arquivo_nome = $pasta_dir.$arquivo["name"];
	
move_uploaded_file($arquivo["tmp_name"], $arquivo_nome);

try{
	$dados = $conn->prepare('insert into produto values (:codigo,:nome,:validade,:categoria,:peso,:tipo,:preco,:imagem,:status)');
	$dados->execute(array(
		
		':codigo'=> '',
		':nome'=>$nome,
		':validade'=>$validade,
		':categoria'=>$categoria,
		':peso'=> $peso,
		':tipo'=>$tipo,
		':preco'=>$preco,
		':imagem'=>$arquivo_nome,
        ':status'=>$status
	));
	
	//$last_id = $conn->lastInsertId();
    //echo $last_id;
	if($dados->rowCount() == 1)
	{
		 echo'Cadastro realizado com sucesso';	
	}
	
	
}catch(PDOException $e)
{
	echo $e->getMessage();

}
}
?>