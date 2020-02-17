    $(document).ready(function(){
        //alert('documentReady');
        
        carConteudo();
        $(document).on('click', '.page-item', function(){  
           var page = $(this).attr('id');
           carConteudo(page);  
        });
        
       
        $('.seta-4').click(function(){
        $('#panel').slideToggle('slow');
        
		 
		 
    });
    
        
    });
    
    
//função carregar conteúdo da página
function carConteudo(page){
    var registro=$('#txtRegistro').val();
    
    $.ajax({    
        url:'php/carCategoria.php',
        type: 'POST',
        cache: 'false',
        data:{
            registro:registro,
            page:page
        },
        error: function () {
             alert('erro');
			},
        success: function(result){     
             if($.trim(result) != '0') {	
                $('#carregar').html(result);   
             }else{	
                alert('erro ao carregar o conteudo');
               }

         }
    
    });
    
}

//função para carregar detalhe
function carregarDetalhe(id){
    $.ajax({
       url:'php/carDetalhe.php',
        data:{
          id:id  
        },
        type:'POST',
        cache: false,
        success: function(result){
            if($.trim(result) != '0'){
                $('#carregar-detalhe').html(result);
                
            }else{
                alert(result);
            }
            
            
        }
    });
}

//carregar atributos do registro
function carregarCampo(id){
    $.ajax({
       url:'php/carCampo.php',
       data:{id:id},
       type:'POST',
       cache:false,
       error:function(){
            alert('Erro');
        },
        success: function(result){
            if($.trim(result) != '0'){
                $('#form-alterar').html(result); 
            }else{
                alert('Erro ao carregar o campo');
           }
        }
        
    });
     
}


function cadastrar(){
    $('#form-cadastro').submit(function(event){
       //faz com que o form não atualize a página
       event.preventDefault(); 
        
       var nome = $('#txtNome').val();
       var status = $('#txtStatus').val();
       var img = $('#txtArquivo').val();
       var obs = $('#txtObs').val();
        
        if(nome == ""){
          alert('preencha o campo nome');
          $('#form-cadastro').off();
          return false;
        }else if(img == ""){
           alert('preencha o campo Arquivo');
            $('#form-cadastro').off();
           return false;  
        }else if(obs == ""){
            alert('preencha o campo obs');
             $('#form-cadastro').off();
            return false;
        }else{
                $.ajax({
                    url:'php/cadCategoria.php',
                    method:'POST',
                    data:new FormData(this),
                    contentType:false,
                    processData:false,
                    cache:false,
                    success:function(result)
                    {
                        if($.trim(result) > '0'){
                            alert(result);
                            $('#form-cadastro')[0].reset();
                            $('#form-cadastro').off();
                            //location.reload(true);
                            $('#modal-cadastrar').modal('hide');
                            carConteudo();
                        }else{
                            alert(data);
                        }
                    }

            });  
            
        }
        
    });
    
}


function alterar(){
    
    $('#form-alterar').submit(function(event){
    //faz com que o form não atualize a página
    event.preventDefault();
    
        var nome = $('#txtNome2').val();
        var img = $('#txtArquivo2').val();
        var obs = $('#txtObs2').val();
        
        if(nome == ""){
            alert('preencha o campo nome');
            $('#form-alterar').off();
            return false;
        }else if(img == ""){
            alert('preencha o campo Arquivo');
            $('#form-alterar').off();
            return false;
        }else if(obs == ""){
            alert('preencha o campo obs');
            $('#form-alterar').off();
            return false;
        }else{
            $.ajax({
                url:'php/altCategoria.php',
                type: 'POST',
			    cache: false,
                data:new FormData(this),
                contentType:false,
                processData:false,
			    success: function(result){
				    if ($.trim(result) != '0') { 
				        alert(result);
                        $('#form-alterar').off();
                        $('#modalCampo').modal('hide');
                        $('#form-alterar')[0].reset();
                        carConteudo();
                        //location.reload(true);
				    }
			     }
            });
        }
        
    });
      
}

//função deletar cadastro
function deletar(id){
	var conf = confirm("Tem certeza que deseja excluir a categoria ?");
	if(conf == true){
        $.ajax({
			url: 'php/delCategoria.php',
			data: {
				id:id
			},
			type: 'POST',
			cache: false,
			success: function (result) {
				if ($.trim(result) != '0') {
                    carConteudo();
				}else{
                 alert('não foi possivel excluir o produto');
                }
			}
		});
	}
	}