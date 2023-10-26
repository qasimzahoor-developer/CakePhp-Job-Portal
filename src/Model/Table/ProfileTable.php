<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

class ProfileTable extends Table{

	public function initialize(array $config)
    {

		$this->table('profiles');
		$this->addBehavior('Timestamp');

    }

	public function validationBasicinfo(Validator $validator)
    {

		$validator
            ->notEmpty('first_name')
			->requirePresence('first_name')
			->add('first_name', [
					'length' => [
						'rule' => ['minLength', 2],
						'message' => 'First name need to be at least 2 characters long',
					]
				])
				
			->notEmpty('last_name')
			->requirePresence('last_name')
			->add('last_name', [
					'length' => [
						'rule' => ['minLength', 2],
						'message' => 'Last name need to be at least 2 characters long',
					]
				])
			
			->notEmpty('dob')
			->requirePresence('dob')
			->add('dob', 'valid', ['rule' => ['date','Ymd'], 'message' => 'Select Valid Date',])
			
			->notEmpty('gender')
			->requirePresence('gender')
			
			->notEmpty('marital_status')
			->requirePresence('marital_status')
			
			->notEmpty('degree_type')
			->requirePresence('degree_type')
			
			->notEmpty('career_level')
			->requirePresence('career_level');

			
        return $validator;
	}

	public function validationEducation(Validator $validator)
    {

		$validator
            ->notEmpty('degree_title')
			->requirePresence('degree_title')
			->add('degree_title', [
					'length' => [
						'rule' => ['minLength', 2],
						'message' => 'Degree title need to be at least 2 characters long',
					]
				])
				
			->notEmpty('institution_name')
			->requirePresence('institution_name')
			->add('institution_name', [
					'length' => [
						'rule' => ['minLength', 2],
						'message' => 'Institution name need to be at least 2 characters long',
					]
				])
			
			->notEmpty('degree_type')
			->requirePresence('degree_type')
			
			->notEmpty('major_subject')
			->requirePresence('major_subject')
			
			->notEmpty('grade')
			->requirePresence('grade')
			
			->notEmpty('date_completed')
			->requirePresence('date_completed');
			
        return $validator;
	}
	 
}