<?php
	foreach ($data_msg as $message) {
		if ($message['Message']['deleted'] == '1') {
			echo "<h4  style='color:black !important'>".$message['Message']['created_by'].' : '.'Deleted -- Timestamp : '.$message['Message']['updated'].'</h4>';
		} elseif ($message['Message']['created_by'] == $this->Session->read('Auth.User.username')) {
			echo "<h4  style='color:red !important'>".$message['Message']['created_by'].' : '.$message['Message']['content'].' -- Timestamp : '.$message['Message']['updated']." "
			."<a href=".$this->webroot."messages/edit/".$message['Message']['id'].">Edit</a>"." "
			.$this->Html->link('Delete',array('controller'=>'messages','action'=>'del',$message['Message']['id']),array(),'Are you sure?',false)." ".'</h4>';
		} else {
			echo "<h4>".$message['Message']['created_by'].' : '.$message['Message']['content'].' -- Timestamp : '.$message['Message']['updated'].'</h4>';
		}
		
	}


?>