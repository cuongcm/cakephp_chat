<?php
	echo '<h3>Chat room: '.$data_thread['Thread']['threadname'].'</h3>';

	echo $this->Form->create('Message',array('action'=>'add'));
	echo $this->Form->input('content',array('type' => 'text'));
	echo $this->Form->input('user_id',array('type' => 'hidden','value' => $this->Session->read('Auth.User.id') ));
	echo $this->Form->input('created_by',array('type' => 'hidden','value' => $this->Session->read('Auth.User.username') ));
	echo $this->Form->input('thread_id',array('type' => 'hidden','value' =>$thread_id ));
	echo $this->Form->end('Chat');

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