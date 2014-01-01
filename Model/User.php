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
						'message' =>'Username already exists'
					)
				),
				'password' => array(
					'rule1'=>array(
							'rule'=>'notEmpty',
							'message'=>'Name must not be empty'
						),
					'rule2'=>array(
							'rule'=>array('minLength', '4'),
							'message'=>'Password min length 4 chars'
						)
					),
				'password_confirm' => array(
					'rule'=>'matchPasswd',
					'message' => 'Please enter match password'
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
		    if (isset($this->data['User']['password'])) {
		        $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
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

		public function matchPasswd($data) {
		    if ( isset($data['password']) && $data['password'] == $this->data['User']['password_confirm']) {
		        return true;
		    }
		    return false;
		}				
	}
?>