<?php 

class HomeController extends AppController{
	public $uses = array('Thread');
	
	function beforeFilter() {
       	parent::beforeFilter();
       	$this->Auth->allow('index');
   	}

	function index(){
		$data_thread = $this->Thread->find('all',array('recursive' => '-1'));
		$this->set('data_thread',$data_thread);
	}
}

?>