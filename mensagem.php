<?php
/**
 * 
 * mensagem.php
 * 
 * @authors Luiz Henrique da Mota Couto (luizmtca@gmail.com)
 * @date 2022-01-10 01:59:49
 * @version v1.0
 * 
 * 
 */


require 'autoload.php';

session_start();

use classes\chat\Chat;

//echo $_POST['id'];
//exit;
$chat = new Chat('MeuBanco', 'localhost', 'root', '');
$chat->initMenbers($_SESSION['id_conversa']);
$mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_SPECIAL_CHARS);

$chat->sendMessage($mensagem);




