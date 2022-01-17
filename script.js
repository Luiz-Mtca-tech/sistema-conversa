/**
 * 
 * @authors Luiz Henrique da Mota Couto(luizmtca@gmail.com)
 * @date    2022-01-05 13:23:29
 * @version $Id$
 * 
 * Função para atualizar a lista de conversas
 * 
 */

$(document).ready(function(){

	//function to destroy the previous table and 
	//make a new one
	function atualizarTabela() {
	
		var pai = document.querySelector('#chamadas')
		var filho = pai.firstChild
		pai.removeChild(filho)
		$('#chamadas').load('carregar.php')	
	
	}
	
	botoes = document.querySelectorAll('#chamadas')
	
	//adding events to all of the buttons  
	for(var i = 0; i < botoes.length; i++){
		botoes[i].addEventListener('click', atualizarTabela)
	}
})

