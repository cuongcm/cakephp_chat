<?php 
	echo $this->Form->create('User',array('action'=>'register'));
	echo $this->Form->input('username');
	echo $this->Form->input('password');
	echo $this->Form->input('email');
	echo $this->Form->end('Create New User Now');
?>