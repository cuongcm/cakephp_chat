<?php 
	echo "Welcom <b>".$this->Session->read('Auth.User.username').'</b> ^_^ ,';
	echo '<h4>'.$this->Html->link('+ Create new own thread', array('controller' => 'threads', 'action' => 'create' )).'</h4>';
?>
<h3>Your owned chat threads:</h3>
<?php 
	foreach ($data_user['Thread'] as $thread) {
		echo '<h4>'.$this->Html->link($thread['threadname'], array('controller' => 'threads', 'action' => 'chat', 'id' => $thread['id'] )).'</h4>';

	}
?>