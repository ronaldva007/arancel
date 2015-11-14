<?php
App::uses('Arancel', 'Model');

/**
 * Arancel Test Case
 *
 */
class ArancelTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.arancel',
		'app.solicitud_arancel_detalle'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Arancel = ClassRegistry::init('Arancel');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Arancel);

		parent::tearDown();
	}

}
