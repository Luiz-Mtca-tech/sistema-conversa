<?php
/**
 * 
 * @authors Luiz Henrique da Mota Couto (luizmtca@gmail.com)
 * @date    2022-01-03 17:58:21
 * @version $Id$
 */

require 'autoload.php';

session_start();

use classes\form\Form;
use classes\db\MysqlDataBase;

echo 'inicio do programa';

$form = new Form();
$db = new MysqlDataBase('MeuBanco', 'localhost', 'root', '');
//$pdo = $db->pdo;
$dados = $form->getInputValue(['nome', 'senha']);

$lista_banco = $db->find('usuarios', '*', "senha = '".$dados[1]."' AND nome = '".$dados[0]."'");
echo $lista_banco."<br>";
echo gettype($lista_banco);
print_r($lista_banco);

if ($lista_banco) {
    if ($lista_banco['logado'] == '0') {
        $_SESSION['id'] = $lista_banco['id'];
        $_SESSION['login'] = $lista_banco['nome'];

        $db->updateDatas('usuarios', $lista_banco['id'], ['logado'], ['1']);    
    } else {
        //will do something soon
    }

    header('Location: chamada.php');
}else {
    ?>
    <script type="text/javascript">
        
        alert('login or passaword incorrect')

    </script>
    <?php

    header('Location: index.html');
}