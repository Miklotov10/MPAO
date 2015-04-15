<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
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
	
	public $components = array(
		'Acl',
		'Auth' => array(
            'authorize' => array(
                'Actions' => array('actionPath' => 'controllers')
            )
        ),
        'Session',
		'DebugKit.Toolbar',
    );
    
    
    public $helpers = array('Html', 'Form', 'Session');
    
	function beforeFilter() {
		$this->layout = 'ateneo';
		$this->Auth->allow('display');
	    //Configure AuthComponent
	    $this->Auth->loginAction = array(
	        'controller' => 'users',
	        'action' => 'login',
	        'admin' => false,
	        'plugin' => false
	    );
	    $this->Auth->logoutRedirect = array(
	        'controller' => 'users',
	        'action' => 'login',
	        'admin' => false,
	        'plugin' => false
	    );
	    $this->Auth->loginRedirect = array(
	        'controller' => 'reservations',
	        'action' => 'add',
	        'admin' => false,
	        'plugin' => false
	    );
	    if ($this->params['admin']) {
	    	$this->layout = 'default';	
	    }
	    $this->Auth->allow();
	}
	
	function isAuthorized($user) {
	    //return false;
	    return $this->Auth->loggedIn();
	}
	
}
