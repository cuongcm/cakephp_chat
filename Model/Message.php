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
}

?>