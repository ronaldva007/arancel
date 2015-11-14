<?php
App::uses('AppModel', 'Model');
/**
 * TipoSolicitud Model
 *
 * @property Cita $Cita
 */
class TipoSolicitud extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'solicitud';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'solicitud' => array(
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Cita' => array(
			'className' => 'Cita',
			'foreignKey' => 'tipo_solicitud_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
