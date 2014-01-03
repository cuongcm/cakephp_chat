<h2>Thread online for chat:</h2>
<?php 
	foreach ($data_thread as $thread) {
		echo '<h4>'.$this->Html->link($thread['Thread']['threadname'], array('controller' => 'threads', 'action' => 'chat', 'id' => $thread['Thread']['id'] )).'</h4>';
	}
?>