<?php
App::uses('AppModel', 'Model');
/**
 * SolicitudArancelDetalle Model
 *
 * @property SolicitudArancel $SolicitudArancel
 * @property Arancel $Arancel
 */
class SolicitudArancelDetalle extends AppModel {

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
		'arancel_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cantidad' => array(
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
		'Arancel' => array(
			'className' => 'Arancel',
			'foreignKey' => 'arancel_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
