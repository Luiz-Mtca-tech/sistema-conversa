/**
 * 
 * @authors Luiz Henrique da Mota Couto (luizmtca@gmail.com)
 * @date 2022-01-11 09:33:12
 * @version $id$
 * 
 * Este script vai cuidar do envio das mensagens do chat, carrega-las e
 * apresenta todas elas na telo do usuário
 *
 */


$(document).ready(function(){
	
	
	function enviarMensagem(){
	
		//var campo_texto = document.getElementById('mensagem')
		//alert('cl')
		var dados = {mensagem: document.getElementById('mensagem').value}
		
		//$.post('', {mensagem: campo_texto.value}, function())
		
		$.ajax({
		
			url: 'mensagem.php',
			data: dados,
			type: 'POST',
			success: function(data){
				//$('#area-mensagens').html(data)
				$('#area-mensagens').append(data)
			},
			error: function(){
				alert('erro')
			}
			
		})
		
		document.getElementById('mensagem').value = ''
		
	}
	
	
	
	var enviar = document.getElementById('enviar')
	
	enviar.addEventListener('click', enviarMensagem)
	


})
