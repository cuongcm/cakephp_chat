<?php 

class ThreadsController extends AppController{
	var $name = 'Threads';
	function create(){
		if (!empty($this->data)) {
			$this->request->data['Thread']['user_id'] = $this->Session->read('Auth.User.id');
			$this->request->data['Thread']['threadname'] = $this->data['Thread']['threadname'].' - created by '.
				$this->Session->read('Auth.User.username');
			if($this->Thread->save($this->data)){
				$this->Session->setFlash('Create Thread Success!');
				$this->redirect( array('controller'=>'users','action'=>'index') );
			} else {
				$this->Session->setFlash("Something Error!");
			}
		}
	}
	function chat(){
		$thread_id = $this->params['named']['id'];
		$data_thread = $this->Thread->findById($thread_id);
		$this->set('data_thread',$data_thread);
		$this->set('thread_id',$thread_id);
	}

}

?>