<?php
App::uses('AppModel', 'Model');
/**
 * Pago Model
 *
 * @property SolicitudArancel $SolicitudArancel
 * @property Banco $Banco
 */
class Pago extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'solicitud_arancel_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'solicitud_arancel_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'banco_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'nro_deposito' => array(
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

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'SolicitudArancel' => array(
			'className' => 'SolicitudArancel',
			'foreignKey' => 'solicitud_arancel_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Banco' => array(
			'className' => 'Banco',
			'foreignKey' => 'banco_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
