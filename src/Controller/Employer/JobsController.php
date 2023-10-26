<?php

namespace App\Controller\Employer;

use Cake\Datasource\ConnectionManager;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;



/**
 * Users Controller
 *
 * @property Users $Users
 */
class JobsController extends AppController {

   
    public function initialize()
    {
        parent::initialize();
    }
	
	public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow([]);
    }
	
	public function index()
    {	
		if(isset($this->request->query['status']) AND in_array($this->request->query['status'], [1,2,3])){
			$status =['Jobs.status'=>$this->request->query['status']] ;
		}else{
			$status = ['Jobs.status'=>2];
		}
		if(isset($this->request->query['search']) ){
			$search = ['Jobs.job_title LIKE'=>'%'.$this->request->query['search'].'%'];
			$status = ['Jobs.status > '=>0];
		}else{
			$search = [];
		}
		$this->paginate = ['order'=>['Jobs.created'=>'DESC'], 'limit' => 50];
		$query = $this->Jobs->find('all', ['fields'=>['Jobs.id', 'Jobs.job_title', 'salary_max', 'salary_min', 'publish_date', 'applications' => 'count(Applications.id)', 'reviewed' => 'sum(case when Applications.status = 1 then 1 else 0 end)', 'shortlisted' => 'sum(case when Applications.status = 2 then 1 else 0 end)', 'interviews' => 'sum(case when Applications.status = 3 then 1 else 0 end)'], 'conditions'=>['Jobs.user_id'=>$this->Auth->user('id'), $status, $search], 'group' => ['Jobs.id']])->join(['applications' => ['table' => 'Applications', 'type' => 'LEFT','conditions' => 'Applications.job_id = Jobs.id']]);
		
		//Stats
		$connection = ConnectionManager::get('default');
		$stats = $connection->execute('SELECT (SELECT count(id) FROM jobs WHERE status=2 AND user_id='.$this->Auth->user('id').') as active, (SELECT count(id) FROM jobs WHERE status=3 AND user_id='.$this->Auth->user('id').') as deactive, (SELECT count(id) FROM jobs WHERE status=1 AND user_id='.$this->Auth->user('id').') as draft FROM jobs WHERE user_id='.$this->Auth->user('id').' LIMIT 1')->fetchAll('assoc');
		//print_r($query); exit;
		$this->set('jobs', $this->paginate($query));
		$this->set('stats',  $stats[0]);
		$this->set('status', $status);
    }

	public function posting(){
        $this->loadModel('Functional');
		$this->loadModel('Industry');
		$this->loadModel('Cities');
		$job = $this->Jobs->newEntity();
		if ($this->request->is('post')) {  //print_r($this->request->data); exit;
		/*foreach($_POST as $key=>$value){
			print '->notEmpty(\''.$key.'\')<br/>';
			print '->requirePresence(\''.$key.'\')<br/><br/>';
		} exit;*/
			$this->request->data['status'] = 0;
			$this->request->data['user_id'] = $this->Auth->user('id');
			$this->Jobs->patchEntity($job, $this->request->data);
			if ($this->Jobs->save($job)) {
				$this->Flash->success(__('The job has been added successfully.'));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Flash->error(__('There was a problem adding the job, please review the errors below and try again.'));
			}
		}	
		$this->set('cities', $this->Cities->find('list'));
		$this->set('industry', $this->Industry->find('list'));
		$this->set('functional', $this->Functional->find('list'));
		$this->set('job', $job);
    }
	
	
	

}