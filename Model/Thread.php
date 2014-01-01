<?php 

class Thread extends AppModel{
	public $belongTo = 'User';
	public $hasMany = 'Message';

}

?>