<?php
/*
 * Chat.php
 * 
 * @authors Luiz Henrique da Mota Couto (luizmtca@gmail.com)
 * @date 2022-01-10 13:27:20
 * @package classes\user\
 * @version v1.0
 * 
 * Esta classe vai ser responsável pelas operações relacionadas ao
 * ao usuário, como seu nome no chat e a senha
 * 
 */

namespace classes\user;

require 'autoload.php';

//use classes\db\MysqlDataBase;
use classes\interfaces\user\UserInterface;

class User implements UserInterface {
	
	public int $id_tecnico;
	public string $nick;
	public string $password;
	
	public function setNick(string $nick)
	{
		if (strlen($nick) >= 3) {
			
			$this->nick = $nick;
		} else {
			return false;
		}
	}
	
	public function getNick()
	{
		return $this->nick;
	}
	
	public function setPassword(string $password)
	{
		if (strlen($password) >= 5){
			$this->password = md5($password);
		} else {
			return false;
		}
	}
	
	public function getPassword()
	{
		return $this->password;
	}
	
}





