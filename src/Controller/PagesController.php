<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

/**
 * Pages Controller
 *
 * @property Pages $Pages
 */
class PagesController extends AppController {
	
	public function initialize()
    {
        parent::initialize();
		$this->loadModel('Cities');
	}

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }

	public function home() {
		$Cities = $this->Cities->find('all')->limit(1)->toArray();
		$this->set('Cities', $Cities);

	}

}