<?php
$host= "localhost";
$bd= "bd_crud";
$user= "root";
$senha= "";

try{
    
   $conn = new PDO( "mysql:dbname=$bd; host=$host", $user, $senha );
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $conn->exec( "set names utf8" );
    
}catch(PDOException $e){
    
    echo $e->getMessage();
    
}



?>