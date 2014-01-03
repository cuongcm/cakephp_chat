<div class="col-md-9">
	<h2>Login</h2>
	<?php echo $this->Form->create('User', array('role' => 'form')); ?>

		<div class="form-group">
			<?php echo $this->Form->input('username', array('class' => 'form-control', 'placeholder' => 'Username'));?>
		</div>
		<div class="form-group">
			<?php echo $this->Form->input('password', array('class' => 'form-control', 'placeholder' => 'Password'));?>
		</div>
	
		<div class="form-group">
			<?php echo $this->Form->submit(__('Login Now'), array('class' => 'btn btn-default')); ?>
		</div>

	<?php echo $this->Form->end() ?>
<?php 
	echo '<h4><a href='.$this->webroot.'users/register>Not a member, Register now!</a></h4>';
?>
</div><!-- end col md 12 -->