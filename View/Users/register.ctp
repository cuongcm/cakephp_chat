<h2>Register</h2>
<?php 
	echo $this->Form->create('User',array('action'=>'register'));
	echo $this->Form->input('username');
	echo $this->Form->input('password');
	echo $this->Form->input('password_confirm',array('type' => 'password'));
	echo $this->Form->input('email');
	echo $this->Form->end('Submit');
	echo '<h1><a href='.$this->webroot.'users/login>already a member, Login now!</a></h1>';
?>