<?php
App::uses('LookupType', 'Model');

/**
 * LookupType Test Case
 *
 */
class LookupTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.lookup_type',
		'app.lookup'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LookupType = ClassRegistry::init('LookupType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LookupType);

		parent::tearDown();
	}

}
