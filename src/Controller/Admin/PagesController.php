<?php
namespace App\Controller\Admin;

use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Core\Plugin;
use Cake\Event\Event;

/**
 * Pages Controller
 *
 * @property Pages $Pages
 */
class PagesController extends AppController {
	
	public function initialize()
    {
        parent::initialize();
		$this->loadComponent('Paginator');
	}

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow([]);
    }

	public function index($parentId = null, $search = null) {
		if(!empty($this->request->data['search'])) {
			$this->redirect(array(0, $this->request->data['search']));
		}

		$conditions = array();
		
		if (!empty($search)) {
			$conditions['or'] = ['Pages.name LIKE' => '%'.$search.'%', 'Pages.meta_title LIKE' => '%'.$search.'%', 'Pages.slug LIKE' => '%'.$search.'%', 'Pages.content LIKE' => '%'.$search.'%'];
		} else {
			if($parentId) $conditions['parent_id'] = $parentId;
		}

		$this->paginate = ['order'=>['Pages.parent_id'=>'DESC'], 'limit' => 500];
		$query = $this->Pages->find('threaded')->where($conditions);
		$this->set('Pages', $this->paginate($query));
		$this->set('parent_id', $parentId);
		$this->set('search', $search);
	}

	public function add($parentId = null, $duplicateId = null) {
		$page = $this->Pages->newEntity();
		if ($this->request->is('post')) {
			$this->Pages->patchEntity($page, $this->request->data);
			if ($this->Pages->save($page)) {
				$this->Flash->success(__('The page has been added successfully.'));
				$this->redirect(array('action'=>'index', $parentId));
			} else {
				$this->Flash->error(__('There was a problem adding the page, please review the errors below and try again.'));
			}
		} elseif ($duplicateId) {
			$copyData = $this->Pages->get($duplicateId);
			$fields = array('id', 'lft', 'rght', 'slug', 'created', 'modified');
			foreach ($fields as $field) {
				unset($copyData->$field);
			}
			$copyData->name = $copyData->name.' Copy';
			$this->request->data = $copyData;
		} else {
			$this->request->data['Page']['parent_id'] = $parentId;
		}
		
		$this->set('page', $page);
		$this->set('treeList', $this->Pages->find('treeList'));
	}

	public function edit($id = null, $parentId = null) { 
		if (!$id) {
			throw new NotFoundException(__('Invalid page'));
		}

		$page = $this->Pages->get($id);
		if (!$page) {
			throw new NotFoundException(__('Invalid page'));
		}

		if ($this->request->is(array('post', 'put'))) {  
			$this->Pages->patchEntity($page, $this->request->data);
			if ($this->Pages->save($page)) {
				$this->Flash->success(__('The page has been updated successfully.'));
				if(isset($this->request->data['se'])){
					$this->redirect(array('action'=>'index', $parentId));
				}
			} else {
				$this->Flash->error(__('There was a problem saving the page, please review the errors below and try again.'));
			}
		} else {
			$this->request->data = $page;
		}

		$this->set('page', $page);
		$this->set('treeList', $this->Pages->find('treeList'));
	}

	public function delete($id = null) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if (!$id) {
			throw new NotFoundException(__('Invalid page'));
		}

		$page = $this->Pages->get($id);
	
		if (!$page) {
			throw new NotFoundException(__('Invalid page'));
		}

		if ($this->Pages->delete($page)) {
			$this->Flash->success(__('The page was successfully deleted.'));
		} else {
			$this->Flash->error(__('There was a problem deleting this page.'));
		}

		$this->redirect(array('action' => 'index'));
	}
	
	public function bulk() {
		print_r($this->request->data); exit;
	}
	
}