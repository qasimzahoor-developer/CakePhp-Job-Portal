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
class CompanyController extends AppController {

   
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
		
		$this->paginate = ['order'=>['Company.created'=>'DESC'], 'limit' => 50];
		$query = $this->Company->find('all', ['fields'=>['Company.id', 'Company.co_title', 'Company.industry', 'Company.type', 'Company.city'], 'conditions'=>['Company.user_id'=>$this->Auth->user('id')], 'group' => ['Company.id']]);
		$this->set('companies', $this->paginate($query));

    }

}