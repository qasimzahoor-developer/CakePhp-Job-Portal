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
class ProfileController extends AppController {

    public function initialize()
    {
        parent::initialize();
		$this->loadComponent('RequestHandler');
    }
	
	public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow([]);
    }

	
	/** Basic Info **/
	public function basicinfo() {
	
		$profile = $this->Profile->newEntity();
		if ($this->request->is('post')) {
			$this->request->data['name'] = $this->request->data['first_name'].' '.$this->request->data['last_name'];
			$this->request->data['basic_info'] = json_encode($this->request->data);
			$this->request->data['status'] = 1;
			$this->request->data['user_id'] = $this->Auth->user('id');
			$this->Profile->patchEntity($profile, $this->request->data, ['validate'=>'basicinfo']);
			if ($this->Profile->save($profile)) {
				$this->Flash->success(__('Your profile basic created successfully.'));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Flash->error(__('There was a problem, please review the errors below and try again.'));
			}
		}	

		$this->set('profile', $profile);
	}

	/** Profile **/
	public function main() {

		$profile = $this->Profile->get(1);
		$profile['basic_info'] = json_decode($profile['basic_info']);
		$profile['education'] = json_decode($profile['education']);
		$profile['experience'] = json_decode($profile['experience']);
		$profile['certifications'] = json_decode($profile['certifications']);
		$profile['projects'] = json_decode($profile['projects']);
		$profile['awards'] = json_decode($profile['awards']);
		$profile['reference_s'] = json_decode($profile['reference_s']);
//		 print_r($profile); exit;
		$this->set('profile', $profile);
	}

	/** JsonFields **/
	public function eduAdd() { 
		$section = $this->request->query('section');
		if (!$this->request->is('ajax') OR !in_array($section, ['education'])) die();
		$this->loadModel('Majors');
		$jfields = $this->Profile->newEntity();
		if ($this->request->is('post')) { 
			$this->Profile->patchEntity($jfields, $this->request->data, ['validate'=>$section]);
			if (!$jfields->errors())
    		{
				//Get profile JsonFields and appand new
				$jfieldssFiled = $this->Profile->find('all', ['fields'=>[$section]])->where(['user_id' => $this->Auth->user('id')])->first()->toArray();
				if($jfieldssFiled[$section] AND $jfieldssFiled[$section] !==''):
					$jfieldssFileds = json_decode($jfieldssFiled[$section]);
					$i =1;
					foreach($jfieldssFileds as  $jfieldssFiled):
						$jfieldssRec[$i] = $jfieldssFiled;
						$i++;
					endforeach;
					$jfieldssRec[$i] = $this->request->data;
				else:
					$jfieldssRec[1] = $this->request->data;
				endif;
				
				if ($this->Profile->updateAll([$section => json_encode($jfieldssRec)], ['user_id' => $this->Auth->user('id')])) {
					$resultJ = json_encode(array('status' => 'success'));
					$this->response->type('json');
					$this->response->body($resultJ);
					return $this->response;
				}
				else{
					$resultJ = json_encode(array('status' => 'error', 'msg' => 'There was an error, please try again.'));
					$this->response->type('json');
					$this->response->body($resultJ);
					return $this->response;
				}
			}
		}	
		$this->set('majors', $this->Majors->find('list',['keyField'=>'name','valueField'=>'name']));
		$this->set('jfields', $jfields);
	}
	
	public function eduEdit($id) { 
		$section = $this->request->query('section');
		if (!$this->request->is('ajax') OR !in_array($section, ['education'])) die();
		$this->loadModel('Majors');
		$jfields = $this->Profile->newEntity();
		if ($this->request->is('post')) { 
			$this->Profile->patchEntity($jfields, $this->request->data, ['validate'=>$section]);
			if (!$jfields->errors())
    		{
				//Get profile JsonFields and appand new
				$jfieldssFiled = $this->Profile->find('all', ['fields'=>[$section]])->where(['user_id' => $this->Auth->user('id')])->first()->toArray();
				if($jfieldssFiled[$section] AND $jfieldssFiled[$section] !==''):
					$jfieldssFileds = json_decode($jfieldssFiled[$section]);
					foreach($jfieldssFileds as  $key=>$jfieldssFiled):
						$jfieldssRec[$key] = ($key === $id)? $this->request->data : $jfieldssFiled;
					endforeach;
				endif;
				
				if ($this->Profile->updateAll([$section => json_encode($jfieldssRec)], ['user_id' => $this->Auth->user('id')])) {
					$resultJ = json_encode(array('status' => 'success'));
					$this->response->type('json');
					$this->response->body($resultJ);
					return $this->response;
				}
				else{
					$resultJ = json_encode(array('status' => 'error', 'msg' => 'There was an error, please try again.'));
					$this->response->type('json');
					$this->response->body($resultJ);
					return $this->response;
				}
			}
		}
		
		//Get profile JsonFields
		$jfieldssFiled = $this->Profile->find('all', ['fields'=>[$section]])->where(['user_id' => $this->Auth->user('id')])->first()->toArray();
		if($jfieldssFiled[$section] AND $jfieldssFiled[$section] !==''):
			$jfieldssFileds = json_decode($jfieldssFiled[$section]);
			$jfieldssRec = $jfieldssFileds->{$id};
		else:
			$jfieldssRec = NULL;
		endif;
			
		$this->set('majors', $this->Majors->find('list',['keyField'=>'name','valueField'=>'name']));
		$this->set('jfields', $jfields);
		$this->set('jfieldssRec', $jfieldssRec);
	}	
	
	public function eduDelete($id) { 
		$section = $this->request->query('section');
		if (!$this->request->is('ajax') OR !$this->request->is('post') OR !in_array($section, ['education'])) die();
		if ($this->request->is('post')) { 
				//Get profile JsonFields and appand new
				$jfieldssFiled = $this->Profile->find('all', ['fields'=>[$section]])->where(['user_id' => $this->Auth->user('id')])->first()->toArray();
				if($jfieldssFiled[$section] AND $jfieldssFiled[$section] !==''):
					$jfieldssFileds = json_decode($jfieldssFiled[$section]);
					foreach($jfieldssFileds as  $key=>$jfieldssFiled):
						if($key !== $id) $jfieldssRec[$key] = $jfieldssFiled;
					endforeach;
				endif;
				
				if ($this->Profile->updateAll([$section => json_encode($jfieldssRec)], ['user_id' => $this->Auth->user('id')])) {
					$resultJ = json_encode(array('status' => 'success'));
					$this->response->type('json');
					$this->response->body($resultJ);
					return $this->response;
				}
				else{
					$resultJ = json_encode(array('status' => 'error', 'msg' => 'There was an error, please try again.'));
					$this->response->type('json');
					$this->response->body($resultJ);
					return $this->response;
				}
		}

	}	

}