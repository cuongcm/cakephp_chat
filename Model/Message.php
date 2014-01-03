<?php 

class Message extends AppModel{
	public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id'
        ),
        'Thread' => array(
            'className' => 'Thread',
            'foreignKey' => 'thread_id'
        )
    );
    var $validate = array();
    public function validateMessage(){
        $this->validate = array(
               'content' => array(
                    'rule'=>'notEmpty',
                    'message' => 'Please enter some text!'
                )
        );
        if($this->validates($this->validate))
            return TRUE;
        else
            return FALSE;
    }
}

?>