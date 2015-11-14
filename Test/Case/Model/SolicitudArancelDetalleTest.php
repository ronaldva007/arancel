<?php
App::uses('SolicitudArancelDetalle', 'Model');

/**
 * SolicitudArancelDetalle Test Case
 *
 */
class SolicitudArancelDetalleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.solicitud_arancel_detalle',
		'app.solicitud_arancel',
		'app.arancel'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SolicitudArancelDetalle = ClassRegistry::init('SolicitudArancelDetalle');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SolicitudArancelDetalle);

		parent::tearDown();
	}

}
