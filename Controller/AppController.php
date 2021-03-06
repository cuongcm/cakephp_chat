<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array(
        'DebugKit.Toolbar',
        'Session',
        'Auth'=>array(
            'loginRedirect'=>array('controller'=>'home', 'action'=>'index'),
            'logoutRedirect'=>array('controller'=>'users', 'action'=>'login'),
            'authError'=>"You can't access that page",
            'authorize'=>array('Controller')
        )
    );
    
    public function isAuthorized($user) {
        return true;
    }
    
    public function beforeFilter() {
        $this->layout = 'myLayout';
        $this->Auth->allow('register');
        $this->set('logged_in', $this->Auth->loggedIn());
        $this->set('current_user', $this->Auth->user());
    }
}