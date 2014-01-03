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
<?php
	foreach ($data_thread['Message'] as $message) {
		if ($message['deleted'] == '1') {
			echo "<h4  style='color:black !important'>".$message['created_by'].' : '.'Deleted -- Timestamp : '.$message['updated'].'</h4>';
		} elseif ($message['created_by'] == $this->Session->read('Auth.User.username')) {
			echo "<h4  style='color:red !important'>".$message['created_by'].' : '.$message['content'].' -- Timestamp : '.$message['updated']." "
			."<a href=".$this->webroot."messages/edit/".$message['id'].">Edit</a>"." "
			."<a href=".$this->webroot."messages/del/".$message['id'].">Del</a>"." ".'</h4>';
		} else {
			echo "<h4>".$message['created_by'].' : '.$message['content'].' -- Timestamp : '.$message['updated'].'</h4>';
		}
		
	}


?>