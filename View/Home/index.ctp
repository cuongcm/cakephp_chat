<h2>Thread online for chat:</h2>
<?php 
	echo '<ul class="unstyled">';
	foreach ($data_thread as $thread) {
		echo '<li>'.$this->Html->link($thread['Thread']['threadname'], array('controller' => 'threads', 'action' => 'chat', 'id' => $thread['Thread']['id'] )).'</li>';
	}
	echo "</ul>";
?>