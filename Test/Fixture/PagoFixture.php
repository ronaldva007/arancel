<?php
/**
 * PagoFixture
 *
 */
class PagoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'solicitud_arancel_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'banco_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'monto' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false),
		'nro_deposito' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'banco_id' => 1,
			'monto' => '',
			'nro_deposito' => 'Lorem ipsum dolor sit amet'
		),
	);

}
