<?php

namespace App\Controller\Employee;


use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;


/**
 * Users Controller
 *
 * @property Users $Users
 */
class UsersController extends AppController {

   
    public $paginate = [
        'limit' => 100,
        'order' => [
            'Users.id' => 'DESC'
        ]
    ];
   
    public function initialize()
    {
        parent::initialize();
		$this->loadComponent('Paginator');
        //$this->loadComponent('Flash'); // Include the FlashComponent
    }
	
	public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow([]);
    }

	/** Dashboard **/
	public function home() {
		$this->set('users', $this->paginate());
	}
	
	/** Login **/
	public function login() {
		if ($this->Auth->user()) {
			$this->redirect(['action' => 'home']);
		}

		if ($this->request->is('post')) {
			$user = $this->Auth->identify(); 
			if ($user) {
				$this->Auth->setUser($user);
				$_SESSION['FileManager']=1;
				$this->Flash->success(__('You have been successfully logged in.'));
				$this->redirect(array('action' => 'home'));
			} else {
				$this->Flash->error(__('The login details you entered are incorrect. Please try again.'));
			}
		}

		$this->set('title_for_layout', __('Login'));
	}
	
	//LOGOUT
	public function logout()
    {
        $_SESSION['FileManager']=0;
		$this->Auth->logout();
		return $this->redirect(['action' => 'login']);
    }
	
	/** Users List **/
	public function index() {
		$this->set('users', $this->paginate());
	}

	

}