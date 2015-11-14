<?php
App::uses('SolicitudArancelEstatus', 'Model');

/**
 * SolicitudArancelEstatus Test Case
 *
 */
class SolicitudArancelEstatusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.solicitud_arancel_estatus',
		'app.solicitud_arancel',
		'app.estatus_solicitud'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SolicitudArancelEstatus = ClassRegistry::init('SolicitudArancelEstatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SolicitudArancelEstatus);

		parent::tearDown();
	}

}
