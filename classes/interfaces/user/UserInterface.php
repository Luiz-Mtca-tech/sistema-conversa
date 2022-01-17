<?php
/*
 * UserInterface.php
 * 
 * @authors Luiz Henrique da Mota Couto (luizmtca@gmail.com)
 * @date 2022-01-11 08:53:11
 * @package classes\interfaces\user\
 * @version v1.0 
 * 
 * Interface para a classe User
 * 
 */

namespace classes\interfaces\user; 
 
interface UserInterface {
	 
	public function setNick(string $nick);
	
	public function getNick();
	
	public function setPassword(string $password);
	
	public function getPassword(); 
	 
}
