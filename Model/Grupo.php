<?php
App::uses('AppModel', 'Model');
/**
 * Grupo Model
 *
 */
class Grupo extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'grupo';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'grupo' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
