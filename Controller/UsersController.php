<?php 
	class UsersController extends AppController{
		var $name = 'Users';
		function beforeFilter() {
        	parent::beforeFilter();
    	}

		function index(){
			
		}

	    function login() {
	    	// if isAuthorized move to index
	    	if ($this->Session->check('Auth.User')){
    			$this->redirect( array('controller' =>'users', 'action' => 'index') );
			}
	        if ($this->request->is('post')) {
	            if ($this->Auth->login()) {
	                return $this->redirect($this->Auth->redirect());
	            }
	            $this->Session->setFlash(__('Invalid username or password, try again'));
	        }
	    }

		function register(){
			// if isAuthorized move to index
	    	if ($this->Session->check('Auth.User')){
    			$this->redirect( array('action' => 'index') );
			}
			
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