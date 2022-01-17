<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>chat</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<style type="text/css">
    
    body {
        margin: 0;
        background-color: white;
    }

    #chamadas {
        width: 50%;
        margin: auto;
        background-color: #0055ff;
        border-radius: 10px;
        padding: 10px;
    }

    #main {
        width: 50%;
        margin: auto;
        background-color: #f56908;
        border-radius: 10px;
        padding: 10px;
    }

    #enviar {
        font-size: 15pt;
    }

    .form-chamado {
        width: 100%;
        background-color: ;
    }

    .form-chamado > input {
        margin: auto;
        display: block;
    }

    .descricao {
        font-size: 15pt;
        margin: 15px;

    }

    table, th, td {
        border: 1px solid black;
        padding: 5px;

    }

    .tabela-chamados {
        color: white;
        width: 50%;
        margin: auto;
    }
    a {
        text-decoration: none;
        color: white;
        font-style: none;
        background-color: red;
        border-radius: 9px;
        padding: 5px;
        margin: 5px;

    }
    
    a:hover {
	
		background: #a70000;
		
	}

</style>
<body>
    <h1>Digite um assunto:</h1>

    <section id="main">
    	<form class="form-chamado" id="form-chamado" method="post" action="valida_form.php">
    		<input type="text" name="assunto">

            <textarea class="descricao" form="form-chamado" name="descricao" rows="6" cols="80">
                            
            </textarea>
    		<!--input class="descricao" type="text" name="descricao" rows="6" cols="80"-->

    		<input id="enviar" type="submit" name="enviar" value="send">
    	</form>


    </section>

    <section id="chamadas">
        
        <?php require 'carregar.php' ?>


    </section>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>
