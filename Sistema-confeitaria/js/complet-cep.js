//Função de CEP
			$("#cep").blur(function(){
				
				var cep = this.value.replace(/[^0-9]/, "");
				

				if(cep.length != 8){
					return false;
				}
				
				
				var url = "http://viacep.com.br/ws/"+cep+"/json/";
						
				$.getJSON(url, function(dadosRetorno){
					try{
						// Preenche os campos de acordo com o retorno da pesquisa
						$("#endereco").val(dadosRetorno.logradouro);
						$("#bairro").val(dadosRetorno.bairro);
						$("#cidade").val(dadosRetorno.localidade);
						$("#uf_client").val(dadosRetorno.uf);
					}catch(ex){}
				});
			});
