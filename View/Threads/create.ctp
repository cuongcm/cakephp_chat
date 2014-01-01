<?php 
	echo $this->Form->create('Thread',array('action'=>'create'));
	echo $this->Form->input('threadname');
	echo $this->Form->end('Create');
?>