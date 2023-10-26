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
class ApplicationsController extends AppController {

   
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
		/*if(isset($this->request->query['status']) AND in_array($this->request->query['status'], [1,2,3])){
			$status =['Applications.status'=>$this->request->query['status']] ;
		}else{
			$status = ['Applications.status'=>2];
		}
		if(isset($this->request->query['search']) ){
			$search = ['Applications.job_title LIKE'=>'%'.$this->request->query['search'].'%'];
			$status = ['Applications.status > '=>0];
		}else{
			$search = [];
		}*/
		$this->paginate = ['order'=>['Applications.created'=>'DESC'], 'limit' => 50];
		$query = $this->Applications->find('all', ['fields'=>['Applications.id', 'Jobs.id'], 'conditions'=>['Jobs.user_id'=>$this->Auth->user('id')], 'group' => ['Applications.id']])->join(['jobs' => ['table' => 'Jobs', 'type' => 'LEFT','conditions' => 'Applications.job_id = Jobs.id']])->order(['Applications.created' => 'ASC']);
		
		$this->set('applications', $this->paginate($query));

    }


	

}