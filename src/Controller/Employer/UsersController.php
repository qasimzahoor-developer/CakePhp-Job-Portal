<?php

namespace App\Controller\Employer;


use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;


/**
 * Users Controller
 *
 * @property Users $Users
 */
class UsersController extends AppController {

   
    public function initialize()
    {
       parent::initialize();
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
	
	/** Login**/
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
	
	/// Register Company
	public function register(){
     
		$this->loadModel('Company');
		$this->loadModel('Functional');
		$this->loadModel('Industry');
		$this->loadModel('Cities');
		$company = $this->Company->newEntity();
		if ($this->request->is('post')) {  
			$this->request->data['user_id'] = $this->Auth->user('id');
			$this->Company->patchEntity($company, $this->request->data);
			if ($this->Company->save($company)) {
				$this->Flash->success(__('The job has been added successfully.'));
				//$this->redirect(array('action'=>'index'));
			} else {
				$this->Flash->error(__('There was a problem adding the job, please review the errors below and try again.'));
			}
		}	
		$this->set('cities', $this->Cities->find('list'));
		$this->set('industry', $this->Industry->find('list'));
		$this->set('functional', $this->Functional->find('list'));
		$this->set('company', $company);
    }

	

}