<?php
App::uses('AppModel', 'Model');
/**
 * SolicitudArancelEstatus Model
 *
 * @property SolicitudArancel $SolicitudArancel
 * @property EstatusSolicitud $EstatusSolicitud
 */
class SolicitudArancelEstatus extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'solicitud_arancel_estatus';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'fecha';

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
		'fecha' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'estatus_solicitud_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
		'EstatusSolicitud' => array(
			'className' => 'EstatusSolicitud',
			'foreignKey' => 'estatus_solicitud_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
