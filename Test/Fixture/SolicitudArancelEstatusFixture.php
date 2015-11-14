<?php
/**
 * SolicitudArancelEstatusFixture
 *
 */
class SolicitudArancelEstatusFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'solicitud_arancel_estatus';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'solicitud_arancel_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'fecha' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'estatus_solicitud_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'solicitud_arancel_id' => 1,
			'fecha' => '2015-11-07 22:57:17',
			'estatus_solicitud_id' => 1
		),
	);

}
