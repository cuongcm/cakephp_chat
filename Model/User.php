<?php
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
	class User extends AppModel{
		var $validate = array();
		public function validateUser(){
			$this->validate = array(
				'username' => array(
					'rule1' => array(
						'rule' => 'notEmpty',
						'message' =>'Name must not be empty'
					),
					'rule2' => array(
						'rule' => 'usernameExist',
						'message' =>'Username Aready Exists'
					)
				),
				'password' => array(
					'rule1'=>array(
							'rule'=>'notEmpty',
							'message'=>'Name must not be empty'
						),
					'rule2'=>array(
							'rule'=>array('minLength', '4'),
							'message'=>'password min length 4 chars'
						)
					),
				'email' => array(
					'rule'=>'email',
					'message' => 'Please input valid email'
					)
			);
			if($this->validates($this->validate))
				return TRUE;
			else
				return FALSE;
		}

		public function beforeSave($options = array()) {    
    		// if (isset($this->data['User']['password'])) {
      //   		$this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
    		// }
    		if (isset($this->data[$this->alias]['password'])) {
        		$passwordHasher = new SimplePasswordHasher();
        		$this->data[$this->alias]['password'] = $passwordHasher->hash(
            		$this->data[$this->alias]['password']
        		);
    		}
    		return true;
		}

		public function usernameExist($data){
			$count = $this->find('count',
				array(
						'fields' => array('User.username'),
						'conditions' => array('User.username' => $data['username'])
				)
			);
			if( $count != 0 ){
				return false;
			}	else return true;
		}				
	}
?>