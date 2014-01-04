<?php echo '<h3>Chat room: '.$data_thread['Thread']['threadname'].'</h3>'; ?>
<?php echo $this->Form->create('Message',array('action'=>'add')); ?>
<div class="form-group">
	<?php echo $this->Form->input('content', array('class' => 'form-control', 'placeholder' => 'Text some message','type'=>'text','label'=> 'Message:'));?>
	
<?php
	echo $this->Form->input('user_id',array('type' => 'hidden','value' => $this->Session->read('Auth.User.id') ));
	echo $this->Form->input('created_by',array('type' => 'hidden','value' => $this->Session->read('Auth.User.username') ));
	echo $this->Form->input('thread_id',array('type' => 'hidden','value' =>$thread_id ));
	echo $this->Form->submit('Chat',array('class' => 'btn btn-default'));
	echo $this->Form->end();
?>
</div>
<?php echo $this->Html->script('autoreload.js'); ?>
<div id=''>
<?php echo $this->element('recentMsg'); ?>
</div>
