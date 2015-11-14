<?php
App::uses('UnidadTributaria', 'Model');

/**
 * UnidadTributaria Test Case
 *
 */
class UnidadTributariaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.unidad_tributaria'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UnidadTributaria = ClassRegistry::init('UnidadTributaria');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UnidadTributaria);

		parent::tearDown();
	}

}
