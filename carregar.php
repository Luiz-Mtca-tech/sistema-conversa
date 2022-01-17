<?php
/**
 * 
 * @authors Luiz Henrique da Mota Cout(luizmtca@gmail.com)
 * @date    2022-01-04 16:40:31
 * @version $Id$
 */

require 'autoload.php';

use classes\db\MysqlDataBase;

session_start();

if (isset($_SESSION['login'])) {

    $db = new MysqlDataBase('MeuBanco', 'localhost', 'root', '');

    $registros = $db->findAll('chamados', '*', "id_usuario = '".$_SESSION['id']."'");

    ?>

    <table class="tabela-chamados">
   		
    <?php

    foreach($registros as $chamados) {
    	?>
    	<tr>
    		<td><?php echo $chamados['assunto']?></td>
            <td><a id="excluir" onclick="$.post('excluir.php', {id: <?php echo $chamados['id'] ?>}, function(res){})">Excluir</a></td>
            <td><a href="conversa.php?id=<?php echo $chamados['id']?>">Conversa</a></td>
    	</tr>
    	<?php
    }

    ?>

    </table>
    <?php

} else {
    header('Location: index.html');
}
