<?php
App::uses('Lookup', 'Model');

/**
 * Lookup Test Case
 *
 */
class LookupTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lookup',
		'app.lookup_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Lookup = ClassRegistry::init('Lookup');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Lookup);

		parent::tearDown();
	}

}
