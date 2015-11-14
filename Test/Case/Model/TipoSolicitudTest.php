<?php
App::uses('TipoSolicitud', 'Model');

/**
 * TipoSolicitud Test Case
 *
 */
class TipoSolicitudTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipo_solicitud',
		'app.cita',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TipoSolicitud = ClassRegistry::init('TipoSolicitud');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TipoSolicitud);

		parent::tearDown();
	}

}
