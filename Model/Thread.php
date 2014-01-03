<?php 

class Thread extends AppModel{
	public $name = 'Thread';
	public $belongTo = 'User';
	//public $hasMany = 'Message';
	public $hasMany = array(
        'Message' => array(
            'className' => 'Message',
            'order' => 'Message.created DESC',
            'limit' => '10',
            'dependent' => true
        )
    );

}

?>