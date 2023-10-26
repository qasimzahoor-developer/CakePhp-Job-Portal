<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;

class PagesTable extends Table{

	public function initialize(array $config)
    {
        $this->addBehavior('Tree', ['level' => 'level']);
		$this->addBehavior('Timestamp');
		$this->addBehavior('Sluggable', [
							'field' => 'name',
							'slug' => 'slug',
							'replacement' => '-',
						]);
		$this->addBehavior('Image', [
								'field'=>['image_1'], 
								'uploadPath'=>'/uploads/pages',
								'thumbImage' => ['thumbPath'=>'/uploads/pages/cmsThumbs', 
												'thumbSize'=> [[200,200], [300,300], [500,500]]
												]
										]);

    }
	
	public function validationDefault(Validator $validator)
    {

		$validator
            ->notEmpty('name')
            ->requirePresence('name')
			
			->notEmpty('meta_title')
            ->requirePresence('meta_title')

			->notEmpty('content')
            ->requirePresence('content')
			->allowEmpty('image_1')
			->add('image_1', [
                        'fileSize' => [
                                'rule' => [
                                    'fileSize', '<', '2MB'
                                ],
                                'message' => 'Please upload file smaller than 2MB'
                            ],
						'mimeType' => [
                            'rule' => [
                                'mimeType', ['image/png', 'image/jpeg']
                            ],
							'last' => true,
                            'message' => 'Please upload only png, jpg images'
                        ],
                        'extension' => [
                            'rule' => [
                                'extension', ['png', 'jpeg', 'jpg']
                            ],
                            'message' => 'Only png and jpg files are allowed'
                        ]
                    ]

            );
			
        return $validator;
	}
	
	
	 /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param RulesChecker $rules The rules object to be modified.
     * @return RulesChecker
     */
   /* public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['slug']), '_isUnique', [
            'errorField' => 'slug',
            'message' => ('Slug already exists')
        ]);
		

		return $rules;
    }*/
	

}