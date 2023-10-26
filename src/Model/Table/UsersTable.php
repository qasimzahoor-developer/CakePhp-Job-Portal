<?php
namespace App\Model\Table; 
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;
use Cake\Auth\DefaultPasswordHasher;


class UsersTable extends Table {

     public $isValidateEmail = true;
	 
	 /**
	 * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
	   $this->addBehavior('Timestamp');
	   $hasher = new DefaultPasswordHasher();
	   
    }
   
    public function validationDefault(Validator $validator)
    {

		$validator
            ->notEmpty('full_name')
            ->requirePresence('full_name')
			->add('full_name', [
				'length' => [
					'rule' => ['minLength', 2],
					'message' => 'Name Required',
				]
			])
			->notEmpty('username')
            ->requirePresence('username')
			->add('username', [
				'length' => [
					'rule' => ['minLength', 5],
					'message' => 'Username Required, minimum length is 5.',
				]
			])
			->notEmpty('password')
            ->requirePresence('password', 'create')
			->add('password', [
				'length' => [
					'rule' => ['minLength', 8],
					'message' => 'Password Required, minimum length is 5',
				]
			])
			->allowEmpty('password', 'update')
			->notEmpty('email')
            ->requirePresence('email')
			->add('email', 'validFormat', [
				'rule' => 'email',
				'message' => 'Email must be valid'
			]);
        return $validator;
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
        $rules->add($rules->isUnique(['username']), '_isUnique', [
            'errorField' => 'username',
            'message' => ('Username already exists')
        ]);
        if ($this->isValidateEmail) {
            $rules->add($rules->isUnique(['email']), '_isUnique', [
                'errorField' => 'email',
                'message' => ('Email already exists')
            ]);
        }
        return $rules;
    }

	
	

}