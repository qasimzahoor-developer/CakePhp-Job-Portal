<?php
namespace App\Controller\Admin;

use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Core\Plugin;
use Cake\Event\Event;

/**
 * Settings Controller
 *
 * @property Setting $Settings
 */
class SettingsController extends AppController {

	public function initialize(){
        parent::initialize();
	}

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow([]);
    }

	public function get($name = null) {
		return $this->Setting->get($name);
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function index($search = null) {
		$this->paginate = ['limit' => 50, 'order' => ['Setting.name' => 'asc']];
		$this->set('settings', $this->paginate());
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
			throw new NotFoundException(__('Invalid Setting'));
		}
		$setting = $this->Settings->get($id);
		if ($this->request->is(array('post', 'put'))) {
			$this->Settings->patchEntity($setting, $this->request->data);
			if ($this->Settings->save($setting)) {
				$this->Flash->success(__('The setting has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->set('setting', $this->request->data);
				$this->Flash->error(__('The setting could not be saved. Please, try again.'));
			}
		}
		$this->set('setting', $setting);
	}
}