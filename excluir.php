<?php
/**
 * 
 * @authors Luiz Henrique da Mota Couto(luizmtca@gmail.com)
 * @date    2022-01-05 13:32:06
 * @version $Id$
 */
 
require 'autoload.php';

use classes\db\MysqlDataBase;

session_start();

if (isset($_SESSION['login'])) {
	// code...
	
	
	
	$db = new MysqlDataBase('MeuBanco', 'localhost', 'root', '');
	
	
	if($db->deleteDatas('chamados', filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT))) {
	
		?>
		
		<script>
			
			var pai = document.querySelector('#chamadas')
			var filho = pai.firstChild
			pai.removeChild(filho)
			$('#chamadas').load('carregar.php')
		
		</script>
		
		
		<?php
	
	}else {
	
		?>
		
		<script>
			
			alert('ocorreu um erro');
		
		</script>
		
		
		<?php
		
	}
	
}
