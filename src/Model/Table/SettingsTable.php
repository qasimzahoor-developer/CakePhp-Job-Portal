<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;

class SettingsTable extends Table{

	public function initialize(array $config)
    {
		$this->addBehavior('Timestamp');
    }
	
	public function validationDefault(Validator $validator)
    {
		$validator
            ->notEmpty('name')
            ->requirePresence('name');	
        return $validator;
	}
	

}