<?php
    include 'TesteConexao.php';
    $codigo=$_POST['id'];


    try{
        
        $dados= $conn->query('select*from categoria where codigo_categoria='.$codigo);
        
        foreach($dados as $linha){
            
        echo '<p>';
        echo '<label>Código</label><br />';
        echo '<input class="form-control" name="txtCodigo" id="txtCodigo" type="text" value="'.$linha['codigo_categoria'].'" readonly="true">';
        echo'</p>';
         echo'<p>';
            echo'<label>Nome</label><br />';
             echo'<input class="form-control" name="txtNome2" id="txtNome2" type="text" value="'.$linha['nome_categoria'].'">';
        echo'</p>';
         echo'<p>';
            echo'<label>Status</label><br />';
             echo'<select class="form-control" name="txtStatus2" id="txtStatus2">';
                    echo '<option value="'.$linha['status_categoria'].'">'.$linha['status_categoria'].'</option>';
                    echo '<option value="A">Ativo</option>';
                    echo '<option value="I">Inativo</option>';
             echo'</select>';
        echo'</p>';
        echo'<p>';
            echo'<label>Imagem</label>';
            echo'<input type="file" class="form-control" name="txtArquivo2" id="txtArquivo2" type="text" value="'.$linha['img_categoria'].'">';
            echo'<img src="php/'.$linha['img_categoria'].'" width="100px" height="50px"/>';
        echo'</p>';
        echo'<p>';
            echo'<label>Obs</label><br />';
            echo'<textarea class="form-control" name="txtObs2" id="txtObs2">'.$linha['obs_categoria'].'</textarea>';
        
        echo'</p>';
         echo' <input type="submit" name="btoAlterar" id="btoAlterar" value="Alterar" class="btn btn-primary" onclick="alterar()">';
            
            
        }
        
    }catch(PDOException $e){
        
        echo $e->getMessage();
        
    }


?>