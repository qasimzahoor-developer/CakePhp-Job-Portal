<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class JobsTable extends Table{

	public function initialize(array $config)
    {

		$this->addBehavior('Timestamp');

    }
	
	public function validationDefault(Validator $validator)
    {

		$validator
            ->notEmpty('job_title')
			->requirePresence('job_title')
			->add('job_title', [
					'length' => [
						'rule' => ['minLength', 20],
						'message' => 'Titles need to be at least 20 characters long',
					]
				])
			
			->notEmpty('functional')
			->requirePresence('functional')
			
			->notEmpty('industry')
			->requirePresence('industry')
			
			->notEmpty('skills')
			->requirePresence('skills')
			
			->notEmpty('cities')
			->requirePresence('cities')
			
			->notEmpty('gender')
			->requirePresence('gender')
			
			->notEmpty('positions')
			->requirePresence('positions')
			
			->notEmpty('job_type')
			->requirePresence('job_type')
			
			->notEmpty('job_shift')
			->requirePresence('job_shift')
			
			->notEmpty('salary_min')
			->requirePresence('salary_min')
			
			->notEmpty('salary_max')
			->requirePresence('salary_max')
			
			->notEmpty('job_details')
			->requirePresence('job_details')
			->add('job_details', [
					'length' => [
						'rule' => ['minLength', 150],
						'message' => 'Job Details need to be at least 150 characters long',
					]
				])
			
			->notEmpty('degree_title')
			->requirePresence('degree_title')
			
			->notEmpty('degree_type')
			->requirePresence('degree_type')
			
			->notEmpty('degree_range')
			->requirePresence('degree_range')
			
			->notEmpty('career_level')
			->requirePresence('career_level')
			
			->notEmpty('experience_min')
			->requirePresence('experience_min')
			
			->notEmpty('experience_max')
			->requirePresence('experience_max')
			
			->notEmpty('age_min')
			->requirePresence('age_min')
			
			->notEmpty('age_max')
			->requirePresence('age_max')
			
			->notEmpty('apply_date')
			->requirePresence('apply_date')
			
			->notEmpty('publish_date')
			->requirePresence('publish_date');
			
        return $validator;
	}
	 
}