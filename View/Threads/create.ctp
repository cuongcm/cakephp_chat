<?php 
	echo $this->Form->create('Thread',array('action'=>'create'));
?>
<div class="form-group">
	<?php echo $this->Form->input('threadname', array('class' => 'form-control', 'placeholder' => 'Put a thread name','type'=>'text','label'=> 'Thread Name:'));
	echo $this->Form->submit('Create',array('class' => 'btn btn-default'));
	echo $this->Form->end();
?>
</div>