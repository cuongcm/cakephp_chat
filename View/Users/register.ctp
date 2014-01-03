
<div class="col-md-9">
	<h2>Register</h2>
	<?php echo $this->Form->create('User', array('role' => 'form')); ?>

		<div class="form-group">
			<?php echo $this->Form->input('username', array('class' => 'form-control', 'placeholder' => 'Username'));?>
		</div>
		<div class="form-group">
			<?php echo $this->Form->input('password', array('class' => 'form-control', 'placeholder' => 'Password'));?>
		</div>
		<div class="form-group">
			<?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email'));?>
		</div>
		<div class="form-group">
			<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
		</div>

	<?php echo $this->Form->end() ?>

<?php echo '<h4><a href='.$this->webroot.'users/login>Already a member, Login now!</a></h4>'; ?>

</div><!-- end col md 12 -->