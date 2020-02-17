$(document).ready(function(){
    //alert("documentReady");
        
    //Carrega os servicos cadastrados no banco
    carConteudo();
    $(document).on('click', '.page-item', function(){  
           var page = $(this).attr('id');
           carConteudo(page);  
      });
    
    //carrega a categoria no campo para realizar um cadastro
    carCategoriaCampo(); 
    
    
    //seta para navegar entre o sistema
     $('.seta-4').click(function(){
        $('#panel').slideToggle('slow');
    });
         
    });
    
//função carregar conteúdo da página
function carConteudo(page){        
    var registro=$('#txtRegistro').val();
        
	$.ajax({
		url: 'php/carProduto.php',
		type: 'POST',
		cache: false,
        data:{
            registro:registro,
            page:page
        },
		success: function (result) {

         if ($.trim(result) != '0') {	
                //alert(result);
                $('#carregar').html(result);
				}
				else {	
                     alert('Não foi possivel carregar o conteúdo');
				}
			}
		});
    }
//função carregar a categoria no campo para realizar um cadastro
function carCategoriaCampo(){
    $.ajax({
       url: 'php/carCategoria.php',
       type:'Post',
       cache:false,
       error: function(){
               
                alert("erro");
            },
    success: function(result){        
        if($.trim(result) != 0 ){        
                    $("#txtCategoria").html(result);
                }else{
                    alert('erro ao carregar a categoria');
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
			url: 'php/carCampo.php',
			data: {
                id:id,
			},
			type: 'POST',
			cache: false,
			error: function () {
				alert('Erro');
			},
			success: function (result) {
				
				if ($.trim(result) != '0') {
                       $('#form-alterar').html(result); 
                }
				else {
					alert('Erro');
				}
			}
		});
	}

//função cadastrar conteúdo
function cadastrar(){
    $('#form-cadastro').submit(function(event){
    event.preventDefault();
    var nome = $('#txtNome').val();
    var validade = $('#txtValidade').val();
    var categoria = $('#txtCategoria').val();
    var peso = $('#txtPeso').val();
    var tipo = $('#txtTipo').val();
    var preco = $('#txtPreco').val();
    var img = $('#txtArquivo').val();
    var extension = $('#txtArquivo').val().split('.').pop().toLowerCase();
    var status = $("#txtStatus").val();
    
    if(nome == ""){
        alert("Preencha o campo nome");
        $('#form-cadastro').off();
        return false;
    }else if(validade == ""){
        alert("Preencha o campo validade");
        $('#form-cadastro').off();
        return false;
    }else if(img == ""){
        alert("Preencha o campo arquivo");
        $('#form-cadastro').off();
        return false;
    }  else{
    
    $.ajax({
     url:'php/cadProduto.php',
     type:'POST',
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

//função alterar registro
function alterar(){
     $("#form-alterar").submit(function(event){

    //faz com que o form não atualize a página
    event.preventDefault();
         
	var nome = $("#txtNome2").val();
	var validade = $("#txtValidade2").val();
    var peso = $("#txtPeso2").val();
	var preco = $("#txtPreco2").val();
    var arquivo = $("#txtArquivo2").val();
         
    if(nome == ""){
        alert('preencha o campo nome');
         $('#form-alterar').off();
        return false;
    }else if(validade == ""){
        alert('preencha o campo validade');
        $('#form-alterar').off();
        return false;
    }else if(peso == ""){
        alert('preencha o campo peso');
        $('#form-alterar').off();
        return false;
    }else if(preco == ""){
        alert('preencha o campo preco');
        $('#form-alterar').off();
        return false;
    }else if(arquivo == ""){
        alert('preencha o campo Arquivo');
        $('#form-alterar').off();
        return false;
    }   
    else{
    
    $.ajax({
			url: 'php/altProduto.php',
			type: 'POST',
			cache: false,
            data:new FormData(this),
            contentType:false,
            processData:false,
			success: function (result){
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
	var conf = confirm("Tem certeza que deseja excluir o produto ?");
	if(conf == true){
        $.ajax({
			url: "php/delProduto.php",
			data: {
				id:id,
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


    
   