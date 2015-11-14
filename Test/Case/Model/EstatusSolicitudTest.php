<?php
App::uses('EstatusSolicitud', 'Model');

/**
 * EstatusSolicitud Test Case
 *
 */
class EstatusSolicitudTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.estatus_solicitud',
		'app.solicitud_arancel_estatus'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EstatusSolicitud = ClassRegistry::init('EstatusSolicitud');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EstatusSolicitud);

		parent::tearDown();
	}

}
