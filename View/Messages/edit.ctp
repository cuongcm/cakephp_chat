<?php 
echo $this->Form->create('Message',array('action'=>'edit/'.$message_id));
echo $this->Form->input('content',array('type' => 'text', 'value' => $content));
//echo $this->Form->input('thread_id',array('type' => 'hidden','value' =>$thread_id ));
echo $this->Form->end('Submit');

?>