<?php
App::uses('AppModel', 'Model');
/**
 * Tweet Model
 *
 */
class Tweet extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'post';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'post' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
