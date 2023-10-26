<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;

class BlocksTable extends Table {

	public function initialize(array $config)
    {
		$this->addBehavior('Timestamp');
		$this->addBehavior('Sluggable', [
							'field' => 'name',
							'slug' => 'slug',
							'replacement' => '-',
						]);

    }
	
	public function validationDefault(Validator $validator)
    {
		$validator
				 ->notEmpty('name')
				->requirePresence('name')
				
				->notEmpty('slug')
				->requirePresence('slug')
	
				->notEmpty('content')
				->requirePresence('content');
	 return $validator;
	}

/**
 * Override parent before save for slug generation
 * Also handles ordering of the page
 *
 * @return boolean Always true
 */
	public function beforeSave($options = array()) {
		// Generating slug from page name
		if (!empty($this->data['Block']['name']) && empty($this->data['Block']['slug']) && isset($this->data['Block']['slug'])) {
			if (!empty($this->data['Block']['id'])) {
				$this->data['Block']['slug'] = $this->generateSlug($this->data['Block']['name'], $this->data['Block']['id'], '_');
			} else {
				$this->data['Block']['slug'] = $this->generateSlug($this->data['Block']['name'], null, '_');
			}
		}

		return true;
	}

 /**
    * Returns a rules checker object that will be used for validating
    * application integrity.
    *
    * @param RulesChecker $rules The rules object to be modified.
    * @return RulesChecker
 */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['slug']), '_isUnique', [
            'errorField' => 'slug',
            'message' => ('Slug already exists')
        ]);
		

		return $rules;
    }

}