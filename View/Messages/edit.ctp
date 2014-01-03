<?php 
	echo $this->Form->create('Message',array('action'=>'edit/'.$message_id));
?>
<div class="form-group">
	<?php echo $this->Form->input('content', array('class' => 'form-control', 'placeholder' => 'Text some message','type'=>'text','label'=> 'Message:','value' => $content));
	echo $this->Form->submit('Submit',array('class' => 'btn btn-default'));
	echo $this->Form->end();
?>
</div>