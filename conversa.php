
<?php

require 'autoload.php';

session_start();

use classes\chat\Chat;
use classes\user\User;
use classes\helper\Helper;


if(isset($_SESSION['login'])){
	/*$user = new User();
	$user->setNick($_SESSION['nome']);*/

	$_SESSION['id_conversa'] = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	
	$chat = new Chat('MeuBanco', 'localhost', 'root', '');
	$chat->initMenbers($_SESSION['id_conversa']);
	
	$user = $chat->usuario;
	$tecnico = $chat->tecnico;

}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>untitled</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.36" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<style type="text/css">

	.chat {
		width: 50%;
		margin: auto;
		padding: 0px;
		/*background-color: green;**/
	}
	
	.top {
		background-color: #45FF45;
		margin: 0px;
		height: 50px;
		
	}
	
	.centro {
		height: 300px;
		background-color: white;
		padding: 10px;
		overflow: scroll;
	}
	
	.centro > .usuario-mensagem {
	
		justify-content: flex-end;
		
	}
	.tecnico-mensagem {
		margin: 10px 0px auto 0px;
		background-color: #008000;
		border-radius: 10px;
		width: 50%;
		display: flex;
		
		
	}
	.usuario-mensagem {
		
		margin: 10px 0px 0px auto;
		background-color: #1E90FF;
		border-radius: 10px;
		width: 50%;
		display: flex;
		/*justify: flex-end;*/
		
		
	}

	.baixo {
		background-color: gray;
		height: 50px;
	}
	
	.baixo > form {
		display: flex;
		justify-content: flex-end;
		/*padding-top: 1%;*/
	
	}
	
	form > * {
	
		vertical-align: middle;#45FF45
		
	}
	
	#mensagem {
	
		width: 50%;
		height: 50%;
	
	}
	
	#enviar {
	
		background-color: green;/*#45FF45;*/
		border-radius: 250px;
		padding: 10px;
		
	}
	
	#enviar:hover {
	
		background-color: #45FF45;
		cursor: pointer;
		transform: scale(1.05);
	}

</style>
<body>
	
	<main>
	
		<section class="chat">
			<div class="top">
				<h1><?php echo $tecnico->nick?></h1>
			</div>
			
			<div class="centro" id="area-mensagens">
				<?php $chat->getMessages($_SESSION['id_conversa']); ?>
			</div>
			
			<div class="baixo">
				<form>
				
					<input id="mensagem" type="text">
					<a id="enviar">Enviar</a>
					
					
				</for>
			</div>
		</section>
	
	</main>
	<script type="text/javascript" src="conversa.js"></script>
</body>

</html>
