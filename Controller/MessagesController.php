<?php 
class MessagesController extends AppController{
	public function add() {
        if (!empty($this->data)) {
				$this->Message->set($this->data);
				if($this->Message->validateMessage()==TRUE){
					$this->Message->save();
				} else {
					$this->Session->setFlash("Please check input again !");
				}
				$this->redirect(array('controller' => 'threads','action' => 'chat','id' => $this->data['Message']['thread_id']));
		}
    }
    public function del($id){
    	$this->Message->read(null,$id);
    	//save thread id for redirect
    	$thread_id = $this->Message->data['Message']['thread_id'];
    	
    	if( $this->Message->data['Message']['user_id'] == $this->Session->read('Auth.User.id') ) {
    		$this->Message->set('deleted','1');
    		if( $this->Message->save() )
    			$this->Session->setFlash("Delete is ok!");
    		$this->redirect(array('controller' => 'threads', 'action' => 'chat', 'id' => $thread_id));
    	} 
    }
    public function edit($id){
   	$date = date('Y-m-d h:i:s', time());
    	$this->Message->read(null,$id);
    	$thread_id = $this->Message->data['Message']['thread_id'];
    	if( $this->Message->data['Message']['user_id'] != $this->Session->read('Auth.User.id') ) {
    		$this->redirect( array('controller' => 'users', 'action'=>'index') );
    	} elseif( $this->request->is('post') ) {
    		$this->Message->read(null,$id);
    		$this->Message->set('content',$this->data['Message']['content']);
    		$this->Message->set('updated',$date);
    		if( $this->Message->save() )
    			$this->Session->setFlash("Update is ok!");
    		$this->redirect(array('controller' => 'threads', 'action' => 'chat', 'id' => $thread_id));
    	} else {
    		$this->set('content',$this->Message->data['Message']['content']);
    		$this->set('message_id',$this->Message->data['Message']['id']);
    	}
    }
}

?>