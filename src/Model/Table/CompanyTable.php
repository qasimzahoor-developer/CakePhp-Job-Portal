<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class CompanyTable extends Table{

	public function initialize(array $config)
    {

		$this->addBehavior('Timestamp');
		$this->addBehavior('Image', [
								'field'=>['logo'], 
								'uploadPath'=>'/images/employers',
								'thumbImage' => ['thumbPath'=>'/images/employers/logo', 
												'thumbSize'=> [[300,300]]
												]
										]);

    }
	
	public function validationDefault(Validator $validator)
    {

		$validator

			->notEmpty('co_title')
			->requirePresence('co_title')
			
			->notEmpty('industry')
			->requirePresence('industry')
			
			->notEmpty('type')
			->requirePresence('type')
			
			->notEmpty('city')
			->requirePresence('city')
			
			->notEmpty('op_since')
			->requirePresence('op_since')
			
			->notEmpty('co_address')
			->requirePresence('co_address')
			
			->notEmpty('landline')
			->requirePresence('landline')
			->add('landline', [
						'minLength' => [
							'rule' => ['minLength', 10],
							'last' => true,
							'message' => 'Landline No. Required (i.e 04231234567).'
						],
						'maxLength' => [
							'rule' => ['maxLength', 12],
							'message' => 'Landline No. Required (i.e 04231234567).'
						],
						'numeric' => [
							'rule' => ['numeric', 12],
							'message' => 'Landline No. Must be valid (i.e 04231234567).'
						]
						])
			
			->notEmpty('mobile')
			->requirePresence('mobile')
			->add('mobile', [
						'minLength' => [
							'rule' => ['minLength', 10],
							'last' => true,
							'message' => 'Mobile No. Required (i.e 03001234567).'
						],
						'maxLength' => [
							'rule' => ['maxLength', 12],
							'message' => 'Mobile No. Required (i.e 03001234567).'
						],
						'numeric' => [
							'rule' => ['numeric', 12],
							'message' => 'HR Contact No. Must be valid (i.e 03001234567).'
						]
						])
			
			->notEmpty('logo')
			->requirePresence('logo')
			
			->notEmpty('details')
			->requirePresence('details')
			
			->notEmpty('head_name')
			->requirePresence('head_name')
			
			->notEmpty('head_cnic')
			->requirePresence('head_cnic')
			->add('head_cnic', [
						'numeric' => [
							'rule' => ['numeric'],
							'message' => 'Head CNIC No. must be valid.'
						]
						])
			
			->notEmpty('head_email')
			->requirePresence('head_email')
			->add('head_email', 'validFormat', [
				'rule' => 'email',
				'message' => 'Email must be valid'
			])
			
			->notEmpty('head_no')
			->requirePresence('head_no')
			->add('head_no', [
						'minLength' => [
							'rule' => ['minLength', 10],
							'last' => true,
							'message' => 'CEO / Head Contact No. Required (i.e 03001234567).'
						],
						'maxLength' => [
							'rule' => ['maxLength', 12],
							'message' => 'CEO / Head Contact No. Required (i.e 03001234567).'
						],
						'numeric' => [
							'rule' => ['numeric', 12],
							'message' => 'HR Contact No. Must be valid (i.e 03001234567).'
						]
						])
			
			->notEmpty('hr_name')
			->requirePresence('hr_name')
			
			->notEmpty('hr_cnic')
			->requirePresence('hr_cnic')
			->add('hr_cnic', [
						'numeric' => [
							'rule' => ['numeric'],
							'message' => 'HR CNIC No. must be valid.'
						]
						])
			
			->allowEmpty('hr_no')
			->add('hr_no', [
						'minLength' => [
							'rule' => ['minLength', 10],
							'last' => true,
							'message' => 'HR Contact No. Required (i.e 03001234567).'
						],
						'maxLength' => [
							'rule' => ['maxLength', 12],
							'message' => 'HR Contact No. Required (i.e 03001234567).'
						],
						'numeric' => [
							'rule' => ['numeric', 12],
							'message' => 'HR Contact No. Must be valid (i.e 03001234567).'
						]
						])
			
			->notEmpty('hr_email')
			->requirePresence('hr_email')
			->add('hr_email', 'validFormat', [
				'rule' => 'email',
				'message' => 'Email must be valid'
			]);
			


			
        return $validator;
	}
	 
}