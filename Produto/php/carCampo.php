<?php
    
include "TesteConexao.php";

$codigo= $_POST['id']; 

try{

$dados= $conn->query("select produto.*, categoria.nome_categoria from produto INNER JOIN categoria ON produto.codigo_categoria= categoria.codigo_categoria where codigo_produto=".$codigo);

foreach($dados as $linha){


   echo '<p>';
    echo'<label>Código:</label><br />';
    echo '<input type="text" name="txtCodigo" id="txtCodigo" class="form-control" value="'.$linha['codigo_produto'].'" readonly="true">';
    echo '</p>';
            
   echo '<p>';
    echo '<label>Nome:</label><br />';
    echo  '<input type="text" name="txtNome2" id="txtNome2" class="form-control" value="'.$linha["nome_produto"].'">';
    echo   '</p>';
    echo '<p>';
    echo'<label>Validade:</label><br />';
    echo '<input type="date" name="txtValidade2" id="txtValidade2" class="form-control" value="'.$linha['validade_produto'].'">';
    echo '</p>';
    echo '<p>';
    echo '<label>Categoria:</label><br />';
    echo '<select class="form-control" id="txtCategoria2" name="txtCategoria2">';
    echo '<option value='.$linha['codigo_categoria'].'>'.$linha["nome_categoria"].'</option>';
    try{
    $dados=$conn->query("select*from categoria");
    foreach($dados as $row){
     echo '<option value='.$row['codigo_categoria'].'>'.$row["nome_categoria"].'</option>';
    }
    }catch(PDOException $e){
        
         echo $e->getMessage();
        
    }
    echo '</select>';
    
    
    echo '</p>';
    echo '<div id="peso">';
            echo '<p>';
                echo '<label>Peso:</label><br />';
    echo '<input type="number" name="txtPeso2" id="txtPeso2" class="form-control"  value="'.$linha['peso_produto'].'">';
    echo '</p>';
        echo '</div>';
            echo'<div id="tipo">';
                echo '<p>';
                    echo'<label>Tipo:</label><br />';
            echo '<select name="txtTipo2" id="txtTipo2" class="form-control">';
            echo '<option value="'.$linha['tipo_produto'].'">'.$linha['tipo_produto'].'</option>';
            echo '<option value="gr">gr</option>';
            echo '<option value="kg">kg</option>';
            echo '<option value="li">li</option>';
            echo '<option value="ml">ml</option>';
            echo '</select>';
                echo '</p>';
            echo '</div>';
            echo '<p>';
             echo '<label>Preço:</label><br />';
    echo '<input type="number" name="txtPreco2" id="txtPreco2" class="form-control" value="'.$linha['preco_produto'].'">';
            echo '</p>';
            
            echo'<p>';
             echo'<label>Arquivo:</label><br />';
            echo'<input type="file" name="txtArquivo2" id="txtArquivo2" class="form-control"  value="'.$linha['img_produto'].'">';
            echo'<img src="php/'.$linha['img_produto'].'" width="200px" height="100px"/>';
            echo'</p>';
    
            echo '<p>';
            echo '<select name="txtStatus2" id="txtStatus2" class="form-control">';
                 echo '<option value="'.$linha['status_produto'].'">'.$linha['status_produto'].'</option>';
                echo'<option value="of">Ofertas</option>';
                    echo'<option value="mv">Mais Vendidos</option>';
                 echo'</select>';
            echo '</p>';
    
        echo '<p>';
        echo' <input type="submit" name="btoAlterar" id="btoAlterar" value="Alterar" class="btn btn-primary" onclick="alterar()">';
        echo'</p>';
 
            
}


    
    
}catch(PDOException $e){
    
    echo $e;
    
}




?>
