<?php
App::uses('AppModel', 'Model');
/**
 * UnidadTributaria Model
 *
 */
class UnidadTributaria extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'unidad';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'fecha' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
