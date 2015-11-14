<?php
App::uses('SolicitudArancel', 'Model');

/**
 * SolicitudArancel Test Case
 *
 */
class SolicitudArancelTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.solicitud_arancel',
		'app.user',
		'app.grupos',
		'app.cita',
		'app.tipo_solicitud',
		'app.pago',
		'app.banco',
		'app.solicitud_arancel_detalle',
		'app.arancel',
		'app.solicitud_arancel_estatus',
		'app.estatus_solicitud'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SolicitudArancel = ClassRegistry::init('SolicitudArancel');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SolicitudArancel);

		parent::tearDown();
	}

}
