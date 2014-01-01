<?php 
	class UsersController extends AppController{
		public $helpers = array('Html', 'Form', 'Session');
 		public $components = array('Session');

		var $name = 'Users';
		function beforeFilter() {
        	parent::beforeFilter();
    	}

		function index(){
			pr($this->Auth);
		}

	    function login() {
	        if ($this->request->is('post')) {
	            if ($this->Auth->login()) {
	                return $this->redirect($this->Auth->redirect());
	            }
	            $this->Session->setFlash(__('Invalid username or password, try again'));
	        }
	    }

		function register(){
			//pr($this->data);
			if (!empty($this->data)) {
				$this->User->set($this->data);
				if($this->User->validateUser()==TRUE){
					$this->User->save();
					$this->Session->setFlash('Create User Success, Login Now!');
					$this->redirect(array('action'=>'login'));
				} else {
					$this->Session->setFlash("Please check input again !");
				}
			}
		}
		function logout() {
		    $this->redirect($this->Auth->logout());
		}
	}
?>