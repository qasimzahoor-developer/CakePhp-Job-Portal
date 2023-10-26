<?php

namespace App\Controller\Admin;


use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Core\Plugin;
use Cake\Event\Event;

/**
 * Blocks Controller
 *
 * @property Block $Block
 */
class BlocksController extends AppController {

    public function initialize()
    {
        parent::initialize();
		$this->loadComponent('Paginator');
    }
	
	public function beforeFilter(Event $event){
		 parent::beforeFilter($event);
       	 $this->Auth->allow([]);
	}

	public function get($slug = null) {
		return $this->Block->get($slug);
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function index($search = null) {
		$conditions = array();
		if ($this->request->is('post')) {
			$this->redirect(['action' => 'index', $this->request->data['search']]);
		} elseif (!empty($search)) {
			$conditions['or'] = ['Blocks.name LIKE' => '%' . $search . '%', 'Blocks.content LIKE' => '%' . $search . '%'];
		}
		$this->paginate = ['order'=>['Blocks.name'=>'DESC'], 'limit' => 50];
		$query = $this->Blocks->find('threaded')->where($conditions);
		$this->set('blocks', $this->paginate($query));
		$this->set('search', $search);
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function add() {
		$Block = $this->Blocks->newEntity();
		if ($this->request->is('post')) {
			$this->Blocks->patchEntity($Block, $this->request->data);
			if ($this->Blocks->save($Block)) {
				$this->Flash->success(__('The Block has been added successfully.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('There was a problem adding the Block, please review the errors below and try again.'));
			}
		}
		$this->set('block', $Block);
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) { 
		if (!$id) {
			throw new NotFoundException(__('Invalid block'));
		}
		$block = $this->Blocks->get($id);
		if (!$block) {
			throw new NotFoundException(__('Invalid block'));
		}

		if ($this->request->is(array('post', 'put'))) {  
			$this->Blocks->patchEntity($block, $this->request->data);
			if ($this->Blocks->save($block)) {
				$this->Flash->success(__('The block has been updated successfully.'));
				if(isset($this->request->data['se'])){
					$this->redirect(array('action'=>'index'));
				}
			} else {
				$this->Flash->error(__('There was a problem saving the block, please review the errors below and try again.'));
			}
		} else {
			$this->request->data = $block;
		}

		$this->set('block', $block);
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if (!$id) {
			throw new NotFoundException(__('Invalid Block'));
		}

		$block = $this->Blocks->get($id);
	
		if (!$block) {
			throw new NotFoundException(__('Invalid Block'));
		}

		if ($this->Blocks->delete($block)) {
			$this->Flash->success(__('The Block was successfully deleted.'));
		} else {
			$this->Flash->error(__('There was a problem deleting this Block.'));
		}

		$this->redirect(array('action' => 'index'));
	}
}