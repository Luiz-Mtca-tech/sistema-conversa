<?php
/**
 * Helper.php
 * 
 * @author Luiz Henrique da Mota Couto (luizmtca@gmail.com)
 * @date 2022-01-11 14:01:06
 * @package classes\helper\
 * @version v1.0
 * 
 * A classe para as operações relacionadas ao tecnico que irá presta serviços ao usuário
 * 
 */

namespace classes\helper;

class Helper {
	
	public int $id;
	public string $nick;
	
	public function setNick(string $nick)
	{
		if(strlen($nick) >= 3) {
			$this->nick = $nick;
		}
	}
	
	public function setId()
	{
		
	}
	
	
}

