<?php
/*
 * Chat.php
 * 
 * @authors Luiz Henrique da Mota Couto (luizmtca@gmail.com)
 * @date 2022-01-10 13:27:20
 * @package classes\chat\
 * @version $id$
 * 
 * Esta classe vai ser responsável pelas operações relacionadas ao
 * chat, como por exemplo: enviar, coletar e deletar mensagens
 * 
 */

namespace classes\chat;

require 'autoload.php';

use classes\db\MysqlDataBase;
use classes\user\User;
use classes\helper\Helper;

class Chat extends MysqlDataBase {

	public User $usuario;
	public int $id_usuario;
	
	public Helper $tecnico;
	public int $id_tecnico;
	public int $id_conversa;

	public function __construct(string $db_name, string $host, string $user, string $password) 
	{
		/*iniciando a conexão com o banco de dados*/
		parent::__construct($db_name, $host, $user, $password);
		
	}
	
	/**iniciar com os dados do integrantes do chamado
	 * recebe o id da conversa
	 */
	public function initMenbers($id)
	{
	
		$conversa = parent::find('chamados', '*', "id = '".$id."'");
		$this->id_conversa = $conversa['id'];
		
		$dados_usuario = parent::find('usuarios', '*', "id = '".$conversa['id_usuario']."'");
		
		$this->usuario = new User();
		$this->usuario->setNick($dados_usuario['nome']);
		$this->id_usuario = $dados_usuario['id'];
		
		$dados_tecnico = parent::find('tecnicos', '*', "id = '".$conversa['id_tecnico']."'");
		
		$this->tecnico = new Helper();
		$this->tecnico->setNick($dados_tecnico['nome']);
		$this->id_tecnico = $dados_tecnico['id'];
	}
	
	/*coletar o histórico de mensagens de uma conversa*/
	public function getMessages($id_conversa)
	{
		
		$lista_mensagens = parent::findAll('mensagens', '*', "id_conversa = '".$id_conversa."'");
		
		foreach($lista_mensagens as $item) {
			
			if ($item['id_usuario'] == $this->id_usuario){
				
				?>
					<div class="usuario-mensagem">
						<p><?php echo $item['conteudo']?></p>
					</div>
				<?php
				
			} else if($item['id_tecnico'] == $this->id_tecnico){
				?>
				
					<div class="tecnico-mensagem">
						<p><?php echo $item['conteudo']?></p>
					</div>
				
				<?php
			}
			
		}
		
	
	}
	
	/*enviar uma nova mensagem*/
	public function sendMessage(string $mensagem)
	{
		
		if (parent::registerDatas('mensagens', ['conteudo', 'id_usuario', 'id_conversa'], [$mensagem, $this->id_usuario, $this->id_conversa])) {
			$this->showNewMessage($mensagem);
			return true;
		} else {
			return false;
		}

	}
	
	/*deletar uma mensagem*/
	public function deleteMessage()
	{
		
	}

	private function showNewMessage($mensagem)
	{	
		$this->getMessages($this->id_usuario);
		
		?>
			<div class="usuario-mensagem">
				<p><?php echo $mensagem?></p>
			</div>
			
		<?php
	}

}








