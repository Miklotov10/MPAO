<?php
App::uses('group', 'Model');

/**
 * group Test Case
 *
 */
class groupTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.group',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->group = ClassRegistry::init('group');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->group);

		parent::tearDown();
	}

}
