<?php

namespace App\Model\Behavior;

use Cake\Datasource\EntityInterface;
use Cake\Event\Event;
use Cake\ORM\Behavior;
use Cake\ORM\Entity;
use Cake\ORM\Query;
use Cake\Utility\Inflector;

class SluggableBehavior extends Behavior
{
    protected $_defaultConfig = [
        'field' => 'title',
        'slug' => 'slug',
        'replacement' => '-',
    ];

    public function slug(Entity $entity)
    {
		$config = $this->config();
        if($entity->get($config['slug'])):
			$value = $entity->get($config['slug']);
		else:
			$value = $entity->get($config['field']);
		endif;
		
		$slug = Inflector::slug($value, $config['replacement']);	
		$slug_exist = $this->_table->find('all')
							->select([$config['slug']])
							->where([$config['slug'] => $slug])->toArray();
        $entity->set($config['slug'], $slug);
    }

    public function beforeSave(Event $event, EntityInterface $entity)
    {
        $this->slug($entity);
    }

}

?>