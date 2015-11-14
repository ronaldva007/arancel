<?php
App::uses('AppModel', 'Model');
/**
 * EstatusSolicitud Model
 *
 * @property SolicitudArancelEstatus $SolicitudArancelEstatus
 */
class EstatusSolicitud extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'estatus';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'SolicitudArancelEstatus' => array(
			'className' => 'SolicitudArancelEstatus',
			'foreignKey' => 'estatus_solicitud_id',
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
