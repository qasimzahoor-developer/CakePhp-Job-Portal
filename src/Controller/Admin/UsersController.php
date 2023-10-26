<?php

namespace App\Controller\Admin;


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

	/** Add **/
	public function add() {
		$user = $this->Users->newEntity();
		if ($this->request->is(array('put', 'post'))) {
			$data = array();
			$this->Users->patchEntity($user, $this->request->data);
			if ($this->Users->save($user)) {
				$this->Flash->success(__('The user has been created successfully.'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('There was a problem creating the user, please review the errors below and try again.'));
			}
		} 
		else {
			$this->request->data = $user;
		}
		$this->set('user', $user);
	}

	/** Edit **/
	public function edit($id) {
		if (!$id) {
			throw new NotFoundException(__('Invalid user'));
		} 
		$user = $this->Users->get($id);
		if ($this->request->is(array('put', 'post'))) {
			$this->Users->patchEntity($user, $this->request->data);
			$data = array();
			if ($this->Users->save($user)) {
				if(null==$this->request->data('se')):
					$this->Flash->success(__('The user has been updated successfully.'));
					$this->redirect($this->referer(array('action' => 'index')));
				else:
					$this->Flash->success(__('The user has been updated successfully.'));
					$this->redirect(array('action' => 'index'));
				endif;
			} else { 
				$this->Flash->error(__('There was a problem updating the users details, please review the errors below and try again.'));
			}
		} 
		else {
			$this->request->data = $user;
		}
		
		$this->set('user', $user);
	}
	
	/** View **/
	public function view() {
 
	}

	/** Delete **/
	public function delete($id){
		if ($this->request->is('get') || $id == 1) {
			throw new MethodNotAllowedException();
		}

		$user = $this->Users->get($id);
		if(!$user) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->Users->delete($user)) {
			$this->Flash->success(__('The user was deleted successfully.'));
		} else {
			$this->Flash->error(__('There was a problem deleting this user.'), 'error');
		}
		$this->redirect($this->referer(array('action' => 'index')));
	}
	

}