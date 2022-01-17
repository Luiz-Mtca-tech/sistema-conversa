<?php
/**
 * 
 * @authors Luiz Henrique (luizmtca@gmail.com)
 * @date    2022-01-03 17:48:52
 * @version $Id$
 */

require 'autoload.php';

use classes\form\Form;
use classes\db\MysqlDataBase;

session_start();

if (isset($_SESSION['login'])) {
    echo $_SESSION['id'];

    $form = new Form(); 
    $db = new MysqlDataBase('MeuBanco', 'localhost', 'root', '');

    $form_values = $form->getInputValue(['assunto', 'descricao']);

	$tecnico = $db->find('tecnicos', '*', 'servico = 0');
	
	if(count($tecnico) > 0){
		$db->registerDatas('chamados', ['assunto', 'descricao', 'id_usuario', 'id_tecnico'], [$form_values[0], $form_values[1], $_SESSION['id'], $tecnico['id']]);

		$db->updateDatas('tecnicos', $tecnico['id'], ['servico'], ['1']);

		header('Location: chamada.php');
	}

	header('Location: chamada.php');

} else {
    header('Location: index.html');
}
