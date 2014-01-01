<h2>Login</h2>
<?php 
	echo $this->Form->create('User',array('action'=>'login'));
	echo $this->Form->input('username');
	echo $this->Form->input('password');
	echo $this->Form->end('Login Now');
	echo '<h1><a href='.$this->webroot.'users/register>Not a member, Register now!</a></h1>';
?>