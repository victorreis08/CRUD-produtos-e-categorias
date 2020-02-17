<?php

include "TesteConexao.php";

try{
	
	$dados = $conn->prepare('delete from produto where codigo_produto=:codigo');
	
	$dados->execute(array(
		':codigo' => $_POST['id'],
	));
	
	
	
}catch(PDOException $e){
	echo "0";
}

?>